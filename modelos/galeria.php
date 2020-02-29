<?php
//incluiremos inicial mente  la conexion  a la base de  datos 

 require_once '../config/conexion.php';

Class Galeria{

	public function __construct() {}

	public function insertar($imagen,$titulo,$ruta)
	{
		$sql="INSERT INTO galeria (imagen,titulo,ruta,estado)
		 VALUES ('$imagen','$titulo','$ruta','1')";
		return ejecutarConsulta($sql);
	}

	 public function editar($idgaleria,$imagen,$titulo,$ruta)
	{
		$sql="UPDATE  galeria SET imagen='$imagen',titulo='$titulo',ruta='$ruta'WHERE idgaleria='$idgaleria'";
		return ejecutarConsulta($sql);
	}

 public function eliminar ($idgaleria)
 {
 	$sql=" DELETE FROM galeria WHERE idgaleria='$idgaleria'";
 	return ejecutarConsulta($sql);
 }

 public function desactivar($idgaleria){
 	$sql=" UPDATE galeria SET estado='0' WHERE idgaleria='$idgaleria'";
 	return ejecutarConsulta($sql);
 }

 public function activar($idgaleria)
 {
 	$sql=" UPDATE galeria SET estado='1' WHERE idgaleria='$idgaleria' ";
 	return ejecutarConsulta($sql);
 }

public function mostrar($idgaleria)
{
	$sql="SELECT * FROM galeria WHERE idgaleria='$idgaleria'";
	return ejecutarConsultaSimpleFila($sql);
}

public function listar()
{
	$sql="SELECT * FROM galeria";
	return ejecutarConsulta($sql);
}

}
?>