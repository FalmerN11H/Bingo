<?php

//Bianca Pereira da Silva - 20989373
//Bruno Milano Pedroso da Silva - 21009643
//Falmer Rodrigo Venancio Nieto - 20955356
//Thiago Rezende Santos - 20919872
//Wurdolf Andrews Silva Dias - 20974511

require_once "config.php";

class ParticipanteDao{
	private $sql;

	public function __construct(){
		$this->sql = new Sql();
	}

	public function __destruct(){
		$this->sql = null;
	}

	public function list(){
		return $this->sql->select("SELECT * FROM participante ORDER BY ra");
	}

	public function insert($obj){
		$this->sql->query("INSERT INTO participante(ra,nome,email) VALUES (:ra,:nome,:email)",array(":ra"=>$obj->getRa(),":nome"=>$obj->getNome(),":email"=>$obj->getEmail()));
	}


	public function delete($obj){
		$this->sql->query("DELETE FROM participante WHERE ra = :ra", array(":ra"=>$obj->getRa()));
	}

	public function update($obj){
		$this->sql->query("UPDATE participante SET nome = :nome, email = :email WHERE ra = :ra",array(":ra"=>$obj->getRa(),":nome"=>$obj->getNome(),":email"=>$obj->getEmail()));
	}

	public static function search($obj){
		return $this->sql->select("SELECT * FROM participante WHERE ra LIKE :ra ORDER BY ra",array(":ra"=>"%".$obj->getRa()."%"));
	}

}

?>