<?php 
require_once "../modelos/trabaje.php";

$trabajo=new trabajo();

$idtrabaje=isset($_POST["idtrabaje"])? limpiarCadena($_POST["idtrabaje"]):"";
$imagen=isset($_POST["imagen"])? limpiarCadena($_POST["imagen"]):"";
$titulo=isset($_POST["titulo"])? limpiarCadena($_POST["titulo"]):"";
$escrito=isset($_POST["escrito"])? limpiarCadena($_POST["escrito"]):"";
$escrit=isset($_POST["escrit"])? limpiarCadena($_POST["escrit"]):"";
$fecha=isset($_POST["fecha"])? limpiarCadena($_POST["fecha"]):"";
$hora=isset($_POST["hora"])? limpiarCadena($_POST["hora"]):"";

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
				move_uploaded_file($_FILES["imagen"]["tmp_name"], "../file1/" . $imagen);
			}
		}
		if (empty($idtrabaje)){
			$rspta=$trabajo->insertar($imagen,$titulo,$escrito,$escrit,$fecha,$hora);
			echo $rspta ? "Artículo registrado" : "Artículo no se pudo registrar";
		}
		else {
			$rspta=$trabajo->editar($idtrabaje,$imagen,$titulo,$escrito,$escrit,$fecha,$hora);
			echo $rspta ? "Artículo actualizado" : "Artículo no se pudo actualizar";
		}
	break;

	case 'eliminar':
		$rspta=$trabajo->eliminar($idtrabaje);
 		echo $rspta ? "Artículo eliminado" : "Artículo no se puede eliminar";
	break;

	case 'desactivar':
		$rspta=$trabajo->desactivar($idtrabaje);
 		echo $rspta ? "Artículo Desactivado" : "Artículo no se puede desactivar";
	break;

	case 'activar':
		$rspta=$trabajo->activar($idtrabaje);
 		echo $rspta ? "Artículo activado" : "Artículo no se puede activar";
	break;

	case 'mostrar':
		$rspta=$trabajo->mostrar($idtrabaje);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$trabajo->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->estado)?'<button class="btn btn-danger" onclick="eliminar('.$reg->idtrabaje.')"><i class="fa fa-trash"></i></button>'.
 				'<button class="btn btn-warning" onclick="mostrar('.$reg->idtrabaje.')"><i class="fa fa-pencil"></i></button>'.
 				' <button class="btn btn-danger" onclick="desactivar('.$reg->idtrabaje.')"><i class="fa fa-close"></i></button>':
 				'<button class="btn btn-danger" onclick="eliminar('.$reg->idtrabaje.')"><i class="fa fa-trash"></i></button>'.
 				'<button class="btn btn-warning" onclick="mostrar('.$reg->idtrabaje.')"><i class="fa fa-pencil"></i></button>'.
 				' <button class="btn btn-primary" onclick="activar('.$reg->idtrabaje.')"><i class="fa fa-check"></i></button>',
 					
 			    "1"=>"<img src='../file1/".$reg->imagen."' height='50px' width='50px' >",
 			    "2"=>$reg->titulo,
 				"3"=>$reg->escrito,
 				"4"=>$reg->escrit,
 				"5"=>$reg->fecha,
 				"6"=>$reg->hora,
 				"7"=>($reg->estado)?'<span class="label bg-green">Activado</span>':
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