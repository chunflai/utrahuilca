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
  <link rel="stylesheet" href="./css/sliderbottom.css">
  <link rel="stylesheet" href="Cooperativavirtual.css">
  <link rel="stylesheet" href="./css/menunew.css">
  <link rel="stylesheet" href="./css/menunavbar.css">
  <!-- Styles gallery bottom -->
  <link rel="stylesheet" href="./css/gallery.css">

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136441397-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-136441397-1');
  </script>
  
  <!-- script width de facebook en el index principal -->
  <div id="fb-root"></div>
  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>


  <!-- PopUp ahorros--> 
  <script>  
    function mostrarVentanaAhorros()
    {
      $(document).ready(function()
      {
       $("#mostrarmodalAhorros").modal("show");
     });
    }
  </script> 
  <!-- PopUp Credito--> 
  <script>  
    function mostrarVentanaCreditos()
    {
      $(document).ready(function()
      {
       $("#mostrarmodalCreditos").modal("show");
     });
    }
  </script> 
  <!-- PopUp Revalorizacon--> 
  <script>  
    function mostrarVentanaRevalorizacion()
    {
      $(document).ready(function()
      {
       $("#mostrarVentanaRevalorizacion").modal("show");
     });
    }
  </script> 
  <!-- PopUp ahorros--> 
  <script>  
    function mostrarmodalUNAD()
    {
      $(document).ready(function()
      {
       $("#mostrarmodalUNAD").modal("show");
     });
    }
  </script> 

  <!-- PopUp ahorros--> 
  <script>  
    function mostrarmodalUAN()
    {
      $(document).ready(function()
      {
       $("#mostrarmodalUAN").modal("show");
     });
    }
  </script> 
  <!-- PopUp ahorros--> 
  <script>  
    function mostrarmodalUCC()
    {
      $(document).ready(function()
      {
       $("#mostrarmodalUCC").modal("show");
     });
    }
  </script> 

  <!-- PopUp ahorros--> 
  <script>  
    function mostrarmodalINCAP()
    {
      $(document).ready(function()
      {
       $("#mostrarmodalINCAP").modal("show");
     });
    }
  </script> 
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
      <!-- Modal PopUP Unad-->
      <div class="modal fade" id="mostrarmodalUNAD" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
           <div class="modal-header">
             <h3 style="text-align: center;">UNIVERSIDAD NACIONAL Y ADISTANCIA (UNAD)</h3> 
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

           </div>
           <div class="modal-body" align="center"  style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
            <center>
             <img src="images/Unad.png" style="width: 40%;">
           </center>
           <h5 >Documentos requeridos</h5>
           <br>
           <li>Diligenciar el formato de solicitud de crédito persona natural.</li>
           <li>Copia del recibo del pago de la matrícula del estudiante.</li>
           <li>Se solicitarán documentos al asociado dependiendo del perfil.</li>
           <br>
           <h5 >Tasa</h5>
           <p>0,58% M.V. Tasa preferencial</p>
           <br>
           <h5 >Beneficios </h5>
           <br>
           <li>Descuento del 15% en el valor de la matricula ordinaria a los estudiantes que accedan a cursar cualquier semestre de los programas de educación superior ofertados por la UNAD.</li>
           <li>El beneficiario del auxilio económico de descuento del 15 % en el valor de la matrícula ordinaria de su semestre, podrá obtenerlo durante todo el proceso de formación del programa académico elegido sin exigencia de mantener un promedio de notas.</li>
           <br>
           <h5>Condiciones Generales</h5>
           <br>
           <li>El valor de la Matricula será cancelado directamente por el o la estudiante solo en los bancos autorizados por la UNAD o a través de la página web de la UNAD.</li>
           <li>Los afiliados deben presentar la certificación de afiliación de UTRAHUILCA en Registro y Control de la UNAD, para que sea aplicado el respectivo descuento.</li>

           <li> La persona beneficiaria del núcleo familiar del asociado, deberá presentar junto a la certificación expedida por UTRAHUILCA documento legal de parentesco, afinidad y acreditación, por ejemplo: Registro civil para el caso de padres e hijos, registro civil de matrimonio o declaración extra juicio para cónyuge o compañero permanente.</li>
           <li>La UNAD otorga descuento del 10% estipulado a quienes presenten el certificado de votación electoral de las últimas elecciones.</li>

         </div>
         <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
        </div>
      </div>
    </div>
  </div>  
  <!-- End Modal PopUP --> 


  <!-- Modal PopUP uan-->
  <div class="modal fade" id="mostrarmodalUAN" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
       <div class="modal-header">
         <h3 style="text-align: center;">UNIVERSIDAD ANTONIO NARIÑO (UAN)</h3> 
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

       </div>
       <div class="modal-body" align="center"  style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
        <center>
         <img src="images/uan.png" style="width: 40%;">
       </center>
       <br>
       <br>
       <br>

       <h5>Documentos requeridos</h5>
       <br>
       <li> Diligenciar el formato de solicitud de crédito persona natural.</li>
       <li>Copia del recibo del pago de la matrícula del estudiante.</li>
       <li>Se solicitarán documentos al asociado dependiendo del perfil.</li>
       <br>
       <h5>Tasa</h5>
       <p>0,58% M.V. Tasa preferencial</p>
       <br>
       <h5>Beneficios </h5>
       <br>
       <li>Descuento del 15% en el valor de la matrícula ordinaria de los estudiantes que accedan a cursar cualquier semestre de los programas de educación superior, de pregrado y posgrado.</li>

       <li> El beneficiario del auxilio económico por el descuento del 15% en el valor de la matrícula ordinaria de su semestre, podrá sostener el descuento aplicado durante todo el proceso de formación del programa académico elegido siempre y cuando cumpla con los siguientes requisitos y condiciones:
        <br>
        a). Mantener un promedio académico del semestre anterior igual o superior a 3.5 (tres punto cinco) para programas de pregrado y posgrado.
        <br>
        b). No ser objeto de sanciones académicas o disciplinarias durante el tiempo que adelante sus estudios en el programa elegido.
        <br>
      c). Presentar cada semestre la certificación de vinculación como asociado a UTRAHUILCA para acceder al descuento</li>
      <br>
      <h5>Condiciones Generales</h5>
      <br>
      <li> El valor de la Matrícula será cancelado directamente por él o la estudiante a la Universidad, en las entidades financieras autorizadas por la UAN.</li>
      <li>Los afiliados deben presentar la certificación de afiliación de UTRAHUILCA en Registro y Control de la UAN, para que sea aplicado el respectivo descuento.</li>

      <li>La persona bonificiaria del núcleo familiar del asociado, deberá presentar junto a la certificación expedida por UTRAHUILCA documento legal de parentesco, afinidad y acreditación, por ejemplo: Registro civil para el caso de padres e hijos, registro civil de matrimonio o declaración extra juicio para cónyuge o compañero permanente.</li>
    </div>
    <div class="modal-footer">
      <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
    </div>
  </div>
