<?php
//incluiremos inicial mente  la conexion  a la base de  datos 

require_once '../config/conexion.php';

Class trabajo{


	public function __construct()
	{

	}

	public function insertar($imagen,$titulo,$escrito,$escrit,$fecha,$hora)
	{
		$sql="INSERT INTO trabaje (imagen,titulo,escrito,escrit,fecha,hora,estado)
		 VALUES ('$imagen','$titulo','$escrito','$escrit','$fecha','$hora','1')";
		return ejecutarConsulta($sql);
	}

	 public function editar($idtrabaje,$imagen,$titulo,$escrito,$escrit,$fecha,$hora)
	{
		$sql="UPDATE  trabaje SET imagen='$imagen',titulo='$titulo',escrito='$escrito',escrit='$escrit',fecha='$fecha',hora='$hora'  WHERE idtrabaje='$idtrabaje'";
		return ejecutarConsulta($sql);
	}

 public function eliminar ($idtrabaje)
 {
 	$sql=" DELETE FROM trabaje WHERE idtrabaje='$idtrabaje'";
 	return ejecutarConsulta($sql);
 }

 public function desactivar($idtrabaje)
 {
 	$sql=" UPDATE trabaje SET estado='0' WHERE idtrabaje='$idtrabaje'";
 	return ejecutarConsulta($sql);
 }

 public function activar($idtrabaje)
 {
 	$sql=" UPDATE trabaje SET estado='1' WHERE idtrabaje='$idtrabaje' ";
 	return ejecutarConsulta($sql);
 }

public function mostrar($idtrabaje)
{
	$sql="SELECT * FROM trabaje WHERE idtrabaje='$idtrabaje'";
	return ejecutarConsultaSimpleFila($sql);
}

public function listar()
{
	$sql="SELECT * FROM trabaje";
	return ejecutarConsulta($sql);
}

}
?>