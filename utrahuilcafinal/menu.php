

<?php
   require_once 'MenuBuilder.php';
   ?>   
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
<!-- menunavbar vertical -->
<nav id="menunavbar" class="paraizq d-block d-md-none">

   <?php
      $menu = new MenuBuilder();
       echo ( $menu->get_menu_html() ); ?>
<ul><li>
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
   <a href="#" id="showmenunavbar"> <i class="fa fa-navicon"></i></a> 
</nav>
<!-- /menunavbar vertical --> 
<!-- ##### Header Area Start ##### -->
<header class="header-area">
   <div class="top-header-area">
   <div class="container h-100">
      <div class="row h-100 align-items-center">
         <div class="col-12 d-flex">
            <!-- Logo Area -->
            <div class="logo"></div>
            <div class="col-12 d-flex justify-content-end">
               <a id="simuladores" href="simulador.php" >Simuladores de ahorro y crédito</a>
               <div class="top-contact-info d-flex align-items-center">
                  <span>Siguenos En </span>
                  <a href="https://www.facebook.com/utrahuilca/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a> <span></span>
                  <a href="https://twitter.com/utrahuilca?lang=es" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i>   </a>  <span></span>
                  <a href="https://www.instagram.com/utrahuilca/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i>   </a>  <span></span>
                  <a href="https://www.linkedin.com/company/cooperrativa-latinoamericana-de-ahorro-y-cr%C3%A9dito-utrahuilca/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i>  </a> <span></span>
                  <a href="https://www.youtube.com/channel/UCZa_TvUo3FlzVz-jnn_67jw" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i>  </a>
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
   </div></div>
   <div class="credit-main-menu" id="sticker">
      <div class="classy-nav-container navbar-expand-sm breakpoint-off">
         <div class="container">
            <nav class="classy-navbar" id="creditNav">
               <div class="classy-navbar-toggler"></div>
               <div class="contact">
                  <a href="index"><img src="img/core-img/logo.png" alt=""></a>
               </div>
               <div class="classy-menu d-none d-md-block">
                  <div class="classycloseIcon">
                     <div class="cross-wrap"></div>
                  </div>
                  <div>
                     <?php 
                        echo ($menu->get_menu_html(0,"navmax") ); ?>
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
                                                "En esta sección podrá relizar consultas de sus cuentas de ahorro">
                                             Transferencias</a>
                                          </li>
                                          <li>
                                             <a href="#exampleModal" data-toggle="modal" style=
                                                "font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;" title=
                                                "En esta sección prodrá relizar consultas de pagos">
                                             Pagos</a>
                                          </li>
                                          <li>
                                             <a href="#UtraPortalNuatural" data-toggle="modal" style=
                                                "font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;"  title=
                                                "En esta sección prodrá relizar consultas de certificados">
                                             Certificados</a>
                                          </li>
                                          <li>
                                             <a href="#UtraPortalNuatural" data-toggle="modal" style=
                                                "font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;"  title=
                                                "En esta sección podrá relizar consultas de sus cuentas de ahorro">
                                             Consultas de Cuentas</a>
                                          </li>
                                          <li>
                                             <a href="#UtraPortalNuatural" data-toggle="modal" style=
                                                "font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;"  title=
                                                "En esta sección podrá relizar consultas de extractos">
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
                                                "En esta sección prodrá relizar consultas de cuentas de ahorro">
                                             Consultas de Cuentas</a>
                                          </li>
                                          <li>
                                             <a href="#UtraPortalJuridica" data-toggle="modal" style=
                                                "font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;"  title=
                                                "En esta sección prodrá relizar consultas de extractos">
                                             Extractos</a>
                                          </li>
                                          <li>
                                             <a href="#UtraPortalJuridica" data-toggle="modal" style=
                                                "font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;"  title=
                                                "En esta sección prodrá relizar consultas de certificados">
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
         </div>
         <div class="container d-flex justify-content-start">
            <div class="breadcrumb col-12"><?= utf8_encode($menu->breadcrumbs(' > ') )?></div>
			</nav>
         </div>
      </div>
   </div>
