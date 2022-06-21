<?php 

require_once("config.php");

/*$sql = new sql();

$Usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/


// EX: 01

/*carrega um usuario

$Gui = new Usuarios();

$Gui->loadById(1);

echo $Gui;*/


// EX: 02

/*carrega uma lista de usuarios

$list = Clientes::getList();

echo json_encode($list);*/

// EX: 03

//carrega uma lista de usuarios buscando pelo login

//$search = Clientes::search("G");
//echo json_encode($search);

//EX: 04 carrega um usuario usando login e senha

$usuario = new Usuarios();
$usuario->login("Gui", "0944");

echo $usuario;

?>