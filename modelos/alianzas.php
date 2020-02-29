<?php
//incluiremos inicial mente  la conexion  a la base de  datos 

 require_once '../config/conexion.php';

Class alianzas{

// contructor 

	public function __construct()

	{


	}

	// insertar registros 

	public function insertar($imagen)
	{

		$sql="INSERT INTO alianzas (imagen,estado)
		 VALUES ('$imagen','1')";
		return ejecutarConsulta($sql);
	}

	//editar registros 

	 public function editar($idalianzas,$imagen)
	{

		$sql="UPDATE  alianzas SET imagen='$imagen' WHERE idalianzas='$idalianzas'";
		return ejecutarConsulta($sql);
	}


 //ELIMINAR
 public function eliminar ($idalianzas){

    $sql=" DELETE FROM alianzas WHERE idalianzas='$idalianzas' ";
    return ejecutarConsulta($sql);
 }
 

	public function desactivar($idalianzas){

 	$sql=" UPDATE alianzas SET estado='0' WHERE idalianzas='$idalianzas'";
 	return ejecutarConsulta($sql);


 }

 // para activar registros

 public function activar($idalianzas){

 	$sql=" UPDATE alianzas SET estado='1' WHERE idalianzas='$idalianzas' ";
 	return ejecutarConsulta($sql);


 }

public function mostrar($idalianzas)
{
	$sql="SELECT * FROM alianzas WHERE idalianzas='$idalianzas'";
	return ejecutarConsultaSimpleFila($sql);
}

public function listar()
{
	$sql="SELECT * FROM alianzas  ";
	return ejecutarConsulta($sql);
}


}


?>