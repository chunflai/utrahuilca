
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
  <link  href="modelo.css" rel="stylesheet">
  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css">
  <!-- Styles slider bottom -->
  <link rel="stylesheet" href="./css/menunew.css">
  <link rel="stylesheet" href="./css/menunavbar.css">
  <link rel="stylesheet" href="./css/sliderbottom.css">
  <link rel="stylesheet" href="Cooperativavirtual.css">
  <!-- Styles gallery bottom -->
  <link rel="stylesheet" href="./css/gallery.css">
  
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136441397-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-136441397-1');
  </script>
  
  <style type="text/css">

    .pagination {
      height: 36px;
      margin: 18px 0;
    }
    .pagination ul {
      border-radius: 3px 3px 3px 3px;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
      display: inline-block;
      margin-bottom: 0;
      margin-left: 0;
    }
    .pagination li {
      display: inline;
    }
    .pagination a {
      -moz-border-bottom-colors: none;
      -moz-border-image: none;
      -moz-border-left-colors: none;
      -moz-border-right-colors: none;
      -moz-border-top-colors: none;
      border-color: #DDDDDD;
      border-style: solid;
      border-width: 1px 1px 1px 0;
      float: left;
      line-height: 34px;
      padding: 0 14px;
      text-decoration: none;
    }
    .pagination a:hover, .pagination .active a {
      background-color: #F5F5F5;
    }
    .pagination .active a {
      color: #999999;
      cursor: default;
    }
    .pagination .disabled a, .pagination .disabled a:hover {
      background-color: transparent;
      color: #999999;
      cursor: default;
    }
    .pagination li:first-child a {
      border-left-width: 1px;
      border-radius: 3px 0 0 3px;
    }
    .pagination li:last-child a {
      border-radius: 0 3px 3px 0;
    }
    .pagination-centered {
      text-align: center;
    }
    .pagination-right {
      text-align: right;
    }
  </style>
  
  <!-- Logo Scale --> 
  <style>  
    #headerS {
     max-height: 38px;
   }
   @media (min-width: 1024px) {
    #headerS  {
      max-height: 100px;
    }
  }
</style>


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

  <?php 
include 'menu.php';?>
             

                <!-- ##### Call To Action Start ###### -->
                <section class="cta-area d-flex flex-wrap">
                  <!-- Cta Content -->
                  <div class="cta-content">
                    <!-- Section Heading -->
                    <div class="section-heading white">
                      <h2>Nuestras noticias cooperativas</h2>
                    </div>

                  </div>
                  <!-- Cta Thumbnail -->
                  <div class="cta-thumbnail bg-img jarallax" style="background-image: url(img/bg-img/5.jpg);"></div>
                </section>
                <!-- ##### Header Area End ##### -->
                <div class="regular-page-wrap section-padding-100">
                  <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-12 col-md-10 col-lg-8">
                        <div class="page-content">
                         <?php
                         require ('paginator.php');
                   //DO NOT limit this query with LIMIT keyword, or...things will break!
                         $query = "SELECT * FROM noticias WHERE estado= '1' ORDER BY  idnoticias DESC ";
                   //these variables are passed via URL
                   $limit = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 4; //movies per page
                   $page = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1; //starting page
                   $links =5 ;
                   $paginator = new Paginator( $conexion, $query ); //__constructor is called
                   $results = $paginator->getData( $limit, $page );
                   for ($p = 0; $p < count($results->data); $p++):  
                   //store in $movie variable for easier reading
                    $mostrar = $results->data[$p];
					$noticia=$mostrar['idnoticias'];
					?> 

                    <center>
                      <h2> <a href="noticia?id=<?=$noticia?>"><span> <?php  echo $mostrar['titulo'];?></span></a></h2>
                      <br>
                      <img src="../file1/<?php  echo $mostrar['imagen'];?>" alt="" style="height: 350px;width: 450px;">
                      
                    </center>
                    <br>
                    <br>
                    <p class="text-justify;"><?php  echo $mostrar['escrit'];?></p>
                    <p class="">Publicada el: <?php  echo $mostrar['fecha'];?>  A las <?php  echo $mostrar['hora'];endfor;?></p>
                    <div class="pagination">
                     <ul>
                      <li> <?php echo $paginator->createLinks( $links, 'pagination pagination-sm' ); ?> </li> 
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  <?php 
include 'suscribir.php';
 include 'pie.php';?>
 <script src="js/jquery.min.js"></script> 
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