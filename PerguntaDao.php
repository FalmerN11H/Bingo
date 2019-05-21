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
		$this->sql->query("INSERT INTO pergunta(pergunta,alternativa1,alternativa2,alternativa3,alternativa4,alternativa5,resposta,categoria) VALUES (:pergunta,:altertiva1,:altertiva2,:alternativa3,:alternativa4,:alternativa5,:resposta,:categoria)",array(":pergunta"=>$obj->getPergunta(),":alternativa1"=>$obj->getAlternativa1(),":alternativa2"=>$obj->getAlternativa2(),":alternativa3"=>$obj->getAlternativa3(),":alternativa4"=>$obj->getAlternativa4(),":alternativa5"=>getAlternativa5(),":resposta"=>getResposta(),":categoria"=>getCategoria()));
	}


	public function delete($obj){
		$this->sql->query("DELETE FROM pergunta WHERE id = :id", array(":id"=>$obj->getId()));
	}

	public function update($obj){
		$this->sql->query("UPDATE pergunta SET pergunta = :pergunta, alternativa1 = :alternativa1, alternativa2 = :alternativa2, alternativa3 = :alternativa3, alternativa4 = :alternativa4, alternativa5 = :alternativa5, resposta = :resposta, categoria = :categoria WHERE id = :id",array(":pergunta"=>$obj->getPergunta(),":alternativa1"=>$obj->getAlternativa1(),":alternativa2"=>$obj->getAlternativa2(),":alternativa3"=>getAlternativa3(),":alternativa4"=>getAlternativa4(),":alternativa5"=>getAlternativa5(),":resposta"=>getResposta(),":categoria"=>getCategoria()));
	}

	public static function search($obj){
		return $this->sql->select("SELECT * FROM pergunta WHERE categoria LIKE :categoria ORDER BY id",array(":categoria"=>"%".$obj->getCategoria()."%"));
	}

}

?>