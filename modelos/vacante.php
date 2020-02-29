<?php
//incluiremos inicial mente  la conexion  a la base de  datos 

require_once '../config/conexion.php';

Class vacante{



	public function __construct()
	{

	}

	public function insertar($idUsuario,$nombreV)
	{

		$sql="INSERT INTO vacante (idUsuario,nombreV,estado)
		 VALUES ('$idUsuario','$nombreV','1')";
		return ejecutarConsulta($sql);
	}

	 public function editar($idvacante,$idUsuario,$nombreV)
	{
		$sql="UPDATE  vacante SET idUsuario='$idUsuario', nombreV='$nombreV'  WHERE idvacante='$idvacante'";
		return ejecutarConsulta($sql);
	}

 public function eliminar ($idvacante){

 	$sql=" DELETE FROM vacante WHERE idvacante='$idvacante'";

 	return ejecutarConsulta($sql);
 }

	public function desactivar($idvacante){
 	$sql=" UPDATE vacante SET estado='0' WHERE idvacante='$idvacante'";
 	return ejecutarConsulta($sql);
 }

 public function activar($idvacante){

 	$sql=" UPDATE vacante SET estado='1' WHERE idvacante='$idvacante' ";
 	return ejecutarConsulta($sql);
 }

public function mostrar($idvacante)
{
	$sql="SELECT * FROM vacante WHERE idvacante='$idvacante'";
	return ejecutarConsultaSimpleFila($sql);
}

public function listar()
{
	$sql="SELECT
                        i.*
                        , u.nombre AS idUsuario
                     FROM
                        vacante AS i
                        INNER JOIN usuario AS u ON i.idUsuario = u.idUsuario ";

	return ejecutarConsulta($sql);
}

public function select()
        {
            $sql = "SELECT * FROM vacante WHERE estado = 1" ;
            
            return ejecutarConsulta($sql);
        }

}


?>