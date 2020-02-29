<?php
require_once '../config/conexion.php';
$correo=$_GET['nlemail'];
if ($correo!=""){
$respuesta="";
$sql="INSERT INTO correossuscritos(correo) VALUES ('".$correo."')";
$result=insertar($sql);
if ($result=="exito"){
	$respuesta="<div class='alert alert-success alert-dismissible fade show' role=´'alert'>
  Su correo <strong>".$correo."</strong> fué agregado a nuestra base de datos, pronto recibirá noticias de UTRAHUILCA
  <button type='button' class='close' data-dismiss='alert' aria-label='cerrar'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
}else if($result=="Error: Duplicate entry '".$correo."' for key 'PRIMARY'")	
$respuesta="<div class='alert alert-warning alert-dismissible fade show' role=´'alert'>
  <strong>Su correo ya se encuentra inscrito en nuestra base de datos</strong>
  <button type='button' class='close' data-dismiss='alert' aria-label='cerrar'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
}else
$respuesta="<div class='alert alert-warning alert-dismissible fade show' role=´'alert'>
  <strong>Por favor escriba un correo válido</strong>
  <button type='button' class='close' data-dismiss='alert' aria-label='cerrar'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
echo($respuesta);
?>