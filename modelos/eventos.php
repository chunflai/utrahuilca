<?php
//incluiremos inicial mente  la conexion  a la base de  datos 

 require_once '../config/conexion.php';

Class Eventos{

	public function __construct() {}

	public function insertar($imagen,$titulo,$escrit,$link,$zona,$fecha,$hora)
	{
		$sql="INSERT INTO eventos (imagen,titulo,escrit,link,zona,fecha,hora,estado)
		 VALUES ('$imagen','$titulo','$escrit','$fecha','$link','$zona','$hora','1')";
		return ejecutarConsulta($sql);
	}

	 public function editar($ideventos,$imagen,$titulo,$escrit,$link,$zona,$fecha,$hora)
	{
		$sql="UPDATE  eventos SET imagen='$imagen',titulo='$titulo',escrit='$escrit',link='$link',zona='$zona',fecha='$fecha',hora='$hora'  WHERE ideventos='$ideventos'";
		return ejecutarConsulta($sql);
	}

 public function eliminar ($ideventos)
 {
 	$sql=" DELETE FROM eventos WHERE ideventos='$ideventos'";
 	return ejecutarConsulta($sql);
 }

 public function desactivar($ideventos){
 	$sql=" UPDATE eventos SET estado='0' WHERE ideventos='$ideventos'";
 	return ejecutarConsulta($sql);
 }

 public function activar($ideventos)
 {
 	$sql=" UPDATE eventos SET estado='1' WHERE ideventos='$ideventos' ";
 	return ejecutarConsulta($sql);
 }

public function mostrar($ideventos)
{
	$sql="SELECT * FROM eventos WHERE ideventos='$ideventos'";
	return ejecutarConsultaSimpleFila($sql);
}

public function listar()
{
	$sql="SELECT * FROM eventos";
	return ejecutarConsulta($sql);
}

}?>