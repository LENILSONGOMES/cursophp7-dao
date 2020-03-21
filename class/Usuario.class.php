<?php  

 class Usuario {

 	private $idusuario;
 	private $dslogin;
 	private $dssenha;
 	private $dtcadastro;



 	public function getIdusuario() {
 		return $this->idusuario;

 	}

 	public function setIdusuario($value) {
 		$this->idusuario = $value;

 	}

 	public function getDslogin() {
 		return $this->dslogin;
 	}

 	public function setDslogin($value) {
 		$this->dslogin = $value;
 	}

 	public function getDssenha() {
 		return $this->dssenha;
 	}

 	public function setDssenha($value) {
 		$this->dssenha = $value;
 	}

 	public function getDtcadastro() {
 		return $this->dtcadastro;
 	}

 	public function setDtcadastro($value) {
 		$this->dtcadastro = $value;
 	}

 	public function loadById($id) {

 		$txt = 'SELECT * FROM tb_usuarios WHERE id_usuario = :id';

 		$sql = new Mysql();
 		$result = $sql->query($txt, array (
 			':id'=>$id));

 		if (count($result) > 0) {

 			//obter dados - atributos preenchidos
 			$this->setData($result[0]);
 
 		}
 	}

 	public static function getList() {
 		$sql = new Mysql();

 		return $sql->query('SELECT * FROM tb_usuarios ORDER BY dslogin;');
 	}

 	public static function search($login) {
 		$sql = new Mysql();

 		return $sql->query('SELECT * FROM tb_usuarios WHERE dslogin LIKE :LOGIN', array(
 			':LOGIN'=>'%'.$login.'%'	
 		));
 	}

 	public function login($login, $senha){

 		$txt = 'SELECT * FROM tb_usuarios WHERE dslogin = :LOGIN AND dssenha = :SENHA';

 		$sql = new Mysql();
 		$result = $sql->query($txt, array (
 			':LOGIN'=>$login,
 			':SENHA'=>$senha

 		));

 		if (count($result) > 0) {

 			$row = $result[0];

 			$this->setData($result[0]);

 			//obter dados - atributos preenchidos

 		}

 	}

 	public function setData($data) {

 		 	$this->setIdusuario($data['id_usuario']);
 			$this->setDslogin($data['dslogin']);
 			$this->setDssenha($data['dssenha']);
 			$this->setDtcadastro($data['dtcadastro']);


 	}

 	public function insert() {

 		$sql = new Mysql();
 		$result = $sql->query('CALL sp_usuarios_insert (:LOGIN, :SENHA)', array(
 			':LOGIN'=>$this->getDslogin(),
 			':SENHA'=>$this->getDssenha()

 		));

 		if (count($result) > 0) {

 		$this->setData($result[0]);	

 		}

 	}

 	public function update($login, $senha) {

 		$this->setDslogin($login);
 		$this->setDssenha($senha);

 		$sql = new Mysql();

 		$sql->query('UPDATE tb_usuarios SET dslogin = :LOGIN, dssenha = :SENHA WHERE id_usuario = :ID', array(
 			':LOGIN'=>$this->getDslogin(),
 			':SENHA'=>$this->getDsSenha(),
 			':ID'=>$this->getIdusuario()
 		));
 	}

 	public function delete() {

 		$sql = new Mysql(); 

 		$sql->query('DELETE FROM tb_usuarios WHERE id_usuario = :ID', array(
 			':ID'=>$this->getIdusuario()
 		));

 		$this->setIdusuario(0);
 		$this->setDslogin('');
 		$this->setDsSenha('');
 		$this->setDtcadastro('2015-05-05');

 	}

 	public function __construct($usuario = '', $senha = '') {

 		$this->setDslogin($usuario);
 		$this->setDsSenha($senha);


 	}

 	public function __toString() {

 		return json_encode(array(
 			'id_usuario'=>$this->getIdusuario(),
 			'dslogin'=>$this->getDslogin(),
 			'dssenha'=>$this->getDssenha(),
 			'dtcadastro'=>$this->getDtcadastro()
 		));

 	}


 }

?>