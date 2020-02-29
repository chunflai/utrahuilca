<?php
//incluiremos inicial mente  la conexion  a la base de  datos 

require_once '../config/conexion.php';

Class noticias{


	public function __construct()
	{

	}

	public function insertar($imagen,$titulo,$escrito,$escrit,$fecha,$hora)
	{
		$sql="INSERT INTO noticias (imagen,titulo,escrito,escrit,fecha,hora,estado)
		 VALUES ('$imagen','$titulo','$escrito','$escrit','$fecha','$hora','1')";
		return ejecutarConsulta($sql);
	}

	 public function editar($idnoticias,$imagen,$titulo,$escrito,$escrit,$fecha,$hora)
	{
		$sql="UPDATE  noticias SET imagen='$imagen',titulo='$titulo',escrito='$escrito',escrit='$escrit',fecha='$fecha',hora='$hora'  WHERE idnoticias='$idnoticias'";
		return ejecutarConsulta($sql);
	}

 public function eliminar ($idnoticias)
 {
 	$sql=" DELETE FROM noticias WHERE idnoticias='$idnoticias'";
 	return ejecutarConsulta($sql);
 }

 public function desactivar($idnoticias){
 	$sql=" UPDATE noticias SET estado='0' WHERE idnoticias='$idnoticias'";
 	return ejecutarConsulta($sql);
 }

 public function activar($idnoticias)
 {
 	$sql=" UPDATE noticias SET estado='1' WHERE idnoticias='$idnoticias' ";
 	return ejecutarConsulta($sql);
 }

public function mostrar($idnoticias)
{
	$sql="SELECT * FROM noticias WHERE idnoticias='$idnoticias'";
	return ejecutarConsultaSimpleFila($sql);
}

public function listar()
{
	$sql="SELECT * FROM noticias";
	return ejecutarConsulta($sql);
}

}
?>