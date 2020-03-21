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
/*$usuario = new Usuario();
$usuario->login('GOMESLENILSON', '1234567');

echo $usuario;*/

//inserir dados
//$aluno = new Usuario('gomes', '010203');

/*$aluno->setDslogin('GOMES');
$aluno->setDssenha('123456');

$aluno->insert();

echo $aluno;*/



//carrega dados individualmente
/*$resultado = new Usuario();

$resultado->loadById(42);

$usuario = $resultado->getDslogin();

if ($usuario == 'GOMES2') {
	echo 'Login válido';
} else {
	echo 'Login inválido';
}*/

//atualizar usuario
/*$usuario = new Usuario();

$usuario->loadById(46);

$usuario->update('alunogomes', '55555');

echo $usuario;*/









?>