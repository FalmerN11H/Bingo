<?php

require_once "config.php";

class PartidaDao{
	private sql;

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
		$this->sql->query("INSERT INTO partida(criador,nome,maximogrupo,maximoparticipante,tema,rodadas,acertos,erros) VALUES (:criador,:nome,:maximogrupo,:maximoparticipante,:tema,:rodadas,:acertos,:erros)",array(":criador"=>$obj->getCriador(),":nome"=>$obj->getNome(),"maximogrupo"=>$obj->getMaximoGrupo(),"maximoparticipante"=>getMaximoParticipante(),":tema"=>$obj->getTema(),":rodadas"=>$obj->getRodadas(),":acertos"=>$obj->getAcertos(),":erros"=>$obj->getErros()));
	}


	public function delete($obj){
		$this->sql->query("DELETE FROM partida WHERE partida = :partida", array(":partida"=>$obj->getPartida()));
	}

	public function update($obj){
		$this->sql->query("UPDATE partida SET criador = :criador, nome = :nome, maximogrupo = :maximogrupo, maximoparticipante = :maximoparticipante, tema = :tema, rodadas = :rodadas, acertos = :acertos, erros = :erros WHERE partida = :partida",array(":criador"=>$obj->getCriador(),":rodadas"=>$obj->getRodadas(),":acertos"=>$obj->getAcertos(),":erros"=>getErros()));
	}

	public static function search($obj){
		return $this->sql->select("SELECT * FROM partida WHERE criador LIKE :criador ORDER BY partida",array(":criador"=>"%".$obj->getCriador()."%"));
	}

	public static function entrar($obj){
		return $this->sql->select("SELECT * FROM partida WHERE nome = :nome ORDER BY partida",array(":nome"=>$obj->getNome()));
	}

}

?>