</header>
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" id="exampleModal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-header bg-white font-weight-bold" style="width: 165px; height:70px">
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
                        <div id="next1">
                           <h1 style="color: #eb9008">Continúe <i class="fa fa-forward fa-lg" aria-hidden="true"></i></h1>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                     <div class="col text-center mt-5">
                        <button class="btn btn-lg text-white w-50"  role="link" onclick="window.open(' https://multiportal.redcoopcentral.com/multiportalvisio/Login/Index?ENTIDAD=00000048#','_blank')" style="background: #eb9008">Ingresar</button>
                        <div class="col-12 row">
						<p class="col-12 col-lg-6 font-weight-bold"> <a href="AgenciaVirtual/ASO-MU-014pagosytransferencias.docx" download="pagosytrans.docx" >Descargar manual de usuario para pagos y transferencias</a></p>
						
						<p class="col-12 col-lg-6 font-weight-bold"> <a href="#Recomendaciones" data-toggle="modal" >Ver recomendaciones de seguridad </a></p>
						</div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="contenido2" style="display: none;">
               <h1 class="text-center mt-5" style="color: #eb9008">Paso No. 1</h1>
               <center>
                  <p class="text-dark mt-3 ml-5 mb-5 w-50 mr-5" style="font-size: 25px">Descargue el formato de solicitud del servicio virtual <b style="color:#eb9008; font-size: 30px"> <a href="AgenciaVirtual/ASO-FO-020formatosolicitudser2020.docx" target="_blank"> AQUÍ.</a></b></p>
               </center>
               <div class="float-left mr-5 ml-5" style="cursor: pointer;">
                  <div id="previus2">
                     <h1 style="color: #eb9008"><i class="fa fa-backward fa-lg" aria-hidden="true"></i> Atrás</h1>
                  </div>
               </div>
               <div class="float-right mr-5" style="cursor: pointer;">
                  <div id="next2">
                     <h1 style="color: #eb9008">Continúe <i class="fa fa-forward fa-lg" aria-hidden="true"></i></h1>
                  </div>
               </div>
            </div>
            <div id="contenido3" style="display: none">
               <h1 class="text-center mt-5" style="color: #eb9008">Paso No. 2</h1>
               <center>
                  <p class="text-dark mt-3 ml-5 mb-5 w-50 mr-5" style="font-size: 25px">Diligencie, imprima, <b style="color:#eb9008; font-size: 30px"> firme </b> y escaneé el formato.</p>
               </center>
               <div class="float-left mr-5 ml-5" style="cursor: pointer;">
                  <div id="previus3">
                     <h1 style="color: #eb9008"><i class="fa fa-backward fa-lg" aria-hidden="true"></i> Atrás</h1>
                  </div>
               </div>
               <div class="float-right mr-5" style="cursor: pointer;">
                  <div id="next3">
                     <h1 style="color: #eb9008">Continúe <i class="fa fa-forward fa-lg" aria-hidden="true"></i></h1>
                  </div>
               </div>
            </div>
            <div id="contenido4" style="display: none">
               <h1 class="text-center mt-5" style="color: #eb9008">Paso No. 3</h1>
               <center>
                  <p class="text-dark mt-3 ml-5 mb-5 w-75 mr-5" style="font-size: 25px">Envíe el formato firmado al correo electrónico: <br><b style="color:#eb9008; font-size: 30px"> admonoperacion@utrahuilca.com </b> </p>
               </center>
               <div class="float-left mr-5 ml-5" style="cursor: pointer;">
                  <div id="previus4">
                     <h1 style="color: #eb9008"><i class="fa fa-backward fa-lg" aria-hidden="true"></i> Atrás</h1>
                  </div>
               </div>
               <div class="float-right mr-5" style="cursor: pointer;">
                  <div id="next4">
                     <h1 style="color: #eb9008">Continúe <i class="fa fa-forward fa-lg" aria-hidden="true"></i></h1>
                  </div>
               </div>
            </div>
            <div id="contenido5" style="display: none">
               <h1 class="text-center mt-5" style="color: #eb9008">Paso No. 4</h1>
               <center>
                  <p class="text-dark mt-3 ml-5 mb-5 w-75 mr-5" style="font-size: 25px">De 24 a 48 horas, UTRAHUILCA enviará un correo electrónico para continuar con el registro. </p>
               </center>
               <div class="float-left mr-5 ml-5" style="cursor: pointer;">
                  <div id="previus5">
                     <h1 style="color: #eb9008"><i class="fa fa-backward fa-lg" aria-hidden="true"></i> Atrás</h1>
                  </div>
               </div>
               <div class="float-right mr-5" style="cursor: pointer;">
                  <div id="next5">
                     <h1 style="color: #eb9008">Cerrar <i class="fa fa-close fa-lg" aria-hidden="true"></i></h1>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
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
                        
						Debe tener correo electrónico actualizado y correcto, ya que este será el medio que se usará para la confirmación al momento del registro. </p>
