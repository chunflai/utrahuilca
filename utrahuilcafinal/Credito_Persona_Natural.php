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
  <!-- The above 4 meta tags -must- come first in the head; any other head content must come -after- these tags -->
  <!-- Title -->
  <title>Utrahuilca - Cooperativa Latinoamericana de Ahorro Y Credito</title>
  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico">
  <link rel="stylesheet" href="./css/sliderbottom.css">
  <!-- Stylesheet -->
  <link rel="stylesheet" href="./css/menunew.css">
  <link rel="stylesheet" href="./css/menunavbar.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="barra.css">
  <link rel="stylesheet" href="Cooperativavirtual.css">


  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136441397-1"></script>

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

                                            <!--Modal: Login / Register Form-->
                                            <div class="modal fade" id="credito2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                              <div class="modal-dialog cascading-modal" role="document">
                                                <!--Content-->

                                                <div class="modal-content">
                                                  <!--Modal cascading tabs-->
                                                  <div class="modal-c-tabs">

                                                    <!-- Tab panels -->
                                                    <div class="tab-content">
                                                      <!--Panel 7-->
                                                      <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
                                                        <!--Body-->
                                                        <div class="modal-body mb-1">

                                                          <div class="md-form form-sm mb-5" style="margin: 20px; " >


                                                            <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                                            INDEPENDIENTES:</p>
                                                            <lo>
                                                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Diligenciar y presentar el formato de la solicitud del crédito.<br></li>
                                                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia de la cédula de ciudadanía ampliada al 150%.<br>  </li>
                                                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Si está obligado a declarar, debe anexar la Declaración de Renta del último año gravable.<br></li>
                                                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> En caso de no estar obligado debe anexar la certificación de no declarante.<br></li>
                                                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia del recibo de servicio público.<br></li>
                                                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Certificado de Cámara y Comercio con matrícula renovada y fecha de expedición no mayor a 30 días. Si no tiene Cámara de Comercio Anexar el RUT actual.<br></li>
                                                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Certificados de ingresos. Diligenciado por un titular o un contador público, anexando copia de la tarjeta profesional y antecedentes disciplinarios.<br></li>
                                                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Copia de Facturas de compra o de venta.<br></li>
                                                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Extractos bancarios, si se requieren. <br></li>
                                                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Anexar referencias comerciales o de proveedores.<br></li>
                                                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Listado de clientes si lo requiere.<br></li>
                                                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Si vende productos por catálogo, anexar facturas.<br></li>
                                                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">El asociado o asociada deberá permitir una visita al negocio para realizar un registro fotográfico y así determinar el estudio y análisis del crédito.<br></li>
                                                            </lo>
                                                            <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                                              <?php 
                                                              $sql="SELECT * FROM `formatos` WHERE idformatos='3' and estado = 1";
                                                              $result=mysqli_query($conexion,$sql);
                                                              while ($mostrar=mysqli_fetch_array($result)) {
                                                                ?>
                                                                <a href="../file1/<?php  echo $mostrar['archivost'];?>"target="_blank"><i class="fa fa-file-excel-o"></i>Descargar el formato de crédito</a>
                                                              <?php }  ?>
                                                            </p>
                                                          </div>
                                                        </div>
                                                        <!--Footer-->
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Salir</button>
                                                        </div>
                                                      </div>

                                                    </div>

                                                  </div>
                                                </div>
                                                <!--/.Content-->
                                              </div>
                                            </div>
                                            <!--Modal: Login / Register Form-->

                                            <!--Modal: Login / Register Form-->
                                            <div class="modal fade" id="credito3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                              <div class="modal-dialog cascading-modal" role="document">
                                                <!--Content-->

                                                <div class="modal-content">
                                                  <!--Modal cascading tabs-->
                                                  <div class="modal-c-tabs">

                                                    <!-- Tab panels -->
                                                    <div class="tab-content">
                                                      <!--Panel 7-->
                                                      <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
                                                        <!--Body-->
                                                        <div class="modal-body mb-1">

                                                          <div class="md-form form-sm mb-5" style="margin: 20px; " >

                                                           <lo>
                                                            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Certificado de Cámara y Comercio con matrícula renovada y fecha de expedición no mayor a 30 días. Si no tiene Cámara de Comercio Anexar el RUT actual. <br></li>
                                                            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Certificados de ingresos. Diligenciado por un titular o un contador público, anexando copia de la tarjeta profesional y antecedentes disciplinarios. <br></li>
                                                            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Copia de Facturas de compra o de venta. <br></li>
                                                            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Extractos bancarios, si se requieren.  <br></li>
                                                            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Anexar referencias comerciales o de proveedores. <br></li>
                                                            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Listado de clientes si lo requiere. <br></li>
                                                            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Si vende productos por catálogo, anexar facturas. <br></li>
                                                            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">El asociado o asociada deberá permitir una visita al negocio para realizar un registro fotográfico y así determinar el estudio y análisis del crédito. <br></li>
                                                          </lo>
                                                          <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                                            <?php 
                                                            $sql="SELECT * FROM `formatos` WHERE idformatos='3' and estado = 1";
                                                            $result=mysqli_query($conexion,$sql);
                                                            while ($mostrar=mysqli_fetch_array($result)) {
                                                              ?>
                                                              <a href="../file1/<?php  echo $mostrar['archivost'];?>"target="_blank"><i class="fa fa-file-excel-o"></i>Descargar el formato de crédito</a>
                                                            <?php }  ?>
                                                          </p>
                                                        </div>
                                                      </div>
                                                      <!--Footer-->
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Salir</button>
                                                      </div>
                                                    </div>

                                                  </div>

                                                </div>
                                              </div>
                                              <!--/.Content-->
                                            </div>
                                          </div>
                                          <!--Modal: Login / Register Form-->
                                          <!--Modal: Login / Register Form-->
                                          <div class="modal fade" id="credito4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog cascading-modal" role="document">
                                              <!--Content-->

                                              <div class="modal-content">
                                                <!--Modal cascading tabs-->
                                                <div class="modal-c-tabs">

                                                  <!-- Tab panels -->
                                                  <div class="tab-content">
                                                    <!--Panel 7-->
                                                    <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
                                                      <!--Body-->
                                                      <div class="modal-body mb-1">

                                                        <div class="md-form form-sm mb-5" style="margin: 20px; " >

                                                         <lo>
                                                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Copia de Facturas de compra o de venta. <br></li>
                                                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Extractos bancarios, si se requieren.  <br></li>
                                                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Anexar referencias comerciales o de proveedores. <br></li>
                                                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Listado de clientes si lo requiere. <br></li>
                                                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Si vende productos por catálogo, anexar facturas. <br></li>
                                                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">El asociado o asociada deberá permitir una visita al negocio para realizar un registro fotográfico y así determinar el estudio y análisis del crédito. <br></li>
                                                        </lo>
                                                        <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                                          <?php 
                                                          $sql="SELECT * FROM `formatos` WHERE idformatos='3' and estado = 1";
                                                          $result=mysqli_query($conexion,$sql);
                                                          while ($mostrar=mysqli_fetch_array($result)) {
                                                            ?>
                                                            <a href="../file1/<?php  echo $mostrar['archivost'];?>"target="_blank"><i class="fa fa-file-excel-o"></i>Descargar el formato de crédito</a>
                                                          <?php }  ?>
                                                        </p>
                                                      </div>
                                                    </div>
                                                    <!--Footer-->
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Salir</button>
                                                    </div>
                                                  </div>

                                                </div>

                                              </div>
                                            </div>
                                            <!--/.Content-->
                                          </div>
                                        </div>
                                        <!--Modal: Login / Register Form-->
                                        <!--Modal: Login / Register Form-->
                                        <div class="modal fade" id="credito5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog cascading-modal" role="document">
                                            <!--Content-->

                                            <div class="modal-content">
                                              <!--Modal cascading tabs-->
                                              <div class="modal-c-tabs">

                                                <!-- Tab panels -->
                                                <div class="tab-content">
                                                  <!--Panel 7-->
                                                  <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
                                                    <!--Body-->
                                                    <div class="modal-body mb-1">

                                                      <div class="md-form form-sm mb-5" style="margin: 20px; "  >

                                                        <lo>

                                                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Copia de Facturas de compra o de venta.<br></li>
                                                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Extractos bancarios, si se requieren. <br></li>
                                                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Anexar referencias comerciales o de proveedores.<br></li>
                                                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Listado de clientes si lo requiere.<br></li>
                                                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Si vende productos por catálogo, anexar facturas.<br></li>
                                                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">El asociado o asociada deberá permitir una visita al negocio para realizar un registro fotográfico y así determinar el estudio y análisis del crédito.<br></li>
                                                        </lo>
                                                        <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                                          <?php 
                                                          $sql="SELECT * FROM `formatos` WHERE idformatos='3' and estado = 1";
                                                          $result=mysqli_query($conexion,$sql);
                                                          while ($mostrar=mysqli_fetch_array($result)) {
                                                            ?>
                                                            <a href="../file1/<?php  echo $mostrar['archivost'];?>"target="_blank"><i class="fa fa-file-excel-o"></i>Descargar el formato de crédito</a>
                                                          <?php }  ?>
                                                        </p>
                                                      </div>
                                                    </div>
                                                    <!--Footer-->
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Salir</button>
                                                    </div>
                                                  </div>

                                                </div>

                                              </div>
                                            </div>
                                            <!--/.Content-->
                                          </div>
                                        </div>
                                        <!--Modal: Login / Register Form-->

                                        <!--Modal: Login / Register Form-->
                                        <div class="modal fade" id="credito6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog cascading-modal" role="document">
                                            <!--Content-->

                                            <div class="modal-content">
                                              <!--Modal cascading tabs-->
                                              <div class="modal-c-tabs">

                                                <!-- Tab panels -->
                                                <div class="tab-content">
                                                  <!--Panel 7-->
                                                  <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
                                                    <!--Body-->
                                                    <div class="modal-body mb-1">

                                                      <div class="md-form form-sm mb-5" style="margin: 20px; ">

                                                        <lo>

                                                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Copia de Facturas de compra o de venta.<br></li>
                                                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Extractos bancarios, si se requieren. <br></li>
                                                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Anexar referencias comerciales o de proveedores.<br></li>
                                                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Listado de clientes si lo requiere.<br></li>
                                                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Si vende productos por catálogo, anexar facturas.<br></li>
                                                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">El asociado o asociada deberá permitir una visita al negocio para realizar un registro fotográfico y así determinar el estudio y análisis del crédito.<br></li>
                                                        </lo>
                                                        <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                                         <?php 
                                                         $sql="SELECT * FROM `formatos` WHERE idformatos='3' and estado = 1";
                                                         $result=mysqli_query($conexion,$sql);
                                                         while ($mostrar=mysqli_fetch_array($result)) {
                                                          ?>
                                                          <a href="../file1/<?php  echo $mostrar['archivost'];?>"target="_blank"><i class="fa fa-file-excel-o"></i>Descargar el formato de crédito</a>
                                                        <?php }  ?>
                                                      </p>
                                                    </div>
                                                  </div>
                                                  <!--Footer-->
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Salir</button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <!--/.Content-->
                                        </div>
                                      </div>
                                      <!--Modal: Login / Register Form-->
 <?php include 'menu.php';?>
                <!-- ##### Call To Action Start ###### -->
                <section class="cta-area d-flex flex-wrap">
                  <!-- Cta Content -->
                  <div class="cta-content">
                    <!-- Section Heading -->
                    <div class="section-heading white">
                      <p>Productos</p>
                      <h2>Personas naturales</h2>
					  <?php
					  if ($_GET['tabPag'])
					  $codigo_cred=$_GET['tabPag'];
					  else $codigo_cred=1;
