<?php
ob_start();
session_start();
if(!isset($_SESSION["nombre"]))
{
  header("Location:login.html");
}
else {

  require 'header.php';

  if ($_SESSION['herramientas mantenimiento']==1) 
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
                <h1 class="box-title">noticias <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
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
                    <th>titulo</th>
                    <th>descripcion</th>
                    <th>descripcion</th>
                    <th>fecha</th>
                    <th>hora</th> 
                    <th>Estado</th>
                  </thead>
                  <tbody>                            
                  </tbody>
                  <tfoot>
                   <th>Opciones</th>
                   <th>imagen</th>
                   <th>titulo</th>
                   <th>descripcion</th>
                   <th>descripcion</th>
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
                  <input type="file" class="form-control" name="imagen" id="imagen">
                  <input type="hidden" name="imagenactual" id="imagenactual">
                  <img src="" width="150px" height="120px" id="imagenmuestra">
                </div>
                
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Titulo(*):</label>
                  <input type="hidden" name="idnoticias" id="idnoticias">
                  <input type="text" class="form-control" name="titulo" id= "titulo" maxlength="500" placeholder="titulo" required>
                </div>
                
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                 <label>Descripción:(*)</label>
                 <textarea id="escrito" name="escrito" class="form-control"  required> </textarea> 
               </div>
               
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                 <label>Descripción2:</label>
                 <textarea id="escrit" name="escrit" class="form-control"></textarea> 
               </div>
               
               <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <label>Fecha(*):</label>
                <input type="date" class="form-control" name="fecha" id="fecha" required="">
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6" >
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

<script type="text/javascript" src="scripts/noticias.js"></script>

<?php 

}
ob_end_flush();

?>
