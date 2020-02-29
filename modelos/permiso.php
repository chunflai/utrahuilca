<?php
//incluiremos inicial mente  la conexion  a la base de  datos 

require_once '../config/conexion.php';

Class Permiso{

// contructor 

	public function __construct()

	{


	}
// metodo listar 

	public function listar()
	{

		$sql="SELECT * FROM permiso ";
		return ejecutarConsulta($sql);
	}

	

}


?>