<?php
//incluiremos inicial mente  la conexion  a la base de  datos 

require_once '../config/conexion.php';

Class Perfil{

// contructor 

	public function __construct()

	{


	}

	// insertar registros 

	public function insertar($perfilUsuario,$codigoUsuario)
	{

		$sql="INSERT INTO perfil (perfilUsuario,codigoUsuario,estado)
		 VALUES ('$perfilUsuario','$codigoUsuario','1')";
		return ejecutarConsulta($sql);
	}

	//editar registros 

	 public function editar($idPerfil,$perfilUsuario,$codigoUsuario)
	{

		$sql="UPDATE  perfil SET perfilUsuario ='$perfilUsuario',codigoUsuario='$codigoUsuario' WHERE idPerfil='$idPerfil'";
		return ejecutarConsulta($sql);



	}

	public function desactivar($idPerfil){

 	$sql=" UPDATE perfil SET estado='0' WHERE idPerfil='$idPerfil'";
 	return ejecutarConsulta($sql);


 }

 // para activar registros

 public function activar($idPerfil){

 	$sql=" UPDATE perfil SET estado='1' WHERE idPerfil='$idPerfil' ";
 	return ejecutarConsulta($sql);


 }

public function mostrar($idPerfil)
{
	$sql="SELECT * FROM perfil WHERE idPerfil='$idPerfil'";
	return ejecutarConsultaSimpleFila($sql);
}

public function listar()
{
	$sql="SELECT * FROM perfil  ";
	return ejecutarConsulta($sql);
}

public function select()
	{
		$sql="SELECT * FROM perfil where estado=1";
		return ejecutarConsulta($sql);		
	}

}


?>