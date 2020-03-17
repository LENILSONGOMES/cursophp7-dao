<?php  

class Mysql extends PDO{

	private $conn;

	public function __construct() {

		$this->conn = new PDO('mysql:dbname=dbphp7;host=localhost', 'root', '');
	}

	private function setParams($statement, $parameters = array()) {

			foreach ($parameters as $key => $value) {
			$this->bindParam($key, $value);
		}

	}

	private function setParam($statement, $key, $value){

		$statement->bindParam($key, $value);
	}

	public function executeSql($rowQuery, $params = array()){

		$stmt = $this->conn->prepare($rowQuery);
		$this->setParams($stmt, $params);
		$stmt->execute();
		return $stmt;

	}

	public function query($rowQuery, $params = array()) {

		$stmt = $this->executeSql($rowQuery, $params);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}
}

?>