
<?php 
if (strlen(session_id()) < 1) 
{
  session_start();
  if(!isset($_SESSION["nombre"]))
  {
    header("Location: Login.html");
  }
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Utrahuilca.coop</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="publico/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="publico/css/font-awesome.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="publico/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
     <link rel="stylesheet" href="publico/css/_all-skins.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="apple-touch-icon" href="publico/img/apple-touch-icon.png">
     <link rel="shortcut icon" href="publico/img/favicon.ico">
     <!-- DATATABLES -->
     <link rel="stylesheet" type="text/css" href="publico/datatables/jquery.dataTables.min.css">    
     <link href="publico/datatables/buttons.dataTables.min.css" rel="stylesheet"/>
     <link href="publico/datatables/responsive.dataTables.min.css" rel="stylesheet"/>
     <link rel="stylesheet" type="text/css" href="publico/css/bootstrap-select.min.css">
     
     <!-- Global site tag (gtag.js) - Google Analytics -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136441397-1"></script>
     <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-136441397-1');
    </script>


  </head>
  <body class="hold-transition skin-green sidebar-mini" >
    
   <?php
   $archivo="ip_plataformaadmintradora.txt";
   $proceso=fopen($archivo,"a") or die("basura");
   $ip=$_SERVER['REMOTE_ADDR'];
   date_default_timezone_set('America/Bogota');
   $fecha=date('l jS \of F Y h:i:s A');
   $datos="la ip es:".$ip." fue capturada el :".$fecha."\n";
   fwrite($proceso,$datos);
   fclose($proceso);
   ?>

   <div class="wrapper">

    <header class="main-header">

      <!-- Logo -->
      <a href="index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">Utrahuilca.coop</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Utrahuilca.coop</b></span>
      </a>

      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Navegación</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="../usuarios/<?php  echo $_SESSION['imagen'];?>" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php  echo $_SESSION['usuario'];?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">

                  <img src="../usuarios/<?php echo $_SESSION['imagen'];?>"  class="img-circle" alt="User Image">
                  <p><?php  echo $_SESSION['nombre'];?></p>
                </li>
                
                <!-- Menu Footer-->
                <li class="user-footer">
                  
                  <div class="pull-right">
                    <a href="../ajax/usuario.php?op=salir" class="btn btn-default btn-flat">Cerrar</a>
                  </div>
                </li>
              </ul>
            </li>
            
          </ul>
        </div>

      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">       
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header"></li>



          <?php if ($_SESSION['Talento Humano']==1) {

            echo '  <li class="treeview">
            <a href="#">
            <i class="fa fa-group"></i>
            <span>Talento Humano</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
            <li><a href="datos"><i class="fa fa-circle-o"></i>hojavida</a></li>
            <li><a href="escolaridad"><i class="fa fa-circle-o"></i>Escolaridad</a></li>
            <li><a href="titulacion"><i class="fa fa-circle-o"></i>Titulacion</a></li>
            <li><a href="vacante"><i class="fa fa-circle-o"></i>Nombre vacante</a></li>
            <li><a href="trabaje"><i class="fa fa-circle-o"></i>Trabajo</a></li>
            <li><a href="editos"><i class="fa fa-circle-o"></i>vacante</a></li>
            <li><a href="comvocatorias"><i class="fa fa-circle-o"></i>Comvocatorias</a></li>
            </ul>
            </li>';
          } ?>


          <?php if ($_SESSION['herramientas mantenimiento']==1) {

            echo ' <li class="treeview">
            <a href="#">
            <i class="fa fa-cogs"></i>
            <span> mantenimiento</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
            <li><a href="agencia"><i class="fa fa-circle-o"></i>Agencias</a></li>
            <li><a href="alianzas"><i class="fa fa-circle-o"></i>Alianzas</a></li>
            <li><a href="articulos"><i class="fa fa-circle-o"></i> Articulos</a></li>
            <li><a href="area"><i class="fa fa-circle-o"></i> areas</a></li>
            <li><a href="comvocatorias"><i class="fa fa-circle-o"></i>Comvocatorias</a></li>
            <li><a href="comunicados"><i class="fa fa-circle-o"></i>Comunicados</a></li>
            <li><a href="condicion"><i class="fa fa-circle-o"></i>condicion</a></li>
            <li><a href="editos"><i class="fa fa-circle-o"></i>edicion vacante</a></li>
            <li><a href="eventos"><i class="fa fa-circle-o"></i>eventos</a></li>
            <li><a href="escolaridad"><i class="fa fa-circle-o"></i>Escolaridad</a></li>
            <li><a href="formatos"><i class="fa fa-circle-o"></i>Formatos</a></li>
            <li><a href="galeria"><i class="fa fa-circle-o"></i>galeria</a></li>
            <li><a href="link"><i class="fa fa-circle-o"></i>Link Videos</a></li>
            <li><a href="noticias"><i class="fa fa-circle-o"></i>Noticias</a></li>
            <li><a href="vacante"><i class="fa fa-circle-o"></i>Nombre vacante</a></li>
            <li><a href="perfil"><i class="fa fa-circle-o"></i>perfil</a></li>
            <li><a href="slider"><i class="fa fa-circle-o"></i>Slider</a></li>
            <li><a href="tasas"><i class="fa fa-circle-o"></i>Tasas</a></li>
            <li><a href="tarifas"><i class="fa fa-circle-o"></i>Tarifas</a></li>
            <li><a href="titulacion"><i class="fa fa-circle-o"></i>Titulacion</a></li>
            <li><a href="trabaje"><i class="fa fa-circle-o"></i>Trabajo</a></li>
            <li><a href="usuario"><i class="fa fa-circle-o"></i>usuario</a></li>
            <li><a href="formatosDian.php"><i class="fa fa-circle-o"></i>actualizacionwebdian</a></li>    
            <li><a href="comunicados.php "><i class="fa fa-circle-o"></i>comunicados</a></li>              
            
            </ul>
            </li>   ';
          } ?>
          
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
