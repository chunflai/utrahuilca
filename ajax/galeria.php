<?php 
require_once "../modelos/galeria.php";

$galeria=new Galeria();

$idgaleria=isset($_POST["idgaleria"])? limpiarCadena($_POST["idgaleria"]):"";
$imagen=isset($_POST["imagen"])? limpiarCadena($_POST["imagen"]):"";
$titulo=isset($_POST["titulo"])? limpiarCadena($_POST["titulo"]):"";
$ruta=isset($_POST["ruta"])? limpiarCadena($_POST["ruta"]):"";

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
		if (empty($idgaleria)){
			$rspta=$galeria->insertar($imagen,$titulo,$ruta);
			echo $rspta ? "galeria registrado" : "galeria no se pudo registrar";
		}
		else {
			$rspta=$galeria->editar($idgaleria,$imagen,$titulo,$ruta);
			echo $rspta ? "galeria actualizado" : "galeria no se pudo actualizar";
		}
	break;

	case 'eliminar':
		$rspta=$galeria->eliminar($idgaleria);
 		echo $rspta ? "galeria eliminado" : "galeria no se puede eliminar";
	break;

	case 'desactivar':
		$rspta=$galeria->desactivar($idgaleria);
 		echo $rspta ? "galeria Desactivado" : "galeria no se puede desactivar";
	break;

	case 'activar':
		$rspta=$galeria->activar($idgaleria);
 		echo $rspta ? "galeria activado" : "galeria no se puede activar";
	break;

	case 'mostrar':
		$rspta=$galeria->mostrar($idgaleria);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$galeria->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->estado)?'<button class="btn btn-danger" onclick="eliminar('.$reg->idgaleria.')"><i class="fa fa-trash"></i></button>'.
 				'<button class="btn btn-warning" onclick="mostrar('.$reg->idgaleria.')"><i class="fa fa-pencil"></i></button>'.
 				' <button class="btn btn-danger" onclick="desactivar('.$reg->idgaleria.')"><i class="fa fa-close"></i></button>':
 				'<button class="btn btn-danger" onclick="eliminar('.$reg->idgaleria.')"><i class="fa fa-trash"></i></button>'.
 				'<button class="btn btn-warning" onclick="mostrar('.$reg->idgaleria.')"><i class="fa fa-pencil"></i></button>'.
 				' <button class="btn btn-primary" onclick="activar('.$reg->idgaleria.')"><i class="fa fa-check"></i></button>',
 				
 			    "1"=>"<img src='../file1/".$reg->imagen."' height='50px' width='50px' >",
 			    "2"=>$reg->titulo,
 				"3"=>$reg->ruta,
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