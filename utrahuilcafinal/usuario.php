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
                          <h1 class="box-title">usuario <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                             <th>perfil</th>
                              <th>area</th>
                               <th>registro</th>  
                            <th>nombre</th>
                            <th>usuario</th> 
                             <th>contrasenia</th>
                               <th>imagen</th>
                            <th>Estado</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                            <th>Opciones</th>
                            <th>perfil</th>
                              <th>area</th>
                               <th>registro</th>  
                            <th>nombre</th>
                            <th>usuario</th> 
                             <th>contrasenia</th>
                               <th>imagen</th>
                            <th>Estado</th>
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body"  id="formularioregistros">
                      
                        <form name="formulario" id="formulario" method="POST">


                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>TIPO DE USUARIO(*):</label>
                            <input type="hidden" name="idUsuario" id="idUsuario">
                            <select  class="form-control selectpicker" name="registro" id="registro"  required>
                            <option value="Super usuario">Super usuario</option>
                            <option value="usuario">usuario</option>	
                            </select>
                          </div>

                               
                             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Perfil(*):</label>
                            <select id="idPerfil" name="idPerfil" class="form-control selectpicker" data-live-search="true" required></select>
                          </div>
                            
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Area(*):</label>
                            <select id="idArea" name="idArea" class="form-control selectpicker" data-live-search="true" required></select>
                          </div>


                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" maxlength="45" placeholder="Descripción" required>
                          </div>

                           <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Usuario:</label>
                            <input type="text" class="form-control" name="usuario" id="usuario" maxlength="45" placeholder="Descripción" required>
                          </div>

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Contraseña:</label>
                            <input type="password" class="form-control" name="contrasenia" id="contrasenia" maxlength="64" placeholder="Descripción" required>
                          </div>
                          

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Permisos</label>
                            <ul style="list-style: none;" id="permiso">
                              
                            </ul>

                            </div>
                          
                          
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Imagen:</label>
                            <input type="file" class="form-control" name="imagen" id="imagen">
                            <input type="hidden" name="imagenactual" id="imagenactual">
                            <img src="" width="150px" height="120px" id="imagenmuestra">
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
<script type="text/javascript" src="scripts/usuario.js"></script>

<?php 

}
ob_end_flush();

 ?>

