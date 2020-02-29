<?php 
require_once "../modelos/eventos.php";

$eventos=new Eventos();

$ideventos=isset($_POST["ideventos"])? limpiarCadena($_POST["ideventos"]):"";
$imagen=isset($_POST["imagen"])? limpiarCadena($_POST["imagen"]):"";
$titulo=isset($_POST["titulo"])? limpiarCadena($_POST["titulo"]):"";
$escrit=isset($_POST["escrit"])? limpiarCadena($_POST["escrit"]):"";
$link=isset($_POST["link"])? limpiarCadena($_POST["link"]):"";
$zona=isset($_POST["zona"])? limpiarCadena($_POST["zona"]):"";
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
		if (empty($ideventos)){
			$rspta=$eventos->insertar($imagen,$titulo,$escrit,$link,$zona,$fecha,$hora);
			echo $rspta ? "eventos registrado" : "eventos no se pudo registrar";
		}
		else {
			$rspta=$eventos->editar($ideventos,$imagen,$titulo,$escrit,$link,$zona,$fecha,$hora);
			echo $rspta ? "eventos actualizado" : "eventos no se pudo actualizar";
		}
	break;

	case 'eliminar':
		$rspta=$eventos->eliminar($ideventos);
 		echo $rspta ? "eventos eliminado" : "eventos no se puede eliminar";
	break;

	case 'desactivar':
		$rspta=$eventos->desactivar($ideventos);
 		echo $rspta ? "eventos Desactivado" : "eventos no se puede desactivar";
	break;

	case 'activar':
		$rspta=$eventos->activar($ideventos);
 		echo $rspta ? "eventos activado" : "eventos no se puede activar";
	break;

	case 'mostrar':
		$rspta=$eventos->mostrar($ideventos);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$eventos->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->estado)?'<button class="btn btn-danger" onclick="eliminar('.$reg->ideventos.')"><i class="fa fa-trash"></i></button>'.
 				'<button class="btn btn-warning" onclick="mostrar('.$reg->ideventos.')"><i class="fa fa-pencil"></i></button>'.
 				' <button class="btn btn-danger" onclick="desactivar('.$reg->ideventos.')"><i class="fa fa-close"></i></button>':
 				'<button class="btn btn-danger" onclick="eliminar('.$reg->ideventos.')"><i class="fa fa-trash"></i></button>'.
 				'<button class="btn btn-warning" onclick="mostrar('.$reg->ideventos.')"><i class="fa fa-pencil"></i></button>'.
 				' <button class="btn btn-primary" onclick="activar('.$reg->ideventos.')"><i class="fa fa-check"></i></button>',
 				
 			    "1"=>"<img src='../file1/".$reg->imagen."' height='50px' width='50px' >",
 			    "2"=>$reg->titulo,
 				"3"=>$reg->escrit,
 				"4"=>$reg->link,
 				"5"=>$reg->zona,
 				"6"=>$reg->fecha,
 				"7"=>$reg->hora,
 				"8"=>($reg->estado)?'<span class="label bg-green">Activado</span>':
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