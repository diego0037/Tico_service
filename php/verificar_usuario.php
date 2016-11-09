<?php
include('conexion.php');

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$datos =mysql_query("SELECT * from usuarios where correo='" . $correo . "'");


if (!$datos) {
$message = 'Invalid query: ' . mysql_error() . " ";
$message .= 'Whole query: ' . $datos;
die($message);
}

if($row = mysql_fetch_array($datos)){
if($row['contrasena'] == $contrasena){
session_start();
$_SESSION['correo'] = $correo;
header('Location: ../perfil.php');
}else{
  $message = 'No estas resgistrado o verifica tus datos ';
  die($message);
  }
}else{
  $message = 'No estas resgistrado o verifica tus datos ';
  die($message);
}

 ?>
