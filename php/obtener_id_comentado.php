<?php

include('conexion.php');

$comentado = $_REQUEST['comentado'];

$datos =mysql_query("SELECT id from `tico_service`.`usuarios` where correo='" . $comentado. "'");


if($row = mysql_fetch_array($datos)){
session_start();
  echo $row['id'];
}else{
  echo "0";
}

?>
