<?php

//Bianca Pereira da Silva - 20989373
//Bruno Milano Pedroso da Silva - 21009643
//Falmer Rodrigo Venancio Nieto - 20955356
//Thiago Rezende Santos - 20919872
//Wurdolf Andrews Silva Dias - 20974511

class Sql extends PDO{

	private $conn;

	public function __construct(){
		$this->conn = new PDO("mysql:dbname=bingotester;host=127.0.0.1","root","");
	}

	public function __destruct(){
		$this->conn = null;
	}

	public function getConn(){
		return $this->conn;
	}

	//pega os parametros e valor
	private function setParams($statment, $parameters = array()){
		foreach ($parameters as $key => $value) {
			$this->setParam($statment,$key,$value);
		}
	}

	//cada parametro e substitui por valor
	private function setParam($statment,$key,$value){
		$statment->bindParam($key,$value);
	}

	//recebe os comandos
	public function query($rawQuery,$params = array()){
		$stmt = $this->conn->prepare($rawQuery);
		$this->setParams($stmt,$params);
		$stmt->execute();
		return $stmt;
	}

	//apenas um select
	public function select($rawQuery,$params = array()):array{
		$stmt = $this->query($rawQuery,$params);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

}

?>