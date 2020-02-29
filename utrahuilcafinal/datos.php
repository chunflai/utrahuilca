<?php

  require 'header.php';

?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">area <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Vacante</th>
                            <th>Politicas_Aceptacion</th>  
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>TipoIdentificacion</th>
                            <th>TipoDocumento</th>
                            <th>genero</th>
                            <th>estadoCivil</th>
                            <th>FechaNacimiento</th>
                            <th>DepartamentosNacimiento</th> 
                            <th>CiudadesNacimiento</th> 
                            <th>Direccion</th> 
                            <th>Barrio</th>
                            <th>Telefono</th>
                            <th>DepartamentoResidencia</th> 
                            <th>CiudadesResidencia</th>
                            <th>Celular</th>
                            <th>CorreoElectronico</th>
                            <th>Escolaridad</th>
                            <th>Titulacion</th>  
                            <th>EstadoEstudio</th>  
                            <th>FechaInicio</th>
                            <th>FechaFin</th>
                            <th>TituloOtorgado</th>
                            <th>NombreInstitucion</th>
                            <th>DeparmentoFormacion</th>
                            <th>CiudadFormacion</th>  
                            <th>CursoNombTitulo</th>  
                            <th>NombreIntitucion2</th>
                            <th>FechaIncio2</th>
                            <th>FechaFinal2</th>
                            <th>Empresa</th>
                            <th>FechaInicio</th>
                            <th>Telefono</th>  
                            <th>EstadoTrabajo</th>  
                            <th>DepartamentoTrabajo</th>
                            <th>CiudadTrabajo</th>
                            <th>FechaFinalizacion</th> 
                            <th>JefeInmediato</th>
                            <th>NombreCargo</th>
                            <th>FuncionesPrincipales</th>
                            <th>Empresa2</th>
                            <th>JefeInmediato2</th>
                            <th>FechaInicio2</th>  
                            <th>FechaTerminacion2</th>
                            <th>Telefono2</th>
                            <th>FuncionesPrincipales2</th> 
                            <th>Nombrecargo2</th>
                            <th>NombreFamiliar</th>
                            <th>TelefonoFamiliar</th> 
                            <th>CelularFamiliar</th>
                            <th>Parentesco</th>
                            <th>NombrePersonal</th>
                            <th>Telefono</th>
                            <th>celular</th>
                            <th>NombrePersonal2</th>
                            <th>Telefono</th>
                            <th>Celular</th>
                            <th>Estado</th>                         
                             </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                            <th>Opciones</th>
                            <th>Vacante</th>
                            <th>Politicas_Aceptacion</th>  
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>TipoIdentificacion</th>
                            <th>TipoDocumento</th>
                            <th>genero</th>
                            <th>estadoCivil</th>
                            <th>FechaNacimiento</th>
                            <th>DepartamentosNacimiento</th> 
                            <th>CiudadesNacimiento</th> 
                            <th>Direccion</th> 
                            <th>Barrio</th>
                            <th>Telefono</th>
                            <th>DepartamentoResidencia</th> 
                            <th>CiudadesResidencia</th>
                            <th>Celular</th>
                            <th>CorreoElectronico</th>
                            <th>Escolaridad</th>
                            <th>Titulacion</th>  
                            <th>EstadoEstudio</th>  
                            <th>FechaInicio</th>
                            <th>FechaFin</th>
                            <th>TituloOtorgado</th>
                            <th>NombreInstitucion</th>
                            <th>DeparmentoFormacion</th>
                            <th>CiudadFormacion</th>  
                            <th>CursoNombTitulo</th>  
                            <th>NombreIntitucion2</th>
                            <th>FechaIncio2</th>
                            <th>FechaFinal2</th>
                            <th>Empresa</th>
                            <th>FechaInicio</th>
                            <th>Telefono</th>  
                            <th>EstadoTrabajo</th>  
                            <th>DepartamentoTrabajo</th>
                            <th>CiudadTrabajo</th>
                            <th>FechaFinalizacion</th> 
                            <th>JefeInmediato</th>
                            <th>NombreCargo</th>
                            <th>FuncionesPrincipales</th>
                            <th>Empresa2</th>
                            <th>JefeInmediato2</th>
                            <th>FechaInicio2</th>  
                            <th>FechaTerminacion2</th>
                            <th>Telefono2</th>
                            <th>FuncionesPrincipales2</th> 
                            <th>Nombrecargo2</th>
                            <th>NombreFamiliar</th>
                            <th>TelefonoFamiliar</th> 
                            <th>CelularFamiliar</th>
                            <th>Parentesco</th>
                            <th>NombrePersonal</th>
                            <th>Telefono</th>
                            <th>celular</th>
                            <th>NombrePersonal2</th>
                            <th>Telefono</th>
                            <th>Celular</th>
                            <th>Estado</th>      
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body"  id="formularioregistros">
                      
                        <form name="formulario" id="formulario" method="POST">

        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <label>ACEPTACION DE TERMINOS Y CONDICIONES :</label>
        <input type="hidden" name="iddatos" id="iddatos">
         <select  class="form-control selectpicker" name="politicas_Aceptacion" id="politicas_Aceptacion"  required>
         <option value=''>!!!-SELECCIONE SU RESPUESTA-!!!</option>
          <option value="ACEPTO LOS TERMINOS Y CONDICIONES">ACEPTO LOS TERMINOS Y CONDICIONES</option> 
          </select>
         </div>

  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
