<?php 

require_once("config.php");

/*$sql = new sql();

$Usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuario);*/


// EX: 01

/*carrega um usuario

$Gui = new Usuario();

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

//$usuario = new Usuario();
//$usuario->login("Gui", "0944");

//echo $usuario;

//EX:05 cria um novo usuario

//$Jordan = new Usuario("jordan", "9007");

//$Jordan->insert();

//echo $Jordan;

//EX:06 alterando usuario UPDATE

$usuario = new Usuario();
$usuario->loadById(7);
$usuario->update("Lebron", "2015");

echo $usuario;

?>