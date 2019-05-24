<?php

//Bianca Pereira da Silva - 20989373
//Bruno Milano Pedroso da Silva - 21009643
//Falmer Rodrigo Venancio Nieto - 20955356
//Thiago Rezende Santos - 20919872
//Wurdolf Andrews Silva Dias - 20974511

class Participante{
	private $ra;
	private $nome;
	private $email;


	//Getters and Setters
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