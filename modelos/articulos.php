<?php
//incluiremos inicial mente  la conexion  a la base de  datos 

 require_once '../config/conexion.php';

Class articulos{


	public function __construct()
	{

	}

	public function insertar($imagen,$titulo,$escrit,$vlink,$fecha,$hora)
	{
		$sql="INSERT INTO articulos (imagen,titulo,escrit,vlink,fecha,hora,estado)
		 VALUES ('$imagen','$titulo','$escrit','$vlink','$fecha','$hora','1')";
		return ejecutarConsulta($sql);
	}

	 public function editar($idarticulos,$imagen,$titulo,$escrit,$vlink,$fecha,$hora)
	{
		$sql="UPDATE  articulos SET imagen='$imagen',titulo='$titulo',escrit='$escrit',vlink='$vlink',fecha='$fecha',hora='$hora'  WHERE idarticulos='$idarticulos'";
		return ejecutarConsulta($sql);
	}

 public function eliminar ($idarticulos)
 {
 	$sql=" DELETE FROM articulos WHERE idarticulos='$idarticulos'";
 	return ejecutarConsulta($sql);
 }

 public function desactivar($idarticulos){
 	$sql=" UPDATE articulos SET estado='0' WHERE idarticulos='$idarticulos'";
 	return ejecutarConsulta($sql);
 }

 public function activar($idarticulos)
 {
 	$sql=" UPDATE articulos SET estado='1' WHERE idarticulos='$idarticulos' ";
 	return ejecutarConsulta($sql);
 }

public function mostrar($idarticulos)
{
	$sql="SELECT * FROM articulos WHERE idarticulos='$idarticulos'";
	return ejecutarConsultaSimpleFila($sql);
}

public function listar()
{
	$sql="SELECT * FROM articulos";
	return ejecutarConsulta($sql);
}

}
?>