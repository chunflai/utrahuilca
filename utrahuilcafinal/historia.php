
<?php 
require_once '../config/conexion.php';
//include('top-cache.php'); 
?>
<!DOCTYPE html>
<html lang="es">

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
  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="linea.css">
  <link rel="stylesheet" href="Cooperativavirtual.css">
  <link rel="stylesheet" href="./css/menunew.css">
  <link rel="stylesheet" href="./css/menunavbar.css">
  <!-- Styles slider bottom -->
  <link rel="stylesheet" href="./css/sliderbottom.css">
  <link rel="stylesheet" href="flotante.css">
  <link  rel="stylesheet" href="modelo.css" >

  <link rel="stylesheet" href="style.css">

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136441397-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-136441397-1');
  </script>
  <!-- Stylesheet -->
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
             <h3> MESES BRE DEL CR&eacute;DITO</h3> 
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




      <!--Modal: Login / Register Form-->
      <div class="modal fade" id="Modal1966" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
          <!--Content-->

          <div class="modal-content">
            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

              <!-- Tab panels -->
              <div class="tab-content">
                <!--Panel 7-->
                <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
                  <!--Body-->
                  <div class="modal-body mb-1">
                    <h4>1966 - 1971 Es creada la Cooperativa</h4>
                    <div class="md-form form-sm mb-5" >
                      <p style=" text-align: justify;line-height: 140%;font-family: 'Helvetica', sans-serif;">
                       San Miguel de Neiva, estaban atravesando por una situaci&oacute;n econ&oacute;mica muy dif&iacute;cil , llegando a adeudar hasta tres quincenas a sus trabajadores.
                       <br>
                       <br>
                       Los motivos de creaci&oacute;n de la Cooperativa, se remontan a los a&ntildeos 1965 y 1966, cuando entidades estatales como el Distrito de Carreteras No. 11, Obras P&uacute;blicas Municipales, Empresas P&uacute;blicas de Neiva y Hospital San Miguel de Neiva, estaban atravesando por una situaci&oacute;n econ&oacute;mica muy dif&iacute;cil , llegando a adeudar hasta tres quincenas a sus trabajadores, obligando a estos a vender sus n&oacute;minas a agiotistas que ten&iacute;an conocimiento de la llegada de recursos a esas empresas y diez d&iacute;as antes se las compraban, descont&aacute;ndoles hasta un 10%.
                       <br><br> 
                       La iniciativa de crear una cooperativa, fue liderada por el se&ntildeor Francisco Antonio Gordillo Cruz, Presidente de la Federaci&oacute;n de Sindicatos de la Uni&oacute;n de Trabajadores de Colombia y el se&ntildeor Ismael Quevedo, representante de la Uni&oacute;n de Cooperativas de Colombia UCONAL y Gerente de la Cooperativa San Miguel de Garz&oacute;n, quienes empiezan a realizar gestiones para crear en Neiva una Cooperativa de ahorro y cr&eacute;dito, con el fin de solucionar en parte, la situaci&oacute;n econ&oacute;mica dif&iacute;cil que afectaba a este grupo de las empresas antes mencionadas. 
                       <br><br>
                       Estos gestores, inician tareas de sensibilizaci&oacute;n en cada Asamblea Sindical, donde explicaban las bondades del proyecto empresarial cooperativo, situaci&oacute;n que presentaba dificultades porque algunas Cooperativas existentes como la de Inquilinos de la Galer&iacute;a de Neiva y la Industria Licorera del Huila se encontraban en quiebra y en otros casos los fondos de todos los asociados hab&iacute;an sido hurtados por los gestores, por lo anterior el panorama no era el mejor para crear una nueva Cooperativa; sin embargo, es preciso resaltar que fue el 
                       elevado grado de motivaci&oacute;n y el liderazgo de estos dos gestores, lo que permiti&oacute; la creaci&oacute;n de esta cooperativa. Este proyecto empresarial nace con un monto de capital de $ 530,oo de aportes de los 30 asociados, incluidos los directivos; buscaba que la comunidad se asociara y ahorrara, para luego obtener cr&eacute;ditos con intereses bajos, compar&aacute;ndolos con los existentes en el mercado, adem&aacute;s de dictar cursos cooperativos para difundir su filosof&iacute;a , principios y valores, caracter&iacute;sticos del sector cooperativo, que adem&aacute;s permite la 
                       participaci&oacute;n de los asociados en los estamentos directivos as&iacute; como en los rendimientos econ&oacute;micos, al permitirles ser due&ntildeos directos de la Cooperativa.
                       <br><br>
                       El 12 de abril del a&ntildeo 1970 se modifica la raz&oacute;n social de la Cooperativa de Trabajadores del Huila de acuerdo con el Acta N&#176; 4 de la Asamblea General, en la que se aprob&oacute; conforme a lineamientos de trabajar por la integraci&oacute;n sindical y cooperativa del D&eacute;cimo Primer Congreso de la UTC, en la que se hizo hincapi&eacute; que el nombre de la cooperativa deb&iacute;a ser el de Cooperativa de Ahorro y Cr&eacute;dito UTRAHUILCA UTC Ltda. En la mencionada Asamblea, uno de los fundadores el se&ntildeor Francisco Antonio Gordillo, propuso que el nombre de las cooperativas 
                       que se crearan deb&iacute;a llevar la sigla de las federaciones regionales de trabajo, como reconocimiento al esfuerzo del movimiento sindical, el cual en ese momento era combatido duramente por el gobierno y los patrones.   Es de esta forma que se obtiene el nombre de Cooperativa de ahorro y cr&eacute;dito UTRAHUILCA UTC Ltda., que significaba Uni&oacute;n de Trabajadores del Huila y Caquet&aacute;, debido a que todos sus asociados y dirigentes pertenec&iacute;an a las bases trabajadoras, existiendo asociados tanto del Huila como del Caquet&aacute;, en el caso del Seguro Social, 
                       como la oficina del Caquet&aacute; depend&iacute;a del Huila, se les permiti&oacute; su afiliaci&oacute;n as&iacute; como a los trabajadores del Distrito de Carreteras.
                     </p>
                   </div>
                 </div>
                 <!--Footer-->
                 <div class="modal-footer">
                  <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Salir</button>
                </div>
              </div>

            </div>

          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>
    <!--Modal: Login / Register Form-->


    <!--Modal: Login / Register Form-->
    <div class="modal fade" id="Modal1975" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->

        <div class="modal-content">
          <!--Modal cascading tabs-->
          <div class="modal-c-tabs">

            <!-- Tab panels -->
            <div class="tab-content">
              <!--Panel 7-->
              <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
                <!--Body-->
                <div class="modal-body mb-1">
                  <h4>1975 - 1981 Venta de Electrodom&eacute;sticos</h4>
                  <div class="md-form form-sm mb-5" >
                    <p style=" text-align: justify;line-height: 140%;font-family: 'Helvetica', sans-serif;">
                      A partir de 1975 se ampl&iacute;a la planta de personal, conservando la misma estructura, pero vinculando m&aacute;s personal, adem&aacute;s de Revisor fiscal, esta estrategia, basada en recursos disponibles de la actividad econ&oacute;mica de ahorro y cr&eacute;dito, adem&aacute;s de las capacidades y liderazgo de los directivos y trabajadores, permiti&oacute; el crecimiento en asociados. La asociaci&oacute;n era de v&iacute;nculo cerrado, es decir solo permit&iacute;a la afiliaci&oacute;n de trabajadores oficiales.
                      <br><br>
                      Cuando la cooperativa estaba ubicada en el Pasaje San Francisco adicion&oacute; adem&aacute;s del ahorro y cr&eacute;dito, la venta de electrodom&eacute;sticos y m&aacute;quinas de escribir a los asociados, actividad que fue sustituida por la cooperativa hogar de Bogot&aacute; y que pertenec&iacute;a a la UTC, posteriormente se cre&oacute; ENCOVEN (Empresa Cooperativa de ventas), en 1983 la cual reemplaz&oacute; dicha actividad comercial y pertenec&iacute;a a todas las cooperativas de Neiva, cooperativa que no funcion&oacute; y fue liquidada posteriormente.
                    </p>
                  </div>
                </div>
                <!--Footer-->
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Salir</button>
                </div>
              </div>

            </div>

          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>
    <!--Modal: Login / Register Form-->


    <!--Modal: Login / Register Form-->
    <div class="modal fade" id="Modal1982" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->

        <div class="modal-content">
          <!--Modal cascading tabs-->
          <div class="modal-c-tabs">

            <!-- Tab panels -->
            <div class="tab-content">
              <!--Panel 7-->
              <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
                <!--Body-->
                <div class="modal-body mb-1">
                  <h4>1982 - 1986 Apertura Agencia Pitalito. Creaci&oacute;n EMCOOVEN, EMCOFUN, EMCOSALUD, EDICOOPH.</h4>
                  <div class="md-form form-sm mb-5" >
                   <p style=" text-align: justify;line-height: 140%;font-family: 'Helvetica', sans-serif;">
                    estrat&eacute;gica, presupuestos y estrategias publicitarias, la cooperativa inicio su etapa de mayor crecimiento; estos l&iacute;deres sindicales le dieron otra visi&oacute;n y abrieron.
                    <br>
                    <br>
                    En la d&eacute;cada del 80 con la llegada a cargos directivos de Salvador G&oacute;mez G&oacute;mez, Jos&eacute; Ramiro Becerra Sterling y Yael Garavi&ntildeo, profesionales con una formaci&oacute;n acad&eacute;mica mayor a los fundadores y predecesores, quienes aplicaron conceptos de planeaci&oacute;n estrat&eacute;gica, presupuestos y estrategias publicitarias, la cooperativa inicio su etapa de mayor crecimiento; estos l&iacute;deres sindicales le dieron otra visi&oacute;n y abrieron el v&iacute;nculo de ahorro y cr&eacute;dito para todo el que quisiera afiliarse, aprovechando la crisis econ&oacute;mica presentada en el sector financiero tradicional, situaci&oacute;n que permiti&oacute; fortalecer el sector cooperativo, entre ellos UTRAHUILCA, es as&iacute;, que de acuerdo a datos estad&iacute;sticos de la cooperativa, pasa en el a&ntildeo 1982 de tener 1.882 asociados a 3.274 en 1983, con un incremento del 73%; situaci&oacute;n similar ocurri&oacute; con el valor del capital, al incrementarse en un 65% al pasar de$ 30.150.559 pesos a $49.782.048, respectivamente.
                    <br>
                    <br>
                    En la administraci&oacute;n del se&ntildeor Salvador G&oacute;mez, se fund&oacute; la primera agencia fuera de Neiva, ubicada en el Municipio de Pitalito, en el a&ntildeo 1986, lo que le permiti&oacute; a la Cooperativa incrementar su n&uacute;mero de asociados a 13.546 en el a&ntildeo 1987 y un capital de $ 306'308.300.oo pesos. Con esta apertura la cooperativa implementa la estrategia de ampliaci&oacute;n de cobertura geogr&aacute;fica, lo que le dio mayor impulso en el sur del departamento del Huila.
                    <br>
                    <br>
                    A trav&eacute;s de la integraci&oacute;n cooperativa practicada por UTRAHUILCA, se han creado empresas cooperativas como EMCOFUN LOS OLIVOS, EMCOSALUD, EMCOVEN, EDICOOPH entre otras, algunas de ellas se mantienen en la actualidad y otras han desaparecido por diferentes situaciones. A trav&eacute;s de estas empresas se pretendi&oacute; brindar m&aacute;s y mejores servicios a los asociados y la comunidad.
                  </p>
                </div>
              </div>
              <!--Footer-->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Salir</button>
              </div>
            </div>

          </div>

        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!--Modal: Login / Register Form-->


  <!--Modal: Login / Register Form-->
  <div class="modal fade" id="Modal1987" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
      <!--Content-->

      <div class="modal-content">
        <!--Modal cascading tabs-->
        <div class="modal-c-tabs">

          <!-- Tab panels -->
          <div class="tab-content">
            <!--Panel 7-->
            <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
              <!--Body-->
              <div class="modal-body mb-1">
                <h4>1987-1991 Conversi&oacute;n a MULTIACTIVA. Apertura San Agust&iacute;n y Campoalegre. Nace Asocoph.</h4>
                <div class="md-form form-sm mb-5" >
                 <p style=" text-align: justify;line-height: 140%;font-family: 'Helvetica', sans-serif;">
                  El 17 de marzo de 1991 la XXV Asamblea General ordinaria, aprueba la reforma estatutaria que cambia su raz&oacute;n de Cooperativa especializada de Ahorro y Cr&eacute;dito por Cooperativa Multiactiva del Huila "UTRAHUILCA", acatando el Art&iacute;culo 61 y 63 de la Ley 79/88 que promulgan: Art 61 "Las Cooperativas en raz&oacute;n del desarrollo de sus actividades podr&aacute;n ser especializadas, multiactivas e integrales." Art 63: Ser&aacute;n cooperativas multiactivas las que se organizan para atender varias necesidades, mediante concurrencia de servicios en una sola entidad jur&iacute;dica". Durante la segunda administraci&oacute;n de Jos&eacute; Ramiro Becerra Sterling, quien asume como Gerente en 1990, es cuando la Cooperativa inicia un gran periodo de crecimiento y se abren nuevas agencias como San Agust&iacute;n y Campoalegre. En 1991, luego del retiro de UTRAHILCA, EDICOOPH fue liquidada, cre&aacute;ndose la Asociaci&oacute;n de Cooperativas del Huila ASOCOPH, organismo de Segundo Grado.
                </p>
              </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Salir</button>
            </div>
          </div>

        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login / Register Form-->