<label>Seleccione el tipo de vacante que se desea postular?(*):</label>
  <select id="idvacante" name="idvacante" class="form-control selectpicker" data-live-search="true" required></select>
    </div>

       <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
     <label>Nombres (*):</label>
      <input type="text" class="form-control" name="Nombres" id="Nombres" maxlength="50" placeholder="Nombres" required>
       </div>

        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <label>Apellidos(*):</label>
      <input type="text" class="form-control" name="Apellidos" id="Apellidos" maxlength="50" placeholder="Apellidos" >
       </div>

      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <label>Seleccione Documento Identidad(*):</label>
      <select  class="form-control selectpicker" name="TipoIdentificacion" id="TipoIdentificacion">
         <option value=''>Seleccione El tipo de Documento....!!!!</option>
        <option value="Cedula Ciudadania">Cedula Ciudadania</option>
        <option value="Cedula Extrangeria">Cedula Extrangeria</option>
        <option value="Documento Extrangero">Documento Extrangero</option>  
         <option value="Numero de Identificacion tributaria">Numero de Identificacion Tributaria</option>
         <option value="Otro Documento">Otro Documento</option> 
         <option value="Pasaporte">Pasaporte</option> 
          </select>
        </div>

    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label>Numero de Documento(*):</label>
    <input type="Number" class="form-control" name="NumeroIdentificacion" id="NumeroIdentificacion" placeholder="NumeroIdentificacion" required>
    </div>

     <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label>Genero :</label>
   <select  class="form-control selectpicker" name="genero" id="genero"  required >
         <option value=''>!!!-SELECCIONE SU TIPO GENERO-!!!</option>
          <option value="MASCULINO">MASCULINO</option> 
          <option value="FEMENINO">FEMENINO</option> 
          <option value="OTRO">OTRO</option> 
          </select>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <label>Estado civil :</label>
         <select  class="form-control selectpicker" name="estadoCivil" id="estadoCivil"  required >
         <option value=''>!!!-SELECCIONE SU TIPO DE ESTADO CIVIL-!!!</option>
          <option value="Soltero/a">Soltero/a</option> 
          <option value="Comprometido/a">Comprometido/a</option> 
          <option value="Casado/a">Casado/a</option> 
          <option value="Unión libre o unión de hecho">Unión libre o unión de hecho</option> 
          <option value="Separado/a">Separado/a</option> 
          <option value="Divorciado/a">Divorciado/a</option> 
          <option value="Viudo/a">Viudo/a</option> 
          </select>
    </div>
   
   <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <label>FechaNacimiento(*):</label>
  <input type="date" class="form-control" name="FechaNacimiento" id="FechaNacimiento" >
  </div> 

   <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label>Departamento de Nacimiento(*):</label>
    <select id="idDepartamentosNacimiento" name="idDepartamentosNacimiento" class="form-control selectpicker" data-live-search="true" required></select>
 </div>

   <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
     <label>Ciudad de Nacimiento(*):</label>
      <select id="idciudadesNacimiento" name="idciudadesNacimiento" class="form-control selectpicker" data-live-search="true" required></select>
      </div>

<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
   <label>Direccion(*):</label>
  <input type="text" class="form-control" name="Direccion" id="Direccion"  placeholder="Direccion" required>
  </div>

 <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label>Barrio(*):</label>
 <input type="text" class="form-control" name="barrio" id="barrio"  placeholder="barrio" required>
 </div>

  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
   <label>Departamento de Residencia(*):</label>
  <select id="idDepartamentoResidencia" name="idDepartamentoResidencia" class="form-control selectpicker" data-live-search="true" required></select>
 </div>

   <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
     <label>Ciudad de Residencia(*):</label>
      <select id="idCiudadesResidencia" name="idCiudadesResidencia" class="form-control selectpicker" data-live-search="true" required></select>
      </div>

          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
     <label>Telefono(*):</label>
      <input type="text" class="form-control" name="Telefono" id="Telefono"  placeholder="Telefono" required>
       </div>




<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
     <label>Celular(*):</label>
      <input type="text" class="form-control" name="Celular" id="Celular"  placeholder="Celular" required>
       </div>

         <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
     <label>CorreoElectronico(*):</label>
      <input type="text" class="form-control" name="CorreoElectronico" id="CorreoElectronico"  placeholder="CorreoElectronico" required>
       </div>

