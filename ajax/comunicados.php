<?php 
require_once "../modelos/Comunicados.php";

$comunicados=new comunicados();

$idcomunicados=isset($_POST["idcomunicados"])? limpiarCadena($_POST["idcomunicados"]):"";
$archivost=isset($_POST["archivost"])? limpiarCadena($_POST["archivost"]):"";
$Titulo=isset($_POST["Titulo"])? limpiarCadena($_POST["Titulo"]):"";
$horat=isset($_POST["horat"])? limpiarCadena($_POST["horat"]):"";
$fecha=isset($_POST["fecha"])? limpiarCadena($_POST["fecha"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':

		if (!file_exists($_FILES['archivost']['tmp_name']) || !is_uploaded_file($_FILES['archivost']['tmp_name']))
		{
			$archivost=$_POST["archivostactual"];
		}
		else 
		{
			$ext = explode(".", $_FILES["archivost"]["name"]);
			if ($_FILES['archivost']['type'] == "application/x-zip-compressed" || $_FILES['archivost']['type'] ==  "application/pdf" || $_FILES['archivost']['type'] == "application/octet-stream")
			{
				$archivost = round(microtime(true)) . '.' . end($ext);
				move_uploaded_file($_FILES["archivost"]["tmp_name"], "../file1/" . $archivost);
			}
		}

		if (empty($idcomunicados)){
			$rspta=$comunicados->insertar($archivost,$Titulo,$horat,$fecha);
			echo $rspta ? "Artículo registrado" : "Artículo no se pudo registrar";
		}
		else {
			$rspta=$comunicados->editar($idcomunicados,$archivost,$Titulo,$horat,$fecha);
			echo $rspta ? "Artículo actualizado" : "Artículo no se pudo actualizar";
		}
	break;


	case 'eliminar':
		$rspta=$comunicados->eliminar($idcomunicados);
 		echo $rspta ? "imagen eliminado" : "imagen no se puede eliminar";
	break;
	

	case 'desactivar':
		$rspta=$comunicados->desactivar($idcomunicados);
 		echo $rspta ? "comunicados Desactivada" : "comunicados no se puede desactivar";
 	break;


	case 'activar':
		$rspta=$comunicados->activar($idcomunicados);
 		echo $rspta ? "comunicados activada" : "comunicados no se puede activar";
 		break;


	case 'mostrar':
		$rspta=$comunicados->mostrar($idcomunicados);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
 		break;


	case 'listar':
		$rspta=$comunicados->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				
                  "0"=>($reg->estado)?'<button class="btn btn-danger" onclick="eliminar('.$reg->idcomunicados.')"><i class="fa fa-trash"></i></button>'.
                    '<button class="btn btn-warning" onclick="mostrar('.$reg->idcomunicados.')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-danger" onclick="desactivar('.$reg->idcomunicados.')"><i class="fa fa-close"></i></button>':
                    '<button class="btn btn-danger" onclick="eliminar('.$reg->idcomunicados.')"><i class="fa fa-trash"></i></button>'.
                    '<button class="btn btn-warning" onclick="mostrar('.$reg->idcomunicados.')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-primary" onclick="activar('.$reg->idcomunicados.')"><i class="fa fa-check"></i></button>',

 				"1"=> "<a href='../file1/".$reg->archivost."'><i class='fa fa-download'></i></a>",
 				"2"=>$reg->Titulo,
	            "3"=>$reg->horat,
 				"4"=>$reg->fecha,
 				"5"=>($reg->estado)?'<span class="label bg-green">Activado</span>':
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