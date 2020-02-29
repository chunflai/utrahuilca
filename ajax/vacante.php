<?php 

  if (strlen(session_id()) < 1)
    {
        session_start();
    }
require_once "../modelos/vacante.php";

$vacante=new vacante();

$idvacante=isset($_POST["idvacante"])? limpiarCadena($_POST["idvacante"]):"";
$idUsuario = $_SESSION['idUsuario'];
$nombreV=isset($_POST["nombreV"])? limpiarCadena($_POST["nombreV"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($idvacante)){
			$rspta=$vacante->insertar($idUsuario,$nombreV);
			echo $rspta ? "vacante registrada" : "vacante no se pudo registrar";
		}
		else {
			$rspta=$vacante->editar($idvacante,$idUsuario,$nombreV);
			echo $rspta ? "vacante actualizada" : "vacante no se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$vacante->desactivar($idvacante);
 		echo $rspta ? "vacante Desactivada" : "vacante no se puede desactivar";
 		break;


	case 'activar':
		$rspta=$vacante->activar($idvacante);
 		echo $rspta ? "vacante activada" : "vacante no se puede activar";
 		break;


	case 'mostrar':
		$rspta=$vacante->mostrar($idvacante);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
 		break;


	case 'listar':
		$rspta=$vacante->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->estado)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idvacante.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idvacante.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idvacante.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idvacante.')"><i class="fa fa-check"></i></button>',

 				"1"=>$reg->idUsuario,
 				"2"=>$reg->nombreV,
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