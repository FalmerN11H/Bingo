<?php

require_once "config.php";

class RodadaDao{
	private $sql;

	public function __construct(){
		$this->sql = new Sql();
	}

	public function __destruct(){
		$this->sql = null;
	}

	public function list(){
		return $this->sql->select("SELECT * FROM rodada ORDER BY rodada");
	}

	public function insert($obj){
		$this->sql->query("INSERT INTO rodada(grupo,partida,pergunta,respondido,numero) VALUES (:grupo,:partida,:pergunta,:respondido,:numero)",array(":grupo"=>$obj->getGrupo(),":partida"=>$obj->getPartida(),":pergunta"=>$obj->getPergunta(),":respondido"=>$obj->getRespondido(),":numero"=>$obj->getNumero()));
	}


	public function delete($obj){
		$this->sql->query("DELETE FROM rodada WHERE rodada = :rodada", array(":rodada"=>$obj->getRodada()));
	}

	public function update($obj){
		$this->sql->query("UPDATE rodada SET grupo = :grupo, partida = :partida, pergunta = :pergunta, respondido = :respondido, numero = :numero WHERE rodada = :rodada",array(":grupo"=>$obj->getGrupo(),":partida"=>$obj->getPartida(),":pergunta"=>$obj->getPergunta(),":respondido"=>getRespondido(),":numero"=>getNumero()));
	}

	public static function search($obj){
		return $this->sql->select("SELECT * FROM rodada WHERE partida LIKE :partida ORDER BY rodada",array(":partida"=>"%".$obj->getPartida()."%"));
	}

}

?>