
<?php 
require_once '../config/conexion.php';
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
  <!--<link  href="modelo.css" rel="stylesheet">-->
  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css">
  <!-- Styles slider bottom -->
  <link rel="stylesheet" href="./css/sliderbottom.css">
  <link rel="stylesheet" href="Cooperativavirtual.css">
  <link rel="stylesheet" href="./css/menunew.css">
  <link rel="stylesheet" href="./css/menunavbar.css">
  <!-- Styles gallery bottom -->
  <!--<link rel="stylesheet" href="./css/gallery.css">-->
  <!-- Global site tag (gtag.js) - Google Analytics -->
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

      
   <?php include 'menu.php';?>


<!--simulador inicio-->
<div class="container">
<h2> Simulador de crédito</h2>
<p>Los valores de este simulador son informativos, aproximados y pueden variar. Le recomendamos pasar por la oficina más cercana de <strong>Utrahuilca</strong> para obtener información más precisa.</p>
<p>El cálculo que se presenta es aproximado e informativo y puede presentar variación. 
No constituye compromiso de otorgamiento de crédito, para el cual se deberá realizar el estudio
de la solicitud de crédito acorde a las políticas de la cooperativa.  Le recomendamos acercarse a la oficina más cercana de Utrahuilca para obtener información más precisa.
</p>
<form action="" id="simulcred">
    <div class="fila1">
        <div class="tipo_cliente md-6">
		<label>Tipo de asociado*:</label>
		<select class="form-control input-sm ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" required="true" id ="tcliente" onchange="changeFunc();">
		<option value="">Seleccione</option>
		<option value="N">Persona Natural</option>
		<option value="J">Persona Jurídica</option>
		
		</select>
        </div>
		<div class="tipo_credito md-6">
			<div class="oculto" id="cnatural">
				<label>Tipo de crédito para persona natural*:</label>
				<select class="form-control input-sm" required="false" id ="snatural" onchange="">
					<option value="">Seleccione</option>
					<option value="1">Libre inversión</option>
					<option value="2">Microcrédito</option>
					<option value="3">Utraavance</option>
					<option value="4">Utrarápido</option>
					<option value="5">Crédito especial</option>
					<option value="6">Recreación y turismo</option>
					<option value="7">Salud</option>
					<option value="8">Bienes e inmuebles</option>
					<option value="9">Vivienda VIS</option>
					<option value="15">Vivienda NO VIS</option>
					<option value="16">Vivienda VIP</option>
					<option value="0">Educación</option>
				</select>
			</div>
	
			<div class="oculto" id="cjuridico">
				<label>tipo de credito para persona Jurídica*:</label>
		
				<select class="form-control input-sm" required="false" id ="sjuridico" onchange="">
					<option value="">Seleccione</option>
					<option value="10">Libre inversión</option>
					<option value="11">Bienes e inmuebles</option>
					<option value="12">Utrarápido</option>
					<option value="13">Especial</option>
					<option value="14">Microcrédito</option>
				</select>
				</div>
		</div>
        <div class="monto">
		<label for="valorSolicitadoCH">Monto a Solicitar*:</label>
        <input id="monto" ng-trim="true" onkeypress="return validarEspacios(event)" maxlength="14" required="" class="form-control input-sm monto-sol ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-maxlength" placeholder="Valor Solicitado">
       
		</div>
        <div class="plazo">
		<label for="destino">Plazo en meses*:</label>
        <input id="plazo" ng-trim="true" onkeypress="return validarEspacios(event)" maxlength="2" required="" class="form-control input-sm monto-sol ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-maxlength" placeholder="Plazo en meses"> 
       </div>
	   <div class="antiguedad">
		<label for="destino">Antigüedad*:</label>
        <select class="form-control input-sm" required="true" id ="antiguo" onchange="">
					<option value="">Seleccione</option>
					<option value="A">Hasta 10 años</option>
					<option value="B">Entre 10 y 15 años</option>
					<option value="C">Entre 15 y 20 años</option>
					<option value="D">Entre 20 y 30 años</option>
					<option value="E">Más de 30 años</option>
				</select></div>
				
        <div class="calculo">
		 <div class="row bsimul">
        <input id="boton" type="button" class="boton btn" value="Simular" onclick="return calculaCuota();" >
      </div>
		</div>
        <div id="cuota"></div>
    </div>
</div>
</form>
<!--simulador final-->



</div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </article>
                    <aside>
                        <div class="row">
                            <!--<h3 class="copys-ajustados"><span>Simula tu crédito<br> y empieza a llevar<br></span>tus sueños más lejos</h3>-->
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <!--FIN Plantilla modulo simulador-->
		 <script defer="" src="js/simulador/main.js"></script>
    <!-- Funciones comunes -->
    <script>
    // Funcion que valida espacios
    function validarEspacios(e) {
        tecla=(document.all) ? e.keyCode : e.which;
        if (tecla==32) {
            return false;
        }
    }
    </script>
    <!-- Angular -->
    <script src="js/simulador/simulador.js"></script>
   

<?php 
include 'suscribir.php';
 include 'pie.php';?>

</body>
</html>