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
		return $this->sql->select("SELECT * FROM partida ORDER BY partida");
	}

	public function insert($obj){
		$this->sql->query("INSERT INTO partida(criador,rodadas,acertos,erros) VALUES (:criador,:rodadas,:acertos,:erros)",array(":criador"=>$obj->getCriador(),":rodadas"=>$obj->getRodadas(),":acertos"=>$obj->getAcertos(),":erros"=>$obj->getErros()));
	}


	public function delete($obj){
		$this->sql->query("DELETE FROM partida WHERE partida = :partida", array(":partida"=>$obj->getPartida()));
	}

	public function update($obj){
		$this->sql->query("UPDATE partida SET criador = :criador, rodadas = :rodadas, acertos = :acertos, erros = :erros WHERE partida = :partida",array(":criador"=>$obj->getCriador(),":rodadas"=>$obj->getRodadas(),":acertos"=>$obj->getAcertos(),":erros"=>getErros()));
	}

	public static function search($obj){
		return $this->sql->select("SELECT * FROM partida WHERE criador LIKE :criador ORDER BY partida",array(":criador"=>"%".$obj->getCriador()."%"));
	}

}

?>