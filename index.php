<?php 

require_once("config.php");

$sql = new sql();

$clientes = $sql->select("SELECT * FROM tb_clientes");

echo json_encode($clientes);

?>