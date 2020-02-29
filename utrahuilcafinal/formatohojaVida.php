<?php

require 'head.php';

?>
<!--Contenido-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">        
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          

         

         <div class="panel-body table-responsive" id="listadoregistros">

          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
            
            <article>

              <header>
                <h1 style="font-family:Helvetica,Futura,Arial,Verdana,sans-serif;">Cordial Saludo, Estimado Aspirante</h1>
              </header>




              <p style="text-align: justify;  font-size: 120%; font-family:Helvetica,Futura,Arial,Verdana,sans-serif;"> Es para la Cooperativa Latinoamericana de Ahorro y Credito UTRAHUILCA un gusto contar con su participacion en el presente proceso de seleccion.  </p>

              
              <p style="text-align: justify;  font-size: 120%; font-family:Helvetica,Futura,Arial,Verdana,sans-serif;">Nuestra organizacion tiene como objeto vincular, mediante procesos de seleccion transparentes y con enfoque en competencias labores, aquellas personas que por sus conocimientos, habilidades y actitudes se identifiquen con nuestra filosofia institucional y cumplan con el perfil requerido para el cargo vacante.</p>


            </article>

          </div>

          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
           <span class="image featured"><img src="img/page-img/tn.png" alt="" /></span>
         </div>



         <center>
           
          <h2 class="box-title" style=" font-size: 120%;font-family:Helvetica,Futura,Arial,Verdana,sans-serif;"><button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)" style="padding: 30px 40px;"><i class="fa fa-plus-circle"></i> registrar su hoja de vida </button></h2>
          
          
        </center>

      </div>
      <br>
      <br>

      

      <div class="panel-body"  id="formularioregistros">
        
        <form name="formulario" id="formulario" method="POST">
         
         <ul class="nav nav-tabs">

           <li class="nav-item">
            <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_login_details">Términos y Condiciones </a>
          </li>
          <li class="nav-item">
            <a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc">Convocatoria de Trabajo</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link inactive_tab1" id="list_Datos_Personales" style="border:1px solid #ccc">Datos Personales </a>
          </li>

          <li class="nav-item">
            <a class="nav-link inactive_tab1" id="list_Formacion_Academica" style="border:1px solid #ccc">Formación Académica </a>
          </li>

          <li class="nav-item">
            <a class="nav-link inactive_tab1" id="list_Experiencia_Laboral" style="border:1px solid #ccc">Experiencia Laboral </a>
          </li>


          <li class="nav-item">
            <a class="nav-link inactive_tab1" id="list_contact_Familiar" style="border:1px solid #ccc">Referencias familiar </a>
          </li>

          <li class="nav-item">
           <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">Referencias Personales</a>
         </li>
       </ul>


       <div class="tab-content" style="margin-top:16px;">

        <!-- ACEPTACION DE TERMINOS -->
        <div class="tab-pane active" id="login_details">
          <div class="panel panel-default">
           <div class="panel-heading">ACEPTACION DE TERMINOS Y CONDICONES</div>
           <div class="panel-body">
            <br>
            
            <p style="text-align:justify ">Autorizo a la Cooperativa latinoamericana de ahorro y Crédito UTRAHUILCA con domicilio principal en la Cra 6 # 5-37 Oficina Principal Neiva - Huila , Colombia, telefono:  8728181 Ext:101, en su calidad de responsable del tratamiento de datos personales para recolectar, almacenar, procesar, actualizar, modificar y eliminar los datos suministrados con el fin de realizar la gestión de trámites relacionados con la presente solicitud. En cumplimiento de la Ley 1581 de 2012 y Decreto 1377 de 2013, declaro que he sido informado de manera clara y expresa las finalidades para las cuales se recopilan mis datos, así mismo que conozco el derecho a conocer, actualizar, corregir y suprimir la información y revocar la autorización. Para mayor información puedo consultar la Política de Tratamiento de Datos Personales de la Cooperativa latinoamericana de ahorro y Crédito UTRAHUILCA que se encuentra en la página web. http://www.utrahuilca.coop/ O <a href="docs/PRIVACIDAD Y TRATAMIENTO DE DATOS.pdf" target="_blank">DESCARGA EL DOCUMENTO AQUI MISMO</a> </p>



            <div class="col-md-6 col-md-offset-3"> 
              <label>ACEPTACION DE TERMINOS Y CONDICIONES :</label>
              <select  class="form-control selectpicker" name="politicas_Aceptacion" id="politicas_Aceptacion"  required style="width:120px">
               <option value=''>!!!-SELECCIONE SU RESPUESTA-!!!</option>
               <option value="ACEPTO LOS TERMINOS Y CONDICIONES">ACEPTO LOS TERMINOS Y CONDICIONES</option> 
             </select>
             <span id="error_politicas_Aceptacion" class="text-danger"></span>
           </div>
           <br />
           <div align="center">
             <button  onclick="cancelarform()" type="button" class="btn btn-danger btn-lg"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
             <button type="button" name="btn_login_details" id="btn_login_details" class="btn btn-info btn-lg"> <i class="fa fa-arrow-circle-right"></i>Siguiente</button>
           </div>
           <br />
         </div>
       </div>
     </div>

     <!-- VACANTE -->


     <div class="tab-pane fade" id="personal_details">
      <div class="panel panel-default">
       <div class="panel-heading">Vacantes O Comvocatorias  de Trabajo</div>
       <div class="panel-body">


         <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <label>Seleccione el tipo de vacante que se desea postular?(*):</label>
          <select id="idvacante" name="idvacante" class="form-control selectpicker" data-live-search="true" required></select>
          <span id="error_idvacante" class="text-danger"></span>
        </div>

        <br />
        <div align="center">
         <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg"><i class="fa fa-arrow-circle-left"></i> Atras</button>
         <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg"><i class="fa fa-arrow-circle-right"></i>Siguente</button>
       </div>
       <br />
     </div>
   </div>
 </div>


 <!-- Datos Personales  -->
 <div class="tab-pane fade" id="Datos_Personales">
  <div class="panel panel-default">
   <div class="panel-heading">Datos Personales </div>
   <div class="panel-body">
     

     <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
       <label>Nombres (*):</label>
       <input type="text" class="form-control" name="Nombres" id="Nombres" maxlength="50" placeholder="Nombres" required>
       <span id="error_Nombres" class="text-danger"></span>
     </div>

     <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <label>Apellidos(*):</label>
      <input type="text" class="form-control" name="Apellidos" id="Apellidos" maxlength="50" placeholder="Apellidos" >
      <span id="error_Apellidos" class="text-danger"></span>
    </div>


    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <label>Seleccione Documento Identidad(*):</label>
      <select  class="form-control selectpicker" name="TipoIdentificacion" id="TipoIdentificacion"  style="width:120px">
       <option value=''>Seleccione El tipo de Documento....!!!!</option>
       <option value="Cedula Ciudadania">Cedula Ciudadania</option>
       <option value="Cedula Extrangeria">Cedula Extrangeria</option>
       <option value="Documento Extrangero">Documento Extrangero</option>  
       <option value="Numero de Identificacion tributaria">Numero de Identificacion Tributaria</option><option value="Otro Documento">Otro Documento</option> 
       <option value="Pasaporte">Pasaporte</option> 
     </select>
     <span id="error_TipoIdentificacion" class="text-danger"></span>
   </div>

   <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label>Numero de Documento(*):</label>
    <input type="Number" class="form-control" name="NumeroIdentificacion" id="NumeroIdentificacion" placeholder="NumeroIdentificacion" required>
    <span id="error_NumeroIdentificacion" class="text-danger"></span>
  </div>

  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label>Genero :</label>
    <select  class="form-control selectpicker" name="genero" id="genero"  required style="width:120px">
     <option value=''>!!!-SELECCIONE SU TIPO GENERO-!!!</option>
     <option value="MASCULINO">MASCULINO</option> 
     <option value="FEMENINO">FEMENINO</option> 
     <option value="OTRO">OTRO</option> 
   </select>
   <span id="error_genero" class="text-danger"></span>
 </div>

 <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <label>Estado civil :</label>
  <select  class="form-control selectpicker" name="estadoCivil" id="estadoCivil"  required style="width:120px">
   <option value=''>!!!-SELECCIONE SU TIPO DE ESTADO CIVIL-!!!</option>
   <option value="Soltero/a">Soltero/a</option> 
   <option value="Comprometido/a">Comprometido/a</option> 
   <option value="Casado/a">Casado/a</option> 
   <option value="Unión libre o unión de hecho">Unión libre o unión de hecho</option> 
   <option value="Separado/a">Separado/a</option> 
   <option value="Divorciado/a">Divorciado/a</option> 
   <option value="Viudo/a">Viudo/a</option> 
 </select>
 <span id="error_estadoCivil" class="text-danger"></span>
