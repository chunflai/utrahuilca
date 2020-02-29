<?php
// incluimos inicial mente la conecxion a la base de datos 
require "../config/conexion.php";

 Class Formatos
 {

 	//implementamos nuestro constrcutor
 public function __construct() {}

 	// insertar registros
 	public function insertar($titulo,$archivo){

 		$sql="INSERT INTO formatosdian (titulo,archivo,estado) VALUES('$titulo','$archivo','1')";
 		return ejecutarConsulta($sql);
 	}

 	//editar registro de la tbla boletin
 public function editar($idFormatosDian,$titulo,$archivo){

$sql="UPDATE  formatosdian SET titulo='$titulo', archivo='$archivo'  WHERE idFormatosDian='$idFormatosDian'";
return ejecutarConsulta($sql);

 }

// para desactivar la tabla 
 public function desactivar($idFormatosDian){

 	$sql=" UPDATE  formatosdian SET estado='0' WHERE idFormatosDian='$idFormatosDian' ";
 	return ejecutarConsulta($sql);
 }

 // para activar registros
 public function activar($idFormatosDian){

 	$sql=" UPDATE  formatosdian SET estado='1' WHERE idFormatosDian='$idFormatosDian'  ";
 	return ejecutarConsulta($sql);
 }

 public function eliminar ($idFormatosDian){

 	$sql=" DELETE FROM formatosdian  WHERE idFormatosDian='$idFormatosDian' ";
 	return ejecutarConsulta($sql);
 }

 //mostrar 
 public function mostrar($idFormatosDian){

 	$sql="SELECT *  FROM formatosdian WHERE idFormatosDian='$idFormatosDian' ";
return ejecutarConsultaSimpleFila($sql);

 }

 // metodo para elistar registros 
 public function listar(){

 	$sql="  SELECT * FROM formatosdian  ";
return ejecutarConsulta($sql);
 } 

}
?>

