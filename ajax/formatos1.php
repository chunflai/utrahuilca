<?php 
require_once "../modelos/formatos1.php";

$Formatos=new Formatos();



switch ($_GET["op"]){

	case 'mostrar':
		$rspta=$Formatos->mostrar($idformatos);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;
	

	case 'listar':
		$rspta=$Formatos->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(

 				"0"=> "<a href='../file1/".$reg->archivo."'><i class='fa fa-check'>Ver Archivo</i></a>",
 				"1"=>$reg->titulo
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



