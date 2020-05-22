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
  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="./css/menunew.css">
  <link rel="stylesheet" href="./css/menunavbar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/sliderbottom.css">
  <link rel="stylesheet" href="flotante.css">
  <link rel="stylesheet" href="Cooperativavirtual.css">

  <script src='https://www.google.com/recaptcha/api.js'></script>

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

  <script>  
    function mostrarVentanaConcurso(){
      $(document).ready(function(){
        $("#mostrarVentanaConcurso").modal("show");
      });
    }
  </script> 

</head>
</head>

<body>
 <div class="fondo"></div>
 <div id="fondo-modal">
  <?php
  function getRealIP()
  {

    if (isset($_SERVER["HTTP_CLIENT_IP"]))
    {
      return $_SERVER["HTTP_CLIENT_IP"];
    }
    elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
    {
      return $_SERVER["HTTP_X_FORWARDED_FOR"];
    }
    elseif (isset($_SERVER["HTTP_X_FORWARDED"]))
    {
      return $_SERVER["HTTP_X_FORWARDED"];
    }
    elseif (isset($_SERVER["HTTP_FORWARDED_FOR"]))
    {
      return $_SERVER["HTTP_FORWARDED_FOR"];
    }
    elseif (isset($_SERVER["HTTP_FORWARDED"]))
    {
      return $_SERVER["HTTP_FORWARDED"];
    }
    else
    {
      return $_SERVER["REMOTE_ADDR"];
    }

  }

  $ips= getRealIP();
    //echo $ip."<br/>"; 
  $_POST['ips']=$ips;
    //echo $_POST['ips']."su ip publica es ";//hasta aqui, bien
  ?>

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


                <!-- ##### Breadcrumb Area Start ##### -->
                <section class="breadcrumb-area bg-img bg-overlay ">
                  <img src="img/bg-img/pqrs.jpg" style="width: 100%" class="img-responsive">
                </section>
                <!-- ##### Breadcrumb Area End ##### -->

                <!-- ***** Header Area End ***** -->
                <br><br><br>
				<div class="container">
				Apreciado Asociado/a Usuario/a: 

Para nosotros es muy importante contar con su opinión, en pro de mejorar nuestro portafolio de productos y servicios que ofrecemos a nuestros asociados y comunidad en general. Hemos rediseñado nuestra página web, a través de la cual usted podrá registrar su petición, queja, reclamo, sugerencia, felicitación o agradecimiento, sobre temas de nuestra competencia y de igual forma, navegar y consultar información relacionada a la Cooperativa UTRAHUILCA. 
				</div>
                <br>
                <div class="container">

                  <form id="form1" class="well col-lg-12" action="enviar.php" method="post" name="form1">
                    <div class="row">
                     <div class="col-lg-6">
                      <label>Nombre*</label> <input type="text" id="Nombre" class="form-control" type="text" name="Nombre" /> 
                      <label>Apellidos*</label> <input type="text" id="Apellido" class="form-control" type="text" name="Apellido" /> 
                      <label>Email*</label> <input type="email" id="Email" class="form-control" type="email" name="Email" />

                      <label>Tipo de Documento (*):</label>
                      <select  class="form-control selectpicker" name="Tipo_Identificacion" id="Tipo_Identificacion"  required>
                        <option value=''> -Seleccione El tipo de Documento-</option>
                        <option value="Cedula Ciudadania">Cedula Ciudadania</option>
                        <option value="Cedula Extrangeria">Cedula Extrangeria</option>
                        <option value="Documento Extrangero">Documento Extrangero</option>  
                        <option value="Numero de Identificacion tributaria">Numero de Identificacion tributaria</option> 
                        <option value="Otro Documento">Otro Documento</option> 
                        <option value="Pasaporte">Pasaporte</option> 
                      </select>
                      <label>Numero Identificacion*</label> <input type="number" id="Numero_Identificacion" class="form-control"  name="Numero_Identificacion"required />
                      <label>Celular*</label>   <input type="number" id="celular" class="form-control" name="celular" />
                      <label>Direccion*</label>  <input id="Direccion" class="form-control" type="text" name="Direccion" />
                    </div>

                    <div class="col-lg-6"><label>Tipo de PQRSF*</label> 
                     <select  class="form-control selectpicker" name="Tipo" id="Tipo"  required>
                      <option value=''>-Seleccione el tipo de PQRSF-</option>
                      <option value="Queja"> Queja</option>
                      <option value="Reclamo">Reclamo</option>
                      <option value="Denuncia">Denuncia</option>  
                      <option value="Peticion">Peticion</option> 
                      <option value="sugerencia">sugerencia</option> 
                      <option value="Consulta">Consulta</option> 
                    </select>


                    <label>Mensaje*</label> 
                    <textarea id="Mensaje" class="form-control" name="Mensaje" rows="4"></textarea>
                    <label>Tipo de Respuesta*</label> 
                    <select  class="form-control selectpicker" name="Tipo_Respuesta" id="Tipo_Respuesta"  required>
                      <option value=''> -Seleccione el tipo de Respuesta-</option>
                      <option value="CorreoElectronico"> CorreoElectronico</option>
                      <option value="Llamada">Llamada</option>
                      <option value="Notificacion por medio  de Una carta a la Direccion Su ministrada..??">Notificacion por medio  de Una carta a la Direccion Su ministrada..??</option>
                    </select>

                    <input id="ips" type="hidden" name="ips" value="<?php echo $ips;?>" />
                    <br>         
                    <label>Terminos y Condiciones*</label> 
                    <p style="text-align:justify; 
                    ">Autorizo a la Cooperativa latinoamericana de ahorro y Crédito UTRAHUILCA con domicilio principal en la Cra 6 # 5-37 Oficina Principal Neiva - Huila , Colombia, telefono:  8728181 Ext:101, en su calidad de responsable del tratamiento de datos personales para recolectar, almacenar, procesar, actualizar, modificar y eliminar los datos suministrados con el fin de realizar la gestión de trámites relacionados con la presente solicitud. En cumplimiento de la Ley 1581 de 2012 y Decreto 1377 de 2013, declaro que he sido informado de manera clara y expresa las finalidades para las cuales se recopilan mis datos, así mismo que conozco el derecho a conocer, actualizar, corregir y suprimir la información y revocar la autorización. Para mayor información puedo consultar la Política de Tratamiento de Datos Personales de la Cooperativa latinoamericana de ahorro y Crédito UTRAHUILCA que se encuentra en la página web. http://www.utrahuilca.coop/ </p>

                    <label>Aceptacion de Terminos y Condiciones*</label> 
                    <select  class="form-control selectpicker" name="Terminos_condiciones" id="Terminos_condiciones"  required>
                      <option value=''> -Seleccione el tipo de Respuesta-</option>
                      <option value="Acepto(a) los Terminos Y condiciones"> Acepto(a) los Terminos Y condiciones</option> </select>

                      <label>Captcha*</label> 
                      <div class="g-recaptcha" data-sitekey="6LeUm3EUAAAAAPisR7PTCr1vpsxCz1ECC2v34XLR"></div>
                    </div>

                    <div class="col-lg-6">
                      <button class="btn btn-default pull-right" type="submit">Enviar</button>
                    </div>
                  </div>
                </form>
              </div>

              <br><br><br>
<?php 
include 'suscribir.php';
 include 'pie.php';?>
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
      <!-- Google Maps: If you want to google map, just uncomment below codes -->
    <!--
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/map-active.js"></script>
  -->

</body>

</html>