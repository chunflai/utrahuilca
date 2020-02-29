<?php
//incluiremos inicial mente  la conexion  a la base de  datos 

require_once '../config/conexion.php';

Class viedoslink{

// contructor 

	public function __construct() {  }

	// insertar registros 

	public function insertar($imagen,$vlink,$titulo,$desrcipcion,$hora,$fecha)
	{
		$sql="INSERT INTO link (imagen,vlink,titulo,desrcipcion,hora,fecha,estado)VALUES ('$imagen','$vlink','$titulo','$desrcipcion','$hora','$fecha','1')";
		return ejecutarConsulta($sql);
	}


	//editar registros 
	 public function editar($idlink,$imagen,$vlink,$titulo,$desrcipcion,$hora,$fecha)
	{

		$sql="UPDATE  link SET  imagen='$imagen',vlink='$vlink',titulo='$titulo',desrcipcion='$desrcipcion',hora='$hora',fecha='$fecha'WHERE idlink='$idlink'";
		return ejecutarConsulta($sql);
	}

	public function desactivar($idlink){

 	$sql=" UPDATE link SET estado='0' WHERE idlink='$idlink'";
 	return ejecutarConsulta($sql);
 }
 
 // para activar registros
 public function activar($idlink){

 	$sql=" UPDATE link SET estado='1' WHERE idlink='$idlink' ";
 	return ejecutarConsulta($sql);
 }

  public function eliminar ($idlink)
 {
 	$sql=" DELETE FROM link WHERE  idlink='$idlink'";
 	return ejecutarConsulta($sql);
 }

public function mostrar($idlink)
{
	$sql="SELECT * FROM link WHERE idlink='$idlink'";
	return ejecutarConsultaSimpleFila($sql);
}

public function listar()
{
	$sql="SELECT * FROM link  ";
	return ejecutarConsulta($sql);
}

}
?>