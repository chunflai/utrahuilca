<?php 
require_once "../modelos/estado.php";

$EstadoLink=new EstadoLink();

$idcondicion=isset($_POST["idcondicion"])? limpiarCadena($_POST["idcondicion"]):"";
$imagen=isset($_POST["imagen"])? limpiarCadena($_POST["imagen"]):"";
$link=isset($_POST["link"])? limpiarCadena($_POST["link"]):"";
$titulo=isset($_POST["titulo"])? limpiarCadena($_POST["titulo"]):"";


switch ($_GET["op"]){
	case 'guardaryeditar':

     if (!file_exists($_FILES['imagen']['tmp_name']) || !is_uploaded_file($_FILES['imagen']['tmp_name']))
		{
			$imagen=$_POST["imagenactual"];
		}
		else 
		{
			$ext = explode(".", $_FILES["imagen"]["name"]);
			if ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png")
			{
				$imagen = round(microtime(true)) . '.' . end($ext);
				move_uploaded_file($_FILES["imagen"]["tmp_name"], "../filesN/" . $imagen);
			}
		}

		if (empty($idcondicion)){
			$rspta=$EstadoLink->insertar($imagen,$link,$titulo);
			echo $rspta ? "EstadoLinkregistrada" : "EstadoLinkno se pudo registrar";
		}
		else {
			$rspta=$EstadoLink->editar($idcondicion,$imagen,$link,$titulo);
			echo $rspta ? "EstadoLinkactualizada" : "EstadoLinkno se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$EstadoLink->desactivar($idcondicion);
 		echo $rspta ? "EstadoLinkDesactivada" : "EstadoLinkno se puede desactivar";
 		break;


	case 'activar':
		$rspta=$EstadoLink->activar($idcondicion);
 		echo $rspta ? "EstadoLinkactivada" : "EstadoLinkno se puede activar";
 		break;



	case 'eliminar':
		$rspta=$EstadoLink->eliminar($idcondicion);
 		echo $rspta ? "Artículo eliminado" : "Artículo no se puede eliminar";
	break;


	case 'mostrar':
		$rspta=$EstadoLink->mostrar($idcondicion);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
 		break;


	case 'listar':
		$rspta=$EstadoLink->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->estado)?'<button class="btn btn-danger" onclick="eliminar('.$reg->idcondicion.')"><i class="fa fa-trash"></i></button>'.
 				'<button class="btn btn-warning" onclick="mostrar('.$reg->idcondicion.')"><i class="fa fa-pencil"></i></button>'.
 				' <button class="btn btn-danger" onclick="desactivar('.$reg->idcondicion.')"><i class="fa fa-close"></i></button>':
 				'<button class="btn btn-danger" onclick="eliminar('.$reg->idcondicion.')"><i class="fa fa-trash"></i></button>'.
 				'<button class="btn btn-warning" onclick="mostrar('.$reg->idcondicion.')"><i class="fa fa-pencil"></i></button>'.
 				' <button class="btn btn-primary" onclick="activar('.$reg->idcondicion.')"><i class="fa fa-check"></i></button>',
 				
 				"1"=>"<img src='../filesN/".$reg->imagen."' height='50px' width='50px' >",
 				"2"=>$reg->link,
 				"3"=>$reg->titulo,
 				"4"=>($reg->estado)?'<span class="label bg-green">Activado</span>':
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