$sql="SELECT * FROM `linea_credito` WHERE tipo = 'CN' and codigo=".$codigo_cred;
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
	?>
<h1 class="tit_ayc"><?php  echo $mostrar['nombre'];?> </h1>
  
  <?php 
  $dirigido_a=$mostrar['dirigido_a'];
  $monto=$mostrar['monto'];
  $descripcion=$mostrar['descripcion'];
  $plazo=$mostrar['plazo_meses'];
  $pago=$mostrar['pago'];
  $requisitos=$mostrar['requisitos'];
  }  ?>
                    </div>
                    <h6>Conozca nuestros productos de crédito.</h6>
                  </div>         
                  <div class="cta-thumbnail bg-img jarallax" style="background-image: url(img/bg-img/5.jpg);"></div>    
                </section>

                <section class="services-area section-padding-100-0">
                  <div class="container">
                    <div class="tab-content">
                     <!--page 1 de credito de libre inversión-->
                     <div class="tab-pane active" id="pag1" role="tabpanel">
                      <div class="sv-tab-panel">
                       <div class="container datos_ayc">


                        <div class="vertical-tabs">
                          <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" data-toggle="tab" href="#pagina1" role="tab" aria-controls="home">Descripci&oacute;n</a>
                            </li>
                            <br>
                            <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#pagina3" role="tab" aria-controls="messages">Beneficios</a>
                            </li>
                            <br>
                            <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#pagina28" role="tab" aria-controls="messages">Requisitos</a>
                            </li>
                          </ul>
                          <div class="tab-content">

                            <div class="tab-pane active" id="pagina1" role="tabpanel">
                              <div class="sv-tab-panel">
                                <!-- ##### Header Area End ##### -->
                                <div class="container " style="margin-left: 15%">
                                  <h3>Descripción </h3>
                                  <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                    <?php  echo $descripcion;?> 
                                  </p>
                                  <br>
                                  <h5 style="font-size: medium">Dirigido a:</h5>
                                  <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                    <?php  echo $dirigido_a;?> 
                                  </p>
                                  <br>
                                  <h5 style="font-size: medium">  Monto Máximo:</h5>
                                  <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                   <?php  echo $monto;?>  
                                 </p>
                                 <br>
                                 <h5 style="font-size: medium">Plazo Máximo:</h5>
                                 <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                   <?php  echo $plazo;?> Meses 
                                 </p>
                                 <br>
                                 <h5 style="font-size: medium">Forma de pago:</h5>
                                 <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                  <?php  echo $pago;?>
                                </p>
                              </div>

                              <!--### fin row ###-->
                            </div>
                          </div>
                          <div class="tab-pane" id="pagina3" role="tabpanel">
                            <div class="sv-tab-panel">
                              <!-- ##### Header Area End ##### -->
                              <div class="container" style="margin-left: 15%">
                                <h3 >
                                 Beneficios
                               </h3>
							   <ol>
  <?php
					 
