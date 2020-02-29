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
                          <h1 class="box-title">Tasas <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Archivo</th>
                            <th>imagen</th>
                            <th>hora</th>
                             <th>fecha</th>
                            <th>Estado</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                            <th>Opciones</th>
                            <th>Archivo</th>
                            <th>imagen</th>
                            <th>hora</th>
                             <th>fecha</th>
                            <th>Estado</th>
                          </tfoot>
                        </table>
                    </div>
                   <div class="panel-body"  id="formularioregistros">
                      
                        <form name="formulario" id="formulario" method="POST">
                      
                        
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>ARchivos Tasa:</label>
                            <input type="file" class="form-control" name="archivost" id="archivost">
                            <input type="hidden" name="archivostactual" id="archivostactual">
                           <a href="" id="imagenmuestra"> Desccargar</a>
                          </div>


                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Imagen:</label>
                            <input type="file" class="form-control" name="imagent" id="imagent">
                            <input type="hidden" name="imagentactual" id="imagentactual">
                            <img src="" width="150px" height="120px" id="imagenmuestra1">
                          </div>

                           <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                                 <label>Hora Publicacion(*)</label>
                              <input type="time" id="horat" name="horat" class="form-control">
                            </div>

                               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Fecha Publicacion(*):</label>
                             <input type="hidden" name="idtasa" id="idtasa">
                            <input type="date" class="form-control" name="fecha" id="fecha" required="">
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
<script type="text/javascript" src="scripts/tasa.js"></script>

<?php 

}
ob_end_flush();

 ?>
