<?php

require_once "config.php";

class CategoriaDao{
	private $sql;

	public function __construct(){
		$this->sql = new Sql();
	}

	public function __destruct(){
		$this->sql = null;
	}

	public function list(){
		return $this->sql->select("SELECT * FROM categoria ORDER BY id");
	}

	public function insert($obj){
		$this->sql->query("INSERT INTO categoria(nome) VALUES (:nome)",array(":id"=>$obj->getId()));
	}


	public function delete($obj){
		$this->sql->query("DELETE FROM categoria WHERE id = :id", array(":id"=>$obj->getId()));
	}

	public function update($obj){
		$this->sql->query("UPDATE categoria SET nome = :nome WHERE id = :id",array(":id"=>$obj->getId()));
	}

	public static function search($obj){
		return $this->sql->select("SELECT * FROM categoria WHERE nome LIKE :nome ORDER BY id",array(":nome"=>"%".$obj->getNome()."%"));
	}

}

?>