
    


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
      <div class="single-footer-widget mb-100">
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
          <a href="index.php" class="imgcenter"><img src="img/Footer/sello-ok.png"></a>
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