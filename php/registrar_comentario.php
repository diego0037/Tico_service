<?php

include('conexion.php');

$id_actual = $_REQUEST['id_actual'];
$id_comentado = $_REQUEST['id_comentado'];
$comentario = $_REQUEST['comentario'];
$sql= "INSERT INTO `tico_service`.`comentarios`(`id_usuario_comenta`, `id_usuario_recibe`, `comentario`)
VALUES (\"$id_actual\", \"$id_comentado\", \"$comentario\");";
$temp = 'pruebaTemp';
$result = mysql_query($sql);

if($result){
  echo "1";
}else{
  echo "0";
}
//
// $datos =mysql_query("INSERT INTO `tico_service`.`comentarios`(`id`, `id_usuario_comenta`, `id_usuario_recibe`, `comentario`)
// VALUES (NULL, '$id_actual', '$id_comentado', '$comentario');";
//
// if($row = mysql_fetch_array($datos) > 0){
// echo "1";
//
// }else{
//   echo "0";
// }

?>
