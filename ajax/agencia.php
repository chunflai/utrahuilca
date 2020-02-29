<?php 
require_once "../modelos/agencia.php";

$agencia=new agencia();

$idagencia=isset($_POST["idagencia"])? limpiarCadena($_POST["idagencia"]):"";
$titulo=isset($_POST["titulo"])? limpiarCadena($_POST["titulo"]):"";
$imagen=isset($_POST["imagen"])? limpiarCadena($_POST["imagen"]):"";
$direccion=isset($_POST["direccion"])? limpiarCadena($_POST["direccion"]):"";
$telefono=isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";
$horario=isset($_POST["horario"])? limpiarCadena($_POST["horario"]):"";
$Mapa=isset($_POST["Mapa"])? limpiarCadena($_POST["Mapa"]):"";
$LinkMapa=isset($_POST["LinkMapa"])? limpiarCadena($_POST["LinkMapa"]):"";

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


	if (!file_exists($_FILES['Mapa']['tmp_name']) || !is_uploaded_file($_FILES['Mapa']['tmp_name']))
	{
		$Mapa=$_POST["Mapaactual"];
	}
	else 
	{
		$ext = explode(".", $_FILES["Mapa"]["name"]);
		if ($_FILES['Mapa']['type'] == "image/jpg"|| $_FILES['Mapa']['type'] ==  "image/jpeg" || $_FILES['Mapa']['type'] == "image/png")
		{
			$Mapa = round(microtime(true)) . '.' . end($ext);
			move_uploaded_file($_FILES["Mapa"]["tmp_name"], "../file1/" . $Mapa);
		}
	}


	if (empty($idagencia)){
		$rspta=$agencia->insertar($titulo,$imagen,$direccion,$telefono,$horario,$Mapa,$LinkMapa);
		echo $rspta ? "agencia registrado" : "agencia no se pudo registrar";
	}
	else {
		$rspta=$agencia->editar($idagencia,$titulo,$imagen,$direccion,$telefono,$horario,$Mapa,$LinkMapa);
		echo $rspta ? "agencia actualizado" : "agencia no se pudo actualizar";
	}
	break;

	case 'eliminar':
	$rspta=$agencia->eliminar($idagencia);
	echo $rspta ? "agencia eliminado" : "agencia no se puede eliminar";
	break;

	case 'desactivar':
	$rspta=$agencia->desactivar($idagencia);
	echo $rspta ? "agencia Desactivado" : "agencia no se puede desactivar";
	break;

	case 'activar':
	$rspta=$agencia->activar($idagencia);
	echo $rspta ? "agencia activado" : "agencia no se puede activar";
	break;

	case 'mostrar':
	$rspta=$agencia->mostrar($idagencia);
 		//Codificar el resultado utilizando json
	echo json_encode($rspta);
	break;

	case 'listar':
	$rspta=$agencia->listar();
 		//Vamos a declarar un array
	$data= Array();

	while ($reg=$rspta->fetch_object()){
		$data[]=array(
			"0"=>($reg->estado)?'<button class="btn btn-danger" onclick="eliminar('.$reg->idagencia.')"><i class="fa fa-trash"></i></button>'.
			'<button class="btn btn-warning" onclick="mostrar('.$reg->idagencia.')"><i class="fa fa-pencil"></i></button>'.
			' <button class="btn btn-danger" onclick="desactivar('.$reg->idagencia.')"><i class="fa fa-close"></i></button>':
			'<button class="btn btn-danger" onclick="eliminar('.$reg->idagencia.')"><i class="fa fa-trash"></i></button>'.
			'<button class="btn btn-warning" onclick="mostrar('.$reg->idagencia.')"><i class="fa fa-pencil"></i></button>'.
			' <button class="btn btn-primary" onclick="activar('.$reg->idagencia.')"><i class="fa fa-check"></i></button>',

			"1"=>$reg->titulo,
			"2"=>"<img src='../file1/".$reg->imagen."' height='50px' width='50px' >",
			"3"=>$reg->direccion,
			"4"=>$reg->telefono,
			"5"=>$reg->horario,
			"6"=>"<img src='../file1/".$reg->Mapa."' height='50px' width='50px' >",
			"7"=>$reg->LinkMapa,
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