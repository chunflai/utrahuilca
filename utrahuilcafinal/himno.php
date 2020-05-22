
<?php 
require_once '../config/conexion.php';
//include('top-cache.php'); 
?>
<!DOCTYPE html>
<html lang="es">
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
  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css">
  <!-- Styles slider bottom -->
  <link rel="stylesheet" href="./css/sliderbottom.css">
  <link rel="stylesheet" href="Cooperativavirtual.css">
  <link rel="stylesheet" href="./css/menunew.css">
  <link rel="stylesheet" href="./css/menunavbar.css">
  <!-- Styles gallery bottom -->
  <link rel="stylesheet" href="./css/gallery.css">
  <!-- Global site tag (gtag.js) - Google Analytics -->
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
    <?php include('menu.php')?>
                <!-- ##### Breadcrumb Area Start ##### -->
                <section class="breadcrumb-area bg-img bg-overlay ">
                  <img src="img/2.jpg" style="width: 100%" class="img-responsive">
                </section>
                <!-- ##### Header Area End ##### -->
                <div class="regular-page-wrap section-padding-100">
                  <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-12 col-md-10 col-lg-8">
                        <div class="page-content">

                         <center>
                          <a href="https://www.youtube.com/watch?v=GWJuN3J5yNw" target="_blank"><i class="fa fa-play"><img src="img/FULL.png"class="img-responsive" /></i></a>
                        </center>          
                        <br>
                        <br>
                        <h4 style="text-align: center;">HIMNO A LA COOPERATIVA UTRAHUILCA</h4>
                        <br>
                        <p style="text-align:center; line-height: 150%;font-family: 'Helvetica', sans-serif;">
                          Con visión de servicio y de progreso, 
                          <br>
                          En la tierra del Huila Nació,
                          <br>
                          Una empresa firme y solidaria
                          <br>
                        Con el fin de servirle a su región.</p>

                      </p>
                      <p style="text-align:center; line-height: 150%;font-family: 'Helvetica', sans-serif;">
                        UTRAHUILCA nuestra Cooperativa
                        <br>
                        Mutua ayuda y cooperación,
                        <br>
                        Viva fuerza de unión y de trabajo
                        <br>
                        Forjadora de un mundo mejor

                      </p>

                      <p style="text-align:center; line-height: 150%;font-family: 'Helvetica', sans-serif;">
                        Utrahuilca, Utrahuilca querida
                        <br>
                        Tu consigna retumba en mi voz
                        <br>
                        Más para usted, Más para todos.
                        <br>
                        Es el grito sabio de revolución.
                      </p>
                      <p style="text-align:center; line-height: 150%;font-family: 'Helvetica', sans-serif;">
                        Generamos conciencia y riqueza
                        <br>
                        Somos seres de noble misión
                        <br>
                        Sembradores de amor y esperanza
                        <br>
                        Con dignos principios de renovación
                      </p>
                      <p style="text-align:center; line-height: 150%;font-family: 'Helvetica', sans-serif;">
                        Con los niños, jóvenes y adultos
                        <br>
                        En la cultura, fe y educación
                        <br>
                        Construimos una patria soñada
                        <br>
                        Y asociamos pujanza y valor
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
            <!-- ##### Call To Action End ###### -->
            <!-- ##### Newsletter Area Start ###### -->
            <section class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url(img/bg-img/himno.jpg);">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-12 col-sm-10 col-lg-8">
                    <div class="nl-content text-center">
                      <h2>Es deber de todo el personal de UTRAHUILCA, entonar el Himno con orgullo y lealtad como ejemplo de coherencia, disciplina y compromiso con la Cooperativa y la base social.</h2> 
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- ##### Newsletter Area End ###### -->
<?php include 'pie.php'?>
  </body>

  </html>