</div>

<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <label>FechaNacimiento(*):</label>
  <input type="date" class="form-control" name="FechaNacimiento" id="FechaNacimiento" >
  <span id="error_FechaNacimiento" class="text-danger"></span>
</div>

<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <label>Departamento de Nacimiento(*):</label>
  <select id="idDepartamentosNacimiento" name="idDepartamentosNacimiento" class="form-control selectpicker" data-live-search="true" required></select>
  <span id="error_idDepartamentosNacimiento" class="text-danger"></span>
</div>

<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <label>Ciudad de Nacimiento(*):</label>
 <select id="idciudadesNacimiento" name="idciudadesNacimiento" class="form-control selectpicker" data-live-search="true" required></select>
 <span id="error_idciudadesNacimiento" class="text-danger"></span>
</div>


<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <label>Direccion(*):</label>
 <input type="text" class="form-control" name="Direccion" id="Direccion"  placeholder="Direccion" required>
 <span id="error_Direccion" class="text-danger"></span>
</div>

<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <label>Barrio(*):</label>
 <input type="text" class="form-control" name="barrio" id="barrio"  placeholder="barrio" required>
 <span id="error_barrio" class="text-danger"></span>
</div>


<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <label>Departamento de Residencia(*):</label>
  <select id="idDepartamentoResidencia" name="idDepartamentoResidencia" class="form-control selectpicker" data-live-search="true" required></select>
  <span id="error_idDepartamentoResidencia" class="text-danger"></span>
