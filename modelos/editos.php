<?php
//incluiremos inicial mente  la conexion  a la base de  datos 

require_once '../config/conexion.php';

Class editos{


	public function __construct()
	{

	}

	public function insertar($imagen,$descripccion,$fecha,$hora)
	{
		$sql="INSERT INTO editos (imagen,descripccion,fecha,hora,estado)
		 VALUES ('$imagen','$descripccion','$fecha','$hora','1')";
		return ejecutarConsulta($sql);
	}

	 public function editar($ideditos,$imagen,$descripccion,$fecha,$hora)
	{
		$sql="UPDATE  editos SET imagen='$imagen',descripccion='$descripccion',fecha='$fecha',hora='$hora'  WHERE ideditos='$ideditos'";
		return ejecutarConsulta($sql);
	}

 public function eliminar ($ideditos)
 {
 	$sql=" DELETE FROM editos WHERE ideditos='$ideditos'";
 	return ejecutarConsulta($sql);
 }

 public function desactivar($ideditos){
 	$sql=" UPDATE editos SET estado='0' WHERE ideditos='$ideditos'";
 	return ejecutarConsulta($sql);
 }

 public function activar($ideditos)
 {
 	$sql=" UPDATE editos SET estado='1' WHERE ideditos='$ideditos'";
 	return ejecutarConsulta($sql);
 }

public function mostrar($ideditos)
{
	$sql="SELECT * FROM editos WHERE ideditos='$ideditos'";
	return ejecutarConsultaSimpleFila($sql);
}

public function listar()
{
	$sql="SELECT * FROM editos";
	return ejecutarConsulta($sql);
}

}
?>