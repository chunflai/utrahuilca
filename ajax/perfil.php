<?php 
require_once "../modelos/perfil.php";

$perfil=new Perfil();

$idPerfil=isset($_POST["idPerfil"])? limpiarCadena($_POST["idPerfil"]):"";
$perfilUsuario=isset($_POST["perfilUsuario"])? limpiarCadena($_POST["perfilUsuario"]):"";
$codigoUsuario=isset($_POST["codigoUsuario"])? limpiarCadena($_POST["codigoUsuario"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($idPerfil)){
			$rspta=$perfil->insertar($perfilUsuario,$codigoUsuario);
			echo $rspta ? "perfil registrada" : "perfil no se pudo registrar";
		}
		else {
			$rspta=$perfil->editar($idPerfil,$perfilUsuario,$codigoUsuario);
			echo $rspta ? "perfil actualizada" : "perfil no se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$perfil->desactivar($idPerfil);
 		echo $rspta ? "perfil Desactivada" : "perfil no se puede desactivar";
 		break;


	case 'activar':
		$rspta=$perfil->activar($idPerfil);
 		echo $rspta ? "perfil activada" : "perfil no se puede activar";
 		break;


	case 'mostrar':
		$rspta=$perfil->mostrar($idPerfil);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
 		break;


	case 'listar':
		$rspta=$perfil->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->estado)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idPerfil.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idPerfil.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idPerfil.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idPerfil.')"><i class="fa fa-check"></i></button>',
 				"1"=>$reg->perfilUsuario,
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