<?php 
require_once "../modelos/slider.php";

$Sliders=new Sliders();

$idslider=isset($_POST["idslider"])? limpiarCadena($_POST["idslider"]):"";
$imagen=isset($_POST["imagen"])? limpiarCadena($_POST["imagen"]):"";
$url=isset($_POST["url"])? limpiarCadena($_POST["url"]):"";



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

		if (empty($idslider)){
			$rspta=$Sliders->insertar($imagen,$url);
			echo $rspta ? "Sliders registrada" : "Sliders no se pudo registrar";
		}
		else {
			$rspta=$Sliders->editar($idslider,$imagen,$url);
			echo $rspta ? "Sliders actualizada" : "Sliders no se pudo actualizar";
		}
	break;

	case 'eliminar':
		$rspta=$Sliders->eliminar($idslider);
 		echo $rspta ? "imagen eliminado" : "imagen no se puede eliminar";
	break;

	case 'desactivar':
		$rspta=$Sliders->desactivar($idslider);
 		echo $rspta ? "Sliders Desactivada" : "Sliders no se puede desactivar";
 		break;


	case 'activar':
		$rspta=$Sliders->activar($idslider);
 		echo $rspta ? "Sliders activada" : "Sliders no se puede activar";
 		break;


	case 'mostrar':
		$rspta=$Sliders->mostrar($idslider);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
 		break;


	case 'listar':
		$rspta=$Sliders->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				
                         "0"=>($reg->estado)?'<button class="btn btn-danger" onclick="eliminar('.$reg->idslider.')"><i class="fa fa-trash"></i></button>'.
                '<button class="btn btn-warning" onclick="mostrar('.$reg->idslider.')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-danger" onclick="desactivar('.$reg->idslider.')"><i class="fa fa-close"></i></button>':
                    '<button class="btn btn-danger" onclick="eliminar('.$reg->idslider.')"><i class="fa fa-trash"></i></button>'.
                    '<button class="btn btn-warning" onclick="mostrar('.$reg->idslider.')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-primary" onclick="activar('.$reg->idslider.')"><i class="fa fa-check"></i></button>',

 				"1"=>"<img src='../filesN/".$reg->imagen."' height='50px' width='50px' >",
 				"2"=>$reg->url,
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