$sql1="SELECT distinct `decripcion_b` FROM `beneficios`,`linea_credito`,`lineac_beneficio` WHERE `beneficios`.`tipo`=`linea_credito`.`tipo` and `lineac_beneficio`.`codigo_beneficio`=`beneficios`.`codigo` and lineac_beneficio.codigo_linea=".$codigo_cred;
$result=mysqli_query($conexion,$sql1);
$cont=1;
while ($mostrar=mysqli_fetch_array($result)) {
	?>
<li style="text-align:justify;margin:0 0 1.5vh 0; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"><?php  echo $mostrar[0];?> </li>
  
  <?php 
  $cont++;
  }  ?></ol>
                             </div>
                           </div>
                         </div>
                         <div class="tab-pane" id="pagina28" role="tabpanel">
                          <div class="sv-tab-panel">
                            <!-- ##### Header Area End ##### -->
                            <div class="container" style="margin-left: 15%">
							<h3>Requisitos</h3>
                             <?php  echo $requisitos;?>
                              <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                <?php 
                                $sql="SELECT * FROM `formatos` WHERE idformatos='3' and estado = 1";
                                $result=mysqli_query($conexion,$sql);
                                while ($mostrar=mysqli_fetch_array($result)) {
                                  ?>
                                  <a href="../file1/<?php  echo $mostrar['archivost'];?>"target="_blank"><i class="fa fa-file-excel-o"></i>Descargar el formato de crédito</a>
                                <?php }  ?>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             

