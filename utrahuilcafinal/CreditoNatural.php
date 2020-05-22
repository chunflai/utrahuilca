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

                                      <!-- menunavbar vertical -->
                                      <nav id="menunavbar" class="paraizq">
                                       <ul>
                                        <li>
                                          <a href="index">Inicio</a>
                                        </li>
                                        <li>
                                          <p><b>Conózcanos</b></p>
                                          <ul>
                                            <li>
                                              <p>Quienes Somos</p>
                                              <ul>
                                                <li>
                                                  <a href="historia">Reseña histórica</a>
                                                </li>
                                                <li>
                                                  <a href="somos">Misión y Visión</a>
                                                </li>
                                                <li>
                                                  <a href="himno">Himno</a>
                                                </li>
                                              </ul>
                                            </li>
                                            <li>
                                              <a href="trabajo">Trabaje con nosotros</a>
                                            </li>
                                            <li>
                                              <a href="alianza">Alianzas</a>
                                            </li>
                                            <li>
                                              <a href="agencias">Agencias</a>
                                            </li>
                                            <li>
                                              <a href="pqrs">PQRSF</a>
                                            </li>
                                          </ul>
                                        </li>

                                        <li>
                                          <p><b>Ahorro</b></p>
                                          <ul>
                                            <li>
                                              <p>Persona Natural</p>
                                              <ul>
                                               <li>
                                                <a href="AhorroNatural.php?tabPag=1">Utracrecer</a>
                                              </li>
                                              <li>
                                                <a href="AhorroNatural.php?tabPag=2">Utradiario</a>
                                              </li>
                                              <li>
                                                <a href="AhorroNatural.php?tabPag=3">Aportes Sociales</a>
                                              </li>
                                              <li>
                                                <a href="AhorroNatural.php?tabPag=4">Ahorro Permanente</a>
                                              </li>
                                              <li>
                                                <a href="AhorroNatural.php?tabPag=5">Utramás</a>
                                              </li>

                                              <li>
                                                <a href="AhorroNatural.php?tabPag=6">Utravivienda</a>
                                              </li>
                                              <li>
                                                <a href="AhorroNatural.php?tabPag=7">CDAT</a>
                                              </li>
                                              <li>
                                                <a href="AhorroNatural.php?tabPag=8">Infantil-Juvenil</a>
                                              </li>
                                              <li>
                                                <a href="AhorroNatural.php?tabPag=9">Utra-Amigos</a>
                                              </ul>
                                            </li>
                                            <li>
                                              <p>Persona Jurídica</p>
                                              <ul>
                                                <li>
                                                  <a href="AhorroJuridico_Empresas.php?tabPag=1">Aportes Sociales</a>
                                                </li>
                                                <li>
                                                  <a href="AhorroJuridico_Empresas.php?tabPag=2">Ahorro Permanente</a>
                                                </li>
                                                <li>
                                                  <a href="AhorroJuridico_Empresas.php?tabPag=3">Utramás</a>
                                                </li>
                                                <li>
                                                  <a href="AhorroNatural.php?tabPag=4">Utracrecer</a>
                                                </li>
                                                <li>
                                                  <a href="AhorroNatural.php?tabPag=5">Utradiario</a>
                                                </li>
                                                <li>
                                                  <a href="AhorroNatural.php?tabPag=6">CDAT</a>
                                                </li>
                                              </ul>
                                            </li>

                                          </ul>
                                        </li>

                                        <li>
                                          <p><b>Crédito</b></p>
                                          <ul>
                                            <li>
                                              <p>Persona Natural</p>
                                              <ul>
                                               <li>
                                                <a href="CreditoNatural.php?tabPag=1">Libre Inversión</a>
                                              </li>
                                              <li>
                                                <a href="CreditoNatural.php?tabPag=2">Microcrédito</a>
                                              </li>
                                              <li>
                                                <a href="CreditoEducativo.php">Educativo</a>
                                              </li>
                                              <li>
                                                <a href="CreditoNatural.php?tabPag=3">Utravance</a>
                                              </li>
                                              <li>
                                                <a href="CreditoNatural.php?tabPag=4">Utrarápido</a>
                                              </li>
                                              <li>
                                                <a href="CreditoNatural.php?tabPag=5">Especial</a>
                                              </li>
                                              <li>
                                                <a href="CreditoNatural.php?tabPag=6">Recreación y Turismo</a>
                                              </li>
                                              <li>
                                                <a href="CreditoNatural.php?tabPag=7">Salud</a>
                                              </li>
                                              <li>
                                                <a href="CreditoNatural.php?tabPag=8">Bienes e Inmuebles</a>
                                              </li>
                                            </ul>
                                          </li>     
                                          <li>
                                            <p>Persona Jurídica</p>
                                            <ul>
                                             <li>
                                              <a href="CreditoJuridico_Empresas.php?tabPag=1">Especial</a>
                                            </li>
                                            <li>
                                              <a href="CreditoJuridico_Empresas.php?tabPag=2">Utrarápido</a>
                                            </li>
                                            <li>
                                              <a href="CreditoJuridico_Empresas.php?tabPag=3">Libre Inversión</a>
                                            </li>
                                            <li>
                                              <a href="CreditoJuridico_Empresas.php?tabPag=4">Bienes e Inmuebles</a>
                                            </li>
                                            <li>
                                              <a href="CreditoJuridico_Empresas.php?tabPag=5">Microcrédito</a>
                                            </li>
                                          </ul>
                                        </li>
                                      </ul>
                                    </li>

                                    <li>
                                      <p><b>Enterése</b></p>
                                      <ul>
                                       <?php 
                                       $sql=" SELECT * FROM tasa WHERE estado=1";
                                       $result=mysqli_query($conexion,$sql);
                                       while ($mostrar=mysqli_fetch_array($result)) {
                                        ?>
                                        <li>
                                          <a href="../file1/<?php  echo $mostrar['archivost'];?>" target="_blank">Tasas</a>
                                        </li>
                                      <?php }  ?>
                                      <?php 
                                      $sql=" SELECT * FROM tarifas WHERE estado=1";
                                      $result=mysqli_query($conexion,$sql);
                                      while ($mostrar=mysqli_fetch_array($result)) {
                                        ?>
                                        <li>
                                          <a href="../file1/<?php  echo $mostrar['archivost'];?>"target="_blank" >Tarifas</a>
                                        </li>
                                      <?php }  ?>
                                      <li>
                                        <a href="#format">Formatos</a>
                                      </li>
                                      <li>
                                        <a href="javascript:mostrarVentanaRevalorizacion();">Revalorizaciones</a>
                                      </li>
                                      <li>
                                        <a href="">Concursos</a>
                                        <ul>
                                          <li>
                                            <a href="javascript:mostrarVentanaConcurso();">Ahorrando Voy Ganando</a>
                                          </li>
                                          <li>
                                            <a href="javascript:mostrarVentanaConcursoBRE();">Meses Bre</a>
                                          </li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </li>
                                  <li>
                                    <p><b>¿Qué necesita?</b></p>
                                  </li>
                                  <li style="margin-let: -20px; padding: 0 !important">
                                    <p><img src="AgenciaVirtual/Cooperativa_Virtual_Utrahuilca_OK-03.svg" class="img-fluid" alt="img-virtual"  /></p>
                                    <ul>
                                      <li>
                                        <p>SOY ASOCIADO - Persona Natural</p>
                                        <ul>
                                          <li>
                                            <a  href="#exampleModal" data-toggle="modal">Transferencias</a>
                                          </li>
                                          <li>
                                            <a  href="#exampleModal" data-toggle="modal">Pagos</a>
                                          </li>
                                          <li>
                                            <a href="#UtraPortalNuatural" data-toggle="modal">Certificados</a>
                                          </li>
                                          <li>
                                            <a href="#UtraPortalNuatural" data-toggle="modal">Consultas de Cuentas</a>
                                          </li>
                                          <li>
                                            <a href="#UtraPortalNuatural" data-toggle="modal">Extractos</a>
                                          </li>
                                        </ul>
                                        <br>
                                        <p>SOY ASOCIADO - Persona Jurídica</p>
                                        <ul>
                                          <li>
                                            <a href="#UtraPortalJuridica" data-toggle="modal">Certificados</a>
                                          </li>
                                          <li>
                                            <a href="#UtraPortalJuridica" data-toggle="modal">Consultas de Cuentas</a>
                                          </li>
                                          <li>
                                            <a href="#UtraPortalJuridica" data-toggle="modal">Extractos</a>
                                          </li>
                                        </ul>

                                      </li>
                                    </ul>
                                  </li>
                                </ul>

                                <a href="#" id="showmenunavbar"> <i class="fa fa-align-justify"></i></a> </nav>
                                <!-- /menunavbar vertical --> 



                                <!-- ##### Header Area Start ##### -->
                                <header class="header-area">
                                  <div class="top-header-area">
                                    <div class="container h-100">
                                      <div class="row h-100 align-items-center">
                                        <div class="col-12 d-flex justify-content-between">
                                          <!-- Logo Area -->
                                          <div class="logo"></div>
                                          <div class="top-contact-info d-flex align-items-center">
                                           <span>Siguenos En </span>
                                           <a href="https://www.facebook.com/utrahuilca/"><i class="fa fa-facebook" aria-hidden="true"></i></a> <span></span>
                                           <a href="https://twitter.com/utrahuilca?lang=es"><i class="fa fa-twitter" aria-hidden="true"></i>   </a>  <span></span>
                                           <a href="https://www.instagram.com/utrahuilca/"><i class="fa fa-instagram" aria-hidden="true"></i>   </a>  <span></span>
                                           <a href="https://www.linkedin.com/company/cooperrativa-latinoamericana-de-ahorro-y-cr%C3%A9dito-utrahuilca/"><i class="fa fa-linkedin" aria-hidden="true"></i>  </a> <span></span>
                                           <a href="https://www.youtube.com/channel/UCZa_TvUo3FlzVz-jnn_67jw"><i class="fa fa-youtube" aria-hidden="true"></i>  </a>
                <!--<form  role="search">
                                                    <div>
                                                        <input type="search" id="mySearch" name="q" placeholder="Buscar" size="30">
                                                        <button><i class="fa fa-search" aria-hidden="true"></i></button>
                                                      </div>
                                                    </form>-->
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="credit-main-menu" id="sticker">
                                            <div class="classy-nav-container navbar-expand-sm breakpoint-off">
                                              <div class="container">
                                                <nav class="classy-navbar" id="creditNav">
                                                  <div class="classy-navbar-toggler"></div>
                                                  <div class="contact">
                                                    <a href="index"><img src="img/core-img/logo.png" alt=""></a>
                                                  </div>
                                                  <div class="classy-menu">
                                                    <div class="classycloseIcon">
                                                      <div class="cross-wrap"></div>
                                                    </div>
                                                    <div>
                                                      <ul class="navmax">
                                                        <li>
                                                          <a href="index"><i class="fa fa-home"></i><b>Inicio</b></a>
                                                        </li>
                                                        <li>
                                                          <a href=""><b>Conózcanos</b></a>
                                                          <ul>
                                                            <li>
                                                              <a href="">Quiénes somos</a>
                                                              <ul>
                                                                <li>
                                                                  <a href="historia">Reseña histórica</a>
                                                                </li>
                                                                <li>
                                                                  <a href="somos">Misión y Visión</a>
                                                                </li>
                                                                <li>
                                                                  <a href="himno">Himno</a>
                                                                </li>
                                                              </ul>
                                                            </li>
                                                            <li>
                                                              <a href="trabajo">Trabaje con nosotros</a>
                                                            </li>
                                                            <li>
                                                              <a href="alianza">Alianzas</a>
                                                            </li>
                                                            <li>
                                                              <a href="agencias">Agencias</a>
                                                            </li>
                                                            <li>
                                                              <a href="pqrs">PQRSF</a>
                                                            </li>
                                                          </ul>
                                                        </li>
                                                        <li>
                                                          <a href=""><b>Ahorro</b></a>
                                                          <ul>
                                                            <li>
                                                              <a href="">Persona Natural</a>
                                                              <ul>
                                                               <li>
                                                                <a href="AhorroNatural.php?tabPag=1">Utracrecer</a>
                                                              </li>
                                                              <li>
                                                                <a href="AhorroNatural.php?tabPag=2">Utradiario</a>
                                                              </li>
                                                              <li>
                                                                <a href="AhorroNatural.php?tabPag=3">Aportes Sociales</a>
                                                              </li>
                                                              <li>
                                                                <a href="AhorroNatural.php?tabPag=4">Ahorro Permanente</a>
                                                              </li>
                                                              <li>
                                                                <a href="AhorroNatural.php?tabPag=5">Utramás</a>
                                                              </li>

                                                              <li>
                                                                <a href="AhorroNatural.php?tabPag=6">Utravivienda</a>
                                                              </li>
                                                              <li>
                                                                <a href="AhorroNatural.php?tabPag=7">CDAT</a>
                                                              </li>
                                                              <li>
                                                                <a href="AhorroNatural.php?tabPag=8">Infantil-Juvenil</a>
                                                              </li>
                                                              <li>
                                                                <a href="AhorroNatural.php?tabPag=9">Utra-Amigos</a>
                                                              </li>
                                                            </ul>
                                                          </li>
                                                          <li>
                                                            <a href="">Persona Jurídica</a>
                                                            <ul>
                                                              <li>
                                                                <a href="AhorroJuridico_Empresas.php?tabPag=1">Aportes Sociales</a>
                                                              </li>
                                                              <li>
                                                                <a href="AhorroJuridico_Empresas.php?tabPag=2">Ahorro Permanente</a>
                                                              </li>
                                                              <li>
                                                                <a href="AhorroJuridico_Empresas.php?tabPag=3">Utramás</a>
                                                              </li>
                                                              <li>
                                                                <a href="AhorroNatural.php?tabPag=4">Utracrecer</a>
                                                              </li>
                                                              <li>
                                                                <a href="AhorroNatural.php?tabPag=5">Utradiario</a>
                                                              </li>
                                                              <li>
                                                                <a href="AhorroNatural.php?tabPag=6">CDAT</a>
                                                              </li>
                                                            </ul>
                                                          </li>

                                                        </ul>
                                                      </li>
                                                      <li>
                                                        <a href=""><b>Crédito</b></a>
                                                        <ul>
                                                          <li>
                                                            <a href="">Persona Natural</a>
                                                            <ul>
                                                              <li>
                                                                <a href="CreditoNatural.php?tabPag=1">Libre Inversión</a>
                                                              </li>
                                                              <li>
                                                                <a href="CreditoNatural.php?tabPag=2">Microcrédito</a>
                                                              </li>
                                                              <li>
                                                                <a href="CreditoEducativo.php">Educativo</a>
                                                              </li>
                                                              <li>
                                                                <a href="CreditoNatural.php?tabPag=3">Utravance</a>
                                                              </li>
                                                              <li>
                                                                <a href="CreditoNatural.php?tabPag=4">Utrarápido</a>
                                                              </li>
                                                              <li>
                                                                <a href="CreditoNatural.php?tabPag=5">Especial</a>
                                                              </li>
                                                              <li>
                                                                <a href="CreditoNatural.php?tabPag=6">Recreación y Turismo</a>
                                                              </li>
                                                              <li>
                                                                <a href="CreditoNatural.php?tabPag=7">Salud</a>
                                                              </li>
                                                              <li>
                                                                <a href="CreditoNatural.php?tabPag=8">Bienes e Inmuebles</a>
                                                              </li>
                                                            </ul>
                                                          </li>     
                                                          <li>
                                                            <a href="">Persona Jurídica</a>
                                                            <ul>
                                                             <li>
                                                              <a href="CreditoJuridico_Empresas.php?tabPag=1">Especial</a>
                                                            </li>
                                                            <li>
                                                              <a href="CreditoJuridico_Empresas.php?tabPag=2">Utrarápido</a>
                                                            </li>
                                                            <li>
                                                              <a href="CreditoJuridico_Empresas.php?tabPag=3">Libre Inversión</a>
                                                            </li>
                                                            <li>
                                                              <a href="CreditoJuridico_Empresas.php?tabPag=4">Bienes e Inmuebles</a>
                                                            </li>
                                                            <li>
                                                              <a href="CreditoJuridico_Empresas.php?tabPag=5">Microcrédito</a>
                                                            </li>
                                                          </ul>
                                                        </li>
                                                      </ul>
                                                    </li>
                                                    <li>
                                                      <a href=""><b>Enterése</b></a>
                                                      <ul>
                                                       <?php 
                                                       $sql=" SELECT * FROM tasa WHERE estado=1";
                                                       $result=mysqli_query($conexion,$sql);
                                                       while ($mostrar=mysqli_fetch_array($result)) {
                                                        ?>
                                                        <li>
                                                          <a href="../file1/<?php  echo $mostrar['archivost'];?>" target="_blank">Tasas</a>
                                                        </li>
                                                      <?php }  ?>
                                                      <?php 
                                                      $sql=" SELECT * FROM tarifas WHERE estado=1";
                                                      $result=mysqli_query($conexion,$sql);
                                                      while ($mostrar=mysqli_fetch_array($result)) {
                                                        ?>
                                                        <li>
                                                          <a href="../file1/<?php  echo $mostrar['archivost'];?>"target="_blank" >Tarifas</a>
                                                        </li>
                                                      <?php }  ?>
                                                      <li>
                                                        <a href="index.php#format">Formatos</a>
                                                      </li>
                                                      <li>
                                                        <a href="javascript:mostrarVentanaRevalorizacion();">Revalorizaciones</a>
                                                      </li>
                                                      <li>
                                                        <a href="">Concursos</a>
                                                        <ul>
                                                          <li>
                                                            <a href="javascript:mostrarVentanaConcurso();">Ahorrando Voy Ganando</a>
                                                          </li>
                                                          <li>
                                                            <a href="javascript:mostrarVentanaConcursoBRE();">Meses Bre</a>
                                                          </li>
                                                        </ul>
                                                      </li>
                                                    </ul>
                                                  </li>
                                                  <li>
                                                    <a href=""><b>¿Qué necesita?</b></a>
                                                  </li>
                                                </ul>
                                              </div>
                                              <div class="classynav">
                                                <ul>
                                                  <li class="float-right position-absolute imgcoop" id="imgempresa" style=
                                                  "z-index: 10000 !important;">
                                                  <div class="megamenu position-absolute " id="virtualCoop">
                                                    <div id="persona" style="z-index: 1 !important; padding: 0; margin:0" class="ml-5 mr-5 py-3">
                                                      <ul style="padding: 0; margin:0; margin-top: 20px">
                                                        <li class="" style="color: black!important; font-weight: bold;margin-left: 5%;cursor: pointer;font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;font-size: 17px;">
                                                          SOY ASOCIADO - Persona Natural
                                                          <ul>
                                                            <li>
                                                              <a href="#exampleModal" data-toggle="modal" style=
                                                              "font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;"  title=
                                                              "Por medio de Nuestra Cooperativa virtual en esta Sección Prodras Relizar Consultas de Tus Cuentas de Ahorro">
                                                            Transferencias</a>
                                                          </li>
                                                          <li>
                                                            <a href="#exampleModal" data-toggle="modal" style=
                                                            "font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;" title=
                                                            "Por medio de Nuestra Cooperativa virtual en esta Sección Prodras Relizar Consultas de Extractos">
                                                          Pagos</a>
                                                        </li>
                                                        <li>
                                                          <a href="#UtraPortalNuatural" data-toggle="modal" style=
                                                          "font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;"  title=
                                                          "Por medio de Nuestra Cooperativa virtual en esta Sección Prodras Relizar Consultas de Extractos">
                                                        Certificados</a>
                                                      </li>
                                                      <li>
                                                        <a href="#UtraPortalNuatural" data-toggle="modal" style=
                                                        "font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;"  title=
                                                        "Por medio de Nuestra Cooperativa virtual en esta Sección Prodras Relizar Consultas de Extractos">
                                                      Consultas de Cuentas</a>
                                                    </li>
                                                    <li>
                                                      <a href="#UtraPortalNuatural" data-toggle="modal" style=
                                                      "font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;"  title=
                                                      "Por medio de Nuestra Cooperativa virtual en esta Sección Prodras Relizar Consultas de Extractos">
                                                    Extractos</a>
                                                  </li>
                                                </ul>
                                              </li>
                                            </ul>
                                            <br>
                                            <ul>
                                              <li class="" style=
                                              "color: black!important; font-weight: bold;margin-left: 5%;cursor: pointer; font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;font-size: 17px;">
                                              SOY ASOCIADO - Persona  Jurídica
                                              <ul>
                                                <li>
                                                  <a href="#UtraPortalJuridica" data-toggle="modal" style=
                                                  "font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;"  title=
                                                  "Por medio de Nuestra Cooperativa virtual en esta Sección Prodras Relizar Consultas de Extractos">
                                                Consultas de Cuentas</a>
                                              </li>
                                              <li>
                                                <a href="#UtraPortalJuridica" data-toggle="modal" style=
                                                "font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;"  title=
                                                "Por medio de Nuestra Cooperativa virtual en esta Sección Prodras Relizar Consultas de Extractos">
                                              Extractos</a>
                                            </li>
                                            <li>
                                              <a href="#UtraPortalJuridica" data-toggle="modal" style=
                                              "font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;"  title=
                                              "Por medio de Nuestra Cooperativa virtual en esta Sección Prodras Relizar Consultas de Extractos">
                                            Certificados</a>
                                          </li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                    </div>
                  </div>
                </div>
              </header>
              <!-- Modal -->
              <div class="modal fade bd-example-modal-lg" tabindex="-1" id="exampleModal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-header bg-white font-weight-bold" style="width: 165px; height:55px">
                    <b>Soy Asociado <br>
                    Persona Natural</b>
                  </div>
                  <div class="modal-content" style="border: 1px solid white">
                    <div class="modal-body pb-5 mt-3" style="margin: 0;padding: 0;">
                      <div id="contenido1">
                        <nav>
                          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist" style="background: #1f8a32">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><b style="font-size: 25px; color: white">¿Usuario <br> Nuevo?</b></a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><b style="font-size: 25px; color: white">Usuario <br>Registrado</b></a>
                          </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <h1 class="text-center mt-5" style="color: #eb9008">Tenga en Cuenta</h1>
                            <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">Sí aún no está registrado en la cooperativa virtual, acérquese a la agencia de UTRAHUILCA más cercana, actualice sus datos y realice el registro con su asesor de confianza; si ya actualizó sus datos durante el último año y no cuenta con una agencia a su alcance, realice los siguientes pasos:</p>
                            <div class="float-right mr-5" style="cursor: pointer;">
                              <div id="next1"><h1 style="color: #eb9008">Continúe <i class="fa fa-forward fa-lg" aria-hidden="true"></i></h1></div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="col text-center mt-5">
                              <button class="btn btn-lg text-white w-50"  role="link" onclick="window.location=' https://multiportal.redcoopcentral.com/multiportalvisio/Login/Index?ENTIDAD=00000048#'" style="background: #eb9008">Ingresar</button>
                              <p class="font-weight-bold"> <a href="#Recomendaciones" data-toggle="modal" >Ver recomendaciones de seguridad </a></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="contenido2" style="display: none;">
                        <h1 class="text-center mt-5" style="color: #eb9008">Paso No. 1</h1>
                        <center>
                          <p class="text-dark mt-3 ml-5 mb-5 w-50 mr-5" style="font-size: 25px">Descargue el formato de solicitud del servicio virtual <b style="color:#eb9008; font-size: 30px"> <a href="AgenciaVirtual/ASO-FO-020 SOLICITUD SERVICIO MULTIPOTAL UTRAHUILCA.docx" target="_blank"> AQUÍ.</a></b></p>
                        </center>
                        <div class="float-left mr-5 ml-5" style="cursor: pointer;"> 
                          <div id="previus2"><h1 style="color: #eb9008"><i class="fa fa-backward fa-lg" aria-hidden="true"></i> Atrás</h1></div>
                        </div>
                        <div class="float-right mr-5" style="cursor: pointer;"> 
                          <div id="next2"><h1 style="color: #eb9008">Continúe <i class="fa fa-forward fa-lg" aria-hidden="true"></i></h1></div>
                        </div>
                      </div>
                      <div id="contenido3" style="display: none">
                        <h1 class="text-center mt-5" style="color: #eb9008">Paso No. 2</h1>
                        <center>
                          <p class="text-dark mt-3 ml-5 mb-5 w-50 mr-5" style="font-size: 25px">Diligencie, imprima, <b style="color:#eb9008; font-size: 30px"> firme </b> y escaneé el formato.</p>
                        </center>
                        <div class="float-left mr-5 ml-5" style="cursor: pointer;"> 
                          <div id="previus3"><h1 style="color: #eb9008"><i class="fa fa-backward fa-lg" aria-hidden="true"></i> Atrás</h1></div>
                        </div>
                        <div class="float-right mr-5" style="cursor: pointer;">
                          <div id="next3"><h1 style="color: #eb9008">Continúe <i class="fa fa-forward fa-lg" aria-hidden="true"></i></h1></div>
                        </div>
                      </div>
                      <div id="contenido4" style="display: none">
                        <h1 class="text-center mt-5" style="color: #eb9008">Paso No. 3</h1>
                        <center>
                          <p class="text-dark mt-3 ml-5 mb-5 w-75 mr-5" style="font-size: 25px">Envíe el formato firmado al correo electrónico: <br><b style="color:#eb9008; font-size: 30px"> admonoperacion@utrahuilca.com </b> </p>
                        </center>
                        <div class="float-left mr-5 ml-5" style="cursor: pointer;"> 
                          <div id="previus4"><h1 style="color: #eb9008"><i class="fa fa-backward fa-lg" aria-hidden="true"></i> Atrás</h1></div>
                        </div>
                        <div class="float-right mr-5" style="cursor: pointer;">
                          <div id="next4"><h1 style="color: #eb9008">Continúe <i class="fa fa-forward fa-lg" aria-hidden="true"></i></h1></div>
                        </div>
                      </div>
                      <div id="contenido5" style="display: none">
                        <h1 class="text-center mt-5" style="color: #eb9008">Paso No. 4</h1>
                        <center>
                          <p class="text-dark mt-3 ml-5 mb-5 w-75 mr-5" style="font-size: 25px">De 24 a 48 horas, UTRAHUILCA enviará un correo electrónico para continuar con el registro. </p>
                        </center>
                        <div class="float-left mr-5 ml-5" style="cursor: pointer;"> 
                          <div id="previus5"><h1 style="color: #eb9008"><i class="fa fa-backward fa-lg" aria-hidden="true"></i> Atrás</h1></div>
                        </div>
                        <div class="float-right mr-5" style="cursor: pointer;">
                          <div id="next5"><h1 style="color: #eb9008">Cerrar <i class="fa fa-close fa-lg" aria-hidden="true"></i></h1></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ##### Header Area End ##### -->

              <!-- Modal -->
              <div class="modal fade bd-example-modal-lg" tabindex="-1" id="UtraPortalNuatural" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-header bg-white font-weight-bold" style="width: 165px; height:55px">
                    <b>Soy Asociado <br>
                    Persona Natural</b>
                  </div>
                  <div class="modal-content" style="border: 1px solid white">
                    <div class="modal-body pb-5 mt-3" style="margin: 0;padding: 0;">
                      <div id="contenido11">
                        <nav>
                          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist" style="background: #1f8a32">
                            <a class="nav-item nav-link active" id="nav-home-tab1" data-toggle="tab" href="#nav-home1" role="tab" aria-controls="nav-home" aria-selected="true"><b style="font-size: 25px; color: white">¿Usuario <br> Nuevo?</b></a>
                            <a class="nav-item nav-link" id="nav-profile-tab1" data-toggle="tab" href="#nav-profile1" role="tab" aria-controls="nav-profile" aria-selected="false"><b style="font-size: 25px; color: white">Usuario <br>Registrado</b></a>
                          </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-home1" role="tabpanel" aria-labelledby="nav-home-tab">
                            <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">
                            Debe tener correo electrónico y número de celular actualizado y correcto, ya que estos serán los medios que se usarán para la confirmación al momento de registro.</p>
                            <div class="col text-center mt-5">
                              <button class="btn btn-lg text-white w-50"  role="link" onclick="window.location='http://192.168.101.137:8081/Registry.aspx'" style="background: #eb9008">Registrarse</button>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="nav-profile1" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">
                            Podrá realizar consultas de información, generar extractos, certificaciones tributarias y Certificado de Asociado.</p>
                            <div class="col text-center mt-5">
                              <button class="btn btn-lg text-white w-50" role="link" onclick="window.location='http://192.168.101.137:8081/Login.aspx'" style="background: #eb9008">Ingresar</button>
                              <p class="font-weight-bold"> <a href="#Recomendaciones" data-toggle="modal" >Ver recomendaciones de seguridad </a></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ##### Header Area End ##### -->
              <!-- Modal -->
              <div class="modal fade bd-example-modal-lg" tabindex="-1" id="UtraPortalJuridica" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-header bg-white font-weight-bold" style="width: 165px; height:55px">
                    <b>Soy Asociado <br>
                    Persona Jurídica</b>
                  </div>
                  <div class="modal-content" style="border: 1px solid white">
                    <div class="modal-body pb-5 mt-3" style="margin: 0;padding: 0;">
                      <div id="contenido11">
                        <nav>
                          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist" style="background: #1f8a32">
                            <a class="nav-item nav-link active" id="nav-home-tab2" data-toggle="tab" href="#nav-home2" role="tab" aria-controls="nav-home" aria-selected="true"><b style="font-size: 25px; color: white">¿Usuario <br> Nuevo?</b></a>
                            <a class="nav-item nav-link" id="nav-profile-tab2" data-toggle="tab" href="#nav-profile2" role="tab" aria-controls="nav-profile" aria-selected="false"><b style="font-size: 25px; color: white">Usuario <br>Registrado</b></a>
                          </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-home2" role="tabpanel" aria-labelledby="nav-home-tab">
                            <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">
                            Debe tener correo electrónico y número de celular actualizado y correcto, ya que estos serán los medios que se usarán para la confirmación al momento de registro.</p>
                            <div class="col text-center mt-5">
                              <button class="btn btn-lg text-white w-50"  role="link" onclick="window.location='http://192.168.101.137:8081/Registry.aspx'" style="background: #eb9008">Registrarse</button>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">
                            Podrá realizar consultas de información, generar extractos, certificaciones tributarias y Certificado de Asociado.</p>
                            <div class="col text-center mt-5">
                              <button class="btn btn-lg text-white w-50" role="link" onclick="window.location='http://192.168.101.137:8081/Login.aspx'" style="background: #eb9008">Ingresar</button>
                              <p class="font-weight-bold"> <a href="#Recomendaciones" data-toggle="modal" >Ver recomendaciones de seguridad </a></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ##### Header Area End ##### -->

              <!-- Modal -->
              <div class="modal fade bd-example-modal-lg" tabindex="-1" id="Recomendaciones" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-header bg-white font-weight-bold" style="width: 165px; height:55px">
                    <b>Recomendaciones
                    </b>
                  </div>
                  <div class="modal-content" style="border: 1px solid white">
                    <div class="modal-body pb-5 mt-3" style="margin: 0;padding: 0;">
                      <div id="contenido6">
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <h3 class="text-center mt-5" style="color: #eb9008">TENGA EN CUENTA LAS SIGUIENTES RECOMENDACIONES DE SEGURIDAD:</h3>
                            <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">Realice sus transacciones únicamente desde equipos de uso personal, evite el uso de equipos ubicados en sitios públicos o que no sean de absoluta confianza como los café Internet, salas universitarias o lugares donde extraños puedan tener acceso a su información confidencial. </p>
                            <div class="float-right mr-5" style="cursor: pointer;">
                              <div id="next6"><h1 style="color: #eb9008">Continúe <i class="fa fa-forward fa-lg" aria-hidden="true"></i></h1></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="contenido7" style="display: none;">
                        <h1 class="text-center mt-5" style="color: #eb9008">Recomendaciones</h1>
                        <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">Nunca ingrese a través de enlaces en correos electrónicos falsos (phishing), que puedan llevarle a sitios fraudulentos. Recuerde que UTRAHUILCA no solicita información confidencial por este medio. <br></p>

                        <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">El Usuario y la Clave Principal es personal e intransferible, no se puede compartir con nadie, darlas a conocer generará riesgos de fraudes.<br></p>
                        <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">Utilice contraseñas fáciles de recordar para usted, memorícelas y no la escriba en ningún lugar, en caso de olvidar la clave debe ingresar a la Cooperativa Virtual UTRAHUILCA para reestablecerla.<br></p>



                        <div class="float-right mr-5" style="cursor: pointer;">
                          <div id="next7"><h1 style="color: #eb9008">Continúe <i class="fa fa-forward fa-lg" aria-hidden="true"></i></h1></div>
                        </div>
                      </div>

                      <div id="contenido8" style="display: none">
                        <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">Para mayor seguridad NO utilice en sus claves: 
                          <i class="fa fa-check "></i> Secuencia de números, ejemplo: 1234, 5678…
                          <br>
                        </p>
                        <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px"> <i class="fa fa-check "></i> Los números de su teléfono celular, fecha de cumpleaños, fechas de nacimiento, número de documento de identidad o dirección.
                          <br>
                          <i class="fa fa-check "></i> El mismo carácter, por ejemplo 1111, 2222, 3333 …
                          <br>
                          <i class="fa fa-check "></i> Los mimos caracteres numéricos que conforman el nombre de su usuario en la agencia virtual (Si los tiene).
                          <br></p>
                          <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">Utilice contraseñas fáciles de recordar para usted, memorícelas y no la escriba en ningún lugar, en caso de olvidar la clave debe ingresar a la Cooperativa Virtual UTRAHUILCA para reestablecerla.<br></p>

                          <div class="float-right mr-5" style="cursor: pointer;">
                            <div id="next8"><h1 style="color: #eb9008">Continúe <i class="fa fa-forward fa-lg" aria-hidden="true"></i></h1></div>
                          </div>
                        </div>
                        <div id="contenido9" style="display: none">
                          <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">UTRAHUILCA nunca solicitará el cambio de claves a través de correo electrónico o mensajes de texto.<br></p>
                          <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">Nunca preste su cuenta para recibir fondos cuyo origen usted desconoce.<br></p>
                          <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">El Usuario y la Clave Principal es personal e intransferible, no se puede compartir con nadie, darlas a conocer generará riesgos de fraudes. <br></p>
                          <div class="float-right mr-5" style="cursor: pointer;">
                            <div id="next9"><h1 style="color: #eb9008">Continúe <i class="fa fa-forward fa-lg" aria-hidden="true"></i></h1></div>
                          </div>
                        </div>

                        <div id="contenido10" style="display: none">
                          <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">La Cooperativa Virtual UTRAHUILCA no permite conexiones simultáneas, por lo tanto el usuario solo podrá tener una única sesión activa.<br></p>
                          <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">Asegurarse de cerrar sesión una vez termine las transacciones para evitar que otros ingresen a ella. Dejar las sesiones abiertas pone en peligro la privacidad y seguridad de su información. Siempre finalice la sesión de Cooperativa Virtual UTRAHUILCA a través de la opción “Cierre de Sesión”.<br></p>
                          <div class="float-right mr-5" style="cursor: pointer;">
                            <button type="button"  data-dismiss="modal"><h1 style="color: #eb9008">Cerrar <i class="fa fa-close fa-lg" aria-hidden="true"></i></h1></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ##### Header Area End ##### -->



                <!-- ##### Call To Action Start ###### -->
                <section class="cta-area d-flex flex-wrap">
                  <!-- Cta Content -->
                  <div class="cta-content">
                    <!-- Section Heading -->
                    <div class="section-heading white">
                      <p>Productos</p>
                      <h2>Personas naturales</h2>
                    </div>
                    <h6>Conoce nuestros productos de crédito.</h6>
                  </div>         
                  <div class="cta-thumbnail bg-img jarallax" style="background-image: url(img/bg-img/5.jpg);"></div>    
                </section>

                <section class="services-area section-padding-100-0">
                  <div class="container">
                    <div class="tab-content">
                     <!--page 1 de credito de libre inversión-->
                     <div class="tab-pane active" id="pag1" role="tabpanel">
                      <div class="sv-tab-panel">
                       <div class="container">


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
                                <div class="container" style="margin-left: 15%">
                                  <h3>Descripción </h3>
                                  <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                    Esta es la línea de crédito para nuestros asociados y asociadas que desean adquirir su vehículo, electrodomésticos y demás necesidades con destinos varios.
                                  </p>
                                  <br>
                                  <h5 style="font-size: medium">Dirigido a:</h5>
                                  <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                    Personas natural mayor de 18 años.
                                  </p>
                                  <br>
                                  <h5 style="font-size: medium">  Monto Máximo:</h5>
                                  <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                   Hasta 200 SMMLV 
                                 </p>
                                 <br>
                                 <h5 style="font-size: medium">Plazo Máximo:</h5>
                                 <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                   60 Meses 
                                 </p>
                                 <br>
                                 <h5 style="font-size: medium">Forma de pago:</h5>
                                 <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                  Débito automático - Libranza - Ventanilla
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

                               <lo>

                                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">La administración de la cuenta Utrasocial es totalmente gratis.<br></li>
                                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Obtiene incremento anual por la liquidación de la revalorización de sus aportes sociales.<br></li>
                                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">  El saldo de Utrasocial y Ahorro permanente, más la antigüedad de vinculación aumentan la  reciprocidad para solicitar crédito.<br></li>
                                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Es un ahorro para el futuro del asociado/a, no tiene límites de ahorro.<br></li>
                                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">El bajo costo de la cuota estatutaria permite estar al día mes a mes.<br></li>
                                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> La cuota de Utrasocial y Ahorro permanente la puede cancelar anticipadamente o en la forma que más le convenga al asociado/a y así ahorrar tiempo.<br></li>
                                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Subsidio económico de apoyo solidario en caso de fallecimiento del asociado/a.<br></li>
                                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">  Estar al día en Utrasocial le permite al asociado/a recibir el 50% del subsidio en su previsión exequial en convenio con EMCOFUN LOS OLIVOS .<br></li>
                                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Estar al día en los aportes sociales y en el ahorro permanente le permite a los asociado/a la participación democrática en la propiedad de la cooperativa y otorgan el derecho a vincularse en la gestión y uso de los servicios.<br></li>
                                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Todo asociado/a tiene el deber de completar y mantener como Aporte Social Ordinario,  el equivalente a un  SMMLV de acuerdo al tipo de asociado/a.<br></li>
                                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Con esta cuenta de ahorro el asociado/a más otras condiciones puede quedar hábil para participar en los procesos electorales y demás aspectos relacionados con las Asambleas Generales Anuales de la Cooperativa.<br></li>
                                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">  Los/as asociados/as a UTRAHUILCA, tienen derecho a los servicios y beneficios que ofrece la Cooperativa, en reciprocidad al valor de su Aporte Social y Ahorro Permanente Ordinarios, Extraordinarios y Adicionales o Voluntarios y al promedio de sus otras cuentas de ahorros, siempre y cuando estén al día en el pago de su Aporte Social y Ahorro Permanente Ordinarios.<br></li>
                                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> UTRASOCIAL hace parte del patrimonio de la Cooperativa.</li>
                               </lo>
                             </div>
                           </div>
                         </div>
                         <div class="tab-pane" id="pagina28" role="tabpanel">
                          <div class="sv-tab-panel">
                            <!-- ##### Header Area End ##### -->
                            <div class="container" style="margin-left: 15%">
                              <h3 >
                               Requisitos
                             </h3>

                             <lo>
                               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Ser asociado o asociada de UTRAHUILCA.<br></li>
                               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Encontrarse al día en el cumplimiento de sus obligaciones legales y estatutarias con la  Cooperativa.<br></li>
                               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Demostrar su real capacidad de pago y solvencia mediante ingresos lícitos bien sea de su relación laboral, actividades profesionales, productivas, comerciales y servicios.<br></li>
                               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Cuando se trate de proyectos productivos se debe anexar el plan de negocios, con flujo de caja incluyendo la cuota del crédito solicitado.<br></li>
                               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Presentar las garantías y documentación que le sean solicitadas, incluyendo declaración de renta de los dos (2) últimos años, cuando la Cooperativa lo considere necesario. <br>
                               </li>
                               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">De acuerdo al perfil del solicitante se especificará la documentación necesaria.<br><br></li>
                             </lo>
                             <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                             PARA EMPLEADOS:</p>
                             <lo>
                               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Diligenciar y presentar el formato de la solicitud del crédito. <br></li>
                               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia de la cédula de ciudadanía ampliada al 150%.<br></li>
                               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Certificación laboral en original, no mayor a 30 días de Expedido<br></li>
                               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Desprendibles de pago de los dos (2) últimos meses. <br></li>
                               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Si está obligado a declarar, debe anexar la Declaración de Renta del último año gravable. <br></li>
                               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                En caso de no estar obligado debe anexar la certificación de no declarante.<br></li>
                                <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia del recibo de servicio público.<br><br></li>
                              </lo>

                              <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                              PENSIONADOS:</p>
                              <lo>
                               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Diligenciar y presentar la solicitud del crédito.<br></li>
                               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia de la cédula de ciudadanía ampliada al 150%. (No se aceptan contraseñas).<br></li>
                               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Desprendibles de pago de los dos (2) últimos meses.   <br></li>
                               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Copia de la resolución de la pensión.<br></li>
                               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Si está obligado a declarar, debe anexar la Declaración de Renta del último año gravable.<br></li>
                               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                En caso de no estar obligado debe anexar la certificación de no declarante.<br></li>
                                <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia del recibo de servicio público debe ser la más reciente.<br><br></li>
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
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--page 2 de credito de Productivo-->
              <div class="tab-pane" id="pag2" role="tabpanel">
               <div class="sv-tab-panel">
                <div class="container">
                  <div class="vertical-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#pagina4" role="tab" aria-controls="home">Descripci&oacute;n</a>
                      </li>
                      <br>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#pagina6" role="tab" aria-controls="messages">Beneficios</a>
                      </li>
                      <br>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#pagina29" role="tab" aria-controls="messages">Requisitos</a>
                      </li>
                    </ul>
                    <div class="tab-content">

                      <div class="tab-pane active" id="pagina4" role="tabpanel">
                        <div class="sv-tab-panel">
                          <!-- ##### Header Area End ##### -->
                          <div class="container" style="margin-left: 15%">
                            <h3>Descripción</h3>
                            <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                              Este es el crédito que usted necesita para comprar terrenos, fincas o locales, no importa si es para la zona rural o urbana.
                            </p>
                            <br>
                            <h5>Dirigido a:</h5>
                            <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                              Persona natural mayor de 18 años. 
                            </p>
                            <br>
                            <h5 style="font-size: medium">Monto Máximo:</h5>
                            <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                             Hasta 200 SMMLV 
                           </p>
                           <br>
                           <h5 style="font-size: medium">Plazo Máximo:</h5>
                           <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                             60 Meses 
                           </p>
                           <br>
                           <h5 style="font-size: medium">Forma de pago:</h5>
                           <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                            Débito automático - Libranza - Ventanilla
                          </p>
                        </div>       
                        <!--### fin row ###-->
                      </div>
                    </div>

                    <div class="tab-pane" id="pagina6" role="tabpanel">
                      <div class="sv-tab-panel">
                        <!-- ##### Header Area End ##### -->
                        <div class="container" style="margin-left: 15%">
                          <h3>
                            Beneficios
                          </h3>
                          <lo>
                            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Estudio de crédito gratuito.<br></li>
                            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Consulta en Centrales de Riesgo sin Costo.<br></li>
                            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Expedición de certificados, paz y salvos sin costo.<br></li>
                            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">No se cobra comisión por abonos a capital o pago anticipado de créditos.<br></li>
                            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Devolución del 4,5% de los intereses cancelados en su cuota mensual, por pagar puntualmente todas sus obligaciones.<br></li>
                            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Descuentos en tasas de interés de acuerdo a la antigüedad del asociado o asociada.<br></li>
                            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Crédito desde 20 veces  para asociados(as) nuevos y hasta 50 veces para asociados(as) antiguos, de acuerdo al saldo de aportes sociales que tenga el solicitante.<br></li>
                            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Puede cancelar nuestra Red de Agencias, Portal Transaccional o punto de servicio Efecty, Banco de Bogotá, Banco Agrario, Suchance.<br></li>
                            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Para los asociados(as) con perfil de asalariado o pensionado tasa diferencial de acuerdo al tipo de convenio entre la empresa pagadora y la Cooperativa UTRAHUILCA (libranza y pago de salarios).<br></li>
                            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Disminución del valor de la cuota si programa y hace pagos extraordinarios a capital.<br></li>
                          </lo>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="pagina29" role="tabpanel">
                      <div class="sv-tab-panel">
                        <!-- ##### Header Area End ##### -->
                        <div class="container" style="margin-left: 15%">
                          <h3>
                            Requisitos
                          </h3>
                          <lo>
                            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                             Diligenciar y presentar el formato de la solicitud del crédito.<br>
                           </li>
                           <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                            Fotocopia de la cédula de ciudadanía ampliada al 150%.   <br>          </li>
                            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Si esta obligado a declarar, debe anexar la Declaración de Renta del ultimo año gravable. <br></li>
                            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Si esta obligado a declarar, debe 
                              En caso de no estar obligado debe anexar la certificación de no declarante. <br></li>
                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia del recibo de servicio público.<br></li>
                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Certificado de Cámara y Comercio con matrícula renovada y fecha de expedición no mayor a 30 días. Si no tiene Cámara de Comercio Anexar el RUT actual. <br></li>
                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Certificados de ingresos. Diligenciado por un titular o un contador público, anexando copia de la tarjeta profesional y antecedentes disciplinarios. <br></li>
                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Copia de Facturas de compra o de venta.<br></li>
                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Extractos bancarios, si se requieren. <br></li>
                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Anexar referencias comerciales o de proveedores.<br></li>
                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Listado de clientes si lo requiere.<br></li>
                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Si vende productos por catálogo, anexar facturas.<br></li>
                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">El asociado o asociada deberá permitir una visita al negocio para realizar un registro fotográfico y así determinar el estudio y análisis del crédito.<br><br></li>
                              <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                              INDEPENDIENTE AGROPECUARIO:</p>
                              <lo>
                                <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                  Si es caficultor presentar certificado del SICA, cédula cafetera y facturas de compra de insumos.<br>
                                </li>
                                <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                 Si es ganadero presentar registro de marca y vacunación y facturas de compra de insumos.<br>
                               </li>
                               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                 Para las demás actividades del agro, se deben anexar los documentos que certifiquen la actividad deacuerdo al gremio. <br>
                               </li>
                               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                 Certificados de ingresos. Puede ser diloigenciados por el titular o pñor un contador público, anexando copia de la tarjeta profesional y antecedentes disciplinarios.<br>
                               </li>
                               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                 Del terreno donde tiene los cultivos debe anexar: certificado de libertad y tradición, promesa de compra venta, contrato de arrendamiento o declaración extrajuicio certificada por la alcaldía del municipio donde conste que la propiedad es del agricultor.<br>
                               </li>

                               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                Referencias comerciales de compra y venta de café o demás productos cultivados.<br>
                                <br>
                              </li>
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
                        </lo>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--page 3 de credito de educativo-->
        <div class="tab-pane" id="pag3" role="tabpanel">
          <div class="sv-tab-panel">
            <!-- ##### Header Area End ##### -->
            <div class="container">
              <div class="vertical-tabs">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#pagina7" role="tab" aria-controls="home">Descripci&oacute;n</a>
                  </li>
                  <br>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#pagina9" role="tab" aria-controls="messages">Beneficios</a>
                  </li>
                  <br>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#pagina30" role="tab" aria-controls="messages">Requisitos</a>
                  </li>
                </ul>
                <div class="tab-content">

                  <div class="tab-pane active" id="pagina7" role="tabpanel">
                    <div class="sv-tab-panel">
                      <!-- ##### Header Area End ##### -->
                      <div class="container" style="margin-left: 15%">
                        <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                          <h3>Descripción </h3>
                          <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                            Este es el crédito que usted necesita para comprar terrenos, fincas o locales, no importa si es para la zona rural o urbana.
                          </p>
                          <br>
                          <h5>Dirigido a:</h5>
                          <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                            Persona natural mayor de 18 años. 
                          </p>
                          <br>
                          <h5 style="font-size: medium">Monto Máximo:</h5>
                          <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                           Hasta 200 SMMLV 
                         </p>
                         <br>
                         <h5 style="font-size: medium">Plazo Máximo:</h5>
                         <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                           60 Meses 
                         </p>
                         <br>
                         <h5 style="font-size: medium">Forma de pago:</h5>
                         <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                          Débito automático - Libranza - Ventanilla
                        </p>
                      </div>
                      <!--### fin row ###-->
                    </div>
                  </div>

                  <div class="tab-pane" id="pagina9" role="tabpanel">
                    <div class="sv-tab-panel">
                      <div class="container" style="margin-left: 15%">
                       <h3>
                         Beneficios
                       </h3>
                       <lo>
                         <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Estudio de crédito gratuito.<br></li>
                         <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Consulta en Centrales de Riesgo sin Costo.<br></li>
                         <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Expedición de certificados, paz y salvos sin costo.<br></li>
                         <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> No se cobra comisión por abonos a capital o pago anticipado de créditos.<br></li>
                         <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Devolución del 4,5% de los intereses cancelados en su cuota mensual, por pagar puntualmente todas sus obligaciones.<br></li>
                         <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Descuentos en tasas de interés de acuerdo a la antigüedad del asociado o asociada.<br></li>
                         <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Crédito desde 20 veces  para asociados(as) nuevos y hasta 50 veces para asociados(as) antiguos, de acuerdo al saldo de aportes sociales que tenga el solicitante.<br></li>
                         <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Puede cancelar nuestra Red de Agencias, Portal Transaccional o punto de servicio Efecty, Banco de Bogotá, Banco Agrario, Suchance.<br></li>
                         <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Para los asociados(as) con perfil de asalariado o pensionado tasa diferencial de acuerdo al tipo de convenio entre la empresa pagadora y la Cooperativa UTRAHUILCA (libranza y pago de salarios).<br></li>
                         <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Disminución del valor de la cuota si programa y hace pagos extraordinarios a capital.<br></li>
                       </lo>
                     </div>
                   </div>
                 </div>
                 <div class="tab-pane" id="pagina30" role="tabpanel">
                  <div class="sv-tab-panel">
                    <div class="container" style="margin-left: 15%">
                     <h3>
                       Requisitos
                     </h3>
                     <lo>
                       <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Ser asociado o asociada de UTRAHUILCA. <br></li>
                       <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Encontrarse al día en el cumplimiento de sus obligaciones legales y estatutarias con la Cooperativa. <br></li>
                       <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Demostrar su real capacidad de pago y solvencia mediante ingresos lícitos bien sea de su relación laboral, actividades profesionales, productivas, comerciales y servicios. <br></li>
                       <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Cuando se trate de proyectos productivos se debe anexar el plan de negocios, con flujo de caja incluyendo la cuota del crédito solicitado. <br></li>
                       <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Presentar las garantías y documentación que le sean solicitadas, incluyendo declaración de renta de los dos (2) últimos años, cuando la Cooperativa lo considere necesario. <br></li>
                       <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">De acuerdo al perfil del solicitante se especificará la documentación necesaria. <br><br></li>
                     </lo>
                     <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                       PARA EMPLEADOS:
                     </p>
                     <lo>
                       <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Diligenciar y presentar el formato de la solicitud del crédito. <br></li>
                       <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia de la cédula de ciudadanía ampliada al 150%. <br></li>
                       <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Certificación laboral en original, no mayor a 30 días de Expedido. <br> </li>
                       <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Desprendibles de pago de los dos (2) últimos meses. <br> </li>
                       <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Si esta obligado a declarar, debe anexar la Declaración de Renta del ultimo año gravable.<br></li>
                       <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                        En caso de no estar obligado debe anexar la certificación de no declarante. <br></li>
                        <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia del recibo de servicio público. <br><br></li>

                        <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                        PENSIONADOS:</p>
                        <lo>
                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Diligenciar y presentar la solicitud del crédito. <br></li>
                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia de la cédula de ciudadanía ampliada al 150%. (No se aceptan contraseñas).<br></li>
                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Desprendibles de pago de los dos (2) últimos meses.<br></li>
                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Copia de la resolución de la pensión. <br></li>

                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Si esta obligado a declarar, debe anexar la Declaración de Renta del ultimo año gravable. En caso de no estar obligado debe anexar la certificación de no declarante. <br></li>

                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia del recibo de servicio público debe ser la más reciente.<br><a href="#credito2" data-toggle="modal"><i class="fa fa-plus-square-o">leer mas</i></a></li>
                        </lo>
                      </lo>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane" id="pag4" role="tabpanel">
       <div class="sv-tab-panel">
        <!-- ##### Header Area End ##### -->
        <div class="container">
          <div class="vertical-tabs">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#pagina10" role="tab" aria-controls="home">Descripci&oacute;n</a>
              </li>
              <br>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#pagina26" role="tab" aria-controls="messages">Beneficios</a>
              </li>
              <br>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#pagina31" role="tab" aria-controls="messages">Requisitos</a>
              </li>
            </ul>
            <div class="tab-content">

              <div class="tab-pane active" id="pagina10" role="tabpanel">
                <div class="sv-tab-panel">
                  <!-- ##### Header Area End ##### -->
                  <div class="container" style="margin-left: 15%">
                   <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                    <h3>Descripción </h3>
                    <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                      Si tiene una necesidad inmediata y no cuenta con ningún otro crédito, el Crédito Especial es la solución, se le aprueba al instante logrando el retiro de efectivo por ventanilla  a una tasa muy especial. 
                    </p>
                    <br>
                    <h5>Dirigido a:</h5>
                    <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                      Persona natural mayor de 18 años.
                    </p>
                    <br>
                    <h5 style="font-size: medium">Monto Máximo:</h5>
                    <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                      Hasta el 100 % de los aportes sociales y ahorro permanente.
                    </p>
                    <br>
                    <h5 style="font-size: medium">Plazo Máximo:</h5>
                    <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                      Hasta 36 meses 
                    </p>
                    <br>
                    <h5 style="font-size: medium">Forma de pago:</h5>
                    <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                      Débito automático - Libranza - Ventanilla
                    </p>

                  </div>
                  <!--### fin row ###-->
                </div>
              </div>

              <div class="tab-pane" id="pagina26" role="tabpanel">
                <div class="sv-tab-panel">
                  <!-- ##### Header Area End ##### -->
                  <div class="container" style="margin-left: 15%">
                    <h3>
                     Beneficios
                   </h3>
                   <lo>
                     <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Estudio de crédito gratuito.<br></li>
                     <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Consulta en Centrales de Riesgo sin Costo.<br></li>
                     <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Expedición de certificados, paz y salvos sin costo.<br></li>
                     <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">No se cobra comisión por abonos a capital o pago anticipado de créditos.<br></li>
                     <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Devolución del 4,5% de los intereses cancelados en su cuota  mensual, por pagar puntualmente todas sus obligaciones.<br></li>
                     <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Descuentos en tasas de interés de acuerdo a la antigüedad del asociado o asociada.<br></li>
                     <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Crédito desde 20 veces  para asociados(as) nuevos y hasta 50 veces para asociados(as) antiguos, de acuerdo al saldo de aportes sociales que tenga el solicitante.<br></li>
                     <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Puede cancelar nuestra Red de Agencias, Portal Transaccional o punto de servicio Efecty, Banco de Bogotá, Banco Agrario, Suchance.<br></li>
                     <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Para los asociados(as) con perfil de asalariado(a) o pensionado(a) tasa diferencial de acuerdo al tipo de convenio entre la empresa pagadora y la Cooperativa UTRAHUILCA (libranza y pago de salarios).<br></li>
                     <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Disminución del valor de la cuota si programa y hace pagos extraordinarios a capital.<br><br></li>
                   </lo>
                 </div>
               </div>
             </div>
             <div class="tab-pane" id="pagina31" role="tabpanel">
              <div class="sv-tab-panel">
                <!-- ##### Header Area End ##### -->
                <div class="container" style="margin-left: 15%">
                  <h3>
                   Requisitos
                 </h3>
                 <lo>
                   <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia de la cédula de ciudadanía ampliada al 150%.<br></li>
                   <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Ser asociado o asociada de UTRAHUILCA.<br></li>
                   <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Encontrarse al día en el cumplimiento de sus obligaciones legales y estatutarias con la Cooperativa.<br></li>
                 </lo>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>

 <div class="tab-pane" id="pag5" role="tabpanel">
   <div class="sv-tab-panel">
    <!-- ##### Header Area End ##### -->
    <div class="container">
      <div class="vertical-tabs">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#pagina13" role="tab" aria-controls="home">Descripci&oacute;n</a>
          </li>
          <br>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#pagina16" role="tab" aria-controls="messages">Beneficios</a>
          </li>
          <br>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#pagina32" role="tab" aria-controls="messages">Requisitos</a>
          </li>
        </ul>
        <div class="tab-content">

          <div class="tab-pane active" id="pagina13" role="tabpanel">
            <div class="sv-tab-panel">
              <!-- ##### Header Area End ##### -->
              <div class="container" style="margin-left: 15%">
                <h3>Descripción </h3>
                <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                  Si quiere irse de viaje o emprender una actividad recreativa  esta linea de crédito aplica para su objetivo. Esta línea de crédito la puede combinar con todas las líneas de crédito, siempre y cuando usted pueda demostrar la capacidad de pago. ¡Somos su opción!
                </p>
                <br>
                <h5>Dirigido a:</h5>
                <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                  Persona natural mayor de 18 años.
                </p>
                <br>
                <h5 style="font-size: medium">Monto Máximo:</h5>
                <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                 Hasta 20 SMMLV
               </p>
               <br>
               <h5 style="font-size: medium">Plazo Máximo:</h5>
               <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                 Hasta 48 meses
               </p>
               <br>
               <h5 style="font-size: medium">Forma de pago:</h5>
               <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                Débito automático - Libranza - Ventanilla
              </p>
            </div>
            <!--### fin row ###-->
          </div>
        </div>
        <div class="tab-pane" id="pagina16" role="tabpanel">
          <div class="sv-tab-panel">
            <!-- ##### Header Area End ##### -->
            <div class="container" style="margin-left: 15%">
              <h3>
                Beneficios
              </h3>

              <ul>
                <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Estudio de crédito gratuito.</li>
                <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Consulta en Centrales de Riesgo sin Costo.<br></li>
                <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Expedición de certificados, paz y salvos sin costo.<br></li>
                <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">No se cobra comisión por abonos a capital o pago anticipado de créditos.<br></li>
                <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">No se cobra comisión por abonos a capital o pago anticipado de créditos.<br></li>
                <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Devolución del 4,5% de los intereses cancelados en su cuota mensual, por pagar puntualmente todas sus obligaciones.<br></li>
                <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Descuentos en tasas de interés de acuerdo a la antigüedad del asociado o asociada.<br></li>
                <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Crédito desde 20 veces  para asociados(as) nuevos y hasta 50 veces para asociados(as) antiguos(as), de acuerdo al saldo de aportes sociales que tenga el solicitante.<br></li>
                <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Puede cancelar nuestra Red de Agencias, Portal Transaccional o punto de servicio Efecty, Banco de Bogotá, Banco Agrario, Suchance.<br></li>
                <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Para los asociados(as) con perfil de asalariado o pensionado tasa diferencial de acuerdo al tipo de convenio entre la empresa pagadora y la Cooperativa UTRAHUILCA (libranza y pago de salarios).<br></li>
                <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Disminución del valor de la cuota si programa y hace pagos extraordinarios a capital.</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="pagina32" role="tabpanel">
          <div class="sv-tab-panel">
            <!-- ##### Header Area End ##### -->
            <div class="container" style="margin-left: 15%">
              <h3>
               Requisitos
             </h3>
             <br>
             <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
               PARA EMPLEADOS:<br></p>
               <lo>
                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Diligenciar y presentar el formato de la solicitud del crédito.<br></li>
                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia de la cédula de ciudadanía ampliada al 150%.<br></li>
                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Certificación laboral en original, no mayor a 30 días de Expedido.     <br> </li>
                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Desprendibles de pago de los dos (2) últimos meses.  <br> </li>
                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Si esta obligado a declarar, debe anexar la Declaración de Renta del ultimo año gravable. <br></li>
                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">En caso de no estar obligado debe.anexar la certificación de no declarante.<br></li>
                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia del recibo de servicio público.<br><br><br>
                 </li>
               </lo>
               <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                PARA PENSIONADOS:<br> </p>

                <lo>
                  <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Diligenciar y presentar la solicitud del crédito.<br></li>
                  <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia de la cédula de ciudadanía ampliada al 150%. (No se aceptan contraseñas).<br></li>
                  <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Desprendibles de pago de los dos (2) últimos meses.   </li>
                  <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Copia de la resolución de la pensión.<br></li>
                  <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Si esta obligado a declarar, debe anexar la Declaración de Renta del ultimo año gravable. En caso de no estar obligado debe anexar la certificación de no declarante.<br></li>
                  <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia del recibo de servicio público debe ser la más reciente.<br><br></li>
                </lo>
                <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                  PARA INDEPENDIENTE:<br> </p>
                  <lo>
                    <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Diligenciar y presentar el formato de la solicitud del crédito. <br></li>
                    <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia de la cédula de ciudadanía ampliada al 150%.<br></li>
                    <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Si esta obligado a declarar, debe anexar la Declaración de Renta del ultimo año gravable.  <br></li>
                    <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">En caso de no estar obligado debe anexar la certificación de no declarante. <br></li>
                    <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia del recibo de servicio público.<br><a href="#credito3" data-toggle="modal"><i class="fa fa-plus-square-o">leer mas</i> </a></li>
                  </lo>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="tab-pane" id="pag6" role="tabpanel">
   <div class="sv-tab-panel">
     <div class="container">
      <div class="vertical-tabs">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#pagina14" role="tab" aria-controls="home">Descripci&oacute;n</a>
          </li>
          <br>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#pagina15" role="tab" aria-controls="messages">Beneficios</a>
          </li>
          <br>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#pagina33" role="tab" aria-controls="messages">Requisitos</a>
          </li>
        </ul>
        <div class="tab-content">

          <div class="tab-pane active" id="pagina14" role="tabpanel">
            <div class="sv-tab-panel">
              <!-- ##### Header Area End ##### -->
              <div class="container" style="margin-left: 15%">
                <h3>Descripción </h3>
                <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                 Esta línea de crédito es para sus emergencia personales o familiares relacionadas con servicios de salud. Si necesita que le presten para medicamentos, cirugías, hospitalización, tratamientos ambulatorias y tratamientos especializados.
               </p>
               <br>
               <h5>Dirigido a:</h5>
               <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                Persona natural 
              </p>
              <br>
              <h5 style="font-size: medium">Monto Máximo:</h5>
              <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                Hasta 20 SMMLV
              </p>
              <br>
              <h5 style="font-size: medium">Plazo Máximo:</h5>
              <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                Hasta 24 meses
              </p>
              <br>
              <h5 style="font-size: medium">Forma de pago:</h5>
              <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                Débito automático - Libranza - Ventanilla
              </p>
            </div>
            <!--### fin row ###-->
          </div>
        </div>
        <div class="tab-pane" id="pagina15" role="tabpanel">
          <div class="sv-tab-panel">
            <!-- ##### Header Area End ##### -->
            <div class="container" style="margin-left: 15%">
              <h3>
                Beneficios
              </h3>
              <lo>
               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Estudio de crédito gratuito.</li>
               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Consulta en Centrales de Riesgo sin Costo.<br></li>
               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Expedición de certificados, paz y salvos sin costo.<br></li>
               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">No se cobra comisión por abonos a capital o pago anticipado de créditos.<br></li>
               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Devolución del 4,5% de los intereses cancelados en su cuota mensual, por pagar puntualmente todas sus obligaciones. <br></li>
               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">  Descuentos en tasas de interés de acuerdo a la antigüedad del asociado o asociada.<br></li>
               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Crédito desde 20 veces  para asociados(as) nuevos y hasta 50 veces para asociados(as) antiguos, de acuerdo al saldo de aportes sociales que tenga el solicitante.<br></li>
               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Puede cancelar nuestra Red de Agencias, Portal Transaccional o punto de servicio Efecty, Banco de Bogotá, Banco Agrario, Suchance.<br></li>
               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">  Para los asociados(as) con perfil de asalariado o pensionado tasa diferencial de acuerdo al tipo de convenio entre la empresa pagadora y la Cooperativa UTRAHUILCA (libranza y pago de salarios).<br></li>
               <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Disminución del valor de la cuota si programa y hace pagos extraordinarios a capital.<br></li>
             </lo>
           </div>
         </div>
       </div>
       <div class="tab-pane" id="pagina33" role="tabpanel">
        <div class="sv-tab-panel">
          <!-- ##### Header Area End ##### -->
          <div class="container" style="margin-left: 15%">
            <h3>
              Requisitos
            </h3>
            <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
             PARA EMPLEADOS:<br></p>
             <lo>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Diligenciar y presentar el formato de la solicitud del crédito.<br></li>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia de la cédula de ciudadanía ampliada al 150%.<br></li>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Certificación laboral en original, no mayor a 30 días de Expedido.<br></li>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Desprendibles de pago de los dos (2) últimos meses.<br></li>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Si esta obligado a declarar, debe anexar la Declaración de Renta del ultimo año gravable. En caso de no estar obligado debe anexar la certificación de no declarante.<br></li>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia del recibo de servicio público.<br><br></li>
            </lo>
            <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
              PARA PENSIONADOS:<br> </p>
              <lo>
                <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Diligenciar y presentar la solicitud del crédito.<br></li>
                <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia de la cédula de ciudadanía ampliada al 150%. (No se aceptan contraseñas).<br></li>
                <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Desprendibles de pago de los dos (2) últimos meses.   </li>
                <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Copia de la resolución de la pensión.<br></li>
                <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Si esta obligado a declarar, debe anexar la Declaración de Renta del ultimo año gravable. En caso de no estar obligado debe anexar la certificación de no declarante.<br></li>
                <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia del recibo de servicio público debe ser la más reciente.<br><br></li>
              </lo>

              <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                PARA INDEPENDIENTE:<br> </p>
                <lo>
                  <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Diligenciar y presentar el formato de la solicitud del crédito.<br></li>
                  <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia de la cédula de ciudadanía ampliada al 150%.  <br></li>
                  <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Si esta obligado a declarar, debe anexar la Declaración de Renta del ultimo año gravable.  <br></li>
                  <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">En caso de no estar obligado debe anexar la certificación de no declarante. <br></li>

                  <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia del recibo de servicio público. <br></li>
                  <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Certificado de Cámara y Comercio con matrícula renovada y fecha de expedición no mayor a 30 días. Si no tiene Cámara de Comercio Anexar el RUT actual. <br></li>
                  <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Certificados de ingresos. Diligenciado por un titular o un contador público, anexando copia de la tarjeta profesional y antecedentes disciplinarios. <br><br><a href="#credito4" data-toggle="modal"><i class="fa fa-plus-square-o">leer mas</i> </a></li>
                </lo>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="tab-pane" id="pag7" role="tabpanel">
 <div class="sv-tab-panel">
   <div class="container">
    <div class="vertical-tabs">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#pagina20" role="tab" aria-controls="home">Descripci&oacute;n</a>
        </li>
        <br>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#pagina21" role="tab" aria-controls="messages">Beneficios</a>
        </li>
        <br>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#pagina34" role="tab" aria-controls="messages">Beneficios</a>
        </li>
      </ul>
      <div class="tab-content">

        <div class="tab-pane active" id="pagina20" role="tabpanel">
          <div class="sv-tab-panel">
            <!-- ##### Header Area End ##### -->
            <div class="container" style="margin-left: 15%">
              <h3>Descripción </h3>
              <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
               Esta línea de crédito es para sus emergencia personales o familiares relacionadas con servicios de salud. Si necesita que le presten para medicamentos, cirugías, hospitalización, tratamientos ambulatorias y tratamientos especializados.
             </p>
             <br>
             <h5>Dirigido a:</h5>
             <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
              Persona natural 
            </p>
            <br>
            <h5 style="font-size: medium">  Monto Máximo:</h5>
            <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
              Hasta 20 SMMLV
            </p>
            <br>
            <h5 style="font-size: medium">Plazo Máximo:</h5>
            <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
              Hasta 24 meses
            </p>
            <br>
            <h5 style="font-size: medium">Forma de pago:</h5>
            <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
              Débito automático - Libranza - Ventanilla
            </p>

          </div>
          <!--### fin row ###-->
        </div>
      </div>
      <div class="tab-pane" id="pagina21" role="tabpanel">
        <div class="sv-tab-panel">
          <!-- ##### Header Area End ##### -->
          <div class="container" style="margin-left: 15%">
            <h3>
              Beneficios
            </h3>
            <lo>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Disponibilidad del cupo las 24 horas del día a través de su tarjeta débito de la Red Coopcentral.<br></li>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Estudio de crédito gratuito.<br></li>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Consulta en Centrales de Riesgo sin costo para el asociado.<br></li>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Descuentos en las tasas de interés de acuerdo a la antigüedad como asociado o asociada.<br></li>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Devolución del 4,5% de los intereses cancelados en su cuota mensual, por pagar puntualmente todas sus obligaciones crediticias y encontrarse al día en el pago oportuno de sus aportes.<br></li>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">No se cobra comisión por abonos a capital o pago anticipado de créditos.<br>
              </li>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Expediciones de certificados, paz y salvos sin costo.<br></li>
            </lo>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="pagina34" role="tabpanel">
        <div class="sv-tab-panel">
          <!-- ##### Header Area End ##### -->
          <div class="container" style="margin-left: 15%">
            <h3>
             Requisitos
           </h3>
           <br>
           <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
           PARA EMPLEADOS:</p>
           <br>
           <lo>
             <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Diligenciar y presentar el formato de la solicitud del crédito.<br></li>
             <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia de la cédula de ciudadanía ampliada al 150%.<br></li>
             <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Certificación laboral en original, no mayor a 30 días de Expedido <br>     </li>
             <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Desprendibles de pago de los dos (2) últimos meses.<br> </li>
             <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Si esta obligado a declarar, debe anexar la Declaración de Renta del ultimo año gravable.<br></li>
             <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
              En caso de no estar obligado debe anexar la certificación de no declarante.<br></li>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia del recibo de servicio público.<br><br></li>
            </lo>
            <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
            PARA PENSIONADOS:</p>
            <lo>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Diligenciar y presentar la solicitud del crédito.<br></li>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia de la cédula de ciudadanía ampliada al 150%. (No se aceptan contraseñas).<br></li>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Desprendibles de pago de los dos (2) últimos meses.   <br></li>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Copia de la resolución de la pensión.<br></li>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Si esta obligado a declarar, debe anexar la Declaración de Renta del ultimo año gravable. En caso de no estar obligado debe anexar la certificación de no declarante.<br> </li>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia del recibo de servicio público debe ser la más reciente.<br><br></li>
            </lo>
            <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
            PARA INDEPENDIENTE:</p>
            <lo>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Diligenciar y presentar el formato de la solicitud del crédito.<br></li>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia de la cédula de ciudadanía ampliada al 150%.  <br>  </li>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Si esta obligado a declarar, debe anexar la Declaración de Renta del ultimo año gravable. En caso de no estar obligado debe anexar la certificación de no declarante.<br></li>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia del recibo de servicio público. <br></li>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Certificado de Cámara y Comercio con matrícula renovada y fecha de expedición no mayor a 30 días. Si no tiene Cámara de Comercio Anexar el RUT actual.<br></li>
              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Certificados de ingresos. Diligenciado por un titular o un contador público, anexando copia de la tarjeta profesional y antecedentes disciplinarios.<br><a href="#credito5" data-toggle="modal"><i class="fa fa-plus-square-o">leer mas</i> </a><br></li>
            </lo>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="tab-pane" id="pag8" role="tabpanel">
 <div class="sv-tab-panel">
   <div class="container">
    <div class="vertical-tabs">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#pagina22" role="tab" aria-controls="home">Descripci&oacute;n</a>
        </li>
        <br>
        <br>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#pagina23" role="tab" aria-controls="messages">Beneficios</a>
        </li>
        <br>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#pagina24" role="tab" aria-controls="messages">Requisitos</a>
        </li>
      </ul>
      <div class="tab-content">

        <div class="tab-pane active" id="pagina22" role="tabpanel">
          <div class="sv-tab-panel">
            <!-- ##### Header Area End ##### -->
            <div class="container" style="margin-left: 15%">
             <h3>Descripción </h3>
             <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
               Con Utrarápido puede cubrir pequeñas e imprevistas necesidades económicas, está opción de crédito la puede combinar con cualquier otra modalidad de crédito.
             </p>
             <br>
             <h5>Dirigido a:</h5>
             <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
              Persona natural de 18 años 
            </p>
            <br>
            <h5 style="font-size: medium">Monto Máximo:</h5>
            <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
             5 SMMLV
           </p>
           <br>
           <h5 style="font-size: medium">Plazo Máximo:</h5>
           <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
            12 meses
          </p>
          <br>
          <h5 style="font-size: medium">Forma de pago:</h5>
          <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
            Débito automático - Libranza - Ventanilla
          </p>

        </div>
        <!--### fin row ###-->
      </div>
    </div>
    <div class="tab-pane" id="pagina23" role="tabpanel">
      <div class="sv-tab-panel">
        <!-- ##### Header Area End ##### -->
        <div class="container" style="margin-left: 15%">
          <h3>
            Beneficios
          </h3>
          <lo>
            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Estudio de crédito gratuito.<br></li>
            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Consulta en Centrales de Riesgo sin Costo.<br></li>
            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> No se cobra comisión por abonos a capital o pago anticipado de créditos.<br></li>
            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">  Descuentos en tasas de interés de acuerdo a la antigüedad del asociado/a.<br></li>
            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Tasa preferencial en la línea de crédito Especial.<br></li>
            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Puede cancelar su cuota en cualquier agencia, Portal Transaccional, App, o punto de servicio Efecty, Dimonex, Banco de Bogotá, Suchance ó en otros canales que disponga la cooperativa.<br></li>
          </lo>
        </div>
      </div>
    </div>
    <div class="tab-pane" id="pagina24" role="tabpanel">
      <div class="sv-tab-panel">
        <!-- ##### Header Area End ##### -->
        <div class="container" style="margin-left: 15%">
          <h3>
            Requisitos
          </h3>
          <br>
          <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">PARA EMPLEADOS:<br></p>

          <lo> 
            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Diligenciar y presentar el formato de la solicitud del crédito.<br></li>
            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia de la cédula de ciudadanía ampliada al 150%.<br></li>
            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Certificación laboral en original, no mayor a 30 días de Expedido    <br>  </li>
            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Desprendibles de pago de los dos (2) últimos meses.     <br>   </li>
            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Si esta obligado a declarar, debe anexar la Declaración de Renta del ultimo año gravable.</li>
            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
             En caso de no estar obligado debe anexar la certificación de no declarante.<br></li>
             <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Fotocopia del recibo de servicio público.<br><br></li>
           </lo>
           <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
           PARA PENSIONADOS:</p>
           <lo>
            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
             Diligenciar y presentar la solicitud del crédito.<br>
           </li>
           <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
            Fotocopia de la cédula de ciudadanía ampliada al 150%. (No se aceptan contraseñas).<br>
          </li>
          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
            Desprendibles de pago de los dos (2) últimos meses.   <br>
          </li>
          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
            Copia de la resolución de la pensión.<br>
          </li>
          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
            Si esta obligado a declarar, debe anexar la Declaración de Renta del ultimo año gravable. En caso de no estar obligado debe anexar la certificación de no declarante.<br>
          </li>
          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
            Fotocopia del recibo de servicio público debe ser la más reciente.<br><br>
          </li>
        </lo>
        <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
        PARA INDEPENDIENTE:</p>
        <lo>
          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Diligenciar y presentar el formato de la solicitud del crédito.<br>
          </li>
          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia de la cédula de ciudadanía ampliada al 150%. <br>  
          </li>
          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Si esta obligado a declarar, debe anexar la Declaración de Renta del ultimo año gravable. En caso de no estar obligado debe anexar la certificación de no declarante.<br>
          </li>
          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Fotocopia del recibo de servicio público.<br>
          </li>
          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Certificado de Cámara y Comercio con matrícula renovada y fecha de expedición no mayor a 30 días. Si no tiene Cámara de Comercio Anexar el RUT actual.<br></li>
          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Certificados de ingresos. Diligenciado por un titular o un contador público, anexando copia de la tarjeta profesional y antecedentes disciplinarios.<br><a href="#credito6" data-toggle="modal"><i class="fa fa-plus-square-o">leer mas</i></a></li>
        </lo>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>

