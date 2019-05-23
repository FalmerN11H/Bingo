<?php

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
		$this->sql->query("INSERT INTO pergunta(pergunta,a1,a2,a3,a4,a5,resposta,categoria) VALUES (:pergunta,:a1,:a2,:a3,:a4,:a5,:resposta,:categoria)",array(":pergunta"=>$obj->getPergunta(),":a1"=>$obj->getAlternativa1(),":a2"=>$obj->getAlternativa2(),":a3"=>$obj->getAlternativa3(),":a4"=>$obj->getAlternativa4(),":a5"=>$obj->getAlternativa5(),":resposta"=>$obj->getResposta(),":categoria"=>$obj->getCategoria()));
	}


	public function delete($obj){
		$this->sql->query("DELETE FROM pergunta WHERE id = :id", array(":id"=>$obj->getId()));
	}

	public function update($obj){
		$this->sql->query("UPDATE pergunta SET pergunta = :pergunta, a1 = :a1, a2 = :a2, a3 = :a3, a4 = :a4, a5 = :a5, resposta = :resposta, categoria = :categoria WHERE id = :id",array(":pergunta"=>$obj->getPergunta(),":a1"=>$obj->getAlternativa1(),":a2"=>$obj->getAlternativa2(),":a3"=>getAlternativa3(),":a4"=>getAlternativa4(),":a5"=>getAlternativa5(),":resposta"=>getResposta(),":categoria"=>getCategoria()));
	}

	public static function search($obj){
		return $this->sql->select("SELECT * FROM pergunta WHERE categoria LIKE :categoria ORDER BY id",array(":categoria"=>"%".$obj->getCategoria()."%"));
	}

}

?>