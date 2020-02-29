
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
  <link rel="stylesheet" href="./css/sliderbottom.css">
  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css">
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
  <!-- Preloader -->
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


      <!-- ##### Header Area Start ##### -->
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
                                          <div class="credit-main-menu " id="sticker">
                                            <div class="classy-nav-container navbar-expand-sm breakpoint-off">
                                              <div class="container">
                                               <nav class="classy-navbar " id="creditNav">
                                                <div class="classy-navbar-toggler">
                                                  <span class="navbarToggler"><span></span><span></span><span></span></span>
                                                </div>
                                                <div class="contact">
                                                  <a href="index"><img src="img/core-img/logo.png" alt=""> </a>
                                                </div>
                                                <div class="classy-menu">
                                                  <div class="classycloseIcon">
                                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                                  </div>   
                                                  <div class="classynav">
                                                    <ul>
                                                      <li><a href="index"><i class="fa fa-home"></i>Inicio</a></li>
                                                      <li><a href="#">Conózcanos</a>

                                                       <div class="megamenu" id="menuent" style="width: 380px;   margin-top: 0px;border-radius: 15px; opacity: 10 ">
                                                        <ul class="single-mega py-1" style="width: 390px !important;padding: 5px; ">
                                                         <h5>
                                                           <li>
                                                            <a href="somos" style=" font-family: 'Helvetica', sans-serif;" >Quienes Somos</a>
                                                          </li>
                                                          <li>
                                                           <a href="historia"style=" font-family: 'Helvetica',sans-serif;" title="conozca Nuestra Reseña Hitorica de Nuestra Cooperativa">Resena historica</a>
                                                         </li>
                                                         <li>
                                                          <a href="himno"  style=" font-family: 'Helvetica', sans-serif;"title="Nuestro Himno Cooperativo" >Nuestro Himno</a>
                                                        </li>
                                                        <li>
                                                          <a href="trabajo" style=" font-family: 'Helvetica', sans-serif;" title="Conozca Nuestras Ofertas de Trabajo que Tenemos para Tí">Trabaje con nosotros</a>
                                                        </li>
                                                        <li>
                                                          <a href="alianza"  style=" font-family: 'Helvetica', sans-serif;" title="Conozca nuestras alianzas Cooperativas que Tenemos">Alianzas Cooperativas</a>
                                                        </li>
                                                        <li>
                                                          <a href="pqrs"  style=" font-family: 'Helvetica', sans-serif;" title="Reliza Peticiones Quejas y Reclamos Por Nestro Canal PQRS">Peticiones quejas reclamos y felicitaciones(Pqrsf)</a>
                                                        </li>
                                                        <!--<li>
                                                          <a href="./actualizacionwebdian" style=" font-family: 'Helvetica', 'Arial', sans-serif;">Actualización Web Dian</a>
                                                        </li>-->
                                                        <li>
                                                          <a href="contactenos" style=" font-family: 'Helvetica', sans-serif;" title=" Contactenos por Nuestros Canales y Redes Sociales">Contactenos</a>
                                                        </li>
                                                      </h5>
                                                      <h5>
                                                       <li><a href="agencias.php" style="font-family: 'Helvetica', sans-serif; color: orange !important; margin-left:2%;" title="Conozca Nuestras 33 Agencias que Tenemos para Ti  a Nivel Nacional">Agencias</a></li>
                                                     </h5>
                                                   </ul>
                                                 </div>
                                               </li>

                                                
                                               <li><a href="#">Crédito</a>
                                                 <div class="megamenu" id="menuencre"  style="width: 210px;margin-top: 0px;border-radius: 9px; opacity: 10">
                                                <div class="btn-despegable mt-2" data-toggle="collapse" data-target="#Natural" aria-expanded="false" aria-controls="Natural" style="cursor: pointer;">
                                                  <h5 class="text-white">
                                                   <a href="#"> <li style="font-family: 'Helvetica', 'Arial', sans-serif; color: orange !important; margin-left:2%" >Persona Natural</li></a>
                                                 </h5>
                                               </div>
                                               <div class="collapse" id="Natural" style=" color: orange !important;">
                                                <ul style="padding: 5px;">
                                                  <li><a href="CreditoNatural.php?tabPag=1">Libre Inversión</a></li>
                                                  <li><a href="CreditoNatural.php?tabPag=2">MicroCrédito</a></li>
                                                  <li><a href="CreditoNatural.php?tabPag=3">Bienes E Inmuebles</a></li>
                                                  <li><a href="CreditoNatural.php?tabPag=4">Crédito Especial</a></li>
                                                  <li><a href="CreditoNatural.php?tabPag=5">Recreación y Turismo</a></li>
                                                  <li><a href="CreditoNatural.php?tabPag=6">Salud</a></li>
                                                  <li><a href="CreditoNatural.php?tabPag=7">UtraAvance</a></li>
                                                  <li><a href="CreditoNatural.php?tabPag=8">UtraRápido</a></li>
                                                  <li><a href="CreditoEducativo.php">Educación</a></li>
                                                </ul>
                                              </div>
                                              <div class="btn-despegable mt-2" data-toggle="collapse" data-target="#Juridicas" aria-expanded="false" aria-controls="Juridicas" style="cursor: pointer;">
                                                    <h5 class="text-white">
                                                     <a href="#"> <li style="font-family: 'Helvetica', 'Arial', sans-serif; color: orange !important; margin-left:2%" >Persona Juridicas</li></a>
                                                   </h5>
                                                 </div>
                                                 <div class="collapse" id="Juridicas" style=" color: orange !important;">
                                                  <ul style="padding: 5px;">
                                                    <li><a href="CreditoJuridico_Empresas.php?tabPag=1">Libre Inversión</a></li>
                                                    <li><a href="CreditoJuridico_Empresas.php?tabPag=2">MicroCrédito</a></li>
                                                    <li><a href="CreditoJuridico_Empresas.php?tabPag=3">Bienes E Inmuebles</a></li>
                                                    <li><a href="CreditoJuridico_Empresas.php?tabPag=4">Crédito Especial</a></li>
                                                    <li><a href="CreditoJuridico_Empresas.php?tabPag=5">UtraRápido</a></li>
                                                  </ul>
                                                </div>
                                            </div>
                                          </li>

                                          <li><a href="#">Ahorro</a>
                                           <div class="megamenu" id="menuen"  style="width: 210px;margin-top: 0px;border-radius: 9px; opacity: 10">
                                          <div class="btn-despegable mt-2" data-toggle="collapse" data-target="#Naturalh" aria-expanded="false" aria-controls="Natural" style="cursor: pointer;">
                                            <h5 class="text-white">
                                             <a href="#"> <li style="font-family: 'Helvetica', 'Arial', sans-serif; color: orange !important; margin-left:2%" >Persona Natural</li></a>
                                           </h5>
                                         </div>
                                         <div class="collapse" id="Naturalh" style=" color: orange !important;">
                                          <ul style="padding: 5px;">
                                            <li><a href="AhorroNatural.php?tabPag=1">UtraSocial</a></li>
                                            <li><a href="AhorroNatural.php?tabPag=2">Permanente</a></li>
                                            <li><a href="AhorroNatural.php?tabPag=3">UtraMás</a></li>
                                            <li><a href="AhorroNatural.php?tabPag=4">UtraCrecer</a></li>
                                            <li><a href="AhorroNatural.php?tabPag=5">UtraDiario</a></li>
                                            <li><a href="AhorroNatural.php?tabPag=6">UtraVivienda</a></li>
                                            <li><a href="AhorroNatural.php?tabPag=7">CDAT</a></li>
                                            <li><a href="AhorroNatural.php?tabPag=8">Infantil/Juvenil</a></li>
                                            <li><a href="AhorroNatural.php?tabPag=9">UtraMás-Amigos</a></li>
                                          </ul>
                                        </div>
                                         <div class="btn-despegable mt-2" data-toggle="collapse" data-target="#Juridicash" aria-expanded="false" aria-controls="Juridicas" style="cursor: pointer;">
                                              <h5 class="text-white">
                                               <a href="#"> <li style="font-family: 'Helvetica', 'Arial', sans-serif; color: orange !important; margin-left:2%" >Persona Jurídica</li></a>
                                             </h5>
                                           </div>
                                           <div class="collapse" id="Juridicash" style=" color: orange !important;">
                                            <ul style="padding: 5px;">
                                              <li><a href="AhorroJuridico_Empresas.php?tabPag=1">UtraSocial</a></li>
                                              <li><a href="AhorroJuridico_Empresas.php?tabPag=2">Permanente</a></li>
                                              <li><a href="AhorroJuridico_Empresas.php?tabPag=3">UtraMás</a></li>
                                              <li><a href="AhorroJuridico_Empresas.php?tabPag=4">UtraCrecer</a></li>
                                              <li><a href="AhorroJuridico_Empresas.php?tabPag=5">UtraDiario</a></li>
                                              <li><a href="AhorroJuridico_Empresas.php?tabPag=6">CDAT</a></li>
                                            </ul>
                                          </div>
                                      </div>
                                    </li>

                                    <li><a href="#">Ent&eacute;rese</a>
                                     <div class="megamenu" id="menuente" style="width: 317px;   margin-top: 0px;border-radius: 9px; opacity: 10 ">

                                      <ul class="single-mega py-1" style="width: 326px !important">
                                        <h5>
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
                                          $sql=" SELECT * FROM comunicados WHERE estado=1";
                                          $result=mysqli_query($conexion,$sql);
                                          while ($mostrar=mysqli_fetch_array($result)) {
                                            ?>
                                            <li>
                                              <a href="../file1/<?php  echo $mostrar['archivost'];?>"><?php  echo $mostrar['Titulo'];?>Comunicados De interes General</a>
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
                                          <?php 
                                          $sql="SELECT * FROM `formatos` WHERE estado=1";
                                          $result=mysqli_query($conexion,$sql);
                                          while ($mostrar=mysqli_fetch_array($result)) {
                                            ?>
                                            <li>
                                              <a href="../file1/<?php  echo $mostrar['archivost'];?>"target="_blank"><?php  echo $mostrar['descripccion'];?></a>
                                            </li>
                                          <?php }  ?>
                                          <li><a href="javascript:mostrarVentanaRevalorizacion();" >Revalorizaciones 2018</a></li>
                                        </h5>

                                        <div class="btn-despegable mt-2" data-toggle="collapse" data-target="#Concursos" aria-expanded="false" aria-controls="Concursos" style="cursor: pointer;">
                                          <h5 class="text-white">
                                           <a href="#"> <li style="font-family: 'Helvetica', 'Arial', sans-serif; color: orange !important; margin-left:2%" >Concursos</li></a>
                                         </h5>
                                       </div>
                                       <div class="collapse" id="Concursos" style=" color: orange !important;">
                                        <ul style="padding: 5px;">
                                          <a href="javascript:mostrarVentanaConcurso();" style=" font-family: 'Helvetica', 'Arial', sans-serif;">Ahorrando Voy ganando</a>
                                          <li>
                                           <a href="javascript:mostrarVentanaConcursoBRE();"style=" font-family: 'Helvetica', 'Arial', sans-serif;">Meses Bre</a>
                                         </li>
                                       </ul>
                                     </div>
                                   </ul>
                                 </div>
                               </li>

                               <li class="li-menu"><a href="#">¿Que Necesita?</a></li>
                               <li class=" float-right position-absolute  imgcoop"  id="imgempresa" style="z-index: 10000 !important" >

                                <div class="megamenu position-absolute" id="virtualCoop">
                                  <div id="persona" style="z-index: 1 !important" >

                                    <ul style="padding: 5px; margin-top: 20px" >
                                      <li class="" style="color: black!important; font-weight: bold;margin-left: 5%;cursor: pointer;font-family: 'Helvetica', sans-serif;font-size: medium; margin-top: 15px">Soy Asociado  Persona Natural
                                        <ul style="margin-left: -1%;text-align:justify; line-height: 140%;font-weight: bold;font-family: 'Helvetica', sans-serif;font-size: small" >
                                          <li>
                                            <a href="#modalLRForm1" data-toggle="modal"style=" font-family: 'Helvetica', sans-serif;" title="Por medio de Nuestra Cooperativa virtual en esta Sección Prodras Relizar Consultas de Tus Cuentas de Ahorro">Transferencias</a>
                                          </li>
                                          <li>
                                           <a href="#modalLRForm1" data-toggle="modal" style=" font-family: 'Helvetica', 'Arial', sans-serif" title="Por medio de Nuestra Cooperativa virtual en esta Sección Prodras Relizar Consultas de  Extractos">Pagos</a>
                                         </li>

                                         <li>
                                           <a href="#modalLRForm1" data-toggle="modal" style=" font-family: 'Helvetica', 'Arial', sans-serif" title="Por medio de Nuestra Cooperativa virtual en esta Sección Prodras Relizar Consultas de  Extractos">Certificados</a>
                                         </li>
                                         <li>
                                           <a href="#modalLRForm1" data-toggle="modal" style=" font-family: 'Helvetica', 'Arial', sans-serif" title="Por medio de Nuestra Cooperativa virtual en esta Sección Prodras Relizar Consultas de  Extractos">Consultas de Cuentas</a>
                                         </li>
                                         <li>
                                           <a href="#modalLRForm1" data-toggle="modal" style=" font-family: 'Helvetica', 'Arial', sans-serif" title="Por medio de Nuestra Cooperativa virtual en esta Sección Prodras Relizar Consultas de  Extractos">Extractos</a>
                                         </li>
                                       </ul>
                                     </li>
                                   </ul>
                                   <ul style="padding: 5px;" >
                                    <li class="" style="color: black!important; font-weight: bold;margin-left: 5%;cursor: pointer;font-family: 'Helvetica', sans-serif;font-size: medium;"> Soy Asociado  Persona Juridica
                                      <ul style="margin-left: -1%;text-align:justify; line-height: 100% !important;font-weight: bold;font-family: 'Helvetica', sans-serif;font-size: small" >
                                        <li>
                                         <a href="#modalLRForm1" data-toggle="modal" style=" font-family: 'Helvetica', 'Arial', sans-serif" title="Por medio de Nuestra Cooperativa virtual en esta Sección Prodras Relizar Consultas de  Extractos">Consultas de Cuentas</a>
                                       </li>
                                       <li>
                                         <a href="#modalLRForm1" data-toggle="modal" style=" font-family: 'Helvetica', 'Arial', sans-serif" title="Por medio de Nuestra Cooperativa virtual en esta Sección Prodras Relizar Consultas de  Extractos">Extractos</a>
                                       </li>
                                       <li>
                                         <a href="#modalLRForm1" data-toggle="modal" style=" font-family: 'Helvetica', 'Arial', sans-serif" title="Por medio de Nuestra Cooperativa virtual en esta Sección Prodras Relizar Consultas de  Extractos">Certificados</a>
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
           <!-- ##### Header Area End ##### -->

           <!-- ##### Call To Action Start ###### -->
           <section class="cta-areaportals d-flex flex-wrap">
            <!-- Cta Thumbnail -->
            <!-- Cta Content -->
            <div class="cta-content" style="background-image: url(img/bg-img/88.jpg);">
              <!-- Section Heading -->
              <div class="section-heading white">
                <div class="line"></div>
                <p>Mas Agil</p>
                <h2>Certificaciones y Extractos</h2>
              </div>
              <h6>Ahora Puedes generar tus estractos y certificaciones en linea para facilitar tus solicitudes.</h6>
              <br>
              <a href="./utraportal.html" class="btn credit-btn box-shadow btn-2">Conoce</a>
            </div>

            <!-- Cta Content -->
            <div class="cta-content" style="background-image: url(img/bg-img/20.jpg);">
              <!-- Section Heading -->
              <div class="section-heading white">
                <div class="line"></div>
                <p>Mas Agil</p>
                <h2>Multiportal Personas</h2>
              </div>
              <h6>Ahora Puedes realizar transacciones en lineas abonos y tranferencias.</h6>
              <br>
              <a href="https://utraportal.utrahuilca.coop:8484/" class="btn credit-btn box-shadow btn-2">Conoce</a>
            </div>

            <!-- Cta Content -->
            <div class="cta-content" style="background-image: url(img/bg-img/6.jpg);">
              <!-- Section Heading -->
              <div class="section-heading white">
                <div class="line"></div>
                <p>Mas Agil</p>
                <h2>Multiportal Juridico</h2>
              </div>
              <h6>Ahora Puedes resalizar transacciones en lineas abonos y tranferencias.</h6>
              <br>
              <a href="https://utraportal.utrahuilca.coop:8484/" class="btn credit-btn box-shadow btn-2">Conoce</a>
            </div>

          </section>
          <!-- ##### Call To Action End ###### -->

          <!-- ##### Elements Area Start ##### -->
          <section class="elements-area section-padding-100-0">
            <div class="container">
             <div class="row">
              <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                  <div class="line"></div>
                  <h2>Servicios</h2>
                </div>
              </div>
            </div>

            <div class="row2">
              <!-- ##### Tabs ##### -->
              <div class="col-12 col-lg-6">

               <div class="elements-title mb-30">
                <h2>Servicios </h2>
              </div>

              <div class="credit-tabs-content">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Pagos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Consultas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="true">Transferencias</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " id="tab--4" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="true">Otros Servicios</a>
                  </li>
                </ul>

                <div class="tab-content mb-100" id="myTabContent">
                  <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                    <div class="credit-tab-content">
                      <!-- Tab Text -->
                      <div class="credit-tab-text">
                        <p><i class="fa fa-check" aria-hidden="true"></i>Pague sus aportes y obligaciones con la Cooperativa.</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>Realice compras y pagos. De esta manera podr&aacute; pagar sus servicios p&uacute;blicos a tiempo en l&iacute;nea por medio de la plataforma PSE.</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>Programar pagos y transferencias, ahorrando tiempo y evitando desplazarse a la Cooperativa.</p>

                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                    <div class="credit-tab-content">
                      <!-- Tab Text -->
                      <div class="credit-tab-text">
                        <p><i class="fa fa-check" aria-hidden="true"></i>Consulta de estado y saldo de sus cuentas de Ahorro a la vista</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>Solicitar documentos a trav&eacute;s de un funcionario de la cooperativa.</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>Consulte el saldo y movimiento de sus aportes.</p>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                    <div class="credit-tab-content">
                      <!-- Tab Text -->
                      <div class="credit-tab-text">
                        <p><i class="fa fa-check" aria-hidden="true"></i>Realice transferencias de dinero&nbsp;entre sus cuentas de ahorros.</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>Transferencias interbancarias a otras cuentas de ahorros.</p>

                        <p><i class="fa fa-check" aria-hidden="true"></i>Transferencias a otra entidad de la Red Coopcentral.</p>
                        <p><i class="fa fa-check" aria-hidden="true"></i>Recibir Transferencias de Otras Entidades&nbsp.</p>

                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab--4">
                    <div class="credit-tab-content">
                      <!-- Tab Text -->
                      <div class="credit-tab-text">
                        <p><i class="fa fa-check" aria-hidden="true"></i>Solicite el c&oacute;digo de seguridad a trav&eacute;s del portal y retire efectivo en cajeros electronicos sin tarjeta d&eacute;bito. </p>
                      </div>
                      <div class="credit-tab-text">
                        <p><i class="fa fa-check" aria-hidden="true"></i>Bloqueo de tarjeta debito servibanca Utrahuilca.</p>
                      </div>
                      <div class="credit-tab-text">
                        <p><i class="fa fa-check" aria-hidden="true"></i>Descargue movimiento de cuentas de ahorros.</p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <!-- ##### Tabs ##### -->
            <div class="col-12 col-lg-6">

             <div class="elements-title mb-30">
              <h2> Requisitos y Recomendaciones</h2>
            </div>
            <div class="credit-tabs-content">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="tabj--1" data-toggle="tab" href="#tabj1" role="tab" aria-controls="tabj1" aria-selected="false">Requisitos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tabj--2" data-toggle="tab" href="#tabj2" role="tab" aria-controls="tabj2" aria-selected="false">Recomendaciones</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tabj--3" data-toggle="tab" href="#tabj3" role="tab" aria-controls="tabj3" aria-selected="true">Soporte</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " id="tabj--4" data-toggle="tab" href="#tabj4" role="tab" aria-controls="tabj4" aria-selected="true">Fromatos</a>
                </li>
              </ul>

              <div class="tab-content mb-100" id="myTabContent">
                <div class="tab-pane fade show active" id="tabj1" role="tabpanel" aria-labelledby="tabj--1">
                  <div class="credit-tab-content">
                    <!-- Tab Text -->
                    <div class="credit-tab-text">
                      <p><i class="fa fa-check" aria-hidden="true"></i>Realizar operaciones las 24 horas del d&iacute;a desde cualquier computador o m&oacute;vil con acceso a internet.</p>
                      <p><i class="fa fa-check" aria-hidden="true"></i>Monitoreo permanente de las transacciones.</p>
                      <p><i class="fa fa-check" aria-hidden="true"></i>Mayor seguridad con la generacion de un c&oacute;digo enviado a su correo electr&oacute;nico y por medio de un mensaje de texto a su celular&nbsp;&nbsp;</p>
                      <p><i class="fa fa-check" aria-hidden="true"></i>Notificaci&oacute;n a trav&eacute;s de mensaje de texto.</p>
                      <p><i class="fa fa-check" aria-hidden="true"></i>Agilidad y facilidad en las operaciones.</p>
                      <p><i class="fa fa-check" aria-hidden="true"></i>Reduce el manejo y traslado del efectivo.</p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tabj2" role="tabpanel" aria-labelledby="tabj--2">
                  <div class="credit-tab-content">
                    <!-- Tab Text -->
                    <div class="credit-tab-text">
                     <p><i class="fa fa-check" aria-hidden="true"></i>Acercarse a la agencia y diligenciar formato de solicitud del servicio y actualizar su datos personales. </p>
                     <p><i class="fa fa-check" aria-hidden="true"></i>Pasos para acceder al portal</p>
                     <p><i class="fa fa-check" aria-hidden="true"></i>ngresar a la p&aacute;gina web de Utrahuilca&nbsp;<a href="http://www.utrahuilca.coop">www.utrahuilca.coop</a></p>
                     <p><i class="fa fa-check" aria-hidden="true"></i>Dar click en el &iacute;cono Portal Transaccional.</p>
                     <p><i class="fa fa-check" aria-hidden="true"></i>Si es usuario nuevo haga clic en&nbsp;<a href="https://multiportal.redcoopcentral.com/integracion/multiportal/Enrolamiento/?entidad=00000048">Reg&iacute;strese Aqu&iacute;.</a></p>
                     <p><i class="fa fa-check" aria-hidden="true"></i>Si es usuario antiguo haga clic en<a href="https://multiportal.redcoopcentral.com/multiportalvisio/Login/Index?ENTIDAD=00000048">&nbsp;Ingresar.</a></p>
                     <p><i class="fa fa-check" aria-hidden="true"></i>Disfrute de los servicios que le brinda el&nbsp;Portal Transaccional.</p>
                   </div>
                 </div>
               </div>

               <div class="tab-pane fade" id="tabj3" role="tabpanel" aria-labelledby="tabj--3">
                <div class="credit-tab-content">
                  <!-- Tab Text -->
                  <div class="credit-tab-text">
                    <p><i class="fa fa-check" aria-hidden="true"></i>Realice sus transacciones &uacute;nicamente desde equipos de uso personal, en su casa u oficina, evite el uso de equipos ubicados en sitios p&uacute;blicos que no sean de absoluta confianza como los caf&eacute; Internet, salas universitarias o lugares donde extra&ntilde;os puedan tener acceso a su informaci&oacute;n confidencial.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Nunca ingrese a trav&eacute;s de enlaces en correos electr&oacute;nicos falsos (phishing), que puedan llevarle a sitios fraudulentos. Recuerde que UTRAHUILCA no solicita informaci&oacute;n confidencial por este medio.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>El Usuario, la Clave Principal es personal e intransferible, no se puede compartir con nadie, darlas a conocer generar&aacute; riesgos de fraudes.</p> 
                    <p><i class="fa fa-check" aria-hidden="true"></i>Utilice contrase&ntilde;as f&aacute;ciles de recordar para usted, no utilice fechas de nacimiento, n&uacute;mero de documento de identidad, direcci&oacute;n o tel&eacute;fonos, memor&iacute;celas y no las escriba en ning&uacute;n lugar, en caso de olvidar la clave&nbsp;debe ingresar al Portal Transaccional para restablecerla.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>UTRAHUILCA nunca solicitar&aacute; el cambio de claves a trav&eacute;s de correo electr&oacute;nico o mensajes de texto.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Nunca preste su cuenta para recibir fondos cuyo origen usted desconoce.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Tener instalado en su PC un navegador como Internet explorer 9, Firefox 40, Chrome 45, Safari 9 y Opera 35 o superiores.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>El Portal Transaccional no permite conexiones simult&aacute;neas, por lo tanto el usuario solo podr&aacute; tener una &uacute;nica sesi&oacute;n activa.</p>

                    <p><i class="fa fa-check" aria-hidden="true"></i>Asegurarse de cerrar sesi&oacute;n del Portal Transaccional una vez termine las transacciones para evitar que otros ingresen a ella.</p>

                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="tabj4" role="tabpanel" aria-labelledby="tabj--4">
                <div class="credit-tab-content">
                  <!-- Tab Text -->
                  <div class="credit-tab-text">
                    <p><i class="fa fa-check" aria-hidden="true"></i>Si tiene algún inconveniente para ingresar por favor comuníquese con los siguientes contactos:</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i><a href="mailto:admonoperacion@utrahuilca.com?Subject=Soporte Portal Transaccional" target="_top">admonoperacion@utrahuilca.com</a></p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>PBX 8728181 EXT 515 CEL: 315 827 8896 - 310 210 1852 </p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>LUNES A SABADO 7:00 a.m. a 7:00 p.m</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div> 
  </section> 

  <!-- ##### Call To Action Start ###### -->
  <section class="cta-area d-flex flex-wrap">



    <!-- Cta Content -->
    <div class="cta-content">
      <!-- Section Heading -->
      <div class="section-heading white">
        <div class="line"></div>
        <p>Mas Agil</p>
        <h2>PSE Pagos Seguros en Linea</h2>
      </div>
      <h6>En nuestra Agencia Virtual pensamos en usted. Ofrecemos los servicios para su necesidad.</h6>
      <div class="section-heading white">
        <h6>Para su facilidad:</h6>
        <h6>Realice compras y pagos. </h6>
        <h6> De esta manera podr&aacute; pagar sus servicios p&uacute;blicos a tiempo en l&iacute;nea por medio de la plataforma PSE</h6>
      </div>
      <a href="https://registro.pse.com.co/PSEUserRegister/" class="btn credit-btn box-shadow btn-2">Registro Ach</a>
    </div>
    <!-- Cta Thumbnail -->
    <div class="cta-thumbnail bg-img jarallax" style="background-image: url(img/5500_pago-pse-impuesto-predial_1024x600.jpg);"></div> 
  </section>
  <!-- ##### Call To Action End ###### -->  
  <!-- ##### About Area Start ###### -->
  <section class="about-area section-padding-100-0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6">
          <div class="about-content mb-100">
            <!-- Section Heading -->
            <h5 class="mb-4">SOLICITA ACTIVACION DEL PORTAL TRANSACCIONAL.</h5>
            <p class="mb-0"><li>Acercarse a la agencia donde es asociado y solicitar el servicio del portal transaccional, llevar el documento de identificación original.</li>
            </p>
            <p class="mb-0"><li>Actualice su datos de forma periódica de tal forma que siempre este informado de todos los servicios, transacciones y beneficios de tener activo el servicio de portal transaccional. Es de gran importancia que los datos de número de celular y correo electrónico sean los que usted efectivamente utiliza.</li>
            </p>
            <p class="mb-0"><li>Es importante que se acerque a su agencia y actualice sus datos cada vez que cambie su número de celular, dirección residencial, información laboral y correo electrónico.</li>
            </p>
            <p class="mb-0"><li>Si usted desea puede descargar aquí el formato AS-F-311 Solicitud Servicio Portal Transaccional UTRAHUILCA y llevarlo diligenciado a su agencia.</li>
            </p>

            <p class="mb-0"><li>Una vez entregada en la agencia la solicitud, en el transcurso del día será contactado por el área encargada informándole que ya puede ingresar en www.utrahuilca.coop al portal y registrarse.</li>
            </p>
            <p class="mb-0"><li>Importante el ingreso al portal transaccional no podrá realizarse si no se ha solicitado formalmente el servicio.</li>
            </p>
            <a href="docs/OP-F-373-Formato.docx" class="btn credit-btn mt-50">Descargar manual</a>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="about-thumbnail mb-100">
            <img src="img/bg-img/14.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### News Hero Area Start ##### -->
  <div class="hero-area-news d-flex flex-wrap">

    <div class="hero-single-section">
      <!-- Single Welcome Post -->
      <?php 
      $sql="SELECT * FROM `link` WHERE estado=1 and idlink='7'";
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
    $sql="SELECT * FROM `link` WHERE estado=1 and idlink='8' ";
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
    <?php 
    $sql="SELECT * FROM `link` WHERE estado=1 and idlink='9'or idlink ='10' ";
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
<!-- ##### News Hero Area End ##### -->
<!-- ##### Call To Action Start ###### -->
<section class="cta-2-area wow fadeInUp" data-wow-delay="100ms">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- Cta Content -->
        <div class="cta-content d-flex flex-wrap align-items-center justify-content-between">
          <div class="cta-text">
            <h4>realiza el proceso de registro al multiportal para uso de los servicios.</h4>
          </div>
          <div class="cta-btn">
            <a href="https://multiportal.redcoopcentral.com/integracion/multiportal/Enrolamiento/?entidad=00000048" class="btn credit-btn box-shadow">Registro Multiportal</a>
          </div>
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
          <p class="mb-0"><i class="fa fa-calendar"></i> Lunes a Viernes:  8:00 am a 12:00 p.m  <br>
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
            <li><a href="aviso de privacidad.pdf">Aviso de Privacidad</a></li>
            <li><a href="./alianza.php">Alianzas</a></li>
            <li><a href="./Pqrs.php">Pqrsf</a></li>
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
            <a href="#modalLRForm1" data-toggle="modal" class="post-author" target="_blank"><img src="img/core-img/pencil.png" alt=""> Genere sus Certificados y Extractos</a>
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
            <a href="#modalLRForm1" data-toggle="modal" class="post-author" target="_blank"><img src="img/core-img/pencil.png" alt=""> Realice sus transacciones en línea</a>
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
          <a href="http://www.supersolidaria.gov.co/" target="_blank" class="footer-logo"><img src="img/Footer/super-ok.png" style="width: 250%"></a>
          <a href="https://www.fogacoop.gov.co/" target="_blank" class="footer-logo"><img src="img/Footer/Fogacoop-ok.png" style="width: 80%"></a>
          <a href="index.php" class="footer-logo"><img src="img/Footer/sello-ok.png" style="width: 80%"></a>
          <a href="https://www.coopcentral.com.co/" class="footer-logo" target="_blank"><img src="img/Footer/red-ok.png" style="width: 80%"></a>
          <!-- Copywrite Text -->
          <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
           Copyright &copy;Todos los Derechos Reservados Utrahuilca.coop <i class="fa fa-heart-o" aria-hidden="true"></i>
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
</body>

</html>