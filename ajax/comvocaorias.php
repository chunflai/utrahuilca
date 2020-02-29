<?php 
require_once "../modelos/comvocatorias.php";

$comvocatorias=new comvocatorias();

$idcomvocatorias=isset($_POST["idcomvocatorias"])? limpiarCadena($_POST["idcomvocatorias"]):"";
$imagen=isset($_POST["imagen"])? limpiarCadena($_POST["imagen"]):"";
$titulo=isset($_POST["titulo"])? limpiarCadena($_POST["titulo"]):"";
$descripcion=isset($_POST["descripcion"])? limpiarCadena($_POST["descripcion"]):"";
$formacionAcademica=isset($_POST["formacionAcademica"])? limpiarCadena($_POST["formacionAcademica"]):"";
$ConocimientosBasicos=isset($_POST["ConocimientosBasicos"])? limpiarCadena($_POST["ConocimientosBasicos"]):"";
$habilidades=isset($_POST["habilidades"])? limpiarCadena($_POST["habilidades"]):"";
$requisitos=isset($_POST["requisitos"])? limpiarCadena($_POST["requisitos"]):"";
$funcionesPrincipales=isset($_POST["funcionesPrincipales"])? limpiarCadena($_POST["funcionesPrincipales"]):"";
$Experiencias=isset($_POST["Experiencias"])? limpiarCadena($_POST["Experiencias"]):"";
$TipoContrato=isset($_POST["TipoContrato"])? limpiarCadena($_POST["TipoContrato"]):"";
$salario=isset($_POST["salario"])? limpiarCadena($_POST["salario"]):"";
$jornadaLavoral=isset($_POST["jornadaLavoral"])? limpiarCadena($_POST["jornadaLavoral"]):"";
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
		if (empty($idcomvocatorias)){
			$rspta=$comvocatorias->insertar($imagen,$titulo,$descripcion,$formacionAcademica,$ConocimientosBasicos,$habilidades,$requisitos,$funcionesPrincipales,$Experiencias,$TipoContrato,$salario,$jornadaLavoral,$fecha,$hora);
			echo $rspta ? "Artículo registrado" : "Artículo no se pudo registrar";
		}
		else {
			$rspta=$comvocatorias->editar($idcomvocatorias,$imagen,$titulo,$descripcion,$formacionAcademica,$ConocimientosBasicos,$habilidades,$requisitos,$funcionesPrincipales,$Experiencias,$TipoContrato,$salario,$jornadaLavoral,$fecha,$hora);
			echo $rspta ? "Artículo actualizado" : "Artículo no se pudo actualizar";
		}
	break;

	case 'eliminar':
		$rspta=$comvocatorias->eliminar($idcomvocatorias);
 		echo $rspta ? "Artículo eliminado" : "Artículo no se puede eliminar";
	break;

	case 'desactivar':
		$rspta=$comvocatorias->desactivar($idcomvocatorias);
 		echo $rspta ? "Artículo Desactivado" : "Artículo no se puede desactivar";
	break;

	case 'activar':
		$rspta=$comvocatorias->activar($idcomvocatorias);
 		echo $rspta ? "Artículo activado" : "Artículo no se puede activar";
	break;

	case 'mostrar':
		$rspta=$comvocatorias->mostrar($idcomvocatorias);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$comvocatorias->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->estado)?'<button class="btn btn-danger" onclick="eliminar('.$reg->idcomvocatorias.')"><i class="fa fa-trash"></i></button>'.
 				'<button class="btn btn-warning" onclick="mostrar('.$reg->idcomvocatorias.')"><i class="fa fa-pencil"></i></button>'.
 				' <button class="btn btn-danger" onclick="desactivar('.$reg->idcomvocatorias.')"><i class="fa fa-close"></i></button>':
 				'<button class="btn btn-danger" onclick="eliminar('.$reg->idcomvocatorias.')"><i class="fa fa-trash"></i></button>'.
 				'<button class="btn btn-warning" onclick="mostrar('.$reg->idcomvocatorias.')"><i class="fa fa-pencil"></i></button>'.
 				' <button class="btn btn-primary" onclick="activar('.$reg->idcomvocatorias.')"><i class="fa fa-check"></i></button>',
 					
 			    "1"=>"<img src='../file1/".$reg->imagen."' height='50px' width='50px' >",
 			    "2"=>$reg->titulo,
 				"3"=>$reg->descripcion,
 				"4"=>$reg->formacionAcademica,
 				"5"=>$reg->ConocimientosBasicos,
 				"6"=>$reg->habilidades,
 				"7"=>$reg->requisitos,
 				"8"=>$reg->funcionesPrincipales,
 				"9"=>$reg->Experiencias,
 				"10"=>$reg->TipoContrato,
 				"11"=>$reg->salario,
 				"12"=>$reg->jornadaLavoral,
 				"13"=>$reg->fecha,
 				"14"=>$reg->hora,
 				"15"=>($reg->estado)?'<span class="label bg-green">Activado</span>':
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