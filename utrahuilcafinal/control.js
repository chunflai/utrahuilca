$(document).ready(function(){
 
 $('#btn_login_details').click(function(){
  
  var error_politicas_Aceptacion = '';
  
  if($.trim($('#politicas_Aceptacion').val()).length == 0)
  {
   error_politicas_Aceptacion = 'por favor seleccione su respuesta!!!!! ';
   $('#error_politicas_Aceptacion').text(error_politicas_Aceptacion);
   $('#politicas_Aceptacion').addClass('has-error');
  }
  else
  {
   error_politicas_Aceptacion = '';
   $('#error_politicas_Aceptacion').text(error_politicas_Aceptacion);
   $('#politicas_Aceptacion').removeClass('has-error');
  }

  if(error_politicas_Aceptacion != '')
  {
   return false;
  }
  else
  {
   $('#list_login_details').removeClass('active active_tab1');
   $('#list_login_details').removeAttr('href data-toggle');
   $('#login_details').removeClass('active');
   $('#list_login_details').addClass('inactive_tab1');
   $('#list_personal_details').removeClass('inactive_tab1');
   $('#list_personal_details').addClass('active_tab1 active');
   $('#list_personal_details').attr('href', '#personal_details');
   $('#list_personal_details').attr('data-toggle', 'tab');
   $('#personal_details').addClass('active in');
  }
 });
 
 $('#previous_btn_personal_details').click(function(){
  $('#list_personal_details').removeClass('active active_tab1');
  $('#list_personal_details').removeAttr('href data-toggle');
  $('#personal_details').removeClass('active in');
  $('#list_personal_details').addClass('inactive_tab1');
  $('#list_login_details').removeClass('inactive_tab1');
  $('#list_login_details').addClass('active_tab1 active');
  $('#list_login_details').attr('href', '#login_details');
  $('#list_login_details').attr('data-toggle', 'tab');
  $('#login_details').addClass('active in');
 });


 $('#btn_personal_details').click(function(){
  var error_idvacante = '';


  if($.trim($('#idvacante').val()).length == 0)
  {
   error_idvacante = 'Por favor seleccione la vacante campo requerido';
   $('#error_idvacante').text(error_idvacante);
   $('#idvacante').addClass('has-error');
  }
  else
  {
   error_idvacante = '';
   $('#error_idvacante').text(error_idvacante);
   $('#idvacante').removeClass('has-error');
  }
  


  if(error_idvacante != '')
  {
   return false;
  }
  else
  {
   $('#list_personal_details').removeClass('active active_tab1');
   $('#list_personal_details').removeAttr('href data-toggle');
   $('#personal_details').removeClass('active');
   $('#list_personal_details').addClass('inactive_tab1');
   $('#list_Datos_Personales').removeClass('inactive_tab1');
   $('#list_Datos_Personales').addClass('active_tab1 active');
   $('#list_Datos_Personales').attr('href', '#Datos_Personales');
   $('#list_Datos_Personales').attr('data-toggle', 'tab');
   $('#Datos_Personales').addClass('active in');
  }
 });
 
 $('#previous_btn_Datos_Personales').click(function(){
  $('#list_Datos_Personales').removeClass('active active_tab1');
  $('#list_Datos_Personales').removeAttr('href data-toggle');
  $('#Datos_Personales').removeClass('active in');
  $('#list_Datos_Personales').addClass('inactive_tab1');
  $('#list_personal_details').removeClass('inactive_tab1');
  $('#list_personal_details').addClass('active_tab1 active');
  $('#list_personal_details').attr('href', '#personal_details');
  $('#list_personal_details').attr('data-toggle', 'tab');
  $('#personal_details').addClass('active in');
 });


$('#btn_Datos_Personales').click(function(){
var error_Nombres = '';
var error_Apellidos = '';
var error_TipoIdentificacion = '';
var error_NumeroIdentificacion = '';
var error_genero = '';
var error_estadoCivil = '';
var error_FechaNacimiento  = '';
var error_idDepartamentosNacimiento  = '';
var error_idciudadesNacimiento  = '';
var error_Direccion  = '';
var error_idDepartamentoResidencia  = '';
var error_idCiudadesResidencia  = '';
var error_barrio  = '';
var error_Telefono  = '';
var mobile_validation = /^\d{7}$/;
var error_Celular  = '';
var mobil_validation = /^\d{10}$/;
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  

   if($.trim($('#Nombres').val()).length == 0)
  {
   error_Nombres = '¡¡¡¡¡¡¡¡este campo es requerido por favor ingrese sus Nombres!!!!!!!';
   $('#error_Nombres').text(error_Nombres);
   $('#Nombres').addClass('has-error');
  }
  else
  {
   error_Nombres = '';
   $('#error_Nombres').text(error_Nombres);
   $('#Nombres').removeClass('has-error');
  }
  
  

   if($.trim($('#Apellidos').val()).length == 0)
  {
   error_Apellidos = '¡¡¡¡¡¡¡¡este campo es requerido por favor ingrese sus Apellidos!!!!!!!';
   $('#error_Apellidos').text(error_Apellidos);
   $('#Apellidos').addClass('has-error');
  }
  else
  {
   error_Apellidos = '';
   $('#error_Apellidos').text(error_Apellidos);
   $('#Apellidos').removeClass('has-error');
  }
  

  if($.trim($('#TipoIdentificacion').val()).length == 0)
  {
   error_TipoIdentificacion = '¡¡¡¡¡¡¡¡este campo es requerido por favor Seleccione  el tipo de documento!!!!!!';
   $('#error_TipoIdentificacion').text(error_TipoIdentificacion);
   $('#TipoIdentificacion').addClass('has-error');
  }
  else
  {
   error_TipoIdentificacion = '';
   $('#error_TipoIdentificacion').text(error_TipoIdentificacion);
   $('#TipoIdentificacion').removeClass('has-error');
  }


  if($.trim($('#NumeroIdentificacion').val()).length == 0)
  {
  error_NumeroIdentificacion = '¡¡¡¡¡¡¡¡este campo es requerido por favor ingrese el numero de NumeroIdentificacion!!!!!!';
   $('#error_NumeroIdentificacion').text(error_NumeroIdentificacion);
   $('#NumeroIdentificacion').addClass('has-error');
  }
  else
  {
   error_NumeroIdentificacion = '';
   $('#error_NumeroIdentificacion').text(error_NumeroIdentificacion);
   $('#NumeroIdentificacion').removeClass('has-error');
  }
  


  if($.trim($('#genero').val()).length == 0)
  {
  error_genero  = '¡¡¡¡¡¡¡¡este campo es requerido por favor seleccione su tipo de genero!!!!!!';
   $('#error_genero').text(error_genero);
   $('#genero').addClass('has-error');
  }
  else
  {
   error_genero = '';
   $('#error_genero').text(error_genero );
   $('#genero').removeClass('has-error');
  }

  if($.trim($('#estadoCivil').val()).length == 0)
  {
  error_estadoCivil  = '¡¡¡¡¡¡¡¡este campo es requerido por favor seleccione su tipo de EstadoCivil!!!!!!';
   $('#error_estadoCivil').text(error_estadoCivil);
   $('#estadoCivil').addClass('has-error');
  }
  else
  {
   error_estadoCivil = '';
   $('#error_estadoCivil').text(error_estadoCivil );
   $('#estadoCivil').removeClass('has-error');
  }

  if($.trim($('#FechaNacimiento').val()).length == 0)
  {
  error_FechaNacimiento  = '¡¡¡¡¡¡¡¡este campo es requerido por favor ingrese su  Fecha DE Nacimiento!!!!!!';
   $('#error_FechaNacimiento').text(error_FechaNacimiento);
   $('#FechaNacimiento').addClass('has-error');
  }
  else
  {
   error_FechaNacimiento = '';
   $('#error_FechaNacimiento').text(error_FechaNacimiento);
   $('#FechaNacimiento').removeClass('has-error');
  }


if($.trim($('#idDepartamentosNacimiento').val()).length == 0)
  {
  error_idDepartamentosNacimiento  = '¡¡¡¡¡¡¡¡este campo es requerido por favor seleccione el departamento de nacimiento !!!!!!';
   $('#error_idDepartamentosNacimiento').text(error_idDepartamentosNacimiento);
   $('#idDepartamentosNacimiento').addClass('has-error');
  }
  else
  {
   error_idDepartamentosNacimiento = '';
   $('#error_idDepartamentosNacimiento').text(error_idDepartamentosNacimiento);
   $('#idDepartamentosNacimiento').removeClass('has-error');
  }

if($.trim($('#idciudadesNacimiento').val()).length == 0)
  {
  error_idciudadesNacimiento  = '¡¡¡¡¡¡¡¡este campo es requerido por favor seleccione la ciudad de nacimiento !!!!!!';
   $('#error_idciudadesNacimiento').text(error_idciudadesNacimiento);
   $('#idciudadesNacimiento').addClass('has-error');
  }
  else
  {
   error_idciudadesNacimiento = '';
   $('#error_idciudadesNacimiento').text(error_idciudadesNacimiento);
   $('#idciudadesNacimiento').removeClass('has-error');
  }

  if($.trim($('#Direccion').val()).length == 0)
  {
  error_Direccion  = '¡¡¡¡¡¡¡¡este campo es requerido por favor registre su Direccion !!!!!!';
   $('#error_Direccion').text(error_Direccion);
   $('#Direccion').addClass('has-error');
  }
  else
  {
   error_Direccion = '';
   $('#error_Direccion').text(error_Direccion);
   $('#Direccion').removeClass('has-error');
  }


if($.trim($('#idDepartamentoResidencia').val()).length == 0)
  {
  error_idDepartamentoResidencia  = '¡¡¡¡¡¡¡¡este campo es requerido por favor seleccione el departamento de residencia !!!!!!';

   $('#error_idDepartamentoResidencia').text(error_idDepartamentoResidencia);
   $('#idDepartamentoResidencia').addClass('has-error');
  }
  else
  {
   error_idDepartamentoResidencia = '';
   $('#error_idDepartamentoResidencia').text(error_idDepartamentoResidencia);
   $('#idDepartamentoResidencia').removeClass('has-error');
  }


  if($.trim($('#idCiudadesResidencia').val()).length == 0)
  {
  error_idCiudadesResidencia = '¡¡¡¡¡¡¡¡este campo es requerido por favor seleccione la ciudad de resiedencia!!!!!!';
   $('#error_idCiudadesResidencia').text(error_idCiudadesResidencia);
   $('#idCiudadesResidencia').addClass('has-error');
  }
  else
  {
   error_idCiudadesResidencia = '';
   $('#error_idCiudadesResidencia').text(error_idCiudadesResidencia);
   $('#idCiudadesResidencia').removeClass('has-error');
  }

if($.trim($('#barrio').val()).length == 0)
  {
  error_barrio = '¡¡¡¡¡¡¡¡este campo es requerido por favor seleccione la ciudad de resiedencia!!!!!!';
   $('#error_barrio').text(error_barrio);
   $('#barrio').addClass('has-error');
  }
  else
  {
   error_idbarrio = '';
   $('#error_barrio').text(error_barrio);
   $('#barrio').removeClass('has-error');
  }

if($.trim($('#Telefono').val()).length == 0)
  {
   error_Telefono = 'el numero de telefono es requerido';
   $('#error_Telefono').text(error_Telefono);
   $('#Telefono').addClass('has-error');
  }
  else
  {
   if (!mobile_validation.test($('#Telefono').val()))
   {
    error_Telefono = 'el numero de telefono es invalido';
    $('#error_Telefono').text(error_Telefono);
    $('#Telefono').addClass('has-error');
   }
   else
   {
    error_Telefono = '';
    $('#error_Telefono').text(error_Telefono);
    $('#Telefono').removeClass('has-error');
   }
  }


  if($.trim($('#Celular').val()).length == 0)
  {
   error_Celular= 'el numero de Celular es requerido';
   $('#error_Celular').text(error_Telefono);
   $('#Celular').addClass('has-error');
  }
  else
  {
   if (!mobil_validation.test($('#Celular').val()))
   {
    error_Celular = 'el numero de Celular es invalido';
    $('#error_Celular').text(error_Celular);
    $('#Celular').addClass('has-error');
   }
   else
   {
    error_Celular = '';
    $('#error_Celular').text(error_Celular);
    $('#Celular').removeClass('has-error');
   }
  }


if($.trim($('#CorreoElectronico').val()).length == 0)
  {
   error_CorreoElectronico= 'campo es requerido';
   $('#error_CorreoElectronico').text(error_CorreoElectronico);
   $('#CorreoElectronico').addClass('has-error');
  }
  else
  {
   if (!filter.test($('#CorreoElectronico').val()))
   {
    error_CorreoElectronico = 'La direccion de correo electronico es invalida';
    $('#error_CorreoElectronico').text(error_CorreoElectronico);
    $('#CorreoElectronico').addClass('has-error');
   }
   else
   {
    error_CorreoElectronico = '';
    $('#error_CorreoElectronico').text(error_CorreoElectronico);
    $('#CorreoElectronico').removeClass('has-error');
   }
  }





  if(error_Nombres != '' || error_Apellidos != '' || error_TipoIdentificacion != '' || error_NumeroIdentificacion != '' || error_genero != '' || error_estadoCivil != '' || error_FechaNacimiento != '' || error_idDepartamentosNacimiento != '' || error_idciudadesNacimiento != '' || error_Direccion != '' || error_idDepartamentoResidencia != '' || error_idCiudadesResidencia != '' || error_barrio != ''  || error_Telefono != '' || error_Celular != ''  || error_CorreoElectronico != '')
  {
   return false;
  }
  else
  {
   $('#list_Datos_Personales').removeClass('active active_tab1');
   $('#list_Datos_Personales').removeAttr('href data-toggle');
   $('#Datos_Personales').removeClass('active');
   $('#list_Datos_Personales').addClass('inactive_tab1');
   $('#list_Formacion_Academica').removeClass('inactive_tab1');
   $('#list_Formacion_Academica').addClass('active_tab1 active');
   $('#list_Formacion_Academica').attr('href', '#Formacion_Academica');
   $('#list_Formacion_Academica').attr('data-toggle', 'tab');
   $('#Formacion_Academica').addClass('active in');
  }
 });
 
 $('#previous_btn_Formacion_Academica').click(function(){
  $('#list_Formacion_Academica').removeClass('active active_tab1');
  $('#list_Formacion_Academica').removeAttr('href data-toggle');
  $('#Formacion_Academica').removeClass('active in');
  $('#list_Formacion_Academica').addClass('inactive_tab1');
  $('#list_Datos_Personales').removeClass('inactive_tab1');
  $('#list_Datos_Personales').addClass('active_tab1 active');
  $('#list_Datos_Personales').attr('href', '#Datos_Personales');
  $('#list_Datos_Personales').attr('data-toggle', 'tab');
  $('#Datos_Personales').addClass('active in');
 });




$('#btn_Formacion_Academica').click(function(){

var error_idescolaridad = '';
var error_idtitulacion = '';
var error_FechaInicio = '';
var error_FechaFin = '';
var error_TituloOtorgado = '';
var error_NombreInstitucion = '';
var error_idDeparmentoFormacion = '';
var error_idciudadFormacion = '';


if($.trim($('#idescolaridad').val()).length == 0)
  {
  error_idescolaridad = '¡¡¡¡¡¡¡¡este campo es requerido por favor seleccione Su Nivel de estudio!!!!!!';
   $('#error_idescolaridad').text(error_idescolaridad);
   $('#idescolaridad').addClass('has-error');
  }
  else
  {
   error_idescolaridad = '';
   $('#error_idescolaridad').text(error_idescolaridad);
   $('#idescolaridad').removeClass('has-error');
  }

if($.trim($('#idtitulacion').val()).length == 0)
  {
  error_idtitulacion = '¡¡¡¡¡¡¡¡este campo es requerido por favor seleccione especialidad!!!!!!';
   $('#error_idtitulacion').text(error_idtitulacion);
   $('#idtitulacion').addClass('has-error');
  }
  else
  {
   error_idtitulacion = '';
   $('#error_idtitulacion').text(error_idtitulacion);
   $('#idtitulacion').removeClass('has-error');
  }


  if($.trim($('#estadoEstudio').val()).length == 0)
  {
  error_estadoEstudio = '¡¡¡¡¡¡¡¡este campo es requerido por favor seleccione el Estado!!!!!!';
   $('#error_estadoEstudio').text(error_estadoEstudio);
   $('#estadoEstudio').addClass('has-error');
  }
  else
  {
   error_estadoEstudio = '';
   $('#error_estadoEstudio').text(error_estadoEstudio);
   $('#estadoEstudio').removeClass('has-error');
  }



if($.trim($('#FechaInicio').val()).length == 0)
  {
  error_FechaInicio = '¡¡¡¡¡¡¡¡este campo es requerido por favor Ingrese la fecha!!!!!!';
   $('#error_FechaInicio').text(error_FechaInicio);
   $('#FechaInicio').addClass('has-error');
  }
  else
  {
   error_FechaInicio = '';
   $('#error_FechaInicio').text(error_FechaInicio);
   $('#FechaInicio').removeClass('has-error');
  }


if($.trim($('#FechaFin').val()).length == 0)
  {
  error_FechaFin = '¡¡¡¡¡¡¡¡este campo es requerido por favor Ingrese la fecha!!!!!!';
   $('#error_FechaFin').text(error_FechaFin);
   $('#FechaFin').addClass('has-error');
  }
  else
  {
   error_FechaFin = '';
   $('#error_FechaFin').text(error_FechaFin);
   $('#FechaFin').removeClass('has-error');
  }


  if($.trim($('#TituloOtorgado').val()).length == 0)
  {
  error_TituloOtorgado = '¡¡¡¡¡¡¡¡este campo es requerido por favor llenelo !!!!!!';
   $('#error_TituloOtorgado').text(error_TituloOtorgado);
   $('#TituloOtorgado').addClass('has-error');
  }
  else
  {
   error_TituloOtorgado = '';
   $('#error_TituloOtorgado').text(error_TituloOtorgado);
   $('#TituloOtorgado').removeClass('has-error');
  }

if($.trim($('#NombreInstitucion').val()).length == 0)
  {
  error_NombreInstitucion = '¡¡¡¡¡¡¡¡este campo es requerido por favor llenelo !!!!!!';
   $('#error_NombreInstitucion').text(error_NombreInstitucion);
   $('#NombreInstitucion').addClass('has-error');
  }
  else
  {
   error_NombreInstitucion = '';
   $('#error_NombreInstitucion').text(error_NombreInstitucion);
   $('#NombreInstitucion').removeClass('has-error');
  }

if($.trim($('#idDeparmentoFormacion').val()).length == 0)
  {
  error_idDeparmentoFormacion = '¡¡¡¡¡¡¡¡este campo es requerido por favor llenelo !!!!!!';
   $('#error_idDeparmentoFormacion').text(error_idDeparmentoFormacion);
   $('#idDeparmentoFormacion').addClass('has-error');
  }
  else
  {
   error_idDeparmentoFormacion = '';
   $('#error_idDeparmentoFormacion').text(error_idDeparmentoFormacion);
   $('#idDeparmentoFormacion').removeClass('has-error');
  }

if($.trim($('#idciudadFormacion').val()).length == 0)
  {
  error_idciudadFormacion = '¡¡¡¡¡¡¡¡este campo es requerido por favor llenelo !!!!!!';
   $('#error_idciudadFormacion').text(error_idciudadFormacion);
   $('#idciudadFormacion').addClass('has-error');
  }
  else
  {
   error_idciudadFormacion = '';
   $('#error_idciudadFormacion').text(error_idciudadFormacion);
   $('#idciudadFormacion').removeClass('has-error');
  }



  if(error_idescolaridad != '' || error_idtitulacion != ''  || error_estadoEstudio != '' || error_FechaInicio != '' || error_FechaFin != '' || error_TituloOtorgado != ''  || error_NombreInstitucion != '' || error_idDeparmentoFormacion != '' || error_idciudadFormacion != '' )
  {
   return false;
  }
  else
  {
   $('#list_Formacion_Academica').removeClass('active active_tab1');
   $('#list_Formacion_Academica').removeAttr('href data-toggle');
   $('#Formacion_Academica').removeClass('active');
   $('#list_Formacion_Academica').addClass('inactive_tab1');
   $('#list_Experiencia_Laboral').removeClass('inactive_tab1');
   $('#list_Experiencia_Laboral').addClass('active_tab1 active');
   $('#list_Experiencia_Laboral').attr('href', '#Experiencia_Laboral');
   $('#list_Experiencia_Laboral').attr('data-toggle', 'tab');
   $('#Experiencia_Laboral').addClass('active in');
  }
 });
 
 $('#previous_btn_Experiencia_Laboral').click(function(){
  $('#list_Experiencia_Laboral').removeClass('active active_tab1');
  $('#list_Experiencia_Laboral').removeAttr('href data-toggle');
  $('#Experiencia_Laboral').removeClass('active in');
  $('#list_Experiencia_Laboral').addClass('inactive_tab1');
  $('#list_Formacion_Academica').removeClass('inactive_tab1');
  $('#list_Formacion_Academica').addClass('active_tab1 active');
  $('#list_Formacion_Academica').attr('href', '#Formacion_Academica');
  $('#list_Formacion_Academica').attr('data-toggle', 'tab');
  $('#Formacion_Academica').addClass('active in');
 });




$('#btn_Experiencia_Laboral').click(function(){
var error_Empresa = '';
var error_FechaIni = '';
var error_Telefo  = '';
var mobile_validation = /^\d{7}$/;

var error_idDepartamentoTrabajo = '';
var error_idCiudadTrabajo = '';

var error_EstadoTrabajo = '';
var error_FechaFinalizacion = '';
var error_jefeInmediato = '';
var error_NombreCargo = '';
var error_FuncionesPrincipales = '';


if($.trim($('#Empresa').val()).length == 0)
  {
  error_Empresa = '¡¡¡¡¡¡¡¡este campo es requerido por favor Ingrese la fecha!!!!!!';
   $('#error_Empresa').text(error_Empresa);
   $('#Empresa').addClass('has-error');
  }
  else
  {
   error_Empresa = '';
   $('#error_Empresa').text(error_Empresa);
   $('#Empresa').removeClass('has-error');
  }


if($.trim($('#FechaIni').val()).length == 0)
  {
  error_FechaIni = '¡¡¡¡¡¡¡¡este campo es requerido por favor Ingrese la fecha!!!!!!';
   $('#error_FechaIni').text(error_FechaIni);
   $('#FechaIni').addClass('has-error');
  }
  else
  {
   error_FechaIni = '';
   $('#error_FechaIni').text(error_FechaIni);
   $('#FechaIni').removeClass('has-error');
  }



if($.trim($('#Telefo').val()).length == 0)
  {
   error_Telefo = 'el numero de telefono es requerido';
   $('#error_Telefo').text(error_Telefo);
   $('#Telefo').addClass('has-error');
  }
  else
  {
   if (!mobile_validation.test($('#Telefo').val()))
   {
    error_Telefo = 'el numero de telefono es invalido';
    $('#error_Telefo').text(error_Telefo);
    $('#Telefo').addClass('has-error');
   }
   else
   {
    error_Telefo = '';
    $('#error_Telefo').text(error_Telefo);
    $('#Telefo').removeClass('has-error');
   }
  }


if($.trim($('#EstadoTrabajo').val()).length == 0)
  {
  error_EstadoTrabajo = '¡¡¡¡¡¡¡¡este campo es requerido por favor Ingrese el estado !!!!!!';
   $('#error_EstadoTrabajo').text(error_EstadoTrabajo);
   $('#EstadoTrabajo').addClass('has-error');
  }
  else
  {
   error_EstadoTrabajo = '';
   $('#error_EstadoTrabajo').text(error_EstadoTrabajo);
   $('#EstadoTrabajo').removeClass('has-error');
  }


if($.trim($('#idDepartamentoTrabajo').val()).length == 0)
  {
  error_idDepartamentoTrabajo = '¡¡¡¡¡¡¡¡este campo es requerido por favor Ingrese el estado !!!!!!';
   $('#error_idDepartamentoTrabajo').text(error_idDepartamentoTrabajo);
   $('#idDepartamentoTrabajo').addClass('has-error');
  }
  else
  {
   error_idDepartamentoTrabajo = '';
   $('#error_idDepartamentoTrabajo').text(error_idDepartamentoTrabajo);
   $('#idDepartamentoTrabajo').removeClass('has-error');
  }

  if($.trim($('#idCiudadTrabajo').val()).length == 0)
  {
  error_idCiudadTrabajo = '¡¡¡¡¡¡¡¡este campo es requerido por favor Ingrese el estado !!!!!!';
   $('#error_idCiudadTrabajo').text(error_idCiudadTrabajo);
   $('#idCiudadTrabajo').addClass('has-error');
  }
  else
  {
   error_idCiudadTrabajo = '';
   $('#error_idCiudadTrabajo').text(error_idCiudadTrabajo);
   $('#idCiudadTrabajo').removeClass('has-error');
  }


  if($.trim($('#FechaFinalizacion').val()).length == 0)
  {
  error_FechaFinalizacion = '¡¡¡¡¡¡¡¡este campo es requerido por favor Ingrese la fecha!!!!!!';
   $('#error_FechaFinalizacion').text(error_FechaFinalizacion);
   $('#FechaFinalizacion').addClass('has-error');
  }
  else
  {
   error_FechaFinalizacion = '';
   $('#error_FechaFinalizacion').text(error_FechaFinalizacion);
   $('#FechaFinalizacion').removeClass('has-error');
  }


  if($.trim($('#jefeInmediato').val()).length == 0)
  {
  error_jefeInmediato = '¡¡¡¡¡¡¡¡este campo es requerido por favor Ingrese la fecha!!!!!!';
   $('#error_jefeInmediato').text(error_jefeInmediato);
   $('#jefeInmediato').addClass('has-error');
  }
  else
  {
   error_jefeInmediato = '';
   $('#error_jefeInmediato').text(error_jefeInmediato);
   $('#jefeInmediato').removeClass('has-error');
  }



    if($.trim($('#NombreCargo').val()).length == 0)
  {
  error_NombreCargo = '¡¡¡¡¡¡¡¡este campo es requerido por favor Ingrese la fecha!!!!!!';
   $('#error_NombreCargo').text(error_NombreCargo);
   $('#NombreCargo').addClass('has-error');
  }
  else
  {
   error_NombreCargo = '';
   $('#error_NombreCargo').text(error_NombreCargo);
   $('#NombreCargo').removeClass('has-error');
  }

    if($.trim($('#FuncionesPrincipales').val()).length == 0)
  {
  error_FuncionesPrincipales = '¡¡¡¡¡¡¡¡este campo es requerido por favor Ingrese la fecha!!!!!!';
   $('#error_FuncionesPrincipales').text(error_FuncionesPrincipales);
   $('#FuncionesPrincipales').addClass('has-error');
  }
  else
  {
   error_FuncionesPrincipales = '';
   $('#error_FuncionesPrincipales').text(error_FuncionesPrincipales);
   $('#FuncionesPrincipales').removeClass('has-error');
  }




  if(error_Empresa != '' || error_FechaIni != ''  || error_Telefo != ''  || error_EstadoTrabajo != '' || error_idDepartamentoTrabajo != ''   || error_idCiudadTrabajo != '' || error_FechaFinalizacion != '' || error_jefeInmediato != ''  || error_NombreCargo != '' || error_FuncionesPrincipales != '' )
  {
   return false;
  }
  else
  {
   $('#list_Experiencia_Laboral').removeClass('active active_tab1');
   $('#list_Experiencia_Laboral').removeAttr('href data-toggle');
   $('#Experiencia_Laboral').removeClass('active');
   $('#list_Experiencia_Laboral').addClass('inactive_tab1');
   $('#list_contact_Familiar').removeClass('inactive_tab1');
   $('#list_contact_Familiar').addClass('active_tab1 active');
   $('#list_contact_Familiar').attr('href', '#contact_Familiar');
   $('#list_contact_Familiar').attr('data-toggle', 'tab');
   $('#contact_Familiar').addClass('active in');
  }
 });
 
 $('#previous_btn_contact_Familiar').click(function(){
  $('#list_contact_Familiar').removeClass('active active_tab1');
  $('#list_contact_Familiar').removeAttr('href data-toggle');
  $('#contact_Familiar').removeClass('active in');
  $('#list_contact_Familiar').addClass('inactive_tab1');
  $('#list_Experiencia_Laboral').removeClass('inactive_tab1');
  $('#list_Experiencia_Laboral').addClass('active_tab1 active');
  $('#list_Experiencia_Laboral').attr('href', '#Experiencia_Laboral');
  $('#list_Experiencia_Laboral').attr('data-toggle', 'tab');
  $('#Experiencia_Laboral').addClass('active in');
 });

 $('#btn_contact_Familiar').click(function(){
var error_NombreFa = '';
 var error_TelefonoFa = '';
 var mobile_validation = /^\d{7}$/;
 var error_celufa = '';
 var mobile_validatio = /^\d{10}$/;
 var error_Parentesco = '';
  


  if($.trim($('#NombreFa').val()).length == 0)
  {
   error_NombreFa = 'Address is required';
   $('#error_NombreFa').text(error_NombreFa);
   $('#NombreFa').addClass('has-error');
  }
  else
  {
   error_NombreFa = '';
   $('#error_NombreFa').text(error_NombreFa);
   $('#NombreFa').removeClass('has-error');
  }

  
  if($.trim($('#TelefonoFa').val()).length == 0)
  {
   error_TelefonoFa = 'Mobile Number is required';
   $('#error_TelefonoFa').text(error_TelefonoFa);
   $('#TelefonoFa').addClass('has-error');
  }
  else
  {
   if (!mobile_validation.test($('#TelefonoFa').val()))
   {
    error_TelefonoFa = 'Invalid Mobile Number';
    $('#error_TelefonoFa').text(error_celufa);
    $('#TelefonoFa').addClass('has-error');
   }
   else
   {
    error_TelefonoFa = '';
    $('#error_TelefonoFa').text(error_TelefonoFa);
    $('#TelefonoFa').removeClass('has-error');
   }
  }


  if($.trim($('#celufa').val()).length == 0)
  {
   error_celufa = 'Mobile Number is required';
   $('#error_celufa').text(error_celufa);
   $('#celufa').addClass('has-error');
  }
  else
  {
   if (!mobile_validatio.test($('#celufa').val()))
   {
    error_celufa = 'Invalid Mobile Number';
    $('#error_celufa').text(error_celufa);
    $('#celufa').addClass('has-error');
   }
   else
   {
    error_celufa = '';
    $('#error_celufa').text(error_celufa);
    $('#celufa').removeClass('has-error');
   }
  }


if($.trim($('#Parentesco').val()).length == 0)
  {
   error_Parentesco = 'Address is required';
   $('#error_Parentesco').text(error_Parentesco);
   $('#Parentesco').addClass('has-error');
  }
  else
  {
   error_Parentesco = '';
   $('#error_Parentesco').text(error_Parentesco);
   $('#Parentesco').removeClass('has-error');
  }





  if(error_NombreFa  != '' || error_TelefonoFa != '' || error_celufa != '' | error_Parentesco != '' )
  {
   return false;
  }
  else
  {
   $('#list_contact_Familiar').removeClass('active active_tab1');
   $('#list_contact_Familiar').removeAttr('href data-toggle');
   $('#contact_Familiar').removeClass('active');
   $('#list_contact_Familiar').addClass('inactive_tab1');
   $('#list_contact_details').removeClass('inactive_tab1');
   $('#list_contact_details').addClass('active_tab1 active');
   $('#list_contact_details').attr('href', '#contact_details');
   $('#list_contact_details').attr('data-toggle', 'tab');
   $('#contact_details').addClass('active in');
  }
 });
 
 $('#previous_btn_contact_details').click(function(){
  $('#list_contact_details').removeClass('active active_tab1');
  $('#list_contact_details').removeAttr('href data-toggle');
  $('#contact_details').removeClass('active in');
  $('#list_contact_details').addClass('inactive_tab1');
  $('#list_contact_Familiar').removeClass('inactive_tab1');
  $('#list_contact_Familiar').addClass('active_tab1 active');
  $('#list_contact_Familiar').attr('href', '#contact_Familiar');
  $('#list_contact_Familiar').attr('data-toggle', 'tab');
  $('#contact_Familiar').addClass('active in');
 });



 $('#btn_contact_details').click(function(){
 
var error_NombrePersonal1 = '';
 var error_Telefono1 = '';
 var mobile_validation = /^\d{7}$/;
 var error_Celul = '';
 var mobile_validatio = /^\d{10}$/;



  if($.trim($('#NombrePersonal1').val()).length == 0)
  {
   error_NombrePersonal1 = 'Address is required';
   $('#error_NombrePersonal1').text(error_NombrePersonal1);
   $('#NombrePersonal1').addClass('has-error');
  }
  else
  {
   error_NombrePersonal1 = '';
   $('#error_NombrePersonal1').text(error_NombrePersonal1);
   $('#NombrePersonal1').removeClass('has-error');
  }

  
  if($.trim($('#Telefono1').val()).length == 0)
  {
   error_Telefono1 = 'Mobile Number is required';
   $('#error_Telefono1').text(error_Telefono1);
   $('#Telefono1').addClass('has-error');
  }
  else
  {
   if (!mobile_validation.test($('#Telefono1').val()))
   {
    error_Telefono1 = 'Invalid Mobile Number';
    $('#error_Telefono1').text(error_Telefono1);
    $('#Telefono1').addClass('has-error');
   }
   else
   {
    error_Telefono1 = '';
    $('#error_Telefono1').text(error_Telefono1);
    $('#Telefono1').removeClass('has-error');
   }
  }


  if($.trim($('#Celul').val()).length == 0)
  {
   error_Celul = 'Mobile Number is required';
   $('#error_Celul').text(error_Celul);
   $('#Celul').addClass('has-error');
  }
  else
  {
   if (!mobile_validatio.test($('#Celul').val()))
   {
    error_Celul = 'Invalid Mobile Number';
    $('#error_Celul').text(error_Celul);
    $('#Celul').addClass('has-error');
   }
   else
   {
    error_Celul = '';
    $('#error_Celul').text(error_Celul);
    $('#Celul').removeClass('has-error');
   }
  }



  if(error_NombrePersonal1 != '' || error_Telefono1 != '' || error_Celul != ''  )
  {
   return false;
  }
  else
  {
   $('#btn_contact_details').attr("disabled", "disabled");
   $(document).css('cursor', 'prgress');
  }
  
 });
 
});