<p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">						
						Si no ha actualizado su información, por favor diríjase a la agencia más cercana
                     </p>
                     <div class="col text-center mt-5">
                        <button class="btn btn-lg text-white w-50"  role="link" onclick="window.location='http://192.168.101.137:8081/Registry.aspx'" style="background: #eb9008">Registrarse</button>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="nav-profile1" role="tabpanel" aria-labelledby="nav-profile-tab">
                     <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">
                        Podrá realizar consultas de información, generar extractos, certificaciones tributarias y Certificado de Asociado.
                     </p>
                     <div class="col text-center mt-5">
                        <button class="btn btn-lg text-white w-50" role="link" onclick="window.location='http://192.168.101.137:8081/Login.aspx'" style="background: #eb9008">Ingresar</button>
                        <div class="col-12 row">
						<p class="col-12 col-lg-6 font-weight-bold"> <a href="AgenciaVirtual/ASO-MU-010consultadeextractos.docx" download="extractos.docx" >Descargar manual de usuario para consultar extractos</a></p>
						<p class="col-12 col-lg-6 font-weight-bold"> <a href="#Recomendaciones" data-toggle="modal" >Ver recomendaciones de seguridad </a></p>
						</div>
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
                        Debe tener correo electrónico actualizado y correcto, ya que este será el medio que se usará para la confirmación al momento del registro. </p> 
						<p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">
						Si no ha actualizado su información, por favor diríjase a la agencia más cercana
                     </p>
                     <div class="col text-center mt-5">
                        <button class="btn btn-lg text-white w-50"  role="link" onclick="window.location='http://192.168.101.137:8081/Registry.aspx'" style="background: #eb9008">Registrarse</button>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab">
                     <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">
                        Podrá realizar consultas de información, generar extractos, certificaciones tributarias y Certificado de Asociado.
                     </p>
                     <div class="col text-center mt-5">
                        <button class="btn btn-lg text-white w-50" role="link" onclick="window.location='http://192.168.101.137:8081/Login.aspx'" style="background: #eb9008">Ingresar</button>
						<div class="col-12 row">
                        <p class="col-12 col-lg-6 font-weight-bold"> <a href="AgenciaVirtual/ASO-MU-010consultadeextractos.docx" download="extractos.docx" >Descargar manual de usuario para consultar extractos</a></p>
						<p class="col-12 col-lg-6 font-weight-bold"> <a href="#Recomendaciones" data-toggle="modal" >Ver recomendaciones de seguridad </a></p>
                     </div></div>
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
                        <div id="next6">
                           <h1 style="color: #eb9008">Continúe <i class="fa fa-forward fa-lg" aria-hidden="true"></i></h1>
                        </div>
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
                  <div id="next7">
                     <h1 style="color: #eb9008">Continúe <i class="fa fa-forward fa-lg" aria-hidden="true"></i></h1>
                  </div>
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
                  <br>
               </p>
               <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">Utilice contraseñas fáciles de recordar para usted, memorícelas y no la escriba en ningún lugar, en caso de olvidar la clave debe ingresar a la Cooperativa Virtual UTRAHUILCA para reestablecerla.<br></p>
               <div class="float-right mr-5" style="cursor: pointer;">
                  <div id="next8">
                     <h1 style="color: #eb9008">Continúe <i class="fa fa-forward fa-lg" aria-hidden="true"></i></h1>
                  </div>
               </div>
            </div>
            <div id="contenido9" style="display: none">
               <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">UTRAHUILCA nunca solicitará el cambio de claves a través de correo electrónico o mensajes de texto.<br></p>
               <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">Nunca preste su cuenta para recibir fondos cuyo origen usted desconoce.<br></p>
               <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">El Usuario y la Clave Principal es personal e intransferible, no se puede compartir con nadie, darlas a conocer generará riesgos de fraudes. <br></p>
               <div class="float-right mr-5" style="cursor: pointer;">
                  <div id="next9">
                     <h1 style="color: #eb9008">Continúe <i class="fa fa-forward fa-lg" aria-hidden="true"></i></h1>
                  </div>
               </div>
            </div>
            <div id="contenido10" style="display: none">
               <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">La Cooperativa Virtual UTRAHUILCA no permite conexiones simultáneas, por lo tanto el usuario solo podrá tener una única sesión activa.<br></p>
               <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">Asegurarse de cerrar sesión una vez termine las transacciones para evitar que otros ingresen a ella. Dejar las sesiones abiertas pone en peligro la privacidad y seguridad de su información. Siempre finalice la sesión de Cooperativa Virtual UTRAHUILCA a través de la opción “Cierre de Sesión”.<br></p>
               <div class="float-right mr-5" style="cursor: pointer;">
                  <button type="button"  data-dismiss="modal">
                     <h1 style="color: #eb9008">Cerrar <i class="fa fa-close fa-lg" aria-hidden="true"></i></h1>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- ##### Header Area End ##### -->
<!-- ##### Header Area End ##### -->
</nav>

