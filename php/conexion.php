<?php

$conexion = mysql_connect("localhost", "root","pico")or die("Error en la conexion");
mysql_select_db("tico_service", $conexion) or die("No se pudo seleccionar la base
de datos");

 ?>
