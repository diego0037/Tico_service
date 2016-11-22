<?php

include('conexion.php');

$correo = $_REQUEST['correo'];
$contrasena = $_REQUEST['contrasena'];

$datos =mysql_query("SELECT * from usuarios where correo='" . $correo . "'");


if($row = mysql_fetch_array($datos)){
if($row['contrasena'] == $contrasena){
session_start();
$_SESSION['correo'] = $row['correo'];
$_SESSION['id'] = $row['id'];
  echo $row['id'];
}else{
  echo "0";
  }
}else{
  echo "0";
}

?>
