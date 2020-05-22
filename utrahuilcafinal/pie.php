
    


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
                  <a href="<?php  echo $mostrar['enlace'];?>" target=_blank><img src="../filesN/<?php  echo $mostrar['imagen'];?>"   alt=""></a>
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
        <div class="single-footer-widget mb-50">
          <h5 class="widget-title">Oficina Central</h5>
          <!-- Nav -->
          <nav>
            <p class="mb-0"><i class="fa fa-building-o"></i> Cra 6 # 5-37</p>
   
            
             <p class="mb-0"><i class="fa fa-calendar"></i><strong> Lunes a viernes: </strong>desde las 7:00 a.m. hasta las 6:00 p.m. en jornada continua<p>

				<p class="mb-0"><i class="fa fa-calendar"></i> <strong>Sábados:</strong> desde las 7:00 a.m. hasta las 12:00 m. <p>  
			<p> Información y soporte de servicios financieros y electrónicos:</p>

         <p class="mb-0"> <i class="fa fa-phone"></i>Estaremos atentos a responder sus inquietudes en la línea 872 8181 ext. 350 y 353 </p>
          </nav>
        </div>
      </div>

      <!-- Single Footer Widget -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="single-footer-widget mb-50">
          <h5 class="widget-title">Links de inter&eacute;s</h5>
          <!-- Nav -->
          <nav>
            <ul>
              <li><a href="trabajo.php">Trabaje con nosotros</a></li>
              <li><a href="aviso de privacidad.pdf">Aviso de privacidad</a></li>
              <li><a href="alianza.php">Alianzas</a></li>
              <li><a href="pqrs.php"><P>PQRSF</P></a></li>
            </ul>
          </nav>
        </div>
      </div>

    <!-- Single Footer Widget -->
    <div class="col-12 col-sm-6 col-lg-4">
      <div class="single-footer-widget mb-50">
        <h5 class="widget-title">Cooperativa Virtual</h5>

        <!-- Single News Area -->
        <div class="single-latest-news-area d-flex align-items-center">
          <div class="news-thumbnail">
           <h3> <i class="fa fa-drivers-license-o" aria-hidden="true"></i> </h3>
         </div>
         <div class="news-content">
          <a href="#UtraPortalJuridica" data-toggle="modal" class="post-author" target="_blank">Empresas</a>
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
          <a href="#UtraPortalNuatural" data-toggle="modal" class="post-author" target="_blank">Personas</a>
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
          <a href="https://confecoop.coop/productos/sello-100-cooperativa/" class="imgcenter" target="_blank"><img src="img/Footer/sello-ok.png"></a>
          <a href="https://www.coopcentral.com.co/" class="imgcenter" target="_blank"><img src="img/Footer/red-ok.png" ></a>
          <!-- Copywrite Text -->
          <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
           Copyright &copy;Todos los derechos reservados Utrahuilca.coop 
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