</div>
</div>  
<!-- End Modal PopUP --> 


<!-- Modal PopUP ucc-->
<div class="modal fade" id="mostrarmodalUCC" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
       <h3 style="text-align: center;">UNIVERSIDAD COOPERATIVA DE COLOMBIA (UCC)</h3> 
       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

     </div>
     <div class="modal-body" align="center" style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
      <center>
       <img src="images/ucc.jpg" style="width: 60%;">
     </center>
     <br>
     <br>
     <br>

     <h5>Documentos requeridos</h5>
     <br>
     <li> Diligenciar el formato de solicitud de crédito persona natural.</li>
     <li>Copia del recibo del pago de la matrícula del estudiante.</li>
     <li>Se solicitarán documentos al asociado dependiendo del perfil.</li>
     <br>
     <h5>Tasa</h5>
     <p>0,58% M.V. Tasa preferencial</p>
     <br>
     <h5>Beneficios </h5>
     <br>
     <li>Auxilio económico del 20% de descuento en el valor total de la matrícula ordinaría a los estudiantes que accedan por primera vez (nuevos) a PRIMER SEMESTRE a los programas de educación superior, tanto en pregrado como en posgrado que ofrece la Universidad Cooperativa de Colombia.</li>

     <li>  El beneficiario del auxilio económico de descuento del 20% en el valor de la matrícula de su primer semestre (nuevo), podrá sostener un porcentaje de descuento del 10% por convenio con ASOCOPH (dando cumplimiento al proceso de dicho convenio), aplicado durante todo el proceso de formación del programa académico elegido siempre y cuando cumpla con los siguientes requisitos y condiciones:
      <br>
      a). No podrá suspender sus estudios durante todo el proceso académico formativo que dure el programa elegido (Compromiso de permanencia).
      <br>
      b). Mantener un promedio académico semestral de 4.0 (cuatro punto cero) para programas de pregrado y posgrado. (compromiso de rendimiento académico mínimo).
      <br>
      c). No ser objeto de sanciones académicas o disciplinarias durante el tiempo que adelante sus estudios en el programa elegido.
      <br>
    d).  Haber matriculado y cursado los créditos mínimos establecidos para el semestre o nivel anterior que cursa y no debe realizar baja de carga académica, es decir, que inscriba menos créditos de los pagados.</li>
    <br>
    <h5>Condiciones Generales</h5>
    <br>
    <li> Los afiliados deben presentar la certificación de afiliación de UTRAHUILCA en Registro y Control de la UCC, para que sea aplicado el respectivo descuento.</li>
    <li>La persona beneficiaria del núcleo familiar del asociado, deberá presentar junto a la certificación expedida por UTRAHUILCA documento legal de parentesco, afinidad y acreditación, por ejemplo: Registro civil para el caso de padres e hijos, registro civil de matrimonio o declaración extra juicio para cónyuge o compañero permanente.</li>
    <li>El desembolso del valor de la matrícula será cancelado directamente por UTRAHUILCA a la UNIVERSIDAD.</li>
    <li> El estudiante aplica al beneficio del descuento pactado en el presente convenio únicamente para ingresar una sola vez a un programa de estudios de pregrado y posgrado.</li>
    <li> El estudiante aplica al beneficio del descuento pactado en el presente convenio únicamente para ingresar una sola vez a un programa de estudios de pregrado y posgrado.</li>
    <li> El descuento no podrá ser cedido, diferido o rembolsado.</li>
    <li> Los porcentajes de cualquier descuento que otorgue la UNIVERSIDAD a un BENEFICIARIO de UTRAHUILCA no son acumulables. De tener derecho a varios, se aplica el que más convenga al BENEFICIARIO, sin que ello implique la perdida de la continuidad en el otorgamiento de este descuento para el siguiente semestre.</li>
    <li>El descuento aplica para los asociados de UTRAHUILCA que inicien estudios de pregrado y posgrado, en la UNIVERSIDAD con excepción de los programas relacionados con el área de la SALUD.</li>
    <li>Los descuentos excluyen las modalidades de grado, los derechos de grado y cualquier otro valor pecuniario que deba cancelar el BENEFICIARIO, excepto lo mencionado en el presente documento.</li>
  </div>
  <div class="modal-footer">
    <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
  </div>