</div>
<br><br>
<br>
<br>
<br><br>
<br>
<br>
<br><br>
<br><br>
<br><br>
<br><br>
<br>
<br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br><br>
<h4>Informaci&oacute;n Relacionada </h4>
<ul class="nav nav-tabs listacred" role="tablist" style="width: 116%">
<?php 
$sql="SELECT top 5 * FROM `linea_credito` WHERE tipo = 1 order by newid()";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)) {
	?>
<li class="nav-item itemcred">
    <a class="nav-link active" data-toggle="tab" href="/CreditoNatutal.php?TabPag=<?php  echo $mostrar['codigo'];?>" role="tab" aria-controls="home" id="scroll"><img src="images/<?php  echo $mostrar['imagen'];?>"><br><?php  echo $mostrar['nombre'];?></a>
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
    <a class="nav-link" data-toggle="tab" href="#pag8" role="tab" aria-controls="profile" id="scroll6"><img src="images/5.png" style="width: 50px"><br>UTRARÁPIDO</a>
  </li>-->
</ul>
</div>
</section>
<br><br><br>
<!-- ##### Newsletter Area Start ###### -->
<!-- ##### Newsletter Area Start ###### -->
<section class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url(img/bg-img/6.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-lg-8">
        <div class="nl-content text-center">
          <h2>Suscríbase</h2>
          <form action="#" method="post">
            <input type="email" name="nl-email" id="nlemail" placeholder="Su correo electrónico">
            <button type="submit">Suscribir</button>
          </form>
          <p>Reciba información sobre nuestros nuevos productos</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ##### Newsletter Area End ###### -->


<!-- ##### Services Alianzas ###### -->
<section class="services-area section-padding-100-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="sliderBottom">
          <div class="slideBottom-track">
           <?php 
           $sql="SELECT * FROM `alianzas` WHERE estado=1";
           $result=mysqli_query($conexion,$sql);
           while ($mostrar=mysqli_fetch_array($result)) {
             ?>
             <div class="slideBottom">
              <img src="../filesN/<?php  echo $mostrar['imagen'];?>"   alt="">
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area section-padding-100-0">
 <div class="container">
  <div class="row">

    <!-- Single Footer Widget -->
    <div class="col-12 col-sm-6 col-lg-4">
      <div class="single-footer-widget mb-100">
        <h5 class="widget-title">Oficina Central</h5>
        <!-- Nav -->
        <nav>
          <p class="mb-0"><i class="fa fa-building-o"></i> Cra 6 # 5-37</p>
          <p class="mb-0"> <i class="fa fa-phone"></i> 8728181-8728182 </p>

          <h4></h4>
          <p class="mb-0"><i class="fa fa-calendar"></i> Lunes a Viernes:  8:00 am a 12:00 m  <br>
          S&aacute;bados 8:00 a.m a 12:00 a.m.</p>        
        </nav>
      </div>
    </div>

    <!-- Single Footer Widget -->
    <div class="col-12 col-sm-6 col-lg-4">
      <div class="single-footer-widget mb-100">
        <h5 class="widget-title">Links de inter&eacute;s</h5>
        <!-- Nav -->
        <nav>
          <ul>
            <li><a href="./trabajo.php">Trabaje con nosotros</a></li>
            <li><a href="aviso de privacidad.pdf">Aviso de privacidad</a></li>
            <li><a href="./alianza.php">Alianzas</a></li>
            <li><a href="./Pqrs.php"><P>PQRSF</P></a></li>
          </ul>
        </nav>
      </div>
    </div>

    <!-- Single Footer Widget -->
    <div class="col-12 col-sm-6 col-lg-4">
      <div class="single-footer-widget mb-100">
        <h5 class="widget-title">Cooperativa Virtual</h5>

        <!-- Single News Area -->
        <div class="single-latest-news-area d-flex align-items-center">
          <div class="news-thumbnail">
           <h3> <i class="fa fa-drivers-license-o" aria-hidden="true"></i> </h3>
         </div>
         <div class="news-content">
          <a href="#">Empresas</a>
          <div class="news-meta">
            <a href="#UtraPortalJuridica" data-toggle="modal" class="post-author" target="_blank"><img src="img/core-img/pencil.png" alt=""> Genere sus certificados y extractos</a>
          </div>
        </div>
      </div>

      <!-- Single News Area -->
      <div class="single-latest-news-area d-flex align-items-center">
        <div class="news-thumbnail">
          <h3><i class="fa fa-child" aria-hidden="true"></i> </h3>
        </div>
        <div class="news-content">
          <a href="#">Personas</a>
          <div class="news-meta">
            <a href="#UtraPortalNuatural" data-toggle="modal" class="post-author" target="_blank"><img src="img/core-img/pencil.png" alt=""> Realice sus transacciones en línea</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Copywrite Area -->
<div class="copywrite-area">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="copywrite-content d-flex flex-wrap justify-content-between align-items-center">
          <!-- Footer Logo -->
          <a href="http://www.supersolidaria.gov.co/" target="_blank" class="imgcenter"><img src="img/Footer/super-ok.png" ></a>
          <a href="https://www.fogacoop.gov.co/" target="_blank" class="imgcenter"><img src="img/Footer/Fogacoop-ok.png" ></a>
          <a href="index.php" class="imgcenter"><img src="img/Footer/sello-ok.png"></a>
          <a href="https://www.coopcentral.com.co/" class="imgcenter" target="_blank"><img src="img/Footer/red-ok.png" ></a>
          <!-- Copywrite Text -->
          <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
           Copyright &copy;Todos los derechos reservados Utrahuilca.coop <i class="fa fa-heart-o" aria-hidden="true"></i>
           <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
         </div>
       </div>
     </div>
   </div>
 </div>
</footer>
</div>
<!-- PopUp Revalorizacon--> 
<!-- ##### Footer Area Start ##### -->

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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script>
  $("#showmenunavbar").click(function(e){
    e.preventDefault();
    $("#menunavbar").toggleClass("show");
  });


  $("#menunavbar p").click(function(event){
    event.preventDefault();
    if($(this).next('ul').length){
      $(this).next().toggle('fast');
      $(this).children('i:last-child').toggleClass('fa-caret-down fa-caret-left');
    }
  });
</script>
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