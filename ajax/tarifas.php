<?php 
require_once "../modelos/tarifas.php";

$tarifas=new tarifas();

$idtarifas=isset($_POST["idtarifas"])? limpiarCadena($_POST["idtarifas"]):"";
$archivost=isset($_POST["archivost"])? limpiarCadena($_POST["archivost"]):"";
$imagent=isset($_POST["imagent"])? limpiarCadena($_POST["imagent"]):"";
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

		if (empty($idtarifas)){
			$rspta=$tarifas->insertar($archivost,$imagent,$horat,$fecha);
			echo $rspta ? "Artículo registrado" : "Artículo no se pudo registrar";
		}
		else {
			$rspta=$tarifas->editar($idtarifas,$archivost,$imagent,$horat,$fecha);
			echo $rspta ? "Artículo actualizado" : "Artículo no se pudo actualizar";
		}
	break;


	case 'eliminar':
		$rspta=$tarifas->eliminar($idtarifas);
 		echo $rspta ? "imagen eliminado" : "imagen no se puede eliminar";
	break;
	

	case 'desactivar':
		$rspta=$tarifas->desactivar($idtarifas);
 		echo $rspta ? "tarifas Desactivada" : "tarifas no se puede desactivar";
 	break;


	case 'activar':
		$rspta=$tarifas->activar($idtarifas);
 		echo $rspta ? "tarifas activada" : "tarifas no se puede activar";
 		break;


	case 'mostrar':
		$rspta=$tarifas->mostrar($idtarifas);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
 		break;


	case 'listar':
		$rspta=$tarifas->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				
                  "0"=>($reg->estado)?'<button class="btn btn-danger" onclick="eliminar('.$reg->idtarifas.')"><i class="fa fa-trash"></i></button>'.
                    '<button class="btn btn-warning" onclick="mostrar('.$reg->idtarifas.')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-danger" onclick="desactivar('.$reg->idtarifas.')"><i class="fa fa-close"></i></button>':
                    '<button class="btn btn-danger" onclick="eliminar('.$reg->idtarifas.')"><i class="fa fa-trash"></i></button>'.
                    '<button class="btn btn-warning" onclick="mostrar('.$reg->idtarifas.')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-primary" onclick="activar('.$reg->idtarifas.')"><i class="fa fa-check"></i></button>',

 				"1"=> "<a href='../file1/".$reg->archivost."'><i class='fa fa-download'></i></a>",
 				"2"=>"<img src='../file1/".$reg->imagent."' height='50px' width='50px' >",
	            "3"=>$reg->horat,
 				"4"=>$reg->fecha,
 				"5"=>($reg->estado)?'<span class="label bg-green">Activado</span>':
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