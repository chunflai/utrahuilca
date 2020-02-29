<?php 

require_once "../modelos/formatos1.php";

$Formatos =new  Formatos();

$idFormatosDian=isset($_POST["idFormatosDian"])? limpiarCadena($_POST["idFormatosDian"]):"";
$titulo=isset($_POST["titulo"])? limpiarCadena($_POST["titulo"]):"";
$archivo=isset($_POST["archivo"])? limpiarCadena($_POST["archivo"]):"";



switch ($_GET["op"]){
	case 'guardaryeditar':


        if (!file_exists($_FILES['archivo']['tmp_name']) || !is_uploaded_file($_FILES['archivo']['tmp_name']))
		{
			$archivo=$_POST["archivoactual"];
		}
		else 
		{
			$ext = explode(".", $_FILES["archivo"]["name"]);
			if ($_FILES['archivo']['type'] == "application/x-zip-compressed" || $_FILES['archivo']['type'] ==  "application/pdf" || $_FILES['archivo']['type'] == "application/octet-stream" || $_FILES['archivo']['type'] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet")
			{
				$archivo =  round(microtime(true)) . '.' . end($ext); 
				move_uploaded_file($_FILES["archivo"]["tmp_name"], "../file1/" . $archivo);
			}
		}



		if (empty($idFormatosDian)){
			$rspta=$Formatos->insertar($titulo,$archivo);
			echo $rspta ? "Artículo registrado" : "Artículo no se pudo registrar";
		}
		else {
			$rspta=$Formatos->editar($idFormatosDian,$titulo,$archivo);
			echo $rspta ? "Artículo actualizado" : "Artículo no se pudo actualizar";
		}
	break;

	case 'eliminar':
		$rspta=$Formatos->eliminar($idFormatosDian);
 		echo $rspta ? "Artículo eliminado" : "Artículo no se puede eliminar";
	break;

	case 'desactivar':
		$rspta=$Formatos->desactivar($idFormatosDian);
 		echo $rspta ? "Artículo Desactivado" : "Artículo no se puede desactivar";
	break;

	case 'activar':
		$rspta=$Formatos->activar($idFormatosDian);
 		echo $rspta ? "Artículo activado" : "Artículo no se puede activar";
	break;

	case 'mostrar':
		$rspta=$Formatos->mostrar($idFormatosDian);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$Formatos->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->estado)?'<button class="btn btn-danger" onclick="eliminar('.$reg->idFormatosDian.')"><i class="fa fa-trash"></i></button>'.
 				'<button class="btn btn-warning" onclick="mostrar('.$reg->idFormatosDian.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idFormatosDian.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-danger" onclick="eliminar('.$reg->idFormatosDian.')"><i class="fa fa-trash"></i></button>'.
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idFormatosDian.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idFormatosDian.')"><i class="fa fa-check"></i></button>',

 				"1"=>$reg->titulo,	
 				"2"=> "<a href='../file1/".$reg->archivo."'><i class='fa fa-download'></i></a>",
 				"3"=>($reg->estado)?'<span class="label bg-green">Activado</span>':
 				'<span class="label bg-red">Desactivado</span>'
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;

}
?>