<!--Modal: Login / Register Form-->
<div class="modal fade" id="Modal1992" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->

    <div class="modal-content">
      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
            <!--Body-->
            <div class="modal-body mb-1">
              <h4>1992-1996 Apertura Agencias Isnos, Baraya, Sta. Mar&iacute;a, Timan&aacute;, Neiva Sur, Hobo, Saladoblanco, Tesalia y Neiva Oriente. Creaci&oacute;n Secci&oacute;n Infantil y Juvenil AMIGUITOS. Creaci&oacute;n FUNDAUTRAHUILCA.</h4>
              <div class="md-form form-sm mb-5" >
                <p style=" text-align: justify;line-height: 140%;font-family: 'Helvetica', sans-serif;">
                  De acuerdo con La Ley 79 de 1988 la cual le dio un marco legal propio al cooperativismo en Colombia, UTRAHUILCA acoge el art&iacute;culo 27 que dispone la forma en que pueden vincularse menores de edad a la cooperativa, "Podr&aacute;n ser asociados de las cooperativas las personas naturales legalmente capaces y los menores de edad que hayan cumplido 14 a&ntildeos, o qui&eacute;nes sin haberlos cumplido se asocien a trav&eacute;s de representante legal".
                  <br><br>
                  El Consejo de Administraci&oacute;n de UTRAHUILCA motivado por esta normatividad, analiz&oacute; y expidi&oacute; la reglamentaci&oacute;n necesaria para iniciar este proyecto en la cooperativa, es as&iacute; como incluye en el art&iacute;culo 26 de sus estatutos, la creaci&oacute;n de la Secci&oacute;n Infantil Juvenil "AMIGUITOS". El primer ejercicio realizado a trav&eacute;s de "AMIGUITOS" fue su apertura oficial realizada en el Parque Solidaridad el 7 de mayo de 1991, a la cual asistieron de 1.500 ni&ntildeos.
                  <br><br> 
                  Esta entidad solidaria, incursion&oacute; en el sector de la educaci&oacute;n formal y no formal a trav&eacute;s del Colegio UTRAHUILCA, que gracias al liderazgo de directivos como Yael Garavi&ntildeo Rodr&iacute;guez y Jos&eacute; Ramiro Becerra hoy se conserva, convertido en fundaci&oacute;n UTRAHUILCA, y que adem&aacute;s del colegio, funciona el Instituto de educaci&oacute;n no formal; clubes deportivos, escuelas art&iacute;sticas y la Escuela de formaci&oacute;n de pensamiento pol&iacute;tico y liderazgo social EPU.
                  <br><br>
                  El 9 de Julio de 1996 el Consejo de Administraci&oacute;n analiza y aprueba los estatutos de la Fundaci&oacute;n Social UTRAHUILCA, como estrategia para iniciar el proceso de transici&oacute;n de la multiactividad a la especializaci&oacute;n como cooperativa financiera, teniendo en cuenta el proyecto de ley 78 que cursaba en el parlamento y que finalmente fue aprobado como Ley 454 de 1998.
                  <br><br>
                  El 23 de agosto del a&ntildeo 1996 el se&ntildeor Jos&eacute; Ramiro Becerra Sterling, como Gerente General, protocoliza el cuerpo estatutario en escritura p&uacute;blica en la Notar&iacute;a Primera del Circulo de Neiva, en representaci&oacute;n de la Cooperativa Multiactiva del Huila "UTRAHUILCA". Se inscribe en C&aacute;mara de Comercio de Neiva el 14 de enero de 1997 bajo el n&uacute;mero 312 del libro respectivo.
                </p>
              </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Salir</button>
            </div>
          </div>

        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login / Register Form-->