<br><br><br>
<h4>Informaci&oacute;n Relacionada </h4>
<ul class="nav nav-tabs listacred row" role="tablist" >
<?php 
$sql="SELECT * FROM `linea_credito` WHERE tipo = 'CN' order by rand() limit 0, 5";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
	?>
<li class="itemcred">
    <a class="nav-link" href="CreditoNatural.php?tabPag=<?php  echo $mostrar['codigo'];?>" role="tab" aria-controls="home" id="scroll"><img src="images/<?php  echo $mostrar['imagen'];?>" style="width: 50px"><br><?php  echo $mostrar['nombre'];?></a>
  </li>
  <?php }  ?>
															  <!--
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#pag1" role="tab" aria-controls="home" id="scroll"><img src="images/1.png" style="width: 50px"><br>LIBRE INVERSIÓN</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#pag2" role="tab" aria-controls="profile" id="scroll1"><img src="images/5.png" style="width: 50px"><br>MICROCRÉDITO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#pag3" role="tab" aria-controls="messages" id="scroll2"><img src="images/1.png" style="width: 70px"><br>BIENES E INMUEBLES</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#pag4" role="tab" aria-controls="messages" id="scroll4"><img src="images/5.png" style="width: 50px"><br>CRÉDITO ESPECIAL
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#pag5" role="tab" aria-controls="messages" id="scroll3"><img src="images/4.png" style="width: 80px"><br>RECREACIÓN Y TURISMO</a>
  </li>


  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#pag6" role="tab" aria-controls="home" id="scroll8"><img src="images/3.png" style="width: 80px"><br>SALUD</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#pag7" role="tab" aria-controls="profile" id="scroll5"><img src="images/5.png" style="width: 50px"><br>UTRAVANCE</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#pag8" role="tab" aria-controls="profile" id="6"><img src="images/5.png" style="width: 50px"><br>UTRARÁPIDO</a>
  </li>-->
