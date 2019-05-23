<?php

//Bianca Pereira da Silva - 20989373
//Bruno Milano Pedroso da Silva - 21009643
//Falmer Rodrigo Venancio Nieto - 20955356
//Thiago Rezende Santos - 20919872
//Wurdolf Andrews Silva Dias - 20974511

require_once "config.php";

class GrupoDao{
	private $sql;

	public function __construct(){
		$this->sql = new Sql();
	}

	public function __destruct(){
		$this->sql = null;
	}

	public function list(){
		return $this->sql->select("SELECT * FROM grupo ORDER BY id");
	}

	public function insert($obj){
		$this->sql->query("INSERT INTO grupo(nome,partida) VALUES (:nome,:partida)",array(":nome"=>$obj->getNome(),":partida"=>$obj->getPartida()));
	}


	public function delete($obj){
		$this->sql->query("DELETE FROM grupo WHERE id = :id", array(":id"=>$obj->getId()));
	}

	public function update($obj){
		$this->sql->query("UPDATE grupo SET nome = :nome, partida = :partida WHERE id = :id",array(":nome"=>getNome(),":partida"=>getPartida(),":id"=>$obj->getId()));
	}

	public function search($obj){
		return $this->sql->select("SELECT * FROM grupo WHERE partida LIKE :partida ORDER BY id",array(":partida"=>"%".$obj->getPartida()."%"));
	}

	public function pegarid($obj){
		return $this->sql->select("SELECT id FROM grupo WHERE nome = :nome ORDER BY id",array(":nome"=>$obj->getNome()));
	}

}

?>