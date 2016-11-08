<?php

include('conexion.php');

//get data from REQUEST

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

//TODO: validate

//insert to the DB
// connect to DB
$mysqli = connect_db();
// query the table

$sql = "INSERT INTO usuarios(`nombre`, `apellidos`, `telefono`, `correo`, `contrasena`)
        VALUES(\"$nombre\", \"$apellidos\", \"$telefono\", \"$correo\", \"$contrasena\");";

$result = $mysqli->query($sql) ;
if ($result) {
  header('Location: https://www.youtube.com/');
}else {
  header('Location: ../mantenimiento.php');
}

//redirect to index
