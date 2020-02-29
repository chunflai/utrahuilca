<?php
ob_start();
session_start();
if(!isset($_SESSION["nombre"]))
{
  header("Location:login.html");
}
else {

require 'header.php';

 if ($_SESSION['Talento Humano']==1) 
{
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
                          <h1 class="box-title">Editos <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                          <th>Opciones</th>
                            <th>imagen</th>
                            <th>titulo Vacante</th>
                             <th>Descripccion</th>
                            <th>formacionAcademica</th>
                            <th>ConocimientosBasicos</th>
                            <th>habilidades</th>
                            <th>requisitos</th>
                            <th>funcionesPrincipales</th>
                            <th>Experiencias</th>
                            <th>TipoContrato</th>
                            <th>salario</th>
                            <th>jornadaLavoral</th>
                            <th>fecha</th>
                            <th>hora</th> 
                            <th>Estado</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                             <th>Opciones</th>
                            <th>imagen</th>
                            <th>titulo Vacante</th>
                             <th>Descripccion</th>
                            <th>formacionAcademica</th>
                            <th>ConocimientosBasicos</th>
                            <th>habilidades</th>
                            <th>requisitos</th>
                            <th>funcionesPrincipales</th>
                            <th>Experiencias</th>
                            <th>TipoContrato</th>
                            <th>salario</th>
                            <th>jornadaLavoral</th>
                            <th>fecha</th>
                            <th>hora</th> 
                            <th>Estado</th>
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body"  id="formularioregistros">
                      
                        <form name="formulario" id="formulario" method="POST">
                          
                        
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Imagen:</label>
                            <input type="hidden" name="idcomvocatorias" id="idcomvocatorias">
                            <input type="file" class="form-control" name="imagen" id="imagen">
                            <input type="hidden" name="imagenactual" id="imagenactual">
                             <img src="" width="150px" height="120px" id="imagenmuestra">
                       </div>

                       <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Titulo:(*)</label>
                        <textarea id="titulo" name="titulo" class="form-control"  required> </textarea> 
                       </div>

                       <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Descripción:(*)</label>
                        <textarea id="descripcion" name="descripcion" class="form-control"  required> </textarea> 
                       </div>

                       <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>formacionAcademica:(*)</label>
                        <textarea id="formacionAcademica" name="formacionAcademica" class="form-control"  required> </textarea> 
                       </div>

                       <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>ConocimientosBasicos:(*)</label>
                        <textarea id="ConocimientosBasicos" name="ConocimientosBasicos" class="form-control"  required> </textarea> 
                       </div>

                       <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>habilidades:(*)</label>
                        <textarea id="habilidades" name="habilidades" class="form-control"  required> </textarea> 
                       </div>

                       <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>requisitos:(*)</label>
                        <textarea id="requisitos" name="requisitos" class="form-control"  required> </textarea> 
                       </div>

                       <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>funcionesPrincipales:(*)</label>
                        <textarea id="funcionesPrincipales" name="funcionesPrincipales" class="form-control"  required> </textarea> 
                       </div>

                       <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Experiencias:(*)</label>
                        <textarea id="Experiencias" name="Experiencias" class="form-control"  required> </textarea> 
                       </div>

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>TipoContrato:(*)</label>
                        <textarea id="TipoContrato" name="TipoContrato" class="form-control"  required> </textarea> 
                       </div>

                       <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>salario:(*)</label>
                        <textarea id="salario" name="salario" class="form-control"  required> </textarea> 
                       </div>

                       <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>JornadaLavoral:(*)</label>
                        <textarea id="jornadaLavoral" name="jornadaLavoral" class="form-control"  required> </textarea>
                       </div>

                        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <label>Fecha(*):</label>
                        <input type="date" class="form-control" name="fecha" id="fecha" required="">
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12" >
                            <label>Hora Inicial(*)</label>
                           <input type="time" id="hora" name="hora" class="form-control">
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

}
else

{

  require 'noacceso.php';
}
require 'footer.php';
?>

<script type="text/javascript" src="scripts/comvocatorias.js"></script>

<?php 

}
ob_end_flush();

 ?>
