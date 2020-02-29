<?php
//incluiremos inicial mente  la conexion  a la base de  datos 

require_once '../config/conexion.php';

Class EstadoLink{

// contructor 

	public function __construct() {  }

	// insertar registros 

	public function insertar($imagen,$link,$titulo)
	{
		$sql="INSERT INTO condicion(imagen,link,titulo,estado)VALUES ('$imagen','$link','$titulo','1')";
		return ejecutarConsulta($sql);
	}


	//editar registros 
	 public function editar($idcondicion,$imagen,$link,$titulo)
	{

		$sql="UPDATE  condicion SET  imagen='$imagen',link='$link',titulo='$titulo'WHERE idcondicion='$idcondicion'";
		return ejecutarConsulta($sql);
	}

	public function desactivar($idcondicion){

 	$sql=" UPDATE condicion SET estado='0' WHERE idcondicion='$idcondicion'";
 	return ejecutarConsulta($sql);
 }
 
 // para activar registros
 public function activar($idcondicion){

 	$sql=" UPDATE condicion SET estado='1' WHERE idcondicion='$idcondicion' ";
 	return ejecutarConsulta($sql);
 }

  public function eliminar ($idcondicion)
 {
 	$sql=" DELETE FROM condicion WHERE  idcondicion='$idcondicion'";
 	return ejecutarConsulta($sql);
 }

public function mostrar($idcondicion)
{
	$sql="SELECT * FROM condicion WHERE idcondicion='$idcondicion'";
	return ejecutarConsultaSimpleFila($sql);
}

public function listar()
{
	$sql="SELECT * FROM condicion  ";
	return ejecutarConsulta($sql);
}

}
?>