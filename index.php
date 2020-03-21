<?php 

require_once('class\config.class.php');

/*	$sql = new Mysql();


	$usuarios = $sql->query('SELECT * FROM tb_usuarios');



echo json_encode($usuarios);

//print_r(explode(';', 'teste;testa;fgfg'));



//echo json_encode($usuarios);*/

/*$sql = new Usuario();

$sql->loadById(25);


echo $sql;*/

/*$idusuario =  $sql->getIdusuario(25);
$dslogin = $sql->getDslogin(25);

if ($idusuario == 25) {
	echo 'É o '.$dslogin;
}*/


//carrega uma lista de usuarios

/*$lista = Usuario::getList();

echo json_encode($lista);*/

/*
LISTA USUARIOS COM PARAMETROS
$lista = Usuario::search('LENILSONG');

echo json_encode($lista);*/


//LISTA COM DOIS PARAMETROS
$usuario = new Usuario();
$usuario->login('GOMESLENILSON', '1234567');

echo $usuario;



?>