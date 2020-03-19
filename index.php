<?php 

require_once('class\config.class.php');

	$sql = new Mysql();


	$usuarios = $sql->query('SELECT * FROM tb_usuarios');



echo json_encode($usuarios);

//print_r(explode(';', 'teste;testa;fgfg'));



//echo json_encode($usuarios);






?>