</div>

<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <label>Ciudad de Residencia(*):</label>
 <select id="idCiudadesResidencia" name="idCiudadesResidencia" class="form-control selectpicker" data-live-search="true" required></select>
 <span id="error_idCiudadesResidencia" class="text-danger"></span>
</div>

<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <label>Telefono(*):</label>
 <input type="text" class="form-control" name="Telefono" id="Telefono"  placeholder="Telefono" required>
 <span id="error_Telefono" class="text-danger"></span>
</div>

<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <label>Celular(*):</label>
 <input type="text" class="form-control" name="Celular" id="Celular"  placeholder="Celular" required>
 <span id="error_Celular" class="text-danger"></span>
</div>

<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <label>CorreoElectronico(*):</label>
 <input type="text" class="form-control" name="CorreoElectronico" id="CorreoElectronico"  placeholder="CorreoElectronico" required>
 <span id="error_CorreoElectronico" class="text-danger"></span>
</div>
<br />
<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
 <button type="button" name="previous_btn_Datos_Personales" id="previous_btn_Datos_Personales" class="btn btn-default btn-lg"><i class="fa fa-arrow-circle-left"></i> Atras</button>
 <button type="button" name="btn_Datos_Personales" id="btn_Datos_Personales" class="btn btn-info btn-lg"><i class="fa fa-arrow-circle-right"></i>Siguente</button>
</div>
<br />
</div>
</div>
</div>


