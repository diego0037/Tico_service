<?php

// se traen los para poder retornar la conexion a la base de datos
function getDbConnection() {

  $db = new PDO(DB_DRIVER . ":dbname=" . DB_DATABASE .
  ";host=" . DB_SERVER . ";charset=utf8", DB_USER, DB_PASSWORD);
  return $db;
}

// se hace la consulta a la base de datos para encontrar que pedimos en el input y
// se retornan los resultados
function buscarProfesiones($keyword) {

    $db = getDbConnection();
    $stmt = $db->prepare("SELECT nombre FROM `servicios` WHERE nombre LIKE ? ORDER BY nombre");
    $keyword = $keyword . '%';
    $stmt->bindParam(1, $keyword, PDO::PARAM_STR, 100);

    $isQueryOk = $stmt->execute();

    $results = array();

    $results = $stmt->fetchAll(PDO::FETCH_COLUMN);

    return $results;
}