</ul>
</div>
</section>
<br><br><br>
<!-- ##### Newsletter Area Start ###### -->
<?php include 'suscribir.php';
 include 'pie.php';?>
<script type="text/javascript">
      //Thanks to: http://www.webtipblog.com/adding-scroll-top-button-website/

      $(document).ready(function(){

        $(function(){

          $(document).on( 'scroll', function(){

            if ($(window).scrollTop() > 100) {
              $('#scroll').addClass('show');
            } else {
              $('#scroll').removeClass('show');
            }
          });

          $('#scroll').on('click', scrollToTop);
        });

        $(function(){

          $(document).on( 'scroll', function(){

            if ($(window).scrollTop() > 100) {
              $('#scroll').addClass('show');
            } else {
              $('#scroll').removeClass('show');
            }
          });

          $('#scroll').on('click', scrollToTop);
        });

        $(function(){

          $(document).on( 'scroll', function(){

            if ($(window).scrollTop() > 100) {
              $('#scroll1').addClass('show');
            } else {
              $('#scroll1').removeClass('show');
            }
          });

          $('#scroll1').on('click', scrollToTop);
        });

        $(function(){

          $(document).on( 'scroll', function(){

            if ($(window).scrollTop() > 100) {
              $('#scroll2').addClass('show');
            } else {
              $('#scroll2').removeClass('show');
            }
          });

          $('#scroll2').on('click', scrollToTop);
        });


        $(function(){

          $(document).on( 'scroll', function(){

            if ($(window).scrollTop() > 100) {
              $('#scroll3').addClass('show');
            } else {
              $('#scroll3').removeClass('show');
            }
          });

          $('#scroll3').on('click', scrollToTop);
        });

        $(function(){

          $(document).on( 'scroll', function(){

            if ($(window).scrollTop() > 100) {
              $('#scroll4').addClass('show');
            } else {
              $('#scroll4').removeClass('show');
            }
          });

          $('#scroll4').on('click', scrollToTop);
        });

        $(function(){

          $(document).on( 'scroll', function(){

            if ($(window).scrollTop() > 100) {
              $('#scroll5').addClass('show');
            } else {
              $('#scroll5').removeClass('show');
            }
          });

          $('#scroll5').on('click', scrollToTop);
        });

        $(function(){

          $(document).on( 'scroll', function(){

            if ($(window).scrollTop() > 100) {
              $('#scroll6').addClass('show');
            } else {
              $('#scroll6').removeClass('show');
            }
          });

          $('#scroll6').on('click', scrollToTop);
        });

        $(function(){

          $(document).on( 'scroll', function(){

            if ($(window).scrollTop() > 100) {
              $('#scroll7').addClass('show');
            } else {
              $('#scroll7').removeClass('show');
            }
          });

          $('#scroll7').on('click', scrollToTop);
        });

        $(function(){

          $(document).on( 'scroll', function(){

            if ($(window).scrollTop() > 100) {
              $('#scroll8').addClass('show');
            } else {
              $('#scroll8').removeClass('show');
            }
          });

          $('#scroll8').on('click', scrollToTop);
        });



        function scrollToTop() {
          verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
          element = $('body');
          offset = element.offset();
          offsetTop = offset.top;
          $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
        }

      });

    </script>
  </body>

  </html>