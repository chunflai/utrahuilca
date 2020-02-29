<?php
//incluiremos inicial mente  la conexion  a la base de  datos 

 require_once '../config/conexion.php';

 Class Registro{


	public function __construct(){}


	// insertar registros
 	public function insertar($idvacante,$idDepartamentosNacimiento,$idciudadesNacimiento,$idescolaridad,$idtitulacion,$idDepartamentoResidencia,$idCiudadesResidencia,$idDeparmentoFormacion,$idciudadFormacion,$idDepartamentoTrabajo,$idCiudadTrabajo,$politicas_Aceptacion,$Nombres,$Apellidos,$TipoIdentificacion,$NumeroIdentificacion,$genero,$estadoCivil,$FechaNacimiento,$Direccion,$barrio,$Telefono,$Celular,$CorreoElectronico,$estadoEstudio,$FechaInicio,$FechaFin,$TituloOtorgado,$NombreInstitucion,$cursoNombTitulo,$NomIntitu,$fechainc,$fechafi,$Empresa,$FechaIni,$Telefo,$EstadoTrabajo,$FechaFinalizacion,$jefeInmediato,$NombreCargo,$FuncionesPrincipales,$empresa2,$jefeInmediato2,$fechaini2,$fechater2,$telefon2,$FuncionesPrin2,$nombrecargo2,$NombreFa,$TelefonoFa,$celufa,$Parentesco,$NombrePersonal1,$Telefono1,$Celul,$NombrePersonal2,$Telefono2,$cel){

 		$sql="INSERT INTO hojaVida (idvacante,idDepartamentosNacimiento,idciudadesNacimiento,idescolaridad,idtitulacion,idDepartamentoResidencia,idCiudadesResidencia,idDeparmentoFormacion,idciudadFormacion,idDepartamentoTrabajo,idCiudadTrabajo,politicas_Aceptacion,Nombres,Apellidos,TipoIdentificacion,NumeroIdentificacion,genero,estadoCivil,FechaNacimiento,Direccion,barrio,Telefono,Celular,CorreoElectronico,estadoEstudio,FechaInicio,FechaFin,TituloOtorgado,NombreInstitucion,cursoNombTitulo,NomIntitu,fechainc,fechafi,Empresa,FechaIni,Telefo,EstadoTrabajo,FechaFinalizacion,jefeInmediato,NombreCargo,FuncionesPrincipales,empresa2,jefeInmediato2,fechaini2,fechater2,telefon2,FuncionesPrin2,nombrecargo2,NombreFa,TelefonoFa,celufa,Parentesco,NombrePersonal1,Telefono1,Celul,NombrePersonal2,Telefono2,cel ,estado)VALUES('$idvacante','$idDepartamentosNacimiento','$idciudadesNacimiento','$idescolaridad','$idtitulacion','$idDepartamentoResidencia','$idCiudadesResidencia','$idDeparmentoFormacion','$idciudadFormacion','$idDepartamentoTrabajo','$idCiudadTrabajo','$politicas_Aceptacion','$Nombres','$Apellidos','$TipoIdentificacion','$NumeroIdentificacion','$genero','$estadoCivil','$FechaNacimiento','$Direccion', '$barrio','$Telefono','$Celular','$CorreoElectronico','$estadoEstudio','$FechaInicio','$FechaFin','$TituloOtorgado','$NombreInstitucion','$cursoNombTitulo','$NomIntitu','$fechainc','$fechafi','$Empresa','$FechaIni','$Telefo','$EstadoTrabajo','$FechaFinalizacion','$jefeInmediato','$NombreCargo','$FuncionesPrincipales','$empresa2','$jefeInmediato2','$fechaini2','$fechater2','$telefon2','$FuncionesPrin2','$nombrecargo2','$NombreFa','$TelefonoFa','$celufa','$Parentesco','$NombrePersonal1','$Telefono1','$Celul','$NombrePersonal2','$Telefono2','$cel','1')";
 		return ejecutarConsulta($sql);
 	}

 	//editar registro de la tbla urgente

 public function editar($idhoja,$idvacante,$idDepartamentosNacimiento,$idciudadesNacimiento,$idescolaridad,$idtitulacion,$idDepartamentoResidencia,$idCiudadesResidencia,$idDeparmentoFormacion,$idciudadFormacion,$idDepartamentoTrabajo,$idCiudadTrabajo,$politicas_Aceptacion,$Nombres,$Apellidos,$TipoIdentificacion,$NumeroIdentificacion,$genero,$estadoCivil,$FechaNacimiento,$Direccion,$barrio,$Telefono,$Celular,$CorreoElectronico,$estadoEstudio,$FechaInicio,$FechaFin,$TituloOtorgado,$NombreInstitucion,$cursoNombTitulo,$NomIntitu,$fechainc,$fechafi,$Empresa,$FechaIni,$Telefo,$EstadoTrabajo,$FechaFinalizacion,$jefeInmediato,$NombreCargo,$FuncionesPrincipales,$empresa2,$jefeInmediato2,$fechaini2,$fechater2,$telefon2,$FuncionesPrin2,$nombrecargo2,$NombreFa,$TelefonoFa,$celufa,$Parentesco,$NombrePersonal1,$Telefono1,$Celul,$NombrePersonal2,$Telefono2,$cel){

 $sql="UPDATE  hojaVida SET idvacante ='$idvacante',idDepartamentosNacimiento='$idDepartamentosNacimiento',idciudadesNacimiento='$idciudadesNacimiento',idescolaridad='$idescolaridad', idtitulacion='$idtitulacion',idDepartamentoResidencia='$idDepartamentoResidencia',idCiudadesResidencia ='$idCiudadesResidencia',idDeparmentoFormacion='$idDeparmentoFormacion',idciudadFormacion='$idciudadFormacion',idDepartamentoTrabajo='$idDepartamentoTrabajo',idCiudadTrabajo ='$idCiudadTrabajo',politicas_Aceptacion ='$politicas_Aceptacion',Nombres='$Nombres',Apellidos='$Apellidos',TipoIdentificacion='$TipoIdentificacion',NumeroIdentificacion='$NumeroIdentificacion',genero='$genero',estadoCivil='$estadoCivil',FechaNacimiento ='$FechaNacimiento',Direccion='$Direccion',barrio ='$barrio',Telefono='$Telefono',Celular='$Celular',CorreoElectronico='$CorreoElectronico',estadoEstudio='$estadoEstudio',FechaInicio ='$FechaInicio',FechaFin='$FechaFin',TituloOtorgado='$TituloOtorgado', NombreInstitucion='$NombreInstitucion',cursoNombTitulo='$cursoNombTitulo',NomIntitu='$NomIntitu',fechainc='$fechainc',fechafi='$fechafi',Empresa ='$Empresa',FechaIni='$FechaIni',Telefo='$Telefo',EstadoTrabajo='$EstadoTrabajo',FechaFinalizacion='$FechaFinalizacion',jefeInmediato='$jefeInmediato',NombreCargo='$NombreCargo',FuncionesPrincipales='$FuncionesPrincipales',empresa2='$empresa2',jefeInmediato2='$jefeInmediato2',fechaini2='$fechaini2',fechater2 ='$fechater2', telefon2='$telefon2',FuncionesPrin2 ='$FuncionesPrin2',nombrecargo2 ='$nombrecargo2',NombreFa ='$NombreFa',TelefonoFa ='$TelefonoFa',celufa='$celufa',Parentesco='$Parentesco',NombrePersonal1='$NombrePersonal1',Telefono1='$Telefono1',Celul='$Celul',NombrePersonal2='$NombrePersonal2',Telefono2='$Telefono2',cel='$cel'  WHERE idhoja='$idhoja'";
 
 return ejecutarConsulta($sql);

 }

public function eliminar ($idhoja){

 	$sql=" DELETE FROM hojavida WHERE idhoja='$idhoja' ";
 	return ejecutarConsulta($sql);
 }

public function desactivar($idhoja){

 	$sql=" UPDATE hojaVida SET estado='0' WHERE idhoja='$idhoja'";
 	return ejecutarConsulta($sql);
 }

 // para activar registros

 public function activar($idhoja)
 {

 	$sql=" UPDATE hojaVida SET estado='1' WHERE idhoja='$idhoja' ";
 	return ejecutarConsulta($sql);
 }

public function mostrar($idhoja)
{
	$sql="SELECT * FROM hojaVida WHERE idhoja='$idhoja'";
	return ejecutarConsultaSimpleFila($sql);
}

public function listar()
{
	$sql="  SELECT   hj.* , 
	                a.nombre As idDepartamentosNacimiento,
                    hj.idciudadFormacion,
	                (SELECT c.nombreC FROM ciudades AS c WHERE c.idciudadesNacimiento = hj.idciudadesNacimiento) AS idciudadesNacimiento,

	                 dr.nombre AS idDepartamentoResidencia,
	                 hj.idCiudadesResidencia,
	               (SELECT cr.nombreC FROM ciudresidencia AS cr WHERE cr.idCiudadesResidencia = hj.idCiudadesResidencia) AS idCiudadesResidencia,

	                df.nombre as idDeparmentoFormacion,
	                hj.idciudadFormacion,
	               (SELECT cf.nombreC FROM ciuformacion AS cf WHERE cf.idciudadFormacion = hj.idciudadFormacion)AS idciudadFormacion,

	                 dt.nombre as idDepartamentoTrabajo,
	                 hj.idCiudadTrabajo,
	                (SELECT ct.nombreC FROM ciutrabjabo AS ct WHERE ct.idCiudadTrabajo = hj.idCiudadTrabajo) AS idCiudadTrabajo,

	                 e.nombreEsc as idescolaridad,
	                 hj.idtitulacion,
	                (SELECT ti.nombreTitu FROM titulacion AS ti WHERE ti.idtitulacion = hj.idtitulacion)AS idtitulacion,

	                 p.nombreV as idvacante
                       
                     FROM
                        hojavida as hj INNER JOIN departamentos AS a ON hj.idDepartamentosNacimiento = a.idDepartamentosNacimiento INNER JOIN depresidencia AS dr ON hj.idDepartamentoResidencia = dr.idDepartamentoResidencia INNER JOIN deformacion AS df ON hj.idDeparmentoFormacion = df.idDeparmentoFormacion INNER JOIN detrabajo AS dt ON hj.idDepartamentoTrabajo = dt.idDepartamentoTrabajo INNER JOIN escolaridad AS e ON hj.idescolaridad = e.idescolaridad INNER JOIN vacante AS p ON hj.idvacante = p.idvacante ORDER by hj.idhoja DESC  ";

	return ejecutarConsulta($sql);
}


}
?>