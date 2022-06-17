<?php 

require_once("config.php");

/*$sql = new sql();

$clientes = $sql->select("SELECT * FROM tb_clientes");

echo json_encode($clientes);*/

$Guilherme = new Clientes();

$Guilherme->loadById(1);

echo $Guilherme;

?>