<?php 

require_once('class\config.class.php');

/*	$sql = new Mysql();


	$usuarios = $sql->query('SELECT * FROM tb_usuarios');



echo json_encode($usuarios);

//print_r(explode(';', 'teste;testa;fgfg'));



//echo json_encode($usuarios);*/

$sql = new Usuario();

$sql->loadById(25);


echo $sql;

/*$idusuario =  $sql->getIdusuario(25);
$dslogin = $sql->getDslogin(25);

if ($idusuario == 25) {
	echo 'É o '.$dslogin;
}*/

?>