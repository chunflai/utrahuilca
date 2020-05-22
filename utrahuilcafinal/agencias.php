
<?php 
require_once '../config/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"; charset="utf-8"/> 
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Title -->
  <title>Utrahuilca - Cooperativa Latinoamericana de Ahorro Y Credito</title>
  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--<link  href="modelo.css" rel="stylesheet">-->
  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css">
  <!-- Styles slider bottom -->
  <link rel="stylesheet" href="./css/sliderbottom.css">
  <link rel="stylesheet" href="Cooperativavirtual.css">
  <link rel="stylesheet" href="./css/menunew.css">
  <link rel="stylesheet" href="./css/menunavbar.css">
  <!-- Styles gallery bottom -->
  <!--<link rel="stylesheet" href="./css/gallery.css">-->
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136441397-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-136441397-1');
  </script>

  <script>  
    function mostrarVentanaRevalorizacion(){

      $(document).ready(function(){
        $("#mostrarVentanaRevalorizacion").modal("show");
      });
    }
  </script> 
  <!-- PopUp Revalorizacon--> 
  <script>  
    function mostrarVentanaConcurso(){
      $(document).ready(function(){
        $("#mostrarVentanaConcurso").modal("show");
      });
    }
  </script> 
</head>
<body>
  <div class="fondo"></div>
  <div id="fondo-modal">
    <!-- Preloader  -->
    <div class="preloader d-flex align-items-center justify-content-center">
      <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div> 


    <!-- Modal PopUP Revalorizacion-->
    <div class="modal fade" id="mostrarVentanaRevalorizacion" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
         <div class="modal-header">
           <h3>Revalorizaci&oacutenes 2018</h3> 
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         </div>
         <div class="modal-body" align="center" >
          <form action="./Revalorizacion.php" method="post" target="_self">

            <div>
              <label for="mail">Numero Documento:</label>
              <input type="number" id="textd" name="documento" maxlength="12" required/>
            </div>

            <div>
              <label for="msg">Fecha expedicion:</label>
              <input type="date" id="fech" name="fech" required/>
            </div>

            <div class="modal-footer">
              <button type="submit"  class="btn btn-danger">Consultar</button>
            </div>
          </form>
        </div>
               <!-- <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
            </div>   -->
          </div>
        </div>
      </div>  
      <!-- End Modal Revalorizaciones -->

      <!-- Modal PopUP Concurso-->
      <div class="modal fade" id="mostrarVentanaConcurso" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
           <div class="modal-header">
             <h3>AHORRANDO VOY GANANDO</h3> 
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           </div>

           <div class="modal-body" align="center" >
            <form action="./concurso.php" method="post" target="_self">
              <div>
               <label for="iddd">Tipo Documento:</label>
               <select name="tipoide" required>
                <option value="C">CEDULA CIUDADANIA</option>
                <option value="E">CEDULA EXTRANJERIA</option>
                <option value="M">PERMISO ESPECIAL DE PERMANENCIA</option>
                <option value="P">PASAPORTE</option>
              </select> 
            </div>
            <div>
              <label for="mail">Documento:</label>
              <input type="number" id="textd" name="documento" maxlength="12" required/>
            </div>

            <div>
              <label for="msg">Fecha expedicion:</label>
              <input type="date" id="fech" name="fech" required/>
            </div>

            <div class="modal-footer">
              <button type="submit"  class="btn btn-danger">Consultar</button>
            </div>
          </form>
        </div>
               <!-- <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
            </div>   -->
          </div>
        </div>
      </div>  
      <!-- End Modal Concurso -->

      <!-- Modal PopUP Concurso-->
      <div class="modal fade" id="mostrarVentanaConcursoBRE" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
           <div class="modal-header">
             <h3> MESES BRE DEL CRÉDITO</h3> 
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           </div>

           <div class="modal-body" align="center" >
            <form action="./ConcursoBRE.php" method="post" target="_self">
              <div>
               <label for="iddd">Tipo Documento:</label>
               <select name="tipoide">
                <option value="C">CEDULA CIUDADANIA</option>
                <option value="E">CEDULA EXTRANJERIA</option>
                <option value="M">PERMISO ESPECIAL DE PERMANENCIA</option>
                <option value="P">PASAPORTE</option>
              </select> 
            </div>
            <div>
              <label for="mail">Documento:</label>
              <input type="number" id="textd" name="documento" maxlength="12"/>
            </div>

            <div>
              <label for="msg">Fecha expedicion:</label>
              <input type="date" id="fech" name="fech"/>
            </div>

            <div class="modal-footer">
              <button type="submit"  class="btn btn-danger">Consultar</button>
            </div>
          </form>
        </div>
               <!-- <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
            </div>   -->
          </div>
        </div>
      </div>  
      <!-- End Modal Concurso -->

      
   <?php include 'menu.php';?>



                <!-- ##### Call To Action Start ###### -->
                <section class="cta-area d-flex flex-wrap">
                  <!-- Cta Content -->
                  <div class="cta-content">
                    <!-- Section Heading -->
                    <div class="section-heading white">
                      <div class="line"></div>
                      <p>Institucional</p>
                      <h2>Agencias</h2>
                    </div>
                    <h6 class="mb-0">Estos son nuestros Puntos de Atención.</h6>
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                      <!-- Single Cool Facts -->
                      <div class="single-cool-fact white d-flex align-items-center mt-50">
                        <div class="scf-icon mr-15">
                          <i class="fa fa-building-o"></i>
                        </div>
                        <div class="scf-text">
                          <h2><span class="counter">34</span></h2>
                          <p>Puntos de atencion</p>
                        </div>
                      </div>
                      <!-- Single Cool Facts -->
                      <div class="single-cool-fact white d-flex align-items-center mt-50">
                        <div class="scf-icon mr-15">
                          <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="scf-text">
                          <h2><span class="counter">5</span></h2>
                          <p>Departamentos</p>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- Cta Thumbnail -->
                  <div class="cta-thumbnail bg-img jarallax" style="background-image: url(img/bg-img/19.jpg);"></div>
                </section>
                <!-- ##### Call To Action End ###### -->
                <!-- ##### Elements Area Start ##### -->
                <section class="elements-area section-padding-100-0">
                  <div class="container">
                    <div class="row">
                      <!-- ========== Buttons ========== -->
                      <div class="col-12">
                        <div class="elements-title mb-30 section-heading">
                          <div class="line"></div>
                          <h2>Seleccione su punto de atención cercano</h2>
                        </div>
                        <!-- Buttons -->
						<?php
				    
							$query = "SELECT DISTINCT departamentos.idDepartamentosNacimiento as cod, departamentos.nombre as dep ".
							"FROM departamentos,agencia,ciudades ".
							"WHERE agencia.ciudad=ciudades.idciudadesNacimiento ".
							"and ciudades.idDepartamentosNacimiento=departamentos.idDepartamentosNacimiento order by cod";
							$dep = ejecutarCOnsulta($query);
							while ($deps=mysqli_fetch_array($dep)) {
							$depa=$deps['dep'];
							$codi=$deps['cod'];
						?> 
						<h4> Agencias en <?=utf8_encode($depa)?></h4>
						 <?php
				    
							$query = "SELECT idagencia,titulo,agenciamini FROM `agencia` WHERE estado='1' and departamento='".$codi."' order by agenciamini,titulo;";
							$results = ejecutarCOnsulta($query);
						?> 
						
						<div class="credit-buttons-area mb-30">
						<?php while ($mostrar=mysqli_fetch_array($results)) {
                          echo ("<a href='agencias.php?id=".utf8_encode($mostrar['idagencia'])."#info_agencia' class='btn credit-btn btn-3 m-2'>".utf8_encode($mostrar['titulo'])."</a>");
						 }?>
						</div>
							<?php }?>
                      </div>
                    </div>
                  </div>
                </section>
                <!-- ##### Elements Area End ##### -->
                <!-- ##### About Area Start ###### -->
                <section class="about-area">
                  <div class="container">
                   <?php
				    $id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 3; //starting page
                   $query = "SELECT titulo, imagen, direccion, telefono, horario, LinkMapa,agencia.estado as estado,agenciamini,ciudades.nombreC as ciud,departamentos.nombre as depar 
