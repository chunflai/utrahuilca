
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


  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136441397-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-136441397-1');
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

              


                <!-- ##### Hero Area Start ##### -->
                <div class="hero-area">
                  <div class="hero-slideshow owl-carousel" >
                    <?php 
                    $sql=" SELECT * FROM slider WHERE estado=1 ORDER BY idslider DESC";
                    $result=mysqli_query($conexion,$sql);
                    while ($mostrar=mysqli_fetch_array($result)) {
                      ?>
                      <!-- Single Slide -->
                      <div class="single-slide bg-img"> 
					  
                        <!-- Background Image-->
                        <div class="slide-bg-img bg-img bg-overlay"><?php echo $mostrar['url']!=""? "<a href ='".$mostrar['url']."'>": "";?><img src="../filesN/<?php echo $mostrar['imagen'];?>" alt="" class="img-responsive" draggable="false"><?php echo $mostrar['url']!=""? "</a>": "";?></div>
                        <!-- Welcome Text -->
                        <!-- Slide Duration Indicator -->
                        <div class="slide-du-indicator"></div>
                      </div>
                      <?php 
                    }
                    ?>

                  </div>
                </div>
                <!-- ##### Services Area Start ###### -->
                <section class="services-area section-padding-100-0">
                  <div class="container" >
                    <div class="row">
                      <div class="col-12">
                        <!-- Section Heading -->
                        <div class="section-heading text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                     
                          <h2>Nuestros Servicios</h2>
                        </div>
                      </div>

                      <div class="row">
                        <!-- Single Service Area -->
                        <div class="col-12 col-md-6 col-lg-4">

                          <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="200ms">
                            <?php 
                            $sql=" SELECT * FROM tasa WHERE estado=1";
                            $result=mysqli_query($conexion,$sql);
                            while ($mostrar=mysqli_fetch_array($result)) {
                             ?>
                             <div class="icon">
                              <i class="fa fa-usd"></i>
                            </div>
                            <div class="text">
                              <a href="files/<?php  echo $mostrar['archivost'];?>" target="_blank"><h5>Tasas</h5></a>
                              <p style="text-align: justify;">Consulte nuestras tasas de captación y colocación, compárelas, visítenos, abra su cuenta de ahorros o adquiera su crédito.</p>
                            </div>
                          <?php }  ?>
                        </div>
                      </div>
                      <!-- Single Service Area -->
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="300ms">
                          <?php 
                          $sql=" SELECT * FROM tarifas WHERE estado=1";
                          $result=mysqli_query($conexion,$sql);
                          while ($mostrar=mysqli_fetch_array($result)) {
                            ?>
                            <div class="icon">
                              <i class="fa fa-money"></i>
                            </div>
                            <div class="text">
                              <a href="files/<?php  echo $mostrar['archivost'];?>"target="_blank"><h5>Tarifas</h5></a>
                              <p style="text-align: justify;">Conozca las tarifas, plazos, montos y liquidaciones que la cooperativa <strong>Utrahuilca </strong> tiene para sus asociados.</p>
                            </div>
                          <?php }  ?>
                        </div>
                      </div>

                      <!-- Single Service Area -->
                      <div class="col-12 col-md-6 col-lg-4">
					  <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="600ms">
                          <div class="icon">
                            <i class="fa fa-bank"></i>
                          </div>
                          <div class="text">
                            <a href="javascript:mostrarVentanaRevalorizacion();"><h5>Revalorización </h5></a>
                            <p style="text-align: justify;">Consulte la rentabilidad de sus aportes sociales durante el año 2020.</p>
                          </div>
                        </div>
                        
                      </div>



                      <!-- Single Service Area -->
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="icon">
                          <i class="fa fa-file-text"></i> 
                        </div>
                        <div class="text">
                         <a href="aviso%20de%20privacidad.pdf" target="_blank"> <h5>Aviso de privacidad y tratamiento de datos</h5></a>
                         <p  style="text-align: justify;">Visualice las políticas vigentes conforme a la ley de protección de datos</p>
                       </div>
                     </div>
                      </div>

                      <!-- Single Service Area -->
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="700ms">
                          <div class="icon">
                            <i class="fa fa-gift"></i>
                          </div>
                          <div class="text">
                           <a href="javascript:mostrarVentanaConcurso();"> <h5>Consulte aquí nuestros concursos</h5></a>
                           <p style="text-align: justify;">Conozca nuestros sorteos y si es un afortunado ganador.</p>
                         </div>
                       </div>
                     </div>

                     <!-- Single Service Area -->
                     <div class="col-12 col-md-6 col-lg-4">
                      <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="400ms">
                          <div class="icon">
                            <i class="fa fa-credit-card"></i>
                          </div>
                          <div class="text">
                            <a href="https://registro.pse.com.co/PSEUserRegister/" target="_blank"><h5>PSE-pagos seguros en línea</h5></a>
                            <p style="text-align: justify;"> Realice el procedimiento de inscripción de la plataforma de pagos seguros en línea (PSE) UTRAHUILCA. <a href="https://www.youtube.com/watch?v=H-U9J4YOf7I&feature=player_embedded"target="_blank">ver Instructivo</a></p>
                          </div>
                        </div>
					  
                   </div>

                 </div>
               </div>
             </section>
             <!-- ##### Services Area End ###### -->

             <!-- ##### Miscellaneous Area End ###### -->

             <!-- ##### Miscellaneous Area Start ###### -->
             <section class="miscellaneous-area bg-gray">
              <div class="container">
                <div class="row align-items-end justify-content-center">
                 <!-- ##### About Area Start ###### -->
                 <section class="about-area">
                  <div class="container">
                    <div class="row align-items-center">
                      <div class="col-12 col-md-6">
                        <div class="about-content mb-100">
                          <!-- Section Heading -->
                          <h5 class="mb-4">Trabaje con nosotros.</h5>
                          <p class="mb-0"  style=" text-align: justify;">Nuestro talento humano es la mayor fortaleza  que tenemos, queremos que haga parte de este proyecto cooperativo, que trabaja incansablemente por el desarrollo personal  y profesional de cada uno de sus colaboradores. </p>
                          <a href="trabajo.php" class="btn credit-btn mt-50"> <i class=" fa fa-sign-in"></i>Ingrese</a>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="about-thumbnail mb-100">
                          <img src="img/trabaje/trabaje.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </section>
          <!-- ##### Miscellaneous Area End ###### -->
          <!-- ##### News Hero Area Start ##### -->
      <div class="hero-area-news d-flex flex-wrap col-12">

            <div class="hero-single-section">
              <!-- Single Welcome Post -->
              <?php 
              $sql="SELECT * FROM `link` WHERE estado=1 and idlink='2'";
              $result=mysqli_query($conexion,$sql);
              while ($mostrar=mysqli_fetch_array($result)) {
				  $enlace=$mostrar['vlink'];
               ?>
               <div class="single-welcome-post bg-imgnews item1 wow fadeInUp" data-wow-delay="300ms" style="background-image: url(../filesN/<?php  echo $mostrar['imagen'];?>);">

                <!-- Play Button-->
                <a href="<?=$enlace?>" class="video-play-btn" target="_blank"><i class="fa fa-play"></i></a>
                <!-- Content -->
                <div class="welcome-post-content">
                  <!-- Single Blog Post -->
                  <div class="single-blog-post white">
                    <div class="blog-content">
                      <a href="<?=$enlace?>" class="post-tag" target="blank">Neiva</a>
                      <a href="<?=$enlace?>" class="post-title" target="blank"><?php  echo $mostrar['titulo'];?></a>
                      <div class="post-meta">
                        <a href="<?=$enlace?>" target="_blank"><img src="img/core-img/calender.png" alt=""> <?php  echo $mostrar['fecha'];?> </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php 
            }
            ?>
          </div>

          <div class="hero-single-section">
            <!-- Single Welcome Post -->
            <?php 
            $sql="SELECT * FROM `link` WHERE estado=1 and idlink='3' ";
            $result=mysqli_query($conexion,$sql);
            while ($mostrar=mysqli_fetch_array($result)) {
				$enlace=$mostrar['vlink'];
             ?>
             <div class="single-welcome-post bg-imgnews item2 wow fadeInUp" data-wow-delay="400ms" style="background-image: url(../filesN/<?php  echo $mostrar['imagen'];?>);">
              <!-- Content -->
              <a href="<?=$enlace ?>" class="video-play-btn" target="_blank"><i class="fa fa-play"></i></a>
              <div class="welcome-post-content">
                <!-- Single Blog Post -->
                <div class="single-blog-post white">
                  <div class="blog-content">
                    <a href="<?=$enlace?>" target="_blank" class="post-tag">Neiva</a>
                    <a href="<?=$enlace?>" target="_blank" class="post-title"><?php  echo $mostrar['titulo'];?></a>
                    <div class="post-meta">

                      <a href="<?=$enlace?>" target="_blank"><img src="img/core-img/calender.png" alt=""> <?php  echo $mostrar['fecha'];?></a>

                    </div>
                  </div>
                </div>
              </div>

            </div>
            <?php 
          }
          ?>
          <div class="hero-second-section d-flex flex-wrap">
            <!-- Single Welcome Post -->
            <?php 
            $sql="SELECT * FROM `link` WHERE estado=1 and idlink='4'or idlink ='5' ";
            $result=mysqli_query($conexion,$sql);
            while ($mostrar=mysqli_fetch_array($result)) {
			$enlace=$mostrar['vlink'];
             ?>
             <div class="single-welcome-post bg-imgnews item3 wow fadeInUp" data-wow-delay="500ms" style="background-image: url(../filesN/<?php  echo $mostrar['imagen'];?>);">
              <!-- Content -->
              <a href="<?=$enlace?>" class="video-play-btn" target="_blank"><i class="fa fa-play"></i></a>
              <div class="welcome-post-content">
                <!-- Single Blog Post -->
                <div class="single-blog-post style2 white">
                  <div class="blog-content">
                    <a href="<?=$enlace?>" target="_blank" class="post-tag">Neiva</a>
                    <a href="<?=$enlace?>" target="_blank" class="post-title"><?php  echo $mostrar['titulo'];?></a>
                    <div class="post-meta">
                      <a href="<?=$enlace?>" target="_blank"><img src="img/core-img/calender.png" alt=""> <?php  echo $mostrar['fecha'];?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
	
	
    <!-- ##### News Area Start ##### -->
    <section class="news-area section-padding-100" id="format">
      <div class="container">
        <div class="row">
          <!-- Sidebar Area -->
          <div class="col-12 col-sm-9 col-md-6 col-lg-3">
            <div class="sidebar-area">
              <!-- Single Sidebar Widget -->
              <div class="single-widget-area tabs-widget">
                <div class="widget-heading">
                  <div class="line"></div>
                  <h4  style="text-align: left;">Formatos</h4>
                </div>
                <div class="credit-tabs-content">
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                      <div class="credit-tab-content">
                        <!-- Single News Area -->
                        <?php 
                        $sql="SELECT * FROM `formatos` WHERE idformatos=1 AND estado=1";
                        $result=mysqli_query($conexion,$sql);
                        while ($mostrar=mysqli_fetch_array($result)) {
                          ?>
                          <div class="single-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                              <img src="files/<?php  echo $mostrar['imagent'];?>">
                            </div>
                            <div class="news-content">
                              <span><?php  echo $mostrar['horat'];?></span>
                              <a href="files/<?php  echo $mostrar['archivost'];?>" download><?php  echo $mostrar['descripccion'];?></a>
                              <div class="news-meta">
                               <a  class="post-date"><img src="img/core-img/calendar.png" alt=""> <?php  echo $mostrar['fecha'];?></a>
                             </div>
                           </div>
                         </div>
                       <?php }  ?>
                       <?php 
                       $sql="SELECT * FROM `formatos` WHERE idformatos=3 AND estado=1";
                       $result=mysqli_query($conexion,$sql);
                       while ($mostrar=mysqli_fetch_array($result)) {
                        ?>
                        <!-- Single News Area -->
                        <div class="single-news-area d-flex align-items-center">
                          <div class="news-thumbnail">
                            <img src="files/<?php  echo $mostrar['imagent'];?>">
                          </div>
                          <div class="news-content">
                            <span><?php  echo $mostrar['horat'];?></span>
                            <a href="files/<?php  echo $mostrar['archivost'];?>" download><?php  echo $mostrar['descripccion'];?></a>
                            <div class="news-meta">
                             <a  class="post-date"><img src="img/core-img/calendar.png" alt=""> <?php  echo $mostrar['fecha'];?></a>
                           </div>
                         </div>
                       </div>
                     <?php }  ?>
					  </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
	    <!-- Sidebar Area -->
       <div class="col-12 col-sm-9 col-md-6 col-lg-3">
        <div class="sidebar-area">
		 <!-- Single Sidebar Widget -->
					 <div class="single-widget-area tabs-widget">
                <div class="widget-heading">
                  <div class="line"></div>
                  <h4  style="text-align: left;">Cooperativa Virtual</h4>
                </div>
                <div class="credit-tabs-content">
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab4" role="tabpanel" aria-labelledby="tab--4">
                      <div class="credit-tab-content">
					 <?php 
                       $sql="SELECT * FROM `formatos` WHERE idformatos=16 AND estado=1";
                       $result=mysqli_query($conexion,$sql);
                       while ($mostrar=mysqli_fetch_array($result)) {
                        ?>
                        <!-- Single News Area -->
                        <div class="single-news-area d-flex align-items-center">
                          <div class="news-thumbnail">
                            <img src="files/<?php  echo $mostrar['imagent'];?>">
                          </div>
                          <div class="news-content">
                            <span><?php  echo $mostrar['horat'];?></span>
                            <a href="files/<?php  echo $mostrar['archivost'];?>" download><?php  echo $mostrar['descripccion'];?></a>
                            <div class="news-meta">
                             <a  class="post-date"><img src="img/core-img/calendar.png" alt=""> <?php  echo $mostrar['fecha'];?></a>
                           </div>
                         </div>
                       </div>
                     <?php }  ?>
					 <?php 
                       $sql="SELECT * FROM `formatos` WHERE idformatos=17 AND estado=1";
                       $result=mysqli_query($conexion,$sql);
                       while ($mostrar=mysqli_fetch_array($result)) {
                        ?>
                        <!-- Single News Area -->
                        <div class="single-news-area d-flex align-items-center">
                          <div class="news-thumbnail">
                            <img src="files/<?php  echo $mostrar['imagent'];?>">
                          </div>
                          <div class="news-content">
                            <span><?php  echo $mostrar['horat'];?></span>
                            <a href="files/<?php  echo $mostrar['archivost'];?>" download><?php  echo $mostrar['descripccion'];?></a>
                            <div class="news-meta">
                             <a  class="post-date"><img src="img/core-img/calendar.png" alt=""> <?php  echo $mostrar['fecha'];?></a>
                           </div>
                         </div>
                       </div>
                     <?php }  ?>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>

       <!-- Sidebar Area -->
       <div class="col-12 col-sm-9 col-md-6 col-lg-3">
        <div class="sidebar-area">

          <!-- Single Sidebar Widget -->
          <div class="single-widget-area tabs-widget">
            <div class="widget-heading">
              <div class="line"></div>
              <h4 style="text-align: left;">Comunicados</h4>
            </div>
            <div class="credit-tabs-content">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                  <div class="credit-tab-content">
                    <!-- Single News Area -->
                    <?php 
                    $sql="SELECT * FROM `formatos` WHERE idformatos=2 AND estado=1";
                    $result=mysqli_query($conexion,$sql);
                    while ($mostrar=mysqli_fetch_array($result)) {
                      ?>
                      <div class="single-news-area d-flex align-items-center">
                        <div class="news-thumbnail">
                          <img src="files/<?php  echo $mostrar['imagent'];?>">
                        </div>
                        <div class="news-content">
                          <span><?php  echo $mostrar['horat'];?></span>
                          <a href="files/<?php  echo $mostrar['archivost'];?>" download ><?php  echo $mostrar['descripccion'];?></a>
                          <div class="news-meta">
                           <a  class="post-date"><img src="img/core-img/calendar.png" alt=""> <?php  echo $mostrar['fecha'];?></a>
                         </div>
                       </div>
                     </div>
                   <?php }  ?>
                   <!-- Single News Area -->
                   <?php 
                   $sql="SELECT * FROM `formatos` WHERE idformatos=5 AND estado=1";
                   $result=mysqli_query($conexion,$sql);
                   while ($mostrar=mysqli_fetch_array($result)) {
                    ?>
                    <div class="single-news-area d-flex align-items-center">
                      <div class="news-thumbnail">
                        <img src="files/<?php  echo $mostrar['imagent'];?>">
                      </div>
                      <div class="news-content">
                        <span><?php  echo $mostrar['horat'];?></span>
                        <a href="files/<?php  echo $mostrar['archivost'];?>" download><?php  echo $mostrar['descripccion'];?></a>
                        <div class="news-meta">
                         <a  class="post-date"><img src="img/core-img/calendar.png" alt=""> <?php  echo $mostrar['fecha'];?></a>
                       </div>
                     </div>
                   </div>
                 <?php }  ?>
				 
               </div>
             </div>
           </div>
         </div>
       </div>

     </div>
   </div>

   <!-- Sidebar Area -->
   <div class="col-12 col-sm-9 col-md-6 col-lg-3">
    <div class="sidebar-area">

      <!-- Single Sidebar Widget -->
      <div class="single-widget-area tabs-widget">
        <div class="widget-heading">
          <div class="line"></div>
          <h4 style="text-align: left;">Reglamentos</h4>
        </div>

        <div class="credit-tabs-content">


          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
              <div class="credit-tab-content">

                <?php 
                $sql="SELECT * FROM `formatos` WHERE idformatos=4 AND estado=1";
                $result=mysqli_query($conexion,$sql);
                while ($mostrar=mysqli_fetch_array($result)) {
                  ?>
                  <div class="single-news-area d-flex align-items-center">
                    <div class="news-thumbnail">
                      <img src="files/<?php  echo $mostrar['imagent'];?>">
                    </div>
                    <div class="news-content">
                      <span><?php  echo $mostrar['horat'];?></span>
                      <a href="files/<?php  echo $mostrar['archivost'];?>" download><?php  echo $mostrar['descripccion'];?></a>
                      <div class="news-meta">
                       <a  class="post-date"><img src="img/core-img/calendar.png" alt=""> <?php  echo $mostrar['fecha'];?></a>
                     </div>
                   </div>
                 </div>
               <?php }  ?>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
</div>  
</section>
<!-- ##### News Area End ##### -->

<section class="col-12">
  

   <div class="row">
    <div class="col-12">     
      <!-- Section Heading -->
      <div class="section-heading text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
        <div class="line"></div>
        <h2>Dimensión cooperativa ¡MÁS PARA USTED MÁS PARA TODOS!</h2>
      </div>
    </div>
  </div>
  <div class="row">

    
      <a class="col-12 funda" href="http://www.fundautrahuilca.org/" target="_blank"> <img src="AgenciaVirtual/bannerfundautrahuilca01.jpg" class="img-responsive"></a>
      
        <?php 
        $sql="SELECT * FROM `formatos` WHERE idformatos=6 AND estado=1";
        $result=mysqli_query($conexion,$sql);
        while ($mostrar=mysqli_fetch_array($result)) {?>
         <a class="col-6 botonfunda d-none d-lg-block" href="files/<?php  echo $mostrar['archivost'];?>" target='_blank'> <img src="img/Dimension cooperativa_Mesa de trabajo 1.svg"  style="width: 50%" class="img-responsive"></a>
       <?php } ?>
       <br>
     
  
 </div>

</section>




<!-- ##### Call To Action Start ###### -->
<section class="cta-2-area wow fadeInUp" data-wow-delay="100ms">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- Cta Content -->
        <div class="cta-content d-flex flex-wrap align-items-center justify-content-between">
          <div class="cta-text">
            <h4>Noticias</h4>
          </div>
          <div class="cta-btn">
            <a href="noticias_cooperativas.php" class="btn credit-btn box-shadow">Ver Mas</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php 
include 'suscribir.php';
 include 'pie.php';?>
 </body>

</html>

<?php 
//include('bottom-cache.php');
?>