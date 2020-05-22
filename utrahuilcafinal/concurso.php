
<?php 
require_once '../config/conexion.php';
//include('top-cache.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Title -->
  <title>Utrahuilca - Cooperativa Latinoamericana de Ahorro Y Credito</title>
  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="Cooperativavirtual.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="./css/menunew.css">
  <link rel="stylesheet" href="./css/menunavbar.css">
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136441397-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-136441397-1');
  </script>
  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css">
  <!--  <link rel="stylesheet" href="css/style.css">-->
  <link href="css/styleresena.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/sliderbottom.css">
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
   <?php include 'menu.php'?>

                <!-- ##### Call To Action Start ###### -->
                <section class="cta-area d-flex flex-wrap">
                  <!-- Cta Content -->
                  <div class="cta-content">
                    <!-- Section Heading -->
                    <div class="section-heading white">
                      <div class="line"></div>
                      <h2>AHORRANDO VOY GANANDO</h2>
                    </div>
                    <h6 class="mb-0">Consulta si eres el feliz ganador de algunos de nuestros premios.</h6>

                  </div>
                  <!-- Cta Thumbnail -->
                  <div class="cta-thumbnail bg-img jarallax" style="background-image: url(img/gallery-img/DSC03334.jpg);"></div>
                </section>
                <section class="contact-area section-padding-100">
                  <div class="container">
                    <div class="row justify-content-center">
                      <!-- Contact Form Area -->
                      <div class="col-12 col-md-10 col-lg-8">
                        <div class="contact-form">
                          <h5>AHORRANDO VOY GANANDO</h5>
                          <!-- Contact Form -->                        
                          <?php 
                          setlocale(LC_MONETARY, 'en_ES');
                          $tipoide = $_POST['tipoide']; 
                          $nit = $_POST['documento']; 
                          $fec = $_POST['fech'];   
                          $newDate = date("d/m/Y", strtotime($fec));                     
                          $sql=" SELECT * FROM concurso WHERE tipoide='".$tipoide."' and   nit='".$nit."'and DATE_FORMAT(fecexp, '%d/%m/%Y')='".$newDate."'";
                          $sqlc=" SELECT count(*) cuenta FROM concurso WHERE tipoide='".$tipoide."' and   nit='".$nit."'and DATE_FORMAT(fecexp, '%d/%m/%Y')='".$newDate."'";
                          
						  $result=mysqli_query($conexion,$sql);
                          $resultc=mysqli_query($conexion,$sqlc);
						  $num=(mysqli_fetch_array($resultc))['cuenta'];
                          if ($num!=0){
						  while ($mostrar=mysqli_fetch_array($result)) { 
                            
                             ?>
                             <div class="row">
                              <div class="col-12 col-md-6">
                                <div class="group">
                                  <label>Nombre: <?php  echo $mostrar['nombre'];?></label>
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="group">
                                  <label>Cedula: <?php  echo $mostrar['nit'];?></label>
                                </div>
                              </div>

                              <div class="col-12 col-md-6">
                                <div class="group">
                                  <label>Agencia: <?php  echo $mostrar['agencia'];?></label>
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="group">
                                  <label>Vigencia: <?php  echo $mostrar['fecvig'];?></label>
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="group">
                                  <label>Tus Boletas:</label> 
                                  <br>
                                  <textarea disabled  style="height: 537px;"><?php  echo $mostrar['boletas'];?></textarea>
                                </div>
                              </div>
                            </div>  
                            <?php
                          }  
						  }else{
                            echo "El asociado/a no se encuentra registrado/a por no cumplir con el reglamento del sorteo. Consulte en nuestra página web o su agencia más cercana los parámetros para participar del Plan de Estímulos UTRAHUILCA Ahorrando Voy Ganando. ¡Aún está a tiempo para disfrutar de los beneficios que trae la Cooperativa UTRAHUILCA!";    
                          }

                        ?> 
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!-- ##### Newsletter Area Start ###### -->
              <section class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url(img/bg-img/6.jpg);">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-lg-8">
                      <div class="nl-content text-center">
                        <h2>Las personas vinculadas a UTRAHUILCA se destacaran y diferenciaran por resaltar en el actuar personal e institucional los anteriores principios y valores cooperativos.</h2> 
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!-- ##### Newsletter Area End ###### -->



         <?php include 'pie.php'?>

    </body>
    </html>