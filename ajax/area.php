<?php 
require_once "../modelos/area.php";

$area=new Area();

$idArea=isset($_POST["idArea"])? limpiarCadena($_POST["idArea"]):"";
$nombreArea=isset($_POST["nombreArea"])? limpiarCadena($_POST["nombreArea"]):"";
$codigoUsuario=isset($_POST["codigoUsuario"])? limpiarCadena($_POST["codigoUsuario"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($idArea)){
			$rspta=$area->insertar($nombreArea,$codigoUsuario);
			echo $rspta ? "Area registrada" : "Area no se pudo registrar";
		}
		else {
			$rspta=$area->editar($idArea,$nombreArea,$codigoUsuario);
			echo $rspta ? "Area actualizada" : "Area no se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$area->desactivar($idArea);
 		echo $rspta ? "Area Desactivada" : "Area no se puede desactivar";
 		break;


	case 'activar':
		$rspta=$area->activar($idArea);
 		echo $rspta ? "Area activada" : "Area no se puede activar";
 		break;


	case 'mostrar':
		$rspta=$area->mostrar($idArea);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
 		break;


	case 'listar':
		$rspta=$area->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->estado)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idArea.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idArea.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idArea.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idArea.')"><i class="fa fa-check"></i></button>',
 				"1"=>$reg->nombreArea,
 				"2"=>$reg->codigoUsuario,
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