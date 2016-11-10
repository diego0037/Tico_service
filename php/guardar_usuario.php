<?php

include('conexion.php');


$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$verificar_contra = $_POST['contrasenaVerif'];


// verificar si ya existe el correo
$datos =mysql_query("SELECT * from usuarios where correo='" . $correo . "'");
if(mysql_num_rows($datos)>0){
  die('correo existente');
}
if ($contrasena!=$verificar_contra) {
  die('contraseñas no coinciden');
}



if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {

}else {
  die('Verifique su correo');
}

$sql = "INSERT INTO usuarios(`nombre`, `apellidos`, `telefono`, `correo`, `contrasena`)
        VALUES(\"$nombre\", \"$apellidos\", \"$telefono\", \"$correo\", \"$contrasena\");";

$result = mysql_query($sql) ;
if ($result) {
  header('Location: https://www.youtube.com/');
}else {
  header('Location: ../mantenimiento.php');
}
?>
