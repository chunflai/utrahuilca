<?php 
require_once "../modelos/titulacion.php";
$titulacion=new titulacion();

$idtitulacion=isset($_POST["idtitulacion"])? limpiarCadena($_POST["idtitulacion"]):"";
$idescolaridad=isset($_POST["idescolaridad"])? limpiarCadena($_POST["idescolaridad"]):"";
$nombreTitu=isset($_POST["nombreTitu"])? limpiarCadena($_POST["nombreTitu"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($idtitulacion)){
			$rspta=$titulacion->insertar($idescolaridad,$nombreTitu);
			echo $rspta ? "titulacion registrada" : "titulacion no se pudo registrar";
		}
		else {
			$rspta=$titulacion->editar($idtitulacion,$idescolaridad,$nombreTitu);
			echo $rspta ? "titulacion actualizada" : "titulacion no se pudo actualizar";
		}
	break;


	case 'desactivar':
		$rspta=$titulacion->desactivar($idtitulacion);
 		echo $rspta ? "titulacion Desactivada" : "titulacion no se puede desactivar";
 	break;


	case 'activar':
		$rspta=$titulacion->activar($idtitulacion);
 		echo $rspta ? "titulacion activada" : "titulacion no se puede activar";
 		break;


	case 'mostrar':
		$rspta=$titulacion->mostrar($idtitulacion);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
 		break;


	case 'listar':
		$rspta=$titulacion->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->estado)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idtitulacion.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idtitulacion.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idtitulacion.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idtitulacion.')"><i class="fa fa-check"></i></button>',

 				"1"=>$reg->idescolaridad,
 				"2"=>$reg->nombreTitu,
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

	//Case para listar en el Select
        case 'selectescolaridad':
            require_once "../modelos/escolaridad.php";

            $escolaridad = new escolaridad();

            $rspta = $escolaridad->select();

            $html = "<option value=''>---SELECCIONE---</option>";

            while($reg = $rspta->fetch_object())
            {
                $html .= '<option value='.$reg->idescolaridad.'>'. $reg->nombreEsc.'</option>';
            }

            echo $html;
        break;
}
?>