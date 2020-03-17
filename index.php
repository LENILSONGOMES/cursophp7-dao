<?php 

require_once('config.class.php');

$sql = new Mysql();

$usuarios = $sql->query('SELECT * FROM tb_usuarios');

echo json_encode($usuarios);






?>