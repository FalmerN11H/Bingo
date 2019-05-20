<?php

class Participante{
	private $ra;
	private $nome;
	private $email;

	public function setRa($value){
		$this->ra = $value;
	}

	public function getRa(){
		return $this->ra;
	}

	public function setNome($value){
		$this->nome = $value;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setEmail($value){
		$this->email = $value;
	}

	public function getEmail(){
		return $this->email;
	}

}

?>