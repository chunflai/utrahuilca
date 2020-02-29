<?php
//incluiremos inicial mente  la conexion  a la base de  datos 

require_once '../config/conexion.php';

Class Sliders{

// contructor 

public function __construct(){}

	// insertar registros 
public function insertar($imagen,$url){

       $sql="INSERT INTO slider (imagen,estado,url)VALUES ('$imagen','1','$url')";
		return ejecutarConsulta($sql);
	}

	//editar registros 
	 public function editar($idslider,$imagen,$url){

		$sql="UPDATE  slider SET imagen='$imagen',url='$url' WHERE idslider='$idslider'";
		return ejecutarConsulta($sql);
	}

 //ELIMINAR
 public function eliminar ($idslider){

    $sql=" DELETE FROM slider WHERE idslider='$idslider' ";
    return ejecutarConsulta($sql);
 }
 
	public function desactivar($idslider){

 	$sql=" UPDATE slider SET estado='0' WHERE idslider='$idslider'";
 	return ejecutarConsulta($sql);
 }

 public function activar($idslider){

 	$sql=" UPDATE slider SET estado='1' WHERE idslider='$idslider' ";
 	return ejecutarConsulta($sql);
 }

public function mostrar($idslider){

	$sql="SELECT * FROM slider WHERE idslider='$idslider'";
	return ejecutarConsultaSimpleFila($sql);
}

public function listar(){

	$sql="SELECT * FROM slider  ";
	return ejecutarConsulta($sql);
}

}?>