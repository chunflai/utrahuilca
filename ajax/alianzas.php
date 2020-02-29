<?php 
require_once "../modelos/alianzas.php";

$alianzas=new alianzas();

$idalianzas=isset($_POST["idalianzas"])? limpiarCadena($_POST["idalianzas"]):"";
$imagen=isset($_POST["imagen"])? limpiarCadena($_POST["imagen"]):"";


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

		if (empty($idalianzas)){
			$rspta=$alianzas->insertar($imagen);
			echo $rspta ? "alianzas registrada" : "alianzas no se pudo registrar";
		}
		else {
			$rspta=$alianzas->editar($idalianzas,$imagen);
			echo $rspta ? "alianzas actualizada" : "alianzas no se pudo actualizar";
		}
	break;

	case 'eliminar':
		$rspta=$alianzas->eliminar($idalianzas);
 		echo $rspta ? "imagen eliminado" : "imagen no se puede eliminar";
	break;

	case 'desactivar':
		$rspta=$alianzas->desactivar($idalianzas);
 		echo $rspta ? "alianzas Desactivada" : "alianzas no se puede desactivar";
 		break;


	case 'activar':
		$rspta=$alianzas->activar($idalianzas);
 		echo $rspta ? "alianzas activada" : "alianzas no se puede activar";
 		break;

	case 'mostrar':
		$rspta=$alianzas->mostrar($idalianzas);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
 		break;
	

	case 'listar':
		$rspta=$alianzas->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				
                "0"=>($reg->estado)?'<button class="btn btn-danger" onclick="eliminar('.$reg->idalianzas.')"><i class="fa fa-trash"></i></button>'.
                '<button class="btn btn-warning" onclick="mostrar('.$reg->idalianzas.')"><i class="fa fa-pencil"></i></button>'.
                ' <button class="btn btn-danger" onclick="desactivar('.$reg->idalianzas.')"><i class="fa fa-close"></i></button>':
                '<button class="btn btn-danger" onclick="eliminar('.$reg->idalianzas.')"><i class="fa fa-trash"></i></button>'.
                '<button class="btn btn-warning" onclick="mostrar('.$reg->idalianzas.')"><i class="fa fa-pencil"></i></button>'.
                ' <button class="btn btn-primary" onclick="activar('.$reg->idalianzas.')"><i class="fa fa-check"></i></button>',
                
 				"1"=>"<img src='../filesN/".$reg->imagen."' height='50px' width='50px' >",
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