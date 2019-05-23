<?php

class Grupo{
	private $id;
	private $nome;
	private $partida;

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

	public function setPartida($value){
		$this->partida = $value;
	}

	public function getPartida(){
		return $this->partida;
	}

}

?>