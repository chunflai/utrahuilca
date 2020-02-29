<?php
//incluiremos inicial mente  la conexion  a la base de  datos 

 require_once '../config/conexion.php';


Class agencia{

	public function __construct()
	{ }

	public function insertar($titulo,$imagen,$direccion,$telefono,$horario,$Mapa,$LinkMapa)
	{
		$sql="INSERT INTO agencia (titulo,imagen,direccion,telefono,horario,Mapa,LinkMapa,estado)
		 VALUES ('$titulo','$imagen','$direccion','$telefono','$horario','$Mapa','$LinkMapa','1')";
		return ejecutarConsulta($sql);
	}

	 public function editar($idagencia,$titulo,$imagen,$direccion,$telefono,$horario,$Mapa,$LinkMapa)
	{
		$sql="UPDATE  agencia SET titulo='$titulo' , imagen='$imagen' , direccion='$direccion' , telefono='$telefono' , horario='$horario',Mapa='$Mapa',LinkMapa='$LinkMapa'  WHERE idagencia='$idagencia'";
		return ejecutarConsulta($sql);
	}

 public function eliminar ($idagencia)
 {
 	$sql=" DELETE FROM agencia WHERE idagencia='$idagencia'";
 	return ejecutarConsulta($sql);
 }

 public function desactivar($idagencia){
 	$sql=" UPDATE agencia SET estado='0' WHERE idagencia='$idagencia'";
 	return ejecutarConsulta($sql);
 }

 public function activar($idagencia)
 {
 	$sql=" UPDATE agencia SET estado='1' WHERE idagencia='$idagencia' ";
 	return ejecutarConsulta($sql);
 }

public function mostrar($idagencia)
{
	$sql="SELECT * FROM agencia WHERE idagencia='$idagencia'";
	return ejecutarConsultaSimpleFila($sql);
}

public function listar()
{
	$sql="SELECT * FROM agencia ";
	return ejecutarConsulta($sql);
}


}
?>