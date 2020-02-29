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
  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico">
  <link rel="stylesheet" href="./css/sliderbottom.css">
  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="barra.css">
  <link rel="stylesheet" href="Cooperativavirtual.css">
  <link rel="stylesheet" href="./css/menunew.css">
  <link rel="stylesheet" href="./css/menunavbar.css">

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

              <section class="cta-area d-flex flex-wrap">

                <!-- Cta Content -->
                <div class="cta-content">
                  <!-- Section Heading -->
                  <div class="section-heading white">
                    <p>Productos</p>
                    <h2>Personas Jurídicas o Empresas</h2>
                  </div>
                  <h6>Conozca nuestros productos de ahorro.</h6>
                </div>         
                <div class="cta-thumbnail bg-img jarallax" style="background-image: url(img/Empresa-utrahuilca.png);"></div>    
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
                        </ul>
                        <div class="tab-content">

                          <div class="tab-pane active" id="pagina1" role="tabpanel">
                            <div class="sv-tab-panel">
                              <!-- ##### Header Area End ##### -->
                              <div class="container" style="margin-left: 15%">
                                <h3>Descripción </h3>
                                <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                  Utrasocial es la cuenta de ahorro para su empresa que le permite mantener un valor reservado para el futuro.
                                </p>
                                <br>
                                <h5>Dirigido a:</h5>
                                <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                  Personas jurídicas
                                </p>
                                <br>
                                <h5>Monto de apertura:</h5>
                                <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                  Persona Jurídica                       Apertura 10% SMMLV   <strong>$87.800</strong>                           
                                  Aporte Periódicos Mensuales: Desde el 5% SMMLV <strong>$43.900</strong>
                                  Valor ordinario: <strong>200.0% SMMLV C/U    $1.755.600</strong> 
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
                                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                   La administración de la cuenta Utrasocial es totalmente gratis.<br>
                                 </li>
                                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                   Obtiene incremento anual por la liquidación de la revalorización de sus aportes sociales.<br>
                                 </li>
                                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                   El saldo de UTRASOCIAL y Ahorro permanente, más la antigüedad de vinculación aumentan la reciprocidad para solicitar crédito.<br>
                                 </li>
                                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                   Es un ahorro para el futuro de los asociados(as), no tiene límites de ahorro.<br>
                                 </li>
                                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                   El bajo costo de la cuota estatutaria permite estar al día mes a mes.<br>
                                 </li>
                                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                  La cuota de UTRASOCIAL y Ahorro permanente la puede cancelar anticipadamente o en la forma que más le convenga al asociado(a) y así ahorrar tiempo.<br></li>
                                  <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                   Subsidio económico de apoyo solidario en caso de fallecimiento del asociado(a).<br>
                                 </li>
                                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                   Estar al día en Utrasocial le permite al asociado(a) recibir el 50% del subsidio en su previsión exequial en convenio con EMCOFUN LOS OLIVOS.<br>
                                 </li>
                                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                   Estar al día en los aportes sociales y en el ahorro permanente le permite a los asociado/as la participación democrática en la propiedad de la cooperativa y otorgan el derecho vincularse en la gestión y uso de los servicios.<br>
                                 </li>
                                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                  Todo asociado(a) tiene el deber de completar y mantener como Aporte Social Ordinario, el equivalente a un SMMLV de acuerdo al tipo de asociado(a).<br></li>

                                  <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                   Con esta cuenta de ahorro el asociado(a) más otras condiciones puede quedar hábil para participar en los procesos electorales y demás aspectos relacionados con las Asambleas de la Cooperativa.<br>
                                 </li>
                                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                   Los(as) asociados(as) a UTRAHUILCA tienen derecho a los servicios y beneficios que ofrece la Cooperativa, en reciprocidad al valor de su Aporte Social y Ahorro Permanente Ordinarios, Extraordinarios y Adicionales o Voluntarios y al promedio de sus otras cuentas de ahorros, siempre y cuando estén al día en el pago de su Aporte Social y Ahorro Permanente Ordinarios.<br>
                                 </li>
                                 <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                  UTRASOCIAL Hace parte del patrimonio de la Cooperativa.
                                </li>
                              </lo>
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
                    </ul>
                    <div class="tab-content">

                      <div class="tab-pane active" id="pagina4" role="tabpanel">
                        <div class="sv-tab-panel">
                          <!-- ##### Header Area End ##### -->
                          <div class="container" style="margin-left: 15%">
                            <h3>Descripción </h3>
                            <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                            Una vez el(la) asociado(a) cuente con su aporte social ordinario podrá continuar el ahorro permanente, obtenido una rentabilidad Trimestral. </p>
                            <br>
                            <h5>Dirigido a:</h5>
                            <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                              Personas Jurídicas de derecho Público, del sector cooperativo y las demás de derecho privado sin ánimo de lucro. Las empresas o unidades económicas cuando los propietarios trabajen en ellas y prevalezca el trabajo familiar asociado.
                            </p>
                            <br>
                            <h5>Monto de apertura:</h5>
                            <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                              Persona Jurídica Desde 5.0% SMMLV  <strong>$43.900</strong>           Cuota Periódica Mínima Mensual: Desde 5.0% SMMLV  <strong>$41.400</strong> Cuota Ordinaria: <strong>$1.755.600</strong>                                    
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
                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                Los saldos en Ahorro Permanente reciben rentabilidad con periodicidad trimestral.<br>
                              </li>
                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                La administración de la cuenta Utrasocial y Ahorro permanente es totalmente gratis.<br>
                              </li>
                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                El saldo de Utrasocial y Ahorro permanente, más la antigüedad de vinculación aumentan la reciprocidad para solicitar crédito.<br>
                              </li>
                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                El valor de la cuota estatutaria es mínimo, siendo asequible estar al día cada mes.<br>
                              </li>
                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                La cuota de Utrasocial y Ahorro permanente la puede cancelar anticipadamente y ahorrar tiempo.<br>
                              </li>
                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                Subsidio de apoyo solidario para los beneficiarios en caso del fallecimiento del asociado.<br>
                              </li>
                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                A mayor saldo en Utrasocial y Ahorro Permanente recibe el 50% de Subsidio en su previsión exequial en convenio con EMCOFUN LOS OLIVOS.<br>
                              </li>
                              <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                                Se beneficia con seguro de depósito FOGACOOP hasta por 12 millones de pesos.<br>
                              </li>
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
                    </ul>
                    <div class="tab-content">

                      <div class="tab-pane active" id="pagina7" role="tabpanel">
                        <div class="sv-tab-panel">
                          <!-- ##### Header Area End ##### -->
                          <div class="container" style="margin-left: 15%">
                            <h3>Descripción General</h3>
                            <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                              <strong>¡Lo acerca a sus sueños!</strong>
                              <br>
                              Si su empresa necesita alcanzar una meta, lo apropiado es ahorrar una suma determinada en el tiempo convenido para lograrla. Esta es la cuenta que su negocio necesita.

                            </p>
                            <br>
                            <h5>Dirigido a:</h5>
                            <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                              Personas naturales adultos y menores de edad.
                            </p>
                            <br>
                            <h5>Monto de apertura:</h5>
                            <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                              Jurídica      Monto Mínimo 18% SMMLV <strong>$158.000 Monto Mínim</strong> - Con Cuota Periódica Mensual:<strong>$26.333</strong> 
                              Monto Máximo de acuerdo al Plan:<strong> 6 meses o 36 meses</strong>    

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
                             <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                              Cero costos por cuota de manejo o administración.<br>
                            </li>
                            <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                             No hay cláusulas o multas por cancelación anticipada del ahorro.<br>
                           </li>
                           <li  style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Permite realizar abonos extraordinarios al valor pactado o de manera anticipada para lograr mayor rentabilidad y cumplimiento de la meta de ahorro.<br></li>
                           <li  style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Cuotas mínimas de ahorro mensual, desde tan solo $26.333.<br></li>
                           <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Acceso a otros canales transaccionales para realizar consignaciones, puntos Su Chance, Efecty - Dimonex, Banco Agrario, Banco de Bogotá, Portal transaccional/App móvil.<br></li>
                           <li  style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Seguridad en la consulta y manejo de sus operaciones a través de registros digitales de huella, foto, firma y acceso al portal transaccional lo que le permite hacer operaciones en las agencias sin necesidad de tener libreta o tarjeta débito.<br></li>
                           <li  style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Cuenta con seguro de depósito FOGACOOP hasta por 12 millones de pesos.<br></li>
                           <li  style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">UTRAHUILCA se compromete a reconocer intereses sobre saldos acumulados, los cuales se van capitalizando en los mismos periodos regulares, para ser entregados al titular junto con el capital depositado en la fecha convenida.<br></li>
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
                </ul>
                <div class="tab-content">

                  <div class="tab-pane active" id="pagina10" role="tabpanel">
                    <div class="sv-tab-panel">
                      <!-- ##### Header Area End ##### -->
                      <div class="container" style="margin-left: 15%">
                       <h3>Descripción General </h3>
                       <p  style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                        <br>
                        Con esta cuenta de ahorros nuestras empresas asociadas pueden guardar su dinero sin ningún costo y retirarlo en el momento requerido, incluyendo el valor de los intereses ganados durante el periodo de permanencia.
                      </p>
                      <br>
                      <h5>Dirigido a:</h5>
                      <p  style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                        Personas jurídicas
                      </p>
                      <br>
                      <h5>Monto de apertura:</h5>
                      <p  style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                        Persona Jurídica  Hasta 2% SMMLV <strong>$18.000</strong>                                                                     
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
                         <li  style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Exención del impuesto del 4x1.000 conforme a las condiciones establecidas por el Estado hasta 350 UVT. La cuenta debe estar inscrita.<br></li>
                         <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                          Subsidio parcial del Impuesto 4x1.000 en la cuenta UTRACRECER en retiros mensuales hasta por 8 SMMLV <br></li>

                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Tarjeta débito y libreta de ahorro, sin cuota de manejo o administración.<br></li>
                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Consignaciones y retiros por ventanilla ilimitados.<br></li>
                          <li  style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Consulta de saldos, solicitud de extractos y certificaciones de la cuenta sin costo.  <br></li>
                          <li  style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Su dinero se rentabiliza por encima del mercado financiero tradicional.<br></li>
                          <li  style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Las cuentas de ahorros no tienen débitos inesperados por concepto de comisiones. <br></li>
                          <li  style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Consulta de saldos y movimientos por ventanilla sin costo.<br></li>
                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Recibe y Realiza: Transferencias de dinero entre cuentas de ahorros de Utrahuilca, Transferencias a otra entidad de la Red Coopcentral y Transferencias interbancarias a otras cuentas de ahorros; a excepción de este último, las transacciones no tienen costo.<br></li>
                          <li  style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Transacciones por ventanilla con libreta de ahorros o tarjeta débito sin costo.<br></li>
                          <li  style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Entrega gratuita de la primera libreta de ahorros o tarjeta débito.<br></li>

                          <li  style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Póliza de seguro a bajo costo en caso de sustracción, amparando las pérdidas que se originen a consecuencia del hurto, clonación, adulteración de su tarjeta débito.<br></li>
                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Cuenta con seguro de depósito FOGACOOP hasta por 12 millones de pesos.<br></li>
                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">El promedio de los ahorros más la antigüedad de vinculación aumentan la reciprocidad para solicitar crédito.<br></li>
                          <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Inembargabilidad de los ahorros hasta por montos establecidos en la ley.<br></li>
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
                <br>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#pagina16" role="tab" aria-controls="messages">Beneficios</a>
                </li>
              </ul>
              <div class="tab-content">

                <div class="tab-pane active" id="pagina13" role="tabpanel">
                  <div class="sv-tab-panel">
                    <!-- ##### Header Area End ##### -->
                    <div class="container" style="margin-left: 15%">
                     <h3>Descripción </h3>
                     <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                      <br>
                      Con esta cuenta de ahorros nuestras empresas asociadas pueden guardar su dinero sin ningun costo y retirarlo en el momento requerido, incluyendo el valor de los intereses ganados durante el periodo de permanencia.
                    </p>
                    <br>
                    <h5>Dirigido a:</h5>
                    <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                      Personas jurídicas
                    </p>
                    <br>
                    <h5>Monto de apertura:</h5>
                    <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                      Persona Jurídica Desde 5% SMMLV <strong>$44.000 </strong>                                          
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
                      <lo>
                        <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Exención del impuesto del 4x1.000 conforme a las condiciones establecidas por el Estado hasta 350 UVT. La cuenta debe estar inscrita.<br>
                        </li>
                        <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;"> Tarjeta débito y libreta de ahorro, sin cuota de manejo o administración.</li>
                        <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Consignaciones y retiros por ventanilla ilimitados.<br></li>
                        <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Consulta de saldos, solicitud de extractos y certificaciones de la cuenta sin costo. Su dinero se rentabiliza por encima del mercado financiero tradicional.<br></li>
                        <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Las cuentas de ahorros no tienen débitos inesperados por concepto de comisiones. <br></li>
                        <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Consulta de saldos y movimientos por ventanilla sin costo.<br></li>
                        <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Recibe y Realiza: Transferencias de dinero entre cuentas de ahorros de Utrahuilca, Transferencias a otra entidad de la Red Coopcentral y Transferencias interbancarias a otras cuentas de ahorros; a excepción de este último, las transacciones no tienen costo.<br></li>
                        <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Transacciones por ventanilla con libreta de ahorros o tarjeta débito sin costo.<br></li>
                        <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Entrega gratuita de la primera libreta de ahorros o tarjeta débito.<br></li>
                        <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Póliza de seguro a bajo costo en caso de sustracción, amparando las pérdidas que se originen a consecuencia del hurto, clonación, adulteración de su tarjeta débito.<br></li>
                        <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Cuenta con seguro de depósito FOGACOOP hasta por 12 millones de pesos.<br></li>
                        <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">El promedio de los ahorros más la antigüedad de vinculación aumentan la reciprocidad para solicitar crédito.<br></li>
                        <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Inembargabilidad de los ahorros hasta por montos establecidos en la ley.<br></li>
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
                <a class="nav-link active" data-toggle="tab" href="#pagina20" role="tab" aria-controls="home">Descripci&oacute;n</a>
              </li>
              <br>
              <br>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#pagina21" role="tab" aria-controls="messages">Beneficios</a>
              </li>
            </ul>
            <div class="tab-content">

              <div class="tab-pane active" id="pagina20" role="tabpanel">
                <div class="sv-tab-panel">
                  <!-- ##### Header Area End ##### -->
                  <div class="container" style="margin-left: 15%">
                   <h3>Descripción </h3>
                   <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                    <br>
                    Sáquele jugo a los recursos propios de su empresa los puede invertir en una cuenta CDAT con una excelente rentabilidad por encima de la ofrecida en el mercado financiero tradicional.
                  </p>
                  <br>
                  <h5>Dirigido a:</h5>
                  <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                    Persona jurídica
                  </p>
                  <br>
                  <h5>Monto de apertura:</h5>
                  <p style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
                   Jurídica Desde un(1) SMMLV <strong>$828.116</strong> 

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
                    <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Es una excelente alternativa para nuestros asociados(as) que mantiene su dinero rentando a excelentes tasas de interés, por encima del mercado financiero tradicional.<br></li>
                    <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Obtiene rentabilidad y seguridad en el manejo del dinero más todos los beneficios económicos y sociales que le ofrece UTRAHUILCA.<br></li>
                    <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">La cooperativa asume el impuesto del 4x 1.000, como beneficio económico para sus asociados.<br></li>
                    <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Disponibilidad inmediata de su inversión y sus rendimientos a la fecha pactada.<br></li>

                    <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Abono Automático de los intereses y/o capital a la cuenta de ahorros.<br></li>
                    <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">El pago de intereses en cheque no tiene ningún costo y su constitución en cheque genera intereses desde el primer día, sin haber hecho canje.<br></li>
                    <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Flexibilidad de plazos de acuerdo con sus necesidades de inversión.<br></li>
                    <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">La constitución de certificados constituye una excelente referencia comercial y financiera.<br></li>
                    <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Con la constitución de cdats constituye descuento para obtener beneficios especiales en su previsión exequial, que sumadas a la captación de ahorros y aportes puede permitirle al asociado(a) que su póliza sea gratis.<br></li>
                    <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Los depósitos están protegidos con el seguro de depósitos de Fogacoop.<br></li>
                    <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Renovación automática bajo las mismas condiciones en caso de no ser reclamado en la fecha de vencimiento. <br> </li>
                    <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Créditos hasta el 100% del valor del título, incluyendo los intereses del crédito.<br></li>
                    <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Inembargabilidad hasta montos de ley.<br></li>
                    <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Restitución de los depósitos a los herederos del titular fallecido sin previo juicio de sucesión.<br></li>
                    <li style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">Goza de la participación de sorteos o estímulos de acuerdo a Reglamentación.<br> </li>
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
<br>
<br><br>
<br>
<br><br>
<br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br><br>
<h3>Informaci&oacute;n Relacionada </h3>
<ul class="nav nav-tabs" role="tablist" >
  <li class="nav-item">
    <a class="nav-link active" id="menu" data-toggle="tab" href="#pag1" role="tab" aria-controls="home" id="scrol5"><img src="images/2.png" style="width: 50px"><br>UTRASOCIAL</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#pag2" role="tab" aria-controls="profile" id="scroll"><img src="images/5.png" style="width: 50px"><br>PERMANENTE</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#pag3" role="tab" aria-controls="messages" id="scroll1"><img src="images/1.png" style="width: 70px"><br>UTRAMAS</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#pag4" role="tab" aria-controls="messages" id="scroll2"><img src="images/2.png" style="width: 50px"><br>UTRACRECER
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#pag5" role="tab" aria-controls="messages" id="scroll3"><img src="images/4.png" style="width: 80px"><br>UTRADIARIO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#pag6" role="tab" aria-controls="profile" id="scroll4"><img src="images/5.png" style="width: 50px"><br>CDAT UTRARENTA</a>
  </li>
</ul>
</div>
</section>
<br><br><br><!-- ##### Newsletter Area Start ###### -->
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
<!-- ##### Footer Area Start ##### -->

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
<!-- /contenido de pagina, realmente no importa --> 
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
              $('#scrol5').addClass('show');
            } else {
              $('#scrol5').removeClass('show');
            }
          });

          $('#scrol5').on('click', scrollToTop);
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