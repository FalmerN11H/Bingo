<?php

class Categoria{
	private $id;
	private $nome;

	public function setId($value){
		$this->id = $value;
	}

	public function getId(){
		return $this->id;
	}

	public function setNome($value){
		$this->nome = $value;
	}

	public function getNome(){
		return $this->nome;
	}
}

?>