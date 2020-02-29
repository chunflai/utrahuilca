<?php 
require_once "../modelos/link.php";

$viedoslink =new viedoslink();

$idlink=isset($_POST["idlink"])? limpiarCadena($_POST["idlink"]):"";
$imagen=isset($_POST["imagen"])? limpiarCadena($_POST["imagen"]):"";
$vlink=isset($_POST["vlink"])? limpiarCadena($_POST["vlink"]):"";
$titulo=isset($_POST["titulo"])? limpiarCadena($_POST["titulo"]):"";
$desrcipcion=isset($_POST["desrcipcion"])? limpiarCadena($_POST["desrcipcion"]):"";
$hora=isset($_POST["hora"])? limpiarCadena($_POST["hora"]):"";
$fecha=isset($_POST["fecha"])? limpiarCadena($_POST["fecha"]):"";

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

		if (empty($idlink)){
			$rspta=$viedoslink->insertar($imagen,$vlink,$titulo,$desrcipcion,$hora,$fecha);
			echo $rspta ? "viedoslink registrada" : "viedoslink no se pudo registrar";
		}
		else {
			$rspta=$viedoslink->editar($idlink,$imagen,$vlink,$titulo,$desrcipcion,$hora,$fecha);
			echo $rspta ? "viedoslink actualizada" : "viedoslink no se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$viedoslink->desactivar($idlink);
 		echo $rspta ? "viedoslink Desactivada" : "viedoslink no se puede desactivar";
 		break;


	case 'activar':
		$rspta=$viedoslink->activar($idlink);
 		echo $rspta ? "viedoslink activada" : "viedoslink no se puede activar";
 		break;



	case 'eliminar':
		$rspta=$viedoslink->eliminar($idlink);
 		echo $rspta ? "Artículo eliminado" : "Artículo no se puede eliminar";
	break;


	case 'mostrar':
		$rspta=$viedoslink->mostrar($idlink);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
 		break;


	case 'listar':
		$rspta=$viedoslink->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->estado)?'<button class="btn btn-danger" onclick="eliminar('.$reg->idlink.')"><i class="fa fa-trash"></i></button>'.
 				'<button class="btn btn-warning" onclick="mostrar('.$reg->idlink.')"><i class="fa fa-pencil"></i></button>'.
 				' <button class="btn btn-danger" onclick="desactivar('.$reg->idlink.')"><i class="fa fa-close"></i></button>':
 				'<button class="btn btn-danger" onclick="eliminar('.$reg->idlink.')"><i class="fa fa-trash"></i></button>'.
 				'<button class="btn btn-warning" onclick="mostrar('.$reg->idlink.')"><i class="fa fa-pencil"></i></button>'.
 				' <button class="btn btn-primary" onclick="activar('.$reg->idlink.')"><i class="fa fa-check"></i></button>',
 				
 				"1"=>"<img src='../filesN/".$reg->imagen."' height='50px' width='50px' >",
 				"2"=>$reg->vlink,
 				"3"=>$reg->titulo,
 			    "4"=>$reg->desrcipcion,
 				"5"=>$reg->hora,
 				"6"=>$reg->fecha,
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