<div class="tab-pane fade" id="Formacion_Academica">
  <div class="panel panel-default">
   <div class="panel-heading">FormacionAcademica</div>
   <div class="panel-body">

    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
     <label>Nivel de estudio(*):</label>
     <select id="idescolaridad" name="idescolaridad" class="form-control selectpicker" data-live-search="true" required></select>
     <span id="error_idescolaridad" class="text-danger"></span>
   </div>

   <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label>Titulacion (*):</label>
    <select id="idtitulacion" name="idtitulacion" class="form-control selectpicker" data-live-search="true" required></select>
    <span id="error_idtitulacion" class="text-danger"></span>
  </div>

  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label>Estado de Estudio:</label>
    <select  class="form-control selectpicker" name="estadoEstudio" id="estadoEstudio"  required style="width:120px">
     <option value=''>!!!-SELECCIONE SU  ESTADO !!!</option>
     <option value="Terminado">Terminado</option> 
     <option value="No Terminado">No Terminado/a</option> 
     <option value="En Formacion">En Formacion</option> 
   </select>
   <span id="error_estadoEstudio" class="text-danger"></span>
 </div>

 <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <label>Fecha de Inicio(*):</label>
  <input type="date" class="form-control" name="FechaInicio" id="FechaInicio" >
  <span id="error_FechaInicio" class="text-danger"></span>
</div>

<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <label>Fecha de Finalizacion(*):</label>
  <input type="date" class="form-control" name="FechaFin" id="FechaFin" >
  <span id="error_FechaFin" class="text-danger"></span>
</div>

<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <label>Titulacion Otorgado(*):</label>
  <input type="text" class="form-control" name="TituloOtorgado" id="TituloOtorgado"  placeholder="TituloOtorgado" required>
  <span id="error_TituloOtorgado" class="text-danger"></span>
</div>

<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <label>Nombre De la Institucion(*):</label>
  <input type="text" class="form-control" name="NombreInstitucion" id="NombreInstitucion"  placeholder="NombreInstitucion" required>
  <span id="error_NombreInstitucion" class="text-danger"></span>

</div>

<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <label>Departamento de Formacion(*):</label>
  <select id="idDeparmentoFormacion" name="idDeparmentoFormacion" class="form-control selectpicker" data-live-search="true" required></select>
  <span id="error_idDeparmentoFormacion" class="text-danger"></span>
</div>

<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <label>Ciudad de Formacion(*):</label>
 <select id="idciudadFormacion" name="idciudadFormacion" class="form-control selectpicker" data-live-search="true" required></select>
 <span id="error_idciudadFormacion" class="text-danger"></span>
</div>


<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">AGREGAR OTROS ESTUDIOS</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">OTROS ESTUDIOS</h4>
        </div>
        <div class="modal-body">

          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <label>Titulacion o Nombre Curso(*):</label>
            <input type="text" class="form-control" name="cursoNombTitulo" id="cursoNombTitulo" placeholder="cursoNombTitulo" >
          </div>

          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <label>Nombre Institucion(*):</label>
            <input type="text" class="form-control" name="NomIntitu" id="NomIntitu" placeholder="NomIntitu">
          </div>

          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <label>Fecha de Inicio(*):</label>
            <input type="date" class="form-control" name="fechainc" id="fechainc" >
          </div>
          
          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <label>Fecha de Finalizacion(*):</label>
            <input type="date" class="form-control" name="fechafi" id="fechafi" >
          </div>


        </div>
        <div class="modal-footer">
         <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<br />
<div align="center">
 <button type="button" name="previous_btn_Formacion_Academica" id="previous_btn_Formacion_Academica" class="btn btn-default btn-lg"><i class="fa fa-arrow-circle-left"></i> Atras</button>
 <button type="button" name="btn_Formacion_Academica" id="btn_Formacion_Academica" class="btn btn-info btn-lg"><i class="fa fa-arrow-circle-right"></i>Siguente</button>
</div>
<br />
</div>
</div>
</div>


