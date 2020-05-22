
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
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="./css/menunew.css">
  <link rel="stylesheet" href="./css/menunavbar.css">
  <link rel="stylesheet" href="Cooperativavirtual.css">
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


  <?php include 'menu.php';?>

              <!-- ##### Call To Action Start ###### -->
              <section class="cta-area d-flex flex-wrap">
                <!-- Cta Content -->
                <div class="cta-content">
                  <!-- Section Heading -->
                  <div class="section-heading white">
                    <div class="line"></div>
                    <h2>LLEGARON LOS MESES BRE DEL CRÉDITO</h2>
                  </div>
                  <h6 class="mb-0">Consulta si eres el feliz ganador de algunos de nuestros premios.</h6>

                </div>
                <!-- Cta Thumbnail -->
                <div class="cta-thumbnail bg-img jarallax" style="background-image: url(img/bg-img/19.jpg);"></div>
              </section>
              <section class="contact-area section-padding-100">
                <div class="container">
                  <div class="row justify-content-center">
                    <!-- Contact Form Area -->
                    <div class="col-12 col-md-10 col-lg-8">
                      <div class="contact-form">
                        <h5>LLEGARON LOS MESES BRE DEL CRÉDITO</h5>
                        <!-- Contact Form -->                        
                        <?php 
                        setlocale(LC_MONETARY, 'en_ES');
                        $tipoide = $_POST['tipoide']; 
                        $nit = $_POST['documento']; 
                        $fec = $_POST['fech'];   
                        $newDate = date("d/m/Y", strtotime($fec));                     
                        $sql=" SELECT * FROM concursobre WHERE tipoide='".$tipoide."' and   nit='".$nit."'and DATE_FORMAT(fecexp, '%d/%m/%Y')='".$newDate."'";
                        $result=mysqli_query($conexion,$sql);
                        $sqlc=" SELECT count(*) FROM concursobre WHERE tipoide='".$tipoide."' and   nit='".$nit."'and DATE_FORMAT(fecexp, '%d/%m/%Y')='".$newDate."'";
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

        <?php include 'pie.php';?>
  </body>
  </html>