<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
 <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"; charset="utf-8"/> 
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Utrahuilca - Cooperativa Latinoamericana de Ahorro Y Credito</title> <!-- Aquí va el título de la página -->
        <!-- Global site tag (gtag.js) - Google Analytics -->

        
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136441397-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-136441397-1');
</script>

</head>

<body>
<?php

$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Email = $_POST['Email'];
$Tipo_Identificacion = $_POST['Tipo_Identificacion'];
$Numero_Identificacion = $_POST['Numero_Identificacion'];
$Direccion = $_POST['Direccion'];
$celular= $_POST['celular'];
$Tipo = $_POST['Tipo'];
$Mensaje = $_POST['Mensaje'];
$Tipo_Respuesta= $_POST['Tipo_Respuesta'];
$ips= $_POST['ips'];
$Terminos_condiciones= $_POST['Terminos_condiciones'];




$recaptcha = $_POST['g-recaptcha-response'];
if (isset($recaptcha)&& $recaptcha) {

$secret="6LeUm3EUAAAAAPo-_kxVaF48hux8MS4an8IYM9iH";
$ip = $_SERVER['REMOTE_ADDR'];
$var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha&remoteip=$ip");

}

if ($Nombre==''  || $Apellido==''   || $Email=='' || $Tipo_Identificacion==''  || $Numero_Identificacion==''   || $Direccion==''    || $celular==''  || $Tipo==''   || $Mensaje==''  || $Tipo_Respuesta=='' || $ips==''  || $Terminos_condiciones==''    || $recaptcha ==''  ){ // Si falta un dato en el formulario mandara una alerta al usuario.

echo "<script>alert('Los campos marcados con * son obligatorios');location.href ='javascript:history.back()';</script>";

}else{


    require("archivosformulario/class.phpmailer.php"); 

    // Requiere PHPMAILER para poder enviar el formulario desde el SMTP de google
    $mail = new PHPMailer();
    $mail->From     = $Email;
    $mail->FromName = $Nombre; 
    $mail->AddAddress("servicioalasociado@utrahuilca.com"); // Dirección a la que llegaran los mensajes.

// Aquí van los datos que apareceran en el correo que reciba

    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "PQRS_Asociados-Utrahuilca"; // Asunto del mensaje.
    $mail->Body     =  "Nombre: $Nombre \n<br />". // Nombre del usuario
        "Apellido: $Apellido \n<br />".    // Email del usuario
    "Email: $Email \n<br />".    // Email del usuario
         "Tipo_Identificacion: $Tipo_Identificacion \n<br />" .// el tipo de queja
      "Numero_Identificacion: $Numero_Identificacion \n<br />" .// el tipo de queja
      "Direccion: $Direccion \n<br />" .// el tipo de queja
          "celular: $celular\n<br />" .// el tipo de queja
             "Tipo: $Tipo \n<br />" .// el tipo de queja
    "Mensaje: $Mensaje \n<br />".
    "Tipo_Respuesta: $Tipo_Respuesta \n<br />".
    "Direccion ip: $ips \n<br />".
    "Terminos_condiciones: $Terminos_condiciones\n<br />"; // Mensaje del usuario
     

// Datos del servidor SMTP, podemos usar el de Google, Outlook, etc...

    $mail->IsSMTP(); 
    $mail->Host = "ssl://a2plvcpnl44641.prod.iad2.secureserver.net:465";  // Servidor de Salida. 465 es uno de los puertos que usa Google para su servidor SMTP
    $mail->SMTPAuth = true; 
    $mail->Username = "pqrs@utrahuilca.coop";  // Correo Electrónico
    $mail->Password = "Hu1lC41nf0p9R5"; // Contraseña del correo

    if ($mail->Send())
    echo "<script>alert('Formulario enviado exitosamente, le responderemos lo más pronto posible.');location.href ='javascript:history.back()';</script>";
    else
    echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";
}
?>
</body>
</html>