<?php
include('conexion.php');

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$datos = mysql_query("SELECT * FROM `usuarios`");

if (!$datos) {
$message = 'Invalid query: ' . mysql_error() . " ";
$message .= 'Whole query: ' . $datos;
die($message);
}

while ($row=mysql_fetch_array($datos)) {
  if ($row['correo'] == $correo && $row['contrasena'] == $contrasena ) {
  header('Location: ../perfil.php');
  } else {
    $message = 'No estas resgistrado o verifica tus datos ';
    die($message);
  }

}
mysql_free_result($datos);
 ?>
