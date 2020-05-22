
<?php 
require_once '../config/conexion.php';
//include('top-cache.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
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
  <link  href="modelo.css" rel="stylesheet">
  <!-- Stylesheet -->
  <link rel="stylesheet" href="./css/menunew.css">
  <link rel="stylesheet" href="./css/menunavbar.css">
  <link rel="stylesheet" href="style.css">
  <!-- Styles slider bottom -->
  <link rel="stylesheet" href="./css/sliderbottom.css">
  <link rel="stylesheet" href="Cooperativavirtual.css">
  <!-- Styles gallery bottom -->
  <link rel="stylesheet" href="./css/gallery.css">
  <link href="menu.css" rel="stylesheet">
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136441397-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-136441397-1');
  </script>
  <script>  
    function mostrarVentanaPoliticas()
    {
      $(document).ready(function()
      {
       $("#mostrarmodalpoliticas").modal("show");
     });
    }
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
    <!-- Modal PopUP politicas-->
    <div class="modal fade" id="mostrarmodalpoliticas" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
         <div class="modal-header">
           <h3>Pol&iacute;ticas Generales de Reclutamiento</h3> 
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         </div>

         <div class="modal-body" align="center" >
           <div class="single-blog-post post-style-3 mt-50 " data-wow-delay="0.2s">

            <!-- Post Thumbnail -->
            <div class="post-thumbnail">

              <!-- Post Content -->
              <div class="post-content d-flex align-items-center justify-content-between">

                <p><ul>
                  <li style="text-align: justify;">UTRAHUILCA brindar&aacute; igualdad de oportunidades a los solicitantes de empleo, independientemente de su raza, sexo, religi&oacute;n o afinidad pol&iacute;tica.</li>  <br>
                  <li style="text-align: justify;">Se dar&aacute; prioridad en sus procesos de reclutamiento a personas que residan o sean oriundas de la ciudad o municipio donde se requiera la vinculaci&oacute;n.</li>  <br>
                  <li style="text-align: justify;">Los aspirantes a laborar en la Cooperativa UTRAHUILCA deber&aacute;n tener una moralidad crediticia comprobada.</li>  <br>
                  <li style="text-align: justify;">En cumplimiento del art&iacute;culo 112 del estatuto de la Cooperativa UTRAHUILCA, los aspirantes a ejercer un cargo en esta entidad, no deber&aacute;n tener, con los funcionarios actuales, ninguno de los parentescos relacionados a continuaci&oacute;n:</li>  <br>
                  <li style="text-align: justify;">Conyugue, compa&ntilde;ero permanente, padre, hijo/a, abuelo/a, nieto/a, hermano/a, suegro/a o yerno/nuera.</li>   <br>
                  <li style="text-align: justify;">UTRAHUILCA se reserva el derecho de admisi&oacute;n en sus procesos de selecci&oacute;n, cuando se considere que el aspirante no se ajusta al perfil requerido para el cargo vacante, o su participaci&oacute;n va en contrav&iacute;a de lo establecido en los reglamentos de la cooperativa y/o el c&oacute;digo de conducta y buen gobierno cooperativo. </li>
                </ul>
              </p>
              <!-- Catagory       -->
              <div class="post-tag"></div>
              <!-- Headline -->

              <!-- Post Meta -->
              <div class="post-meta">

              </div>
            </div>
          </div>

        </div>


      </div>
      <div class="modal-footer">
        <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
      </div>
    </div>
  </div>
</div>  
<!-- End Modal PopUP -->


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
   
            

                <!-- ##### Team Member Area Start ##### -->
                <section class="team-area section-padding-100-0">
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <!-- Section Heading -->
                        <div class="section-heading text-center mb-100">
                          <div class="line"></div>
                          <p>Convocatorias</p>
                          <h2>Haga parte del equipo Utrahuilca</h2>
                        </div>
                      </div>
                    </div>

                    <div class="row">

                      <!-- Single Team Member Area -->
                      <?php 
                      $sql="SELECT * FROM trabaje WHERE estado= '1'";
                      $result=mysqli_query($conexion,$sql);
                      while ($mostrar=mysqli_fetch_array($result)) {
                        ?>
                        <div class="col-12 col-sm-6 col-lg-3">
                          <div class="single-team-member-area mb-100">
                            <div class="team-thumb" style="background-image:url('../filesN/<?php  echo $mostrar['imagen'];?>')">
                              <img class="trabaje" href="../filesN/<?php  echo $mostrar['imagen'];?>">
                              <!-- View More -->
                              <div class="view-more">
                                <a href="trabaje_con_nosotros?id=<?php  echo $mostrar['idtrabaje'];?>">+</a>
                              </div>
                            </div>
                            <div class="team-info">
                              <h5><?php  echo $mostrar['titulo'];?></h5>
                            </div>
                          </div>
                        </div>
                      <?php  }?>
                    </div>
                  </div>
                </section>
                <!-- ##### Team Member Area End ##### -->

                <!-- ##### Newsletter Area Start ###### -->
               <!-- <section class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url(img/bg-img/6.jpg);">
                  <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-12 col-sm-10 col-lg-8">
                        <div class="nl-content text-center">
                          <h2>Las personas vinculadas a UTRAHUILCA se destacaran y diferenciaran por resaltar en el actuar personal e institucional los anteriores principios y valores cooperativos.</h2> 
                        </div>
                      </div>
                    </div>
                  </div>
                </section>-->
                <!-- ##### Newsletter Area End ###### -->


                  <?php include 'pie.php';?>
        <!-- jQuery-2.2.4 js -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/bootstrap/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <!-- All Plugins js -->
        <script src="js/plugins/plugins.js"></script>
        <!-- Active js -->
        <script src="js/active.js"></script>
        <script src="menu.js"></script>
      </body>

      </html>