FROM agencia 
inner join ciudades on ciudades.idciudadesNacimiento=agencia.ciudad  
inner join departamentos on departamentos.idDepartamentosNacimiento=agencia.departamento 
and idagencia='".$id."'";
            //these variables are passed via URL

            $results = ejecutarCOnsulta($query);
		
           $mostrar=mysqli_fetch_array($results);
            ?> 
            <div class="row align-items-center">
              
           
               
                <div class="col-12 col-md-6">
                  <div class="about-content ">
                    <!-- Section Heading -->
                    <div class="section-heading">
                      <div class="line"></div>
                      <p id="info_agencia">Nuestras Redes De Agencias A Nivel Nacional Y Regional</p>
                      <h2><?php  echo utf8_encode($mostrar['titulo']);?></h2>
                    </div>
                    <h4><i class="fa fa-map-marker mt-30"></i>&nbsp;Ciudad:</h4>
                    <p class="mb-0"><?php  echo utf8_encode($mostrar['ciud'].", ".$mostrar['depar']);?></p>
                    
					<h4><i class="fa fa-building-o mt-30"></i>&nbsp;Centro de atenci&oacute;n:</h4>
                    <p class="mb-0"><?php  echo utf8_encode($mostrar['direccion']);?></p>
                    <h4><i class="fa fa-phone mt-30"></i>&nbsp;Tel&eacute;fonos:</h4>
                    <p class="mb-0"> <?php  echo $mostrar['telefono'];?> </p>
                    <h4><i class="fa fa-calendar mt-30"></i> Horario de atenci&oacute;n</h4>
                    <p class="mb-0"><?php  echo utf8_encode($mostrar['horario']);?></p>   
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="about-thumbnail">
                    <img src="agencias/imagenes/<?php  echo $mostrar['imagen'];?>" alt="fotografía de agencia Utrahuilca <?php  echo ($mostrar['titulo']);?>" style="width:100%">
                  </div>
                </div>
			  <!--mapa-->
			  <div class="col-12 mb-30">
			  <h4><i class="fa fa-map mt-30"></i>Mapa:</h4>
			  <div class="mapouter">
			  <div class="gmap_canvas ">
			  <iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo $mostrar['LinkMapa']?>&t=&z=16&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
			  </div>
			  </div>
			  </div>
			  <!-- fin mapa -->
                          </div>

       </div>
     </section>

<?php 
include 'suscribir.php';
 include 'pie.php';?>

</body>
</html>