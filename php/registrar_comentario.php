<?php

include('conexion.php');

$id_actual = $_REQUEST['id_actual'];
$id_comentado = $_REQUEST['id_comentado'];
$comentario = $_REQUEST['comentario'];
$sql= "INSERT INTO `tico_service`.`comentarios`(`id_usuario_comenta`, `id_usuario_recibe`, `comentario`)
VALUES (\"$id_actual\", \"$id_comentado\", \"$comentario\");";
$result = mysql_query($sql);

if($result){
  echo "1";
}else{
  echo "0";
}

?>
