<?php

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
		$this->sql->query("UPDATE participante SET ra = :ra, nome = :nome, email = :email WHERE ra = :ra",array(":ra"=>$obj->getRa(),":nome"=>$obj->getNome(),":email"=>$obj->getEmail()));
	}

	public static function search($obj){
		return $this->sql->select("SELECT * FROM participante WHERE ra LIKE :ra ORDER BY ra",array(":ra"=>"%".$obj->getRa()."%"));
	}

}

?>