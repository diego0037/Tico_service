<?php
// se incluyen la logica que vamos a utilizar para poder pedir los datos
require('constantes.php');
require('extraer_datos.php');

$keyword = $_GET['keyword'];
$data = buscarProfesiones($keyword);
echo json_encode($data);
