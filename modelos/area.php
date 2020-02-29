<?php
//incluiremos inicial mente  la conexion  a la base de  datos 

 require_once '../config/conexion.php';

Class Area{

// contructor 

	public function __construct()

	{


	}

	// insertar registros 

	public function insertar($nombreArea,$codigoUsuario)
	{

		$sql="INSERT INTO area (nombreArea,codigoUsuario,estado)
		 VALUES ('$nombreArea','$codigoUsuario','1')";
		return ejecutarConsulta($sql);
	}

	//editar registros 

	 public function editar($idArea,$nombreArea,$codigoUsuario)
	{

		$sql="UPDATE  area SET nombreArea ='$nombreArea',codigoUsuario='$codigoUsuario' WHERE idArea='$idArea'";
		return ejecutarConsulta($sql);



	}

	public function desactivar($idArea){

 	$sql=" UPDATE area SET estado='0' WHERE idArea='$idArea'";
 	return ejecutarConsulta($sql);


 }

 // para activar registros

 public function activar($idArea){

 	$sql=" UPDATE area SET estado='1' WHERE idArea='$idArea' ";
 	return ejecutarConsulta($sql);


 }

public function mostrar($idArea)
{
	$sql="SELECT * FROM area WHERE idArea='$idArea'";
	return ejecutarConsultaSimpleFila($sql);
}

public function listar()
{
	$sql="SELECT * FROM area  ";
	return ejecutarConsulta($sql);
}

public function select()
	{
		$sql="SELECT * FROM area where estado=1";
		return ejecutarConsulta($sql);		
	}

	

}


?>