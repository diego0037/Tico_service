<?php
/*
$conexion = mysql_connect("localhost", "root", "pico") or die("Error en la conexion");
mysql_select_db("tico_service", $conexion) or die("No se pudo seleccionar la base de datos");
*/
function connect_db() {
	$mysqli = new mysqli("127.0.0.1", "root", "", "tico_services");
// if ($mysqli =="mysqliError") {
// 	echo "bien11";
// }
// else {
//  echo "mal";
// }
// echo '$mysqli';

	return $mysqli;

}
