
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

  <script>  
    function mostrarVentanaConcursoBRE()
    {
      $(document).ready(function()
      {
       $("#mostrarVentanaConcursoBRE").modal("show");
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
                        <div class="slide-bg-img bg-img bg-overlay"><!--<a href ="<?php  //echo $mostrar['url'];?>" target="_blank">--><img src="../filesN/<?php echo $mostrar['imagen'];?>" alt="" class="img-responsive" draggable="false"><!--</a>--></div>
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
             <section class="miscellaneous-area bg-gray section-padding-100-0">
              <div class="container">
                <div class="row align-items-end justify-content-center">
                 <!-- ##### About Area Start ###### -->
                 <section class="about-area section-padding-100-0">
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
          <div class="hero-area-news d-flex flex-wrap">

            <div class="hero-single-section">
              <!-- Single Welcome Post -->
              <?php 
              $sql="SELECT * FROM `link` WHERE estado=1 and idlink='2'";
              $result=mysqli_query($conexion,$sql);
              while ($mostrar=mysqli_fetch_array($result)) {
               ?>
               <div class="single-welcome-post bg-imgnews item1 wow fadeInUp" data-wow-delay="300ms" style="background-image: url(../filesN/<?php  echo $mostrar['imagen'];?>);">

                <!-- Play Button -->
                <a href="<?php  echo $mostrar['vlink'];?>" class="video-play-btn" target="_blank"><i class="fa fa-play"></i></a>
                <!-- Content -->
                <div class="welcome-post-content">
                  <!-- Single Blog Post -->
                  <div class="single-blog-post white">
                    <div class="blog-content">
                      <a href="#" class="post-tag">Neiva</a>
                      <a href="#" class="post-title"><?php  echo $mostrar['titulo'];?></a>
                      <div class="post-meta">
                        <a href="#"><img src="img/core-img/calender.png" alt=""> <?php  echo $mostrar['fecha'];?> </a>
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
             ?>
             <div class="single-welcome-post bg-imgnews item2 wow fadeInUp" data-wow-delay="400ms" style="background-image: url(../filesN/<?php  echo $mostrar['imagen'];?>);">
              <!-- Content -->
              <a href="<?php  echo $mostrar['vlink'];?>" class="video-play-btn" target="_blank"><i class="fa fa-play"></i></a>
              <div class="welcome-post-content">
                <!-- Single Blog Post -->
                <div class="single-blog-post white">
                  <div class="blog-content">
                    <a href="#" class="post-tag">Neiva</a>
                    <a href="#" class="post-title"><?php  echo $mostrar['titulo'];?></a>
                    <div class="post-meta">

                      <a href="#"><img src="img/core-img/calender.png" alt=""> <?php  echo $mostrar['fecha'];?></a>

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
             ?>
             <div class="single-welcome-post bg-imgnews item3 wow fadeInUp" data-wow-delay="500ms" style="background-image: url(../filesN/<?php  echo $mostrar['imagen'];?>);">
              <!-- Content -->
              <a href="<?php  echo $mostrar['vlink'];?>" class="video-play-btn" target="_blank"><i class="fa fa-play"></i></a>
              <div class="welcome-post-content">
                <!-- Single Blog Post -->
                <div class="single-blog-post style2 white">
                  <div class="blog-content">
                    <a href="#" class="post-tag">Neiva</a>
                    <a href="#" class="post-title"><?php  echo $mostrar['titulo'];?></a>
                    <div class="post-meta">
                      <a href="#"><img src="img/core-img/calender.png" alt=""> <?php  echo $mostrar['fecha'];?></a>
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
          <div class="col-12 col-sm-9 col-md-6 col-lg-4">
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
                              <a href="files/<?php  echo $mostrar['archivost'];?>"><?php  echo $mostrar['descripccion'];?></a>
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
                            <a href="files/<?php  echo $mostrar['archivost'];?>"><?php  echo $mostrar['descripccion'];?></a>
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
       <div class="col-12 col-sm-9 col-md-6 col-lg-4">
        <div class="sidebar-area">

          <!-- Single Sidebar Widget -->
          <div class="single-widget-area tabs-widget">
            <div class="widget-heading">
              <div class="line"></div>
              <h4 style="text-align: left;">Comunicados</h4>
            </div>
            <div class="credit-tabs-content">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
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
                          <a href="files/<?php  echo $mostrar['archivost'];?>" target='_blank' ><?php  echo $mostrar['descripccion'];?></a>
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
                        <a href="files/<?php  echo $mostrar['archivost'];?>" target='_blank'><?php  echo $mostrar['descripccion'];?></a>
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
   <div class="col-12 col-sm-9 col-md-6 col-lg-4">
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
                      <a href="files/<?php  echo $mostrar['archivost'];?>" target='_blank'><?php  echo $mostrar['descripccion'];?></a>
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

<section>
  

   <div class="row">
    <div class="col-12">     
      <!-- Section Heading -->
      <div class="section-heading text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
        <div class="line"></div>
        <h2>Dimensión cooperativa ¡MÁS PARA USTED MÁS PARA TODOS!</h2>
      </div>
    </div>
  </div>
  <div class="row justify-content-center fundab">


    
      <a class="col-12 funda" href="http://www.fundautrahuilca.org/" target="_blank"> <img src="AgenciaVirtual/logo-funda.jpg" class="img-responsive"></a>
      
        <?php 
        $sql="SELECT * FROM `formatos` WHERE idformatos=6 AND estado=1";
        $result=mysqli_query($conexion,$sql);
        while ($mostrar=mysqli_fetch_array($result)) {?>
         <a class="col-6 botonfunda" href="files/<?php  echo $mostrar['archivost'];?>" target='_blank'> <img src="img/Dimension cooperativa_Mesa de trabajo 1.svg"  style="width: 50%" class="img-responsive"></a>
       <?php } ?>
       <br>
     
  
 </div>

</section>

<!-- ##### News Hero Area Start ##### -->
<div class="hero-area-news d-flex flex-wrap">

  <div class="hero-single-section">
    <?php 
    $sql="SELECT * FROM eventos WHERE estado= 1 and ideventos = 1  ";
    $result=mysqli_query($conexion,$sql);
    while ($mostrar=mysqli_fetch_array($result)) {
      ?>
      <!-- Single Welcome Post -->
      <div class="single-welcome-post bg-imgnews item1 wow fadeInUp" data-wow-delay="300ms" style="background-image: url(files/<?php  echo $mostrar['imagen'];?>);">
        <!-- Content -->
        <div class="welcome-post-content">
          <!-- Single Blog Post -->
          <div class="single-blog-post white">
            <div class="blog-content">
              <a href="#" class="post-tag"><?php  echo $mostrar['zona'];?></a>
              <a href="<?php  echo $mostrar['link'];?>" class="post-title"><?php  echo $mostrar['titulo'];?></a>
              <div class="post-meta">
                <a href="#"><img src="img/core-img/calender.png" alt=""><?php  echo $mostrar['fecha'];?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php }  ?>
  </div>

  <div class="hero-single-section">
   <?php 
   $sql="SELECT * FROM eventos WHERE estado= 1 and ideventos = 2 ";
   $result=mysqli_query($conexion,$sql);
   while ($mostrar=mysqli_fetch_array($result)) {
    ?>
    <!-- Single Welcome Post -->
    <div class="single-welcome-post bg-imgnews item2 wow fadeInUp" data-wow-delay="400ms" style="background-image: url(files/<?php  echo $mostrar['imagen'];?>);">
      <!-- Content -->
      <div class="welcome-post-content">
        <!-- Single Blog Post -->
        <div class="single-blog-post white">
          <div class="blog-content">
            <a href="#" class="post-tag"><?php  echo $mostrar['zona'];?></a>
            <a href="<?php  echo $mostrar['link'];?>" class="post-title"><?php  echo $mostrar['titulo'];?></a>
            <div class="post-meta">
              <a href="#"><img src="img/core-img/calender.png" alt=""><?php  echo $mostrar['fecha'];?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php }  ?>

  <div class="hero-second-section d-flex flex-wrap">
    <?php 
    $sql="SELECT * FROM eventos WHERE estado= 1 and ideventos = 3 AND ideventos = 4";
    $result=mysqli_query($conexion,$sql);
    while ($mostrar=mysqli_fetch_array($result)) {
      ?>
      <!-- Single Welcome Post -->
      <div class="single-welcome-post bg-imgnews item3 wow fadeInUp" data-wow-delay="500ms" style="background-image: url(files/<?php  echo $mostrar['imagen'];?>);">
        <!-- Content -->
        <div class="welcome-post-content">
          <!-- Single Blog Post -->
          <div class="single-blog-post style2 white">
            <div class="blog-content">
              <a href="#" class="post-tag"><?php  echo $mostrar['zona'];?></a>
              <a href="<?php  echo $mostrar['link'];?>" class="post-title"><?php  echo $mostrar['titulo'];?></a>
              <div class="post-meta">
                <a href="#"><img src="img/core-img/calender.png" alt=""><?php  echo $mostrar['fecha'];?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php }  ?>

  </div>
</div>
</div>
<!-- ##### News Hero Area End ##### -->


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
            <a href="noticiaCooperativas.php" class="btn credit-btn box-shadow">Ver Mas</a>
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