</div>
</div>
</div>  
<!-- End Modal PopUP --> 


<!-- Modal PopUP incap-->
<div class="modal fade" id="mostrarmodalINCAP" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
       <h3  style="text-align:center;">Instituto Colombiano de Aprendizaje (INCAP)</h3> 
       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

     </div>
     <div class="modal-body" align="center" style="text-align:justify; line-height: 150%;font-family: 'Helvetica', sans-serif;font-size:large;">
      <center>
       <img src="images/INCAP.png" style="width: 40%;">
     </center>
     <br>
     <br>
     <br>

     <h5>Documentos requeridos</h5>
     <br>
     <li> Diligenciar el formato de solicitud de crédito persona natural.</li>
     <li>Copia del recibo del pago de la matrícula del estudiante.</li>
     <li>Se solicitarán documentos al asociado dependiendo del perfil.</li>
     <br>
     <h5>Tasa</h5>
     <p>0,58% M.V. Tasa preferencial</p>
     <br>
     <h5>Beneficios </h5>
     <br>
     <li>Auxilio económico del 18 % en el valor total de la matrícula a los estudiantes de la sede de Neiva, accedan por primera vez (nuevas/os) a primer semestre de los programas técnicos laborales.</li>

     <li>Auxilio económico del 12% de descuento en el valor total de la matrícula a los estudiantes de las sedes ubicadas en los diferentes municipios del departamento del Huila, que accedan por primera vez (nuevos/as) a primer semestre de los programas técnicos laborales.</li>

     <li> El beneficiario del auxilio económico de descuento del 18% o del 12% en el valor de la matrícula ordinaria de su semestre, podrá sostener el descuento aplicado durante todo el proceso de formación del programa técnico laboral por competencia elegido, siempre y cuando cumpla con los siguientes requisitos y condiciones:
      <br>
      a). No podrá suspender sus estudios durante todo el proceso académico formativo que dure el programa elegido.
      <br>
      b). Mantener un promedio académico del semestre anterior mínimo de tres (3.0) calificado de 1 a 5.
      <br>
    c). No ser objeto de sanciones académicas o disciplinarias durante el tiempo que adelante sus estudios en el programa elegido. </li>
    
  </div>
  <div class="modal-footer">
    <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
  </div>