<div class="tab-pane fade" id="Experiencia_Laboral">
  <div class="panel panel-default">
   <div class="panel-heading">Experiencia Laboral</div>
   <div class="panel-body">

    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <label>Empresa(*):</label>
      <input type="text" class="form-control" name="Empresa" id="Empresa"  placeholder="Empresa" required>
      <span id="error_Empresa" class="text-danger"></span>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <label>Fecha de Inicio(*):</label>
      <input type="date" class="form-control" name="FechaIni" id="FechaIni" >
      <span id="error_FechaIni" class="text-danger"></span>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <label>Telefono(*):</label>
      <input type="text" class="form-control" name="Telefo" id="Telefo"  placeholder="Telefo" required>
      <span id="error_Telefo" class="text-danger"></span>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <label>Departamento (*):</label>
      <select id="idDepartamentoTrabajo" name="idDepartamentoTrabajo" class="form-control selectpicker" data-live-search="true" required></select>
      <span id="error_idDepartamentoTrabajo" class="text-danger"></span>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
     <label>Ciudad (*):</label>
     <select id="idCiudadTrabajo" name="idCiudadTrabajo" class="form-control selectpicker" data-live-search="true" required></select>
     <span id="error_idCiudadTrabajo" class="text-danger"></span>
   </div>

   <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label>Esta Trbajando Actualmente En Esta Empresa:</label>
    <select  class="form-control selectpicker" name="EstadoTrabajo" id="EstadoTrabajo"  required style="width:120px">
     <option value=''>!!!-SELECCIONE SU  ESTADO !!!</option>
     <option value="NO">NO</option> 
     <option value="SI">SI</option>  
   </select>
   <span id="error_EstadoTrabajo" class="text-danger"></span>
 </div>

 <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <label>Fecha Finalizacion(*):</label>
  <input type="date" class="form-control" name="FechaFinalizacion" id="FechaFinalizacion" >
  <span id="error_FechaFinalizacion" class="text-danger"></span>
</div>

<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <label>Jefe Inmediato(*):</label>
  <input type="text" class="form-control" name="jefeInmediato" id="jefeInmediato"  placeholder="jefeInmediato" required>
  <span id="error_jefeInmediato" class="text-danger"></span>
</div>



<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <label>Nombre Cargo(*):</label>
  <input type="text" class="form-control" name="NombreCargo" id="NombreCargo"  placeholder="NombreCargo" required>
  <span id="error_NombreCargo" class="text-danger"></span>
</div>

<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <label>Funciones Principales:(*)</label>
  <textarea id="FuncionesPrincipales" name="FuncionesPrincipales" class="form-control"  required> </textarea> 
  <span id="error_FuncionesPrincipales" class="text-danger"></span>
</div>

<div class="container">
  <button type="button" class="btn btn-success btn-lg" id="myBtn">Otras Experiencias</button>
  <div class="modal fade" id="myModales" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Otras Experiencias</h4>
        </div>

        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <label>Empresa(*):</label>
          <input type="text" class="form-control" name="empresa2" id="empresa2"  placeholder="empresa2">
        </div>


        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <label>Jefe Inmediato(*):</label>
          <input type="text" class="form-control" name="jefeInmediato2" id="jefeInmediato2"  placeholder="jefeInmediato2">
        </div>

        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <label>Fecha de Inicio(*):</label>
          <input type="date" class="form-control" name="fechaini2" id="fechaini2" >
        </div>


        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <label>Fecha Finalizacion(*):</label>
          <input type="date" class="form-control" name="fechater2" id="fechater2" >
        </div>

        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <label>Telefono(*):</label>
          <input type="text" class="form-control" name="telefon2" id="telefon2"  placeholder="telefon2" >
        </div>


        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <label>Nombre Cargo(*):</label>
          <input type="text" class="form-control" name="nombrecargo2" id="nombrecargo2"  placeholder="nombrecargo2">
        </div>
        
        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <label>Funciones Principales:(*)</label>
          <textarea id="FuncionesPrin2" name="FuncionesPrin2" class="form-control"> </textarea> 
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<br />
<div align="center">
 <button type="button" name="previous_btn_Experiencia_Laboral" id="previous_btn_Experiencia_Laboral" class="btn btn-default btn-lg"><i class="fa fa-arrow-circle-left"></i> Atras</button>
 <button type="button" name="btn_Experiencia_Laboral" id="btn_Experiencia_Laboral" class="btn btn-info btn-lg"><i class="fa fa-arrow-circle-right"></i>Siguente</button>
</div>
<br />
</div>
</div>
</div>


