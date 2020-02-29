<?php 
require_once "../modelos/escolaridad.php";

$escolaridad=new escolaridad();

$idescolaridad=isset($_POST["idescolaridad"])? limpiarCadena($_POST["idescolaridad"]):"";
$nombreEsc=isset($_POST["nombreEsc"])? limpiarCadena($_POST["nombreEsc"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($idescolaridad)){
			$rspta=$escolaridad->insertar($nombreEsc);
			echo $rspta ? "escolaridad registrada" : "escolaridad no se pudo registrar";
		}
		else {
			$rspta=$escolaridad->editar($idescolaridad,$nombreEsc);
			echo $rspta ? "escolaridad actualizada" : "escolaridad no se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$escolaridad->desactivar($idescolaridad);
 		echo $rspta ? "escolaridad Desactivada" : "escolaridad no se puede desactivar";
 		break;


	case 'activar':
		$rspta=$escolaridad->activar($idescolaridad);
 		echo $rspta ? "escolaridad activada" : "escolaridad no se puede activar";
 		break;

	case 'eliminar':
		$rspta=$escolaridad->eliminar($idescolaridad);
 		echo $rspta ? "imagen eliminado" : "imagen no se puede eliminar";
	break;


	case 'mostrar':
		$rspta=$escolaridad->mostrar($idescolaridad);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
 		break;

	case 'listar':
		$rspta=$escolaridad->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->estado)?
 				'<button class="btn btn-danger" onclick="eliminar('.$reg->idescolaridad.')"><i class="fa fa-trash"></i></button>'.
 				'<button class="btn btn-warning" onclick="mostrar('.$reg->idescolaridad.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idescolaridad.')"><i class="fa fa-close"></i></button>':
 						'<button class="btn btn-danger" onclick="eliminar('.$reg->idescolaridad.')"><i class="fa fa-trash"></i></button>'.
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idescolaridad.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idescolaridad.')"><i class="fa fa-check"></i></button>',
 				"1"=>$reg->nombreEsc,
 				"2"=>($reg->estado)?'<span class="label bg-green">Activado</span>':
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