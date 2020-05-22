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

     <!-- PopUp Revalorizacon--> 
     <!-- ##### Footer Area Start ##### -->

     <!-- ##### All Javascript Script ##### -->
     <!-- jQuery-2.2.4 js -->
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