<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
   <label>Nivel de estudio(*):</label>
    <select id="idescolaridad" name="idescolaridad" class="form-control selectpicker" data-live-search="true" required></select>
     </div>

    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <label>Titulacion (*):</label>
      <select id="idtitulacion" name="idtitulacion" class="form-control selectpicker" data-live-search="true" required></select>
      </div>

    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label>Estado de Estudio:</label>
         <select  class="form-control selectpicker" name="estadoEstudio" id="estadoEstudio"  required style="width:120px">
         <option value=''>!!!-SELECCIONE SU  ESTADO !!!</option>
          <option value="Terminado">Terminado</option> 
          <option value="No Terminado">No Terminado/a</option> 
          <option value="En Formacion">En Formacion</option> 
          </select>
    </div>




    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <label>Fecha de Inicio(*):</label>
  <input type="date" class="form-control" name="FechaInicio" id="FechaInicio" >
  </div>
  
  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <label>Fecha de Finalizacion(*):</label>
  <input type="date" class="form-control" name="FechaFin" id="FechaFin" >
  </div>

  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <label>Titulacion Otorgado(*):</label>
  <input type="text" class="form-control" name="TituloOtorgado" id="TituloOtorgado"  placeholder="TituloOtorgado" required>
  </div>

 <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <label>Nombre De la Institucion(*):</label>
  <input type="text" class="form-control" name="NombreInstitucion" id="NombreInstitucion"  placeholder="NombreInstitucion" required>
  </div>

   <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label>Departamento de Formacion(*):</label>
    <select id="idDeparmentoFormacion" name="idDeparmentoFormacion" class="form-control selectpicker" data-live-search="true" required></select>
     </div>

    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
     <label>Ciudad de Formacion(*):</label>
      <select id="idciudadFormacion" name="idciudadFormacion" class="form-control selectpicker" data-live-search="true" required></select>
      </div>


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





<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <label>Empresa(*):</label>
  <input type="text" class="form-control" name="Empresa" id="Empresa"  placeholder="Empresa" required>
  </div>

 <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <label>Fecha de Inicio(*):</label>
  <input type="date" class="form-control" name="FechaIni" id="FechaIni" >
  </div>

  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label>Telefono(*):</label>
    <input type="text" class="form-control" name="Telefo" id="Telefo"  placeholder="Telefo" required>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label>Departamento (*):</label>
    <select id="idDepartamentoTrabajo" name="idDepartamentoTrabajo" class="form-control selectpicker" data-live-search="true" required></select>
     </div>

    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
     <label>Ciudad (*):</label>
      <select id="idCiudadTrabajo" name="idCiudadTrabajo" class="form-control selectpicker" data-live-search="true" required></select>
      </div>

      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label>Esta Trbajando Actualmente En Esta Empresa:</label>
         <select  class="form-control selectpicker" name="EstadoTrabajo" id="EstadoTrabajo"  required style="width:120px">
         <option value=''>!!!-SELECCIONE SU  ESTADO !!!</option>
          <option value="NO">NO</option> 
          <option value="SI">SI</option>  
          </select>
    </div>

  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <label>Fecha Finalizacion(*):</label>
  <input type="date" class="form-control" name="FechaFinalizacion" id="FechaFinalizacion" >
  </div>

    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label>Jefe Inmediato(*):</label>
    <input type="text" class="form-control" name="jefeInmediato" id="jefeInmediato"  placeholder="jefeInmediato" required>
    </div>


 <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label>Nombre Cargo(*):</label>
    <input type="text" class="form-control" name="NombreCargo" id="NombreCargo"  placeholder="NombreCargo" required>
    </div>
    
      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <label>Funciones Principales:(*)</label>
      <textarea id="FuncionesPrincipales" name="FuncionesPrincipales" class="form-control"  required> </textarea> 
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



   <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label>Nombre Famiar(*):</label>
    <input type="text" class="form-control" name="NombreFa" id="NombreFa"  placeholder="NombreFa" required>
  </div>

   <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label>Telefono(*):</label>
    <input type="text" class="form-control" name="TelefonoFa" id="TelefonoFa"  placeholder="TelefonoFa" required>
   </div>

    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label>Celular(*):</label>
    <input type="text" class="form-control" name="celufa" id="celufa"  placeholder="celufa" required>
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
    </div>

     <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label>Nombre Personal(*):</label>
    <input type="text" class="form-control" name="NombrePersonal1" id="NombrePersonal1"  placeholder="NombrePersonal1">
    </div>

    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label>Telefono(*):</label>
    <input type="text" class="form-control" name="Telefono1" id="Telefono1"  placeholder="Telefono1">
    </div>

    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label>Celular(*):</label>
    <input type="text" class="form-control" name="Celul" id="Celul"  placeholder="Celul">
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




                          
                   <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                    <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
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

require 'footer.php';

?>
<script type="text/javascript" src="scripts/datos.js"></script>
