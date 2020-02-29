<?php 
require_once "../modelos/formatos.php";

$formatos=new formatos();

$idformatos=isset($_POST["idformatos"])? limpiarCadena($_POST["idformatos"]):"";
$archivost=isset($_POST["archivost"])? limpiarCadena($_POST["archivost"]):"";
$imagent=isset($_POST["imagent"])? limpiarCadena($_POST["imagent"]):"";
$descripccion=isset($_POST["descripccion"])? limpiarCadena($_POST["descripccion"]):"";
$horat=isset($_POST["horat"])? limpiarCadena($_POST["horat"]):"";
$fecha=isset($_POST["fecha"])? limpiarCadena($_POST["fecha"]):"";


switch ($_GET["op"]){
	case 'guardaryeditar':

		if (!file_exists($_FILES['archivost']['tmp_name']) || !is_uploaded_file($_FILES['archivost']['tmp_name']))
		{
			$archivost=$_POST["archivostactual"];
		}
		else 
		{
			$ext = explode(".", $_FILES["archivost"]["name"]);
			if ($_FILES['archivost']['type'] == "application/x-zip-compressed" || $_FILES['archivost']['type'] ==  "application/pdf" || $_FILES['archivost']['type'] == "application/octet-stream")
			{
				$archivost = round(microtime(true)) . '.' . end($ext);
				move_uploaded_file($_FILES["archivost"]["tmp_name"], "../file1/" . $archivost);
			}
		}



if (!file_exists($_FILES['imagent']['tmp_name']) || !is_uploaded_file($_FILES['imagent']['tmp_name']))
		{
			$imagent=$_POST["imagentactual"];
		}
		else 
		{
			$ext = explode(".", $_FILES["imagent"]["name"]);
			if ($_FILES['imagent']['type'] == "image/jpg" || $_FILES['imagent']['type'] == "image/jpeg" || $_FILES['imagent']['type'] == "image/png")
			{
				$imagent = round(microtime(true)) . '.' . end($ext);
				move_uploaded_file($_FILES["imagent"]["tmp_name"], "../file1/" . $imagent);
			}
		}

		if (empty($idformatos)){
			$rspta=$formatos->insertar($archivost,$imagent,$descripccion,$horat,$fecha);
			echo $rspta ? "Artículo registrado" : "Artículo no se pudo registrar";
		}
		else {
			$rspta=$formatos->editar($idformatos,$archivost,$imagent,$descripccion,$horat,$fecha);
			echo $rspta ? "Artículo actualizado" : "Artículo no se pudo actualizar";
		}
	break;


	case 'eliminar':
		$rspta=$formatos->eliminar($idformatos);
 		echo $rspta ? "imagen eliminado" : "imagen no se puede eliminar";
	break;


	case 'desactivar':
		$rspta=$formatos->desactivar($idformatos);
 		echo $rspta ? "formatos Desactivada" : "formatos no se puede desactivar";
 		break;
 		


	case 'activar':
		$rspta=$formatos->activar($idformatos);
 		echo $rspta ? "formatos activada" : "formatos no se puede activar";
 		break;


	case 'mostrar':
		$rspta=$formatos->mostrar($idformatos);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
 		break;


	case 'listar':
		$rspta=$formatos->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				
                  "0"=>($reg->estado)?'<button class="btn btn-danger" onclick="eliminar('.$reg->idformatos.')"><i class="fa fa-trash"></i></button>'.
                    '<button class="btn btn-warning" onclick="mostrar('.$reg->idformatos.')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-danger" onclick="desactivar('.$reg->idformatos.')"><i class="fa fa-close"></i></button>':
                    '<button class="btn btn-danger" onclick="eliminar('.$reg->idformatos.')"><i class="fa fa-trash"></i></button>'.
                    '<button class="btn btn-warning" onclick="mostrar('.$reg->idformatos.')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-primary" onclick="activar('.$reg->idformatos.')"><i class="fa fa-check"></i></button>',
 				"1"=> "<a href='../file1/".$reg->archivost."'><i class='fa fa-download'></i></a>",
 				"2"=>"<img src='../file1/".$reg->imagent."' height='50px' width='50px' >",
 				"3"=>$reg->descripccion,
 				"4"=>$reg->horat,
 				"5"=>$reg->fecha,
 				"6"=>($reg->estado)?'<span class="label bg-green">Activado</span>':
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