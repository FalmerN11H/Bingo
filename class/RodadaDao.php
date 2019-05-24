<?php

//Bianca Pereira da Silva - 20989373
//Bruno Milano Pedroso da Silva - 21009643
//Falmer Rodrigo Venancio Nieto - 20955356
//Thiago Rezende Santos - 20919872
//Wurdolf Andrews Silva Dias - 20974511

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
		$this->sql->query("INSERT INTO rodada(grupo,partida,pergunta,respondido) VALUES (:grupo,:partida,:pergunta,:respondido)",array(":grupo"=>$obj->getGrupo(),":partida"=>$obj->getPartida(),":pergunta"=>$obj->getPergunta(),":respondido"=>$obj->getRespondido()));
	}


	public function delete($obj){
		$this->sql->query("DELETE FROM rodada WHERE id = :id", array(":id"=>$obj->getRodada()));
	}

	public function update($obj){
		$this->sql->query("UPDATE rodada SET grupo = :grupo, partida = :partida, pergunta = :pergunta, respondido = :respondido WHERE id = :id",array(":grupo"=>$obj->getGrupo(),":partida"=>$obj->getPartida(),":pergunta"=>$obj->getPergunta(),":respondido"=>getRespondido()));
	}

	public static function search($obj){
		return $this->sql->select("SELECT * FROM rodada WHERE partida LIKE :partida ORDER BY rodada",array(":partida"=>"%".$obj->getPartida()."%"));
	}

}

?>