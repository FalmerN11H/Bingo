<?php

//Bianca Pereira da Silva - 20989373
//Bruno Milano Pedroso da Silva - 21009643
//Falmer Rodrigo Venancio Nieto - 20955356
//Thiago Rezende Santos - 20919872
//Wurdolf Andrews Silva Dias - 20974511

require_once "config.php";

class PerguntaDao{
	private $sql;

	public function __construct(){
		$this->sql = new Sql();
	}

	public function __destruct(){
		$this->sql = null;
	}

	public function list(){
		return $this->sql->select("SELECT * FROM pergunta ORDER BY id");
	}

	public function insert($obj){
		$this->sql->query("INSERT INTO pergunta(pergunta,a1,a2,a3,a4,a5,resposta) VALUES (:pergunta,:a1,:a2,:a3,:a4,:a5,:resposta",array(":pergunta"=>$obj->getPergunta(),":a1"=>$obj->getAlternativa1(),":a2"=>$obj->getAlternativa2(),":a3"=>$obj->getAlternativa3(),":a4"=>$obj->getAlternativa4(),":a5"=>$obj->getAlternativa5(),":resposta"=>$obj->getResposta(),));
	}


	public function delete($obj){
		$this->sql->query("DELETE FROM pergunta WHERE id = :id", array(":id"=>$obj->getId()));
	}

	public function update($obj){
		$this->sql->query("UPDATE pergunta SET pergunta = :pergunta, a1 = :a1, a2 = :a2, a3 = :a3, a4 = :a4, a5 = :a5, resposta = :resposta WHERE id = :id",array(":pergunta"=>$obj->getPergunta(),":a1"=>$obj->getAlternativa1(),":a2"=>$obj->getAlternativa2(),":a3"=>getAlternativa3(),":a4"=>getAlternativa4(),":a5"=>getAlternativa5(),":resposta"=>getResposta()));
	}

}

?>