</div>
</div>
</div>  
<?php include 'menu.php';?>


                <div class="flexslider">
                  <ul class="slides">
                    <li><img src="images/slide-img03.jpg"  style="width: 100%" class="bg-img img-responsive"/></li>
                  </ul>               
                </div> 

                <div class="main-content-wrapper section-padding-100">
                  <div class="container">
                   <div class="row justify-content-center">  
                    <!-- ========== Single Blog Post ========== -->
                    <div class="col-12 col-md-6 col-lg-4">
                      <div class="card">
                        <h5 class="card-header h5">UNIVERSIDAD NACIONAL Y ADISTANCIA (UNAD)</h5>
                        <div class="card-body">
                          <p class="card-text" >Conozaca nuestros requisitos y Beneficios con la UNIVERSIDAD NACIONAL Y ADISTANCIA (UNAD).</p>
                          <li> <a href="javascript:mostrarmodalUNAD();">LEER MAS</a></li>  
                        </div>
                      </div>
                    </div>
                    <!-- ========== Single Blog Post ========== -->
                    <div class="col-12 col-md-6 col-lg-4">
                      <div class="card">
                        <h5 class="card-header h5">UNIVERSIDAD ANTONIO NARIÑO (UAN)</h5>
                        <div class="card-body">
                          <p class="card-text">Conozaca nuestros requisitos y Beneficios con la UNIVERSIDAD ANTONIO NARIÑO (UAN).</p>
                          <li> <a href=" javascript:mostrarmodalUAN();">LEER MAS</a></li>  

                        </div>
                      </div>
                    </div>
                    <!-- ========== Single Blog Post ========== -->
                    <div class="col-12 col-md-6 col-lg-4">      
                      <div class="card">
                       <h5 class="card-header h5">UNIVERSIDAD COOPERATIVA DE COLOMBIA (UCC)</h5>
                       <div class="card-body">
                         <p class="card-text">Conozaca nuestros requisitos y Beneficios con la UNIVERSIDAD COOPERATIVA DE COLOMBIA (UCC).</p>
                         <li> <a href=" javascript:mostrarmodalUCC();">LEER MAS</a></li>
                       </div>
                     </div>
                   </div>
                   <!-- ========== Single Blog Post ========== -->
                   <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.4s">
                      <div class="card">
                        <h5 class="card-header h5">Instituto Colombiano de Aprendizaje (INCAP)</h5>
                        <div class="card-body">
                          <p class="card-text">Conozaca nuestros requisitos y Beneficios con el Instituto Colombiano de Aprendizaje (INCAP).</p>
                          <li> <a href=" javascript:mostrarmodalINCAP();">LEER MAS</a></li>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>



                <div class="world-catagory-area">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="title"><h3>Nuestras Redes sociales</h3></li>
                  </ul>
                </div>
                <div class="row justify-content-center"> 
                  <!-- ========== Single Blog Post ========== -->
                  <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.2s">
                     <a class="fb-page" data-href="https://www.facebook.com/utrahuilca/" data-tabs="timeline"   data-small-header="false" data-adapt-container-width="true" data-height="500"  data-hide-cover="false"  data-show-facepile="true"> 
                       <blockquote cite="https://www.facebook.com/utrahuilca/" class="fb-xfbml-parse-ignore"></blockquote></a>                               
                     </div>
                   </div>
                   <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.4s">
                      <a class="twitter-timeline" href="https://twitter.com/Utrahuilca?ref_src=twsrc%5Etfw" data-tabs="timeline" data-height="495"  data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"  data-show-facepile="true">Tweets by Utrahuilca1</a>
                      <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                  </div>
                  <!-- ========== Single Blog Post ========== -->
                  <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.6s">
                      <div class="g-ytsubscribe" data-channelid="UCZa_TvUo3FlzVz-jnn_67jw" data-layout="full" data-count="default" style="height: 200px; "></div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12">
                    <div class="load-more-btn mt-50 text-center">
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
         
         <?php include 'pie.php';?>

     <!-- PopUp Revalorizacon--> 
     <!-- ##### Footer Area Start ##### -->

     <!-- ##### All Javascript Script ##### -->
     <!-- jQuery-2.2.4 js -->
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