<!--Modal: Login / Register Form-->
<div class="modal fade" id="Modal1997" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->

    <div class="modal-content">
      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
            <!--Body-->
            <div class="modal-body mb-1">
              <h4>1997-2001. Crisis Cooperativa, Reuniones Informativas, Conversi&oacute;n Ahorro y Cr&eacute;dito. Afiliaci&oacute;n FOGACOOP. Incorporaci&oacute;n COFICOL y COFINAM.</h4>
              <div class="md-form form-sm mb-5" >
                <p style=" text-align: justify;line-height: 140%;font-family: 'Helvetica', sans-serif;">
                  Dentro del ciclo de vida de la empresa, la crisis m&aacute;s fuerte fue la presentada en el a&ntildeo 1998, debido a la expedici&oacute;n del Decreto N&#176; 798 del 20 de marzo de 1997, en el cual se proh&iacute;be a los entes del orden nacional tener dep&oacute;sitos e inversiones en entidades que no se est&eacute;n vigiladas por La Superintendencia Bancaria y la Superintendencia de Valores. Esta situaci&oacute;n desencadeno en el retiro masivo de dineros y terminaci&oacute;n de convenios con entidades nacionales, departamentales y municipales, lo cual incremento el p&aacute;nico financiero.
                  <br><br>
                  Importantes cooperativas como COFIANDINA, que era la m&aacute;s grande existente en la Regi&oacute;n, colapso como consecuencia de la crisis financiera a nivel nacional, que ocasion&oacute; el retiro masivo de asociados por el p&aacute;nico existente, siendo intervenida. En esta crisis el 70% de los dep&oacute;sitos se agotaron en menos de un mes y la liquidez se agot&oacute; por el masivo retiro de ahorros
                  <br><br>
                  Seg&uacute;n lo expuesto en las memoria de la XXXVI Asamblea General de Asociados correspondiente al a&ntildeo 1998 "Durante los 32 a&ntildeos de funcionamiento de la Cooperativa UTRAHUILCA, podemos catalogar a 1998, sin lugar a equivocarnos, como el a&ntildeo m&aacute;s dif&iacute;cil para nuestra instituci&oacute;n; pero a la vez ha sido el periodo en que mayormente se puso a prueba la capacidad de los organismos de Direcci&oacute;n, Vigilancia, Control, Administraci&oacute;n y Operaci&oacute;n de la Cooperativa; lo mismo que la capacidad de respuesta de nuestros asociados; especialmente en la solidaridad, fidelidad y lealtad a la instituci&oacute;n".
                  <br><br>   
                  As&iacute; mismo, como estrategia para afrontar la situaci&oacute;n, encontramos dentro del Acta N&#176;4 de 28 de marzo de 1998 correspondiente al Consejo de Administraci&oacute;n, el informe presentado por el Gerente General, Jos&eacute; Ramiro Becerra Sterling, en el cual expone: "Dentro de los prop&oacute;sitos de mejoramiento continuo de la Cooperativa hemos emprendido una gira por todas las agencias, haciendo reuniones con empleados y asociados, con el prop&oacute;sito de dar informaci&oacute;n sobre la situaci&oacute;n econ&oacute;mica de la cooperativa al mes de febrero de 1998 y hacer un an&aacute;lisis con relaci&oacute;n a la concepci&oacute;n de lo que es una empresa cooperativa, las causas de la crisis actual de muchas cooperativas financieras, lo mismo que planteamientos de c&oacute;mo concebimos el verdadero papel de las cooperativa populares, haciendo &eacute;nfasis en la filosof&iacute;a institucional de UTRAHUILCA".
                  <br><br>
                  De esta forma, a partir de 1999 se dio inicio a las Reuniones Informativas con los asociados por agencias, para mostrarles los diferentes estados financieros como balance general, los dep&oacute;sitos de ahorro, deudas, entre otros, demostrando que ten&iacute;a la cartera de cr&eacute;dito s&oacute;lida, lo mismo que recursos f&iacute;sicos, inform&aacute;ndole a los asociados sobre la verdad de lo que estaba ocurriendo; algunos se retiraron de la cooperativa, otros la apoyaron y se vendi&oacute; un bono de apoyo solidario de $20.000,oo, para aumentar los aportes sociales, con lo cual, la gente empez&oacute; a entender la situaci&oacute;n; a pesar de ello, los aportes bajaron, pues no ahorraban y solamente se dirig&iacute;an a la Cooperativa a pagar deudas de los cr&eacute;ditos otorgados; las agencias permanec&iacute;an solas, la gente no acud&iacute;a a ellas a utilizar los servicios, especialmente la de Neiva principal y sur, as&iacute; como las de Pitalito, Campoalegre, san Agust&iacute;n, Timan&aacute;, Baraya y Santa Mar&iacute;a. En la actualidad se mantiene esta estrategia de Reuniones informativas con los asociados como mecanismo de interacci&oacute;n - participaci&oacute;n entre la cooperativa y su base social para dar a conocer la marcha, funcionamiento y proyectos de desarrollo de la misma.
                  <br><br>
                  Se acudi&oacute;, por parte de los directivos a FOGACOOP, fondo similar a FOGAFIN para el sector Cooperativo, para que por problemas de liquidez no se perdiera otra Cooperativa como COFICOL (la cooperativa UTRAHUILCA aprob&oacute; la incorporaci&oacute;n de esta cooperativa el 27 de febrero de 1999, seg&uacute;n el Acta N&#176;3) y COFINAM, las cuales hab&iacute;an obtenido p&eacute;rdidas del 40% de los aportes sociales.
                  <br><br>
                  Ante esta situaci&oacute;n, la Superintendencia de econom&iacute;a solidaria aprob&oacute; las incorporaciones de estas dos cooperativa a UTRAHUILCA, a cambio de entregar algunos recursos f&iacute;sicos, consistente en unas instalaciones ubicadas en Neiva, donde actualmente funciona un fondo de Pensiones, el cual se pensaba remodelar, pero por la crisis , no se pudo realizar y se entreg&oacute; a Fogacoop, junto con un lote que ten&iacute;a la cooperativa destinado para construir vivienda de inter&eacute;s social en convenio con la constructora La Equidad.
                  <br><br>
                  Fogacoop entreg&oacute; recursos por 1.200 millones de pesos y fue lenta su recuperaci&oacute;n.
                </p>
              </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Salir</button>
            </div>
          </div>

        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login / Register Form-->


<!--Modal: Login / Register Form-->
<div class="modal fade" id="Modal2002" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->

    <div class="modal-content">
      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
            <!--Body-->
            <div class="modal-body mb-1">
              <h4>2002- 2006. Apertura Agencia La Plata, Florencia y Garz&oacute;n. Convenios PADEMER, BANCOLDEX, LA EQUIDAD. Convenio Tarjeta D&eacute;bito, Cajeros Autom&aacute;ticos.</h4>
              <div class="md-form form-sm mb-5" >
               <p style=" text-align: justify;line-height: 140%;font-family: 'Helvetica', sans-serif;">
                 La cooperativa cuenta con tecnolog&iacute;a satelital para procesar informaci&oacute;n y para los puntos de atenci&oacute;n como es el caso de los cajeros autom&aacute;ticos. El aspecto tecnol&oacute;gico tuvo un gran avance a trav&eacute;s del convenio de afinidad con Banco de Bogot&aacute;, por medio del cual se instalaron cajeros autom&aacute;ticos en todas las agencias de la cooperativa, los campesinos han sido los m&aacute;s beneficiados, pues nunca hab&iacute;an tenido acceso al manejo de una tarjeta d&eacute;bito.
                 <br><br>
                 Por su parte, la tarjeta d&eacute;bito UTRAHUILCA, permite que los asociados tengan acceso inmediato a su dinero en cajeros autom&aacute;ticos y Datafonos. As&iacute; mismo, puede utilizarse en cajeros electr&oacute;nicos de todas las redes para retiros en efectivo y en pagos por Datafonos en los establecimientos de comercio para realizar sus compras. Consulta de saldo de cuenta de ahorros a trav&eacute;s de cajeros electr&oacute;nicos.
               </p>
             </div>
           </div>
           <!--Footer-->
           <div class="modal-footer">
            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Salir</button>
          </div>
        </div>

      </div>

    </div>
  </div>
  <!--/.Content-->
</div>
</div>
<!--Modal: Login / Register Form-->

<!--Modal: Login / Register Form-->
<div class="modal fade" id="Modal2002" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->

    <div class="modal-content">
      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
            <!--Body-->
            <div class="modal-body mb-1">
              <h4>2007-2013. Conversi&oacute;n Cooperativa Latinoamericana.</h4>
              <div class="md-form form-sm mb-5" >
                <p style=" text-align: justify;line-height: 140%;font-family: 'Helvetica', sans-serif;">
                 Apertura Agencia Martires Neiva y Popay&aacute;n. Convenio FINAGRO, FINDETER Y EFECTY.
                 <br><br>
                 En la Asamblea celebrada el 17 de marzo de 2007, se modifican los estatutos de la Cooperativa y se aprueba el nombre de la Cooperativa Latinoamericana de Ahorro y Cr&eacute;dito - UTRAHUILCA.
                 <br><br>
                 Adem&aacute;s se establece convenio con FINAGRO para otorgar cr&eacute;ditos destinados a inversiones agr&iacute;colas, tur&iacute;sticas y mineras, con FINDETER para financiamiento de viviendas de inter&eacute;s social y con EFECTY para recaudo de cuotas de cr&eacute;dito.
                 <br><br>
                 Un gran logro de la cooperativa fue la apertura de otra agencia fuera del departamento del Huila, est&aacute; vez en el Cauca, espec&iacute;ficamente en la ciudad de Popay&aacute;n .
               </p>
             </div>
           </div>
           <!--Footer-->
           <div class="modal-footer">
            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Salir</button>
          </div>
        </div>

      </div>

    </div>
  </div>
  <!--/.Content-->
</div>
</div>
<!--Modal: Login / Register Form-->

<!--Modal: Login / Register Form-->
<div class="modal fade" id="Modal2007" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->

    <div class="modal-content">
      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
            <!--Body-->
            <div class="modal-body mb-1">
              <h4>2007-2013. Conversi&oacute;n Cooperativa Latinoamericana.</h4>
              <div class="md-form form-sm mb-5" >
                <p style=" text-align: justify;line-height: 140%;font-family: 'Helvetica', sans-serif;">
                 Apertura Agencia Martires Neiva y Popay&aacute;n. Convenio FINAGRO, FINDETER Y EFECTY.
                 <br><br>
                 En la Asamblea celebrada el 17 de marzo de 2007, se modifican los estatutos de la Cooperativa y se aprueba el nombre de la Cooperativa Latinoamericana de Ahorro y Cr&eacute;dito - UTRAHUILCA.
                 <br><br>
                 Adem&aacute;s se establece convenio con FINAGRO para otorgar cr&eacute;ditos destinados a inversiones agr&iacute;colas, tur&iacute;sticas y mineras, con FINDETER para financiamiento de viviendas de inter&eacute;s social y con EFECTY para recaudo de cuotas de cr&eacute;dito.
                 <br><br>
                 Un gran logro de la cooperativa fue la apertura de otra agencia fuera del departamento del Huila, est&aacute; vez en el Cauca, espec&iacute;ficamente en la ciudad de Popay&aacute;n .
               </p>
             </div>
           </div>
           <!--Footer-->
           <div class="modal-footer">
            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Salir</button>
          </div>
        </div>

      </div>

    </div>
  </div>
  <!--/.Content-->
</div>
</div>
<!--Modal: Login / Register Form-->
  <?php include 'menu.php';?>


                <!-- ##### Call To Action Start ###### -->
                <section class="cta-area d-flex flex-wrap">
                  <!-- Cta Content -->
                  <div class="cta-content">
                    <!-- Section Heading -->
                    <div class="section-heading white">
                      <div class="line"></div>
                      <p>Institucional</p>
                      <h2>Rese&ntilde;a hist&oacute;rica</h2>
                    </div>
                    <h6 class="mb-0">Conozca nuestra historia.</h6>
                  </div>
                  <!-- Cta Thumbnail -->
                  <div class="cta-thumbnail bg-img jarallax" style="background-image: url(img/historica/escanear0021.jpg);"></div>
                </section>
                <!-- ##### Call To Action End ###### -->
                <br>
                <br>
                <br>
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="main-timeline8">
                        <div class="timeline">
                          <span class="timeline-icon"></span>
                          <span class="year">1966 - 1971 </span>
                          <div class="timeline-content">
                            <h3 class="title">Es creada la Cooperativa-02 Febrero 1966</h3>
                            <p class="description" style="text-align: justify;">
                              Los motivos de creaci&oacute;n de la Cooperativa, se remontan a los a&ntildeos 1965 y 1966, cuando entidades estatales como el Distrito de Carreteras No. 11, Obras P&uacute;blicas Municipales, Empresas P&uacute;blicas de Neiva y Hospital. <a href="#Modal1966" data-toggle="modal"><i class="fa fa-plus-square-o">leer mas</i> </a>
                              <!-- <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Clic aqu&iacute; para m&aacute;s info</button>-->
                            </p>

                          </div>
                        </div>
                        <div class="timeline">
                          <span class="timeline-icon"></span>
                          <span class="year">1975 - 1981</span>
                          <div class="timeline-content">
                            <h3 class="title">1975 - 1981 Venta de Electrodom&eacute;sticos-07 Mayo 1975</h3>
                            <p class="description"style="text-align: justify;">

                              A partir de 1975 se ampl&iacute;a la planta de personal, conservando la misma estructura, pero vinculando m&aacute;s personal, adem&aacute;s de Revisor fiscal, esta estrategia, basada en recursos disponibles de la actividad econ&oacute;mica de ahorro y cr&eacute;dito, adem&aacute;s de las capacidades y liderazgo de los directivos y trabajadores, permiti&oacute; el crecimiento en asociados. La asociaci&oacute;n era de v&iacute;nculo cerrado.
                              <a href="#Modal1975" data-toggle="modal"><i class="fa fa-plus-square-o">leer mas</i> </a>
                            </p>
                          </div>
                        </div>
                        <div class="timeline">
                          <span class="timeline-icon"></span>
                          <span class="year">1982 - 1986</span>
                          <div class="timeline-content">
                            <h3 class="title">Apertura Agencia Pitalito. Creaci&oacute;n EMCOOVEN, EMCOFUN, EMCOSALUD, EDICOOPH-02 Febrero 1982</h3>
                            <p class="description" style="text-align: justify;">
                             En la d&eacute;cada del 80 con la llegada a cargos directivos de Salvador G&oacute;mez G&oacute;mez, Jos&eacute; Ramiro Becerra Sterling y Yael Garavi&ntildeo, profesionales con una formaci&oacute;n acad&eacute;mica mayor a los fundadores y predecesores, quienes aplicaron conceptos de planeaci&oacute;n. <a href="#Modal1982" data-toggle="modal"><i class="fa fa-plus-square-o">leer mas</i> </a>
                           </p>
                         </div>
                       </div>
                       <div class="timeline">
                        <span class="timeline-icon"></span>
                        <span class="year">1987-1991</span>
                        <div class="timeline-content">
                          <h3 class="title">1987-1991 Conversi&oacute;n a MULTIACTIVA. Apertura San Agust&iacute;n y Campoalegre. Nace Asocoph-01 Febrero 1987</h3>
                          <p class="description"style="text-align: justify;">
                            El 17 de marzo de 1991 la XXV Asamblea General ordinaria, aprueba la reforma estatutaria que cambia su raz&oacute;n de Cooperativa especializada de Ahorro y Cr&eacute;dito por Cooperativa Multiactiva del Huila "UTRAHUILCA", acatando el Art&iacute;culo 61 y 63 de la Ley 79/88 que promulgan: Art 61 "Las Cooperativas en raz&oacute;n del desarrollo de sus actividades podr&aacute;n ser especializadas, multiactivas.<a href="#Modal1987" data-toggle="modal"><i class="fa fa-plus-square-o">leer mas</i> </a>
                          </p>
                        </div>
                      </div>

                      <div class="timeline">
                        <span class="timeline-icon"></span>
                        <span class="year">1992-1996</span>
                        <div class="timeline-content">
                          <h3 class="title">Apertura Agencias Isnos, Baraya, Sta. Mar&iacute;a, Timan&aacute;, Neiva Sur, Hobo, Saladoblanco, Tesalia y Neiva Oriente. Creaci&oacute;n Secci&oacute;n Infantil y Juvenil AMIGUITOS. Creaci&oacute;n FUNDAUTRAHUILCA-04 Febrero 1992</h3>
                          <p class="description" style="text-align: justify;">
                            De acuerdo con La Ley 79 de 1988 la cual le dio un marco legal propio al cooperativismo en Colombia, UTRAHUILCA acoge el art&iacute;culo 27 que dispone la forma en que pueden vincularse menores de edad a la cooperativa, "Podr&aacute;n ser asociados de las cooperativas las personas naturales legalmente capaces y los menores de edad que hayan cumplido 14 a&ntildeos. <a href="#Modal1992" data-toggle="modal"><i class="fa fa-plus-square-o">leer mas</i> </a>
                            <!-- <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Clic aqu&iacute; para m&aacute;s info</button>-->
                          </p>

                        </div>
                      </div>
                      <div class="timeline">
                        <span class="timeline-icon"></span>
                        <span class="year">1997-2001</span>
                        <div class="timeline-content">
                          <h3 class="title">Crisis Cooperativa, Reuniones Informativas, Conversi&oacute;n Ahorro y Cr&eacute;dito. Afiliaci&oacute;n FOGACOOP. Incorporaci&oacute;n COFICOL y COFINAM-01 Febrero 1997</h3>
                          <p class="description"style="text-align: justify;">
                           Dentro del ciclo de vida de la empresa, la crisis m&aacute;s fuerte fue la presentada en el a&ntildeo 1998, debido a la expedici&oacute;n del Decreto N 798 del 20 de marzo de 1997, en el cual se proh&iacute;be a los entes del orden nacional tener dep&oacute;sitos e inversiones en entidades que no se est&eacute;n vigiladas por La Superintendencia Bancaria.
                           <a href="#Modal1997" data-toggle="modal"><i class="fa fa-plus-square-o">leer mas</i> </a>
                         </p>
                       </div>
                     </div>

                     <div class="timeline">
                      <span class="timeline-icon"></span>
                      <span class="year">2002- 2006</span>
                      <div class="timeline-content">
                        <h3 class="title" >Apertura Agencia La Plata, Florencia y Garz&oacute;n. Convenios PADEMER, BANCOLDEX, LA EQUIDAD. Convenio Tarjeta D&eacute;bito, Cajeros Autom&aacute;ticos-07 Febrero 2002</h3>
                        <p class="description" style="text-align: justify;">
                         La cooperativa cuenta con tecnolog&iacute;a satelital para procesar informaci&oacute;n y para los puntos de atenci&oacute;n como es el caso de los cajeros autom&aacute;ticos. El aspecto tecnol&oacute;gico tuvo un gran avance a trav&eacute;s del convenio de afinidad con Banco de Bogot&aacute;, por medio del cual se instalaron cajeros autom&aacute;ticos en todas las agencias de la cooperativa.
                         <a href="#Modal2002" data-toggle="modal"><i class="fa fa-plus-square-o">leer mas</i> </a>
                       </p>
                     </div>
                   </div>
                   <div class="timeline">
                    <span class="timeline-icon"></span>
                    <span class="year">2007-2013.</span>
                    <div class="timeline-content">
                      <h3 class="title">Conversi&oacute;n Cooperativa Latinoamericana-01 Febrero 2013</h3>
                      <p class="description" style="text-align: justify;">
                       Apertura Agencia Martires Neiva y Popay&aacute;n. Convenio FINAGRO, FINDETER Y EFECTY.En la Asamblea celebrada el 17 de marzo de 2007, se modifican los estatutos de la Cooperativa y se aprueba el nombre de la Cooperativa Latinoamericana de Ahorro y Cr&eacute;dito - UTRAHUILCA.Adem&aacute;s se establece convenio con FINAGRO para otorgar cr&eacute;ditos destinados a inversiones agr&iacute;colas, tur&iacute;sticas y mineras.
                       <a href="#Modal2007" data-toggle="modal"><i class="fa fa-plus-square-o">leer mas</i> </a>
                     </p>
                   </div>
                 </div>

               </div>
             </div>
           </div>
         </div>

         <br><br> <br>
       

  <?php 
include 'suscribir.php';
 include 'pie.php';?>
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
</body>

</html>