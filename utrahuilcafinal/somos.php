
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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

                <!-- ##### Special Feature Area Start ###### -->
                <section class="special-feature-area d-flex flex-wrap">
                  <!-- Special Feature Content -->
                  <div class="special-feature-content section-padding-100">
                    <div class="feature-text">
                      <!-- Section Heading -->
                      <div class="section-heading white mb-50">
                        <div class="line"></div>
                        <p>Institucional</p>
                        <h2>Quiénes Somos</h2>
                      </div style=" text-align: justify;">
                      <p ><h6 style=" text-align: justify;">La COOPERATIVA LATINOAMERICANA DE AHORRO Y CR&Eacute;DITO UTRAHUILCA es una empresa asociativa sin &aacute;nimo de lucro creada como organizaci&oacute;n jur&iacute;dica de derecho privado y responsabilidad limitada, de patrimonio variable e ilimitado y conformado por asociados. Esta es una empresa cooperativa especializada en ahorro y cr&eacute;dito, enmarcada en la filosof&iacute;a y doctrina de la econom&iacute;a solidaria, practicante de los principios y valores cooperativos; siendo autogestionarios y generando unos resultados econ&oacute;micos y sociales equilibrados; se presenta como la mejor alternativa social y comunitaria del Surcolombiano, su objeto social es contribuir al mejoramiento constante de la calidad de vida de sus asociados, de sus familias, al desarrollo integral comunitario y a la creaci&oacute;n de un sistema de organizaci&oacute;n social, empresarial y productivo incluyente basado en la filosof&iacute;a del cooperativismo.</h6></p>
                    </div>
                  </div>
                  <!-- Special Feature Thumbnail -->
                  <div class="special-feature-thumbnail bg-img jarallax" style="background-image: url(img/bg-img/20.jpg);"></div>
                </section>
                <!-- ##### Special Feature Area End ###### -->

                <!-- ##### Special Feature Area Start ###### -->
                <section class="special-feature-area style-2 d-flex flex-wrap">
                  <!-- Special Feature Thumbnail -->
                  <div class="special-feature-thumbnail bg-img jarallax" style="background-image: url(img/bg-img/21.jpg);"></div>
                  <!-- Special Feature Content -->
                  <div class="special-feature-content section-padding-100">
                    <div class="feature-text">
                      <!-- Section Heading -->
                      <div class="section-heading white mb-50">
                        <div class="line"></div>
                        <p>Institucional</p>
                        <h2>Misi&oacute;n</h2>
                      </div>
                      <h6 style=" text-align: justify;">UTRAHUILCA es una empresa cooperativa del sur de Colombia, que fomenta el  ahorro y presta  eficazmente el servicio de cr&eacute;dito, contribuyendo  al desarrollo social y econ&oacute;mico sostenible de sus asociados, la localidad y  la comunidad; con un portafolio vanguardista, y el compromiso de  funcionarios, directivos y asociados que trabajan colectivamente  de acuerdo a la  filosof&iacute;a cooperativa.</h6>

                    </div>
                  </div>
                </section>
                <!-- ##### Special Feature Area End ###### -->

                <!-- ##### Special Feature Area Start ###### -->
                <section class="special-feature-area d-flex flex-wrap">
                  <!-- Special Feature Content -->
                  <div class="special-feature-content section-padding-100">
                    <div class="feature-text">
                      <!-- Section Heading -->
                      <div class="section-heading white mb-50">
                        <div class="line"></div>
                        <p>Institucional</p>
                        <h2>Visi&oacute;n</h2>
                      </div>
                      <p ><h6 style=" text-align: justify;">En el 2025, La Cooperativa Latinoamericana de Ahorro y Cr&eacute;dito UTRAHUILCA se consolidar&aacute; en el modelo empresarial y social del sur de Colombia, l&iacute;der de la integraci&oacute;n cooperativa; generador de desarrollo sostenible; con  procesos y productos de calidad, competitividad e innovaci&oacute;n.</h6>    </p>
                    </div>
                  </div>
                  <!-- Special Feature Thumbnail -->
                  <div class="special-feature-thumbnail bg-img jarallax" style="background-image: url(img/bg-img/20.jpg);"></div>
                </section>
                <!-- ##### Special Feature Area End ###### -->


                <!-- ##### principios Area Start ###### -->
                <section class="services-area section-padding-100-0">
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <!-- Section Heading -->
                        <div class="section-heading text-center mb-100">
                          <div class="line"></div>
                          <p>Institucional</p>
                          <h2>Principios</h2>    
                          <p style=" text-align: justify;">Adem&aacute;s de los principios universales del Cooperativismo, UTRAHUILCA promulga los siguientes principios que hace igualmente propios para el actuar de todos sus miembros.</p>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <!-- Single Service Area -->
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-service-area d-flex mb-100">
                          <div class="icon">
                            <i class="fa fa-industry"></i>
                          </div>
                          <div class="text">
                           <h5>Modelo socioecon&oacute;mico y pol&iacute;tico alternativo</h5>
                           <p style=" text-align: justify;" >Se trabajar&aacute; continuamente para fortalecer a UTRAHUILCA como modelo empresarial; que  incida en la transformaci&oacute;n social y econ&oacute;mica.</p>
                         </div>
                       </div>
                     </div>

                     <!-- Single Service Area -->
                     <div class="col-12 col-md-6 col-lg-4">
                      <div class="single-service-area d-flex mb-100">
                        <div class="icon">
                          <i class="fa fa-money"></i>
                        </div>
                        <div class="text">
                         <h5>Rentabilidad Econ&oacute;mica y Social</h5>
                         <p style=" text-align: justify;">Producir resultados econ&oacute;micos y sociales, que garanticen el desarrollo empresarial y contribuyan a mejorar la calidad de vida de los asociados y la comunidad.</p>
                       </div>
                     </div>
                   </div>

                   <!-- Single Service Area -->
                   <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100">
                      <div class="icon">
                        <i class="fa fa-sitemap"></i>
                      </div>
                      <div class="text">
                       <h5>Organizaci&oacute;n autogestionaria</h5>
                       <p style=" text-align: justify;">UTRAHUILCA es una organizaci&oacute;n autogestionaria y efectiva mediante el aporte econ&oacute;mico y social voluntario de cada uno de los asociados para el desarrollo de la  filosof&iacute;a institucional.</p>
                     </div>
                   </div>
                 </div>

                 <!-- Single Service Area -->
                 <div class="col-12 col-md-6 col-lg-4">
                  <div class="single-service-area d-flex mb-100">
                    <div class="icon">
                      <i class="fa fa-handshake-o"></i>
                    </div>
                    <div class="text">
                     <h5>Clima Organizacional Gratificante</h5>
                     <p style=" text-align: justify;">Propiciar en UTRAHUILCA, un ambiente de trabajo gratificante; que genere excelencia del acuerdo cooperativo.</p>
                   </div>
                 </div>
               </div>

               <!-- Single Service Area -->
               <div class="col-12 col-md-6 col-lg-4">
                <div class="single-service-area d-flex mb-100">
                  <div class="icon">
                    <i class="fa fa-flag-checkered"></i>
                  </div>
                  <div class="text">
                    <h5>Competitividad Empresarial</h5>
                    <p style=" text-align: justify;">Generar acciones, productos y servicios que posicionen a UTRAHUILCA en el primer nivel de las empresas Cooperativas de Ahorro y Cr&eacute;dito.</p>
                  </div>
                </div>
              </div>

              <!-- Single Service Area -->
              <div class="col-12 col-md-6 col-lg-4">
                <div class="single-service-area d-flex mb-100">
                  <div class="icon">
                    <i class="fa fa-institution"></i>
                  </div>
                  <div class="text">
                    <h5>Acci&oacute;n Pol&iacute;tica</h5>
                    <p>Organizar, promover y difundir espacios de formaci&oacute;n y acciones pol&iacute;ticas para el desarrollo del modelo alternativo de econom&iacute;a solidaria.</p>
                  </div>
                </div>
              </div>

              <!-- Single Service Area -->
              <div class="col-12 col-md-6 col-lg-4">
                <div class="single-service-area d-flex mb-100">
                  <div class="icon">
                    <i class="fa fa-group"></i>
                  </div>
                  <div class="text">
                   <h5>Integraci&oacute;n cooperativa y solidaria</h5>
                   <p>Unir esfuerzos econ&oacute;micos, sociales,  gremiales y pol&iacute;ticos para fortalecer el desarrollo de la econom&iacute;a solidaria.</p>
                 </div>
               </div>
             </div>

           </div>
         </div>
       </section>
       <!-- ##### principios Area End ###### -->
       <!-- ##### valores Area Start ###### -->
       <section class="services-area section-padding-100-0">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <!-- Section Heading -->
              <div class="section-heading text-center mb-100">
                <div class="line"></div>
                <p>Institucional</p>
                <h2>Valores</h2>
              </div>
            </div>
          </div>

          <div class="row">
            <!-- Single Service Area -->
            <div class="col-12 col-md-6 col-lg-4">
              <div class="single-service-area d-flex mb-100">
                <div class="icon">
                  <i class="fa fa-thumbs-o-up"></i>
                </div>
                <div class="text">
                  <h5>Honradez</h5>
                  <p>Concordancia entre pensar, expresar y actuar con rectitud y transparencia.</p>
                </div>
              </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-md-6 col-lg-4">
              <div class="single-service-area d-flex mb-100">
                <div class="icon">
                  <i class="fa fa-heart"></i>
                </div>
                <div class="text">
                  <h5>Respeto</h5>
                  <p>Reconocer y aceptar la dignidad, la diversidad de las personas, interactuando en armon&iacute;a con gentileza y cortes&iacute;a siendo agradables y serviciales.</p>
                </div>
              </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-md-6 col-lg-4">
              <div class="single-service-area d-flex mb-100">
                <div class="icon">
                  <i class="fa fa-handshake-o"></i>
                </div>
                <div class="text">
                  <h5>Amabilidad</h5>
                  <p>Expresi&oacute;n de solidaridad y respeto. Tratar a las personas con gentileza y cortes&iacute;a siendo agradables y serviciales.</p>
                </div>
              </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-md-6 col-lg-4">
              <div class="single-service-area d-flex mb-100">
                <div class="icon">
                  <i class="fa fa-check-square-o"></i>
                </div>
                <div class="text">
                  <h5>Etica</h5>
                  <p>Comportamiento acorde con la doctrina y filosof&iacute;a cooperativa e institucional para el beneficio colectivo.</p>
                </div>
              </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-md-6 col-lg-4">
              <div class="single-service-area d-flex mb-100">
                <div class="icon">
                  <i class="material-icons">accessibility</i>
                </div>
                <div class="text">
                  <h5>Lealtad</h5>
                  <p>Asumir con sinceridad, fidelidad el compromiso en defensa propia y de los dem&aacute;s de acuerdo a la filosof&iacute;a institucional.</p>
                </div>
              </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-md-6 col-lg-4">
              <div class="single-service-area d-flex mb-100">
                <div class="icon">
                  <i class="fa fa-legal"></i>
                </div>
                <div class="text">
                  <h5>Disciplina</h5>
                  <p>Capacidad para cumplir los objetivos propuestos.</p>
                </div>
              </div>
            </div>


            <!-- Single Service Area -->
            <div class="col-12 col-md-6 col-lg-4">
              <div class="single-service-area d-flex mb-100">
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <div class="text">
                  <h5>Cooperaci&oacute;n</h5>
                  <p>Trabajar de manera conjunta y participativa para el logro de los prop&oacute;sitos comunes.</p>
                </div>
              </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-md-6 col-lg-4">
              <div class="single-service-area d-flex mb-100">
                <div class="icon">
                  <i class="fa fa-comment"></i>
                </div>
                <div class="text">
                  <h5>Coherencia</h5>
                  <p>Vivenciar la filosof&iacute;a institucional, con prevalencia de los intereses colectivos.</p>
                </div>
              </div>
            </div>               
          </div>
        </div>
      </section>
      <!-- ##### valores Area End ###### -->

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

<!-- ##### All Javascript Script ##### -->
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

<?php 
//include('bottom-cache.php');
?>