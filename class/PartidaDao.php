<?php

//Bianca Pereira da Silva - 20989373
//Bruno Milano Pedroso da Silva - 21009643
//Falmer Rodrigo Venancio Nieto - 20955356
//Thiago Rezende Santos - 20919872
//Wurdolf Andrews Silva Dias - 20974511

require_once "config.php";

class PartidaDao{
	private $sql;

	public function __construct(){
		$this->sql = new Sql();
	}

	public function __destruct(){
		$this->sql = null;
	}

	public function list(){
		return $this->sql->select("SELECT * FROM partida ORDER BY id");
	}

	public function topper(){
		return $this->sql->select("SELECT id FROM usuario ORDER BY id DESC LIMIT 1");
	}

	public function insert($obj){
		$this->sql->query("INSERT INTO partida(criador,nome,maximogrupo,maximoparticipante,rodadas,acerto,erro) VALUES (:criador,:nome,:maximogrupo,:maximoparticipante,:rodadas,:acerto,:erro)",array(":criador"=>$obj->getCriador(),":nome"=>$obj->getNome(),"maximogrupo"=>$obj->getMaximoGrupo(),"maximoparticipante"=>getMaximoParticipante(),":rodadas"=>$obj->getRodadas(),":acerto"=>$obj->getAcertos(),":erro"=>$obj->getErros()));
	}


	public function delete($obj){
		$this->sql->query("DELETE FROM partida WHERE id = :id", array(":id"=>$obj->getPartida()));
	}

	public function update($obj){
		$this->sql->query("UPDATE partida SET criador = :criador, nome = :nome, maximogrupo = :maximogrupo, maximoparticipante = :maximoparticipante, rodadas = :rodadas, acerto = :acerto, erro = :erro WHERE id = :id",array(":criador"=>$obj->getCriador(),":rodadas"=>$obj->getRodadas(),":acertos"=>$obj->getAcertos(),":erros"=>getErros(),":id"=>getPartida()));
	}

	public static function search($obj){
		return $this->sql->select("SELECT * FROM partida WHERE criador LIKE :criador ORDER BY id",array(":criador"=>"%".$obj->getCriador()."%"));
	}

	public static function entrar($obj){
		return $this->sql->select("SELECT * FROM partida WHERE nome = :nome ORDER BY id",array(":nome"=>$obj->getNome()));
	}

}

?>