<?php
//incluiremos inicial mente  la conexion  a la base de  datos 

 require_once '../config/conexion.php';

Class Datos{
	

 // contructor 

	public function __construct() {}

	// insertar registros 

	public function insertar($idvacante,$idDepartamentosNacimiento,$idciudadesNacimiento,$idescolaridad,$idtitulacion,$idDepartamentoResidencia,$idCiudadesResidencia,$idDeparmentoFormacion,$idciudadFormacion,$idDepartamentoTrabajo,$idCiudadTrabajo,$politicas_Aceptacion,$Nombres,$Apellidos,$TipoIdentificacion,$NumeroIdentificacion,$genero,$estadoCivil,$FechaNacimiento,$Direccion,$barrio,$Telefono,$Celular,$CorreoElectronico,$estadoEstudio,$FechaInicio,$FechaFin,$TituloOtorgado,$NombreInstitucion,$cursoNombTitulo,$NomIntitu,$fechainc,$fechafi,$Empresa,$FechaIni,$Telefo,$EstadoTrabajo,$jefeInmediato,$NombreCargo,$FuncionesPrincipales,$empresa2,$jefeInmediato2,$fechaini2,$fechater2,$telefon2,$FuncionesPrin2,$nombrecargo2,$NombreFa,$TelefonoFa,$celufa,$Parentesco,$NombrePersonal1,$Telefono1,$Celul,$NombrePersonal2,$Telefono2,$cel)
	{

	$sql="INSERT INTO datos (idvacante,idDepartamentosNacimiento,idciudadesNacimiento,idescolaridad,idtitulacion,idDepartamentoResidencia,idCiudadesResidencia,idDeparmentoFormacion,idciudadFormacion,idDepartamentoTrabajo,idCiudadTrabajo,politicas_Aceptacion,Nombres,Apellidos,TipoIdentificacion,NumeroIdentificacion,genero,estadoCivil,FechaNacimiento,Direccion,barrio,Telefono,Celular,CorreoElectronico,estadoEstudio,FechaInicio,FechaFin,TituloOtorgado,NombreInstitucion,cursoNombTitulo,NomIntitu,fechainc,fechafi,Empresa,FechaIni,Telefo,EstadoTrabajo,jefeInmediato,NombreCargo,FuncionesPrincipales,empresa2,jefeInmediato2,fechaini2,fechater2,telefon2,FuncionesPrin2,nombrecargo2,NombreFa,TelefonoFa,celufa,Parentesco,NombrePersonal1,Telefono1,Celul,NombrePersonal2,Telefono2,cel,estado)

		 VALUES ('$idvacante','$idDepartamentosNacimiento','$idciudadesNacimiento','$idescolaridad','$idtitulacion','$idDepartamentoResidencia','$idCiudadesResidencia','$idDeparmentoFormacion','$idciudadFormacion','$idDepartamentoTrabajo','$idCiudadTrabajo','$politicas_Aceptacion','$Nombres','$Apellidos','$TipoIdentificacion','$NumeroIdentificacion','$genero','$estadoCivil','$FechaNacimiento','$Direccion','$barrio','$Telefono','$Celular','$CorreoElectronico','$estadoEstudio','$FechaInicio','$FechaFin','$TituloOtorgado','$NombreInstitucion','$cursoNombTitulo','$NomIntitu','$fechainc','$fechafi','$Empresa','$FechaIni','$Telefo','$EstadoTrabajo','$jefeInmediato','$NombreCargo','$FuncionesPrincipales','$empresa2','$jefeInmediato2','$fechaini2','$fechater2','$telefon2','$FuncionesPrin2','$nombrecargo2','$NombreFa','$TelefonoFa','$celufa','$Parentesco','$NombrePersonal1','$Telefono1','$Celul','$NombrePersonal2','$Telefono2','$cel','1')";
		return ejecutarConsulta($sql);
	}

 //editar registros 

 public function editar($iddatos,$idvacante,$idDepartamentosNacimiento,$idciudadesNacimiento,$idescolaridad,$idtitulacion,$idDepartamentoResidencia,$idCiudadesResidencia,$idDeparmentoFormacion,$idciudadFormacion,$idDepartamentoTrabajo,$idCiudadTrabajo,$politicas_Aceptacion,$Nombres,$Apellidos,$TipoIdentificacion,$NumeroIdentificacion,$genero,$estadoCivil,$FechaNacimiento,$Direccion,$barrio,$Telefono,$Celular,$CorreoElectronico,$estadoEstudio,$FechaInicio,$FechaFin,$TituloOtorgado,$NombreInstitucion,$cursoNombTitulo,$NomIntitu,$fechainc,$fechafi,$Empresa,$FechaIni,$Telefo,$EstadoTrabajo,$jefeInmediato,$NombreCargo,$FuncionesPrincipales,$empresa2,$jefeInmediato2,$fechaini2,$fechater2,$telefon2,$FuncionesPrin2,$nombrecargo2,$NombreFa,$TelefonoFa,$celufa,$Parentesco,$NombrePersonal1,$Telefono1,$Celul,$NombrePersonal2,$Telefono2,$cel){

		$sql="UPDATE  datos SET 
          
          idvacante='$idvacante',
          idDepartamentosNacimiento='$idDepartamentosNacimiento',
          idciudadesNacimiento='$idciudadesNacimiento',
          idescolaridad='$idescolaridad',
          idtitulacion='$idtitulacion',
          idDepartamentoResidencia='$idDepartamentoResidencia',
          idCiudadesResidencia='$idCiudadesResidencia',
          idDeparmentoFormacion='$idDeparmentoFormacion',
          idciudadFormacion='$idciudadFormacion',
          idDepartamentoTrabajo='$idDepartamentoTrabajo',
          idCiudadTrabajo='$idCiudadTrabajo',
          politicas_Aceptacion='$politicas_Aceptacion',
          Nombres='$Nombres',
          Apellidos='$Apellidos',
          TipoIdentificacion='$TipoIdentificacion',
          NumeroIdentificacion='$NumeroIdentificacion',
          genero='$genero',
          estadoCivil='$estadoCivil',
          FechaNacimiento='$FechaNacimiento',
          Direccion='$Direccion',
          barrio='$barrio',
          Telefono='$Telefono',
          Celular='$Celular',
          CorreoElectronico='$CorreoElectronico',
          estadoEstudio='$estadoEstudio',
          FechaInicio='$FechaInicio',
          FechaFin='$FechaFin',
          TituloOtorgado='$TituloOtorgado',
          NombreInstitucion='$NombreInstitucion',
          cursoNombTitulo='$cursoNombTitulo',
          NomIntitu='$NomIntitu',
          fechainc='$fechainc',
          fechafi='$fechafi',
          Empresa='$Empresa',
         FechaIni ='$FechaIni',
          Telefo='$Telefo',
          EstadoTrabajo='$EstadoTrabajo',
          jefeInmediato='$jefeInmediato',
          NombreCargo='$NombreCargo',
          FuncionesPrincipales='$FuncionesPrincipales',
         empresa2 ='$empresa2',
         jefeInmediato2='$jefeInmediato2',
          fechaini2='$fechaini2',
          fechater2='$fechater2',
          telefon2='$telefon2',
          FuncionesPrin2='$FuncionesPrin2',
          nombrecargo2='$nombrecargo2',
         NombreFa ='$NombreFa',
          TelefonoFa='$TelefonoFa',
          celufa='$celufa',
          Parentesco='$Parentesco',
          NombrePersonal1='$NombrePersonal1',
          Telefono1='$Telefono1',
          Celul='$Celul',
         NombrePersonal2 ='$NombrePersonal2',
          Telefono2='$Telefono2',
          cel='$cel'
		WHERE iddatos='$iddatos' ";

		return ejecutarConsulta($sql);
	}



  public function eliminar ($iddatos)
 {
 	$sql=" DELETE FROM datos WHERE  iddatos='$iddatos'";
 	return ejecutarConsulta($sql);
 }


	public function desactivar($iddatos){

 	$sql=" UPDATE datos SET estado='0' WHERE iddatos='$iddatos'";
 	return ejecutarConsulta($sql);
 }

 // para activar registros

 public function activar($iddatos){

 	$sql=" UPDATE datos SET estado='1' WHERE iddatos='$iddatos' ";
 	return ejecutarConsulta($sql);
 }


 public function mostrar($iddatos){
	$sql="SELECT * FROM datos WHERE iddatos='$iddatos'";
	return ejecutarConsultaSimpleFila($sql);
 }

 public function listar()
 {
	$sql=" SELECT   da.* , 
	               a.nombre As idDepartamentosNacimiento,
                    da.idciudadFormacion,
	                (SELECT c.nombreC FROM ciudades AS c WHERE c.idciudadesNacimiento = da.idciudadesNacimiento) AS idciudadesNacimiento,
	                 dr.nombre AS idDepartamentoResidencia,
	                 da.idCiudadesResidencia,
	               (SELECT cr.nombreC FROM ciudresidencia AS cr WHERE cr.idCiudadesResidencia = da.idCiudadesResidencia) AS idCiudadesResidencia,
	                df.nombre as idDeparmentoFormacion,
	                da.idciudadFormacion,
	               (SELECT cf.nombreC FROM ciuformacion AS cf WHERE cf.idciudadFormacion = da.idciudadFormacion)AS idciudadFormacion,
	                 dt.nombre as idDepartamentoTrabajo,
	                 da.idCiudadTrabajo,
	                (SELECT ct.nombreC FROM ciutrabjabo AS ct WHERE ct.idCiudadTrabajo = da.idCiudadTrabajo) AS idCiudadTrabajo,
	                 e.nombreEsc as idescolaridad,
	                 da.idtitulacion,
	                (SELECT ti.nombreTitu FROM titulacion AS ti WHERE ti.idtitulacion = da.idtitulacion)AS idtitulacion,
	                 p.nombreV as idvacante                       
                FROM
              datos as da INNER JOIN departamentos AS a ON da.idDepartamentosNacimiento = a.idDepartamentosNacimiento INNER JOIN depresidencia AS dr ON da.idDepartamentoResidencia = dr.idDepartamentoResidencia INNER JOIN deformacion AS df ON da.idDeparmentoFormacion = df.idDeparmentoFormacion INNER JOIN detrabajo AS dt ON da.idDepartamentoTrabajo = dt.idDepartamentoTrabajo INNER JOIN escolaridad AS e ON da.idescolaridad = e.idescolaridad INNER JOIN vacante AS p ON da.idvacante = p.idvacante ORDER by da.iddatos DESC";

	return ejecutarConsulta($sql);
 }
} ?>