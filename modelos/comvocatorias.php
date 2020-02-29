<?php
//incluiremos inicial mente  la conexion  a la base de  datos 
require_once '../config/conexion.php';

Class comvocatorias
{
	public function __construct()
	{ }

	public function insertar($imagen,$titulo,$descripcion,$formacionAcademica,$ConocimientosBasicos,$habilidades,$requisitos,$funcionesPrincipales,$Experiencias,$TipoContrato,$salario,$jornadaLavoral,$fecha,$hora)
	{
		$sql="INSERT INTO comvocatorias (imagen,
		titulo,
		descripcion,
		formacionAcademica,
		ConocimientosBasicos,
		habilidades,
		requisitos,
		funcionesPrincipales,
		Experiencias,
		TipoContrato,
		salario,
		jornadaLavoral,
		fecha,
		hora,
		estado)
		VALUES (
		'$imagen',
		'$titulo',
		'$descripcion',
		'$formacionAcademica',
		'$ConocimientosBasicos',
		'$habilidades',
		'$requisitos',
		'$funcionesPrincipales',
		'$Experiencias',
		'$TipoContrato',
		'$salario',
		'$jornadaLavoral',
		'$fecha',
		'$hora',
		'1')";
		return ejecutarConsulta($sql);
	}

	 public function editar($idcomvocatorias,$imagen,$titulo,$descripcion,$formacionAcademica,$ConocimientosBasicos,$habilidades,$requisitos,$funcionesPrincipales,$Experiencias,$TipoContrato,$salario,$jornadaLavoral,$fecha,$hora)
	{
		$sql="UPDATE  comvocatorias SET
		imagen ='$imagen',
		 titulo='$titulo',
		descripcion ='$descripcion',
		formacionAcademica ='$formacionAcademica',
		 ConocimientosBasicos='$ConocimientosBasicos',
		habilidades ='$habilidades',
		requisitos ='$requisitos',
		 funcionesPrincipales='$funcionesPrincipales',
		 Experiencias='$Experiencias',
		TipoContrato ='$TipoContrato',
		 salario='$salario',
		 jornadaLavoral='$jornadaLavoral',
		 fecha='$fecha',
		 hora='$hora'
		   WHERE idcomvocatorias ='$idcomvocatorias'";
		return ejecutarConsulta($sql);
	}

 public function eliminar ($idcomvocatorias)
 {
 	$sql=" DELETE FROM comvocatorias WHERE idcomvocatorias ='$idcomvocatorias'";
 	return ejecutarConsulta($sql);
 }

 public function desactivar($idcomvocatorias){
 	$sql=" UPDATE comvocatorias SET estado='0' WHERE idcomvocatorias='$idcomvocatorias'";
 	return ejecutarConsulta($sql);
 }

 public function activar($idcomvocatorias)
 {
 	$sql=" UPDATE comvocatorias SET estado='1' WHERE idcomvocatorias='$idcomvocatorias'";
 	return ejecutarConsulta($sql);
 }

public function mostrar($idcomvocatorias)
{
	$sql="SELECT * FROM comvocatorias  WHERE idcomvocatorias='$idcomvocatorias'";
	return ejecutarConsultaSimpleFila($sql);
}

public function listar()
{
	$sql="SELECT * FROM comvocatorias";
	return ejecutarConsulta($sql);
}

}
?>