<?php  

 class Usuario {

 	private $idusuario;
 	private $dslogin;
 	private $dssenha;
 	private $dtcadastro;
 	private $conexao;


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

 			$row = $result[0];

 			//obter dados - atributos preenchidos
 			$this->setIdusuario($row['id_usuario']);
 			$this->setDslogin($row['dslogin']);
 			$this->setDssenha($row['dssenha']);
 			$this->setDtcadastro($row['dtcadastro']);
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

 			//obter dados - atributos preenchidos
 			$this->setIdusuario($row['id_usuario']);
 			$this->setDslogin($row['dslogin']);
 			$this->setDssenha($row['dssenha']);
 			$this->setDtcadastro($row['dtcadastro']);
 		}

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