<div class="tab-pane fade" id="contact_Familiar">
  <div class="panel panel-default">
   <div class="panel-heading">Referncias Personales y Familiares </div>
   <div class="panel-body">


    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <label>Nombre Famiar(*):</label>
      <input type="text" class="form-control" name="NombreFa" id="NombreFa"  placeholder="NombreFa" required>
      <span id="error_NombreFa" class="text-danger"></span>
    </div>
    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <label>Telefono(*):</label>
      <input type="text" class="form-control" name="TelefonoFa" id="TelefonoFa"  placeholder="TelefonoFa" required>
      <span id="error_Telefo" class="text-danger"></span>
    </div>
    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <label>Celular(*):</label>
      <input type="text" class="form-control" name="celufa" id="celufa"  placeholder="celufa" required>
      <span id="error_celufa" class="text-danger"></span>
    </div>
    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <label>Parentesco Familiar:</label>
      <select  class="form-control selectpicker" name="Parentesco" id="Parentesco"  required style="width:120px">
       <option value=''>!!!-SELECCIONE SU  PARENTESCO !!!</option>
       <option value="MADRE">MADRE</option> 
       <option value="PADRE">PADRE</option>  
       <option value="TIO">TIO</option> 
       <option value="TIA">TIA</option>  
       <option value="ABUELO">ABUELO</option> 
       <option value="ABUELA">ABUELA</option> 
       <option value="HERMANO">HERMANO</option> 
       <option value="HERMANA">HERMANA</option>  
     </select>
     <span id="error_Parentesco" class="text-danger"></span>
   </div>
   
   <br />
   <div align="center">
     <button type="button" name="previous_btn_contact_Familiar" id="previous_btn_contact_Familiar" class="btn btn-default btn-lg"><i class="fa fa-arrow-circle-left"></i> Atras</button>
     <button type="button" name="btn_contact_Familiar" id="btn_contact_Familiar" class="btn btn-info btn-lg"><i class="fa fa-arrow-circle-right"></i>Siguente</button>
   </div>
   <br />
 </div>
</div>
</div>

<div class="tab-pane fade" id="contact_details">
  <div class="panel panel-default">
   <div class="panel-heading">Referncias Personales </div>
   <div class="panel-body">


     <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <label>Nombre Personal(*):</label>
      <input type="text" class="form-control" name="NombrePersonal1" id="NombrePersonal1"  placeholder="NombrePersonal1">
      <span id="error_NombrePersonal1" class="text-danger"></span>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <label>Telefono(*):</label>
      <input type="text" class="form-control" name="Telefono1" id="Telefono1"  placeholder="Telefono1">
      <span id="error_Telefono1" class="text-danger"></span>

    </div>

    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <label>Celular(*):</label>
      <input type="text" class="form-control" name="Celul" id="Celul"  placeholder="Celul">
      <span id="error_Celul" class="text-danger"></span>
    </div>


    <div class="container">
      <button type="button" class="btn btn-success btn-lg" id="myBton">Otra Referencia Personales</button>
      <div class="modal fade" id="myModaless" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Otra Referencia Personales</h4>
            </div>

            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <label>Nombre Personal(*):</label>
              <input type="text" class="form-control" name="NombrePersonal2" id="NombrePersonal2"  placeholder="NombrePersonal2">
            </div>

            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <label>Telefono(*):</label>
              <input type="text" class="form-control" name="Telefono2" id="Telefono2"  placeholder="Telefono2">
            </div>

            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <label>Celular(*):</label>
              <input type="text" class="form-control" name="cel" id="cel"  placeholder="cel">
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <br />
    <div align="center">
     <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg">Previous</button>
     <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
   </div>
   <br />
 </div>
</div>
</div>

</div>
</form>
</div>
<!--Fin centro -->
</div><!-- /.box -->
</div><!-- /.col -->
</div><!-- /.row -->
</section><!-- /.content -->

</div><!-- /.content-wrapper -->
<!--Fin-Contenido-->
<?php

require 'foot.php';
?>

<script type="text/javascript" src="control.js"></script>
<script type="text/javascript" src="scripts/hojas_vid.js"></script>

<script>
  $(document).ready(function(){
    $("#myBtn").click(function(){
      $("#myModales").modal();
    });
  });
</script>

<script>
  $(document).ready(function(){
    $("#myBton").click(function(){
      $("#myModaless").modal();
    });
  });
</script>


