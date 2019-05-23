<?php

//Bianca Pereira da Silva - 20989373
//Bruno Milano Pedroso da Silva - 21009643
//Falmer Rodrigo Venancio Nieto - 20955356
//Thiago Rezende Santos - 20919872
//Wurdolf Andrews Silva Dias - 20974511

class Usuario{
	private $id;
	private $login;
	private $senha;
	private $email;
	private $nome;

	public function setId($value){
		$this->id = $value;
	}

	public function getId(){
		return $this->id;
	}

	public function setLogin($value){
		$this->login = $value;
	}

	public function getLogin(){
		return $this->login;
	}

	public function setSenha($value){
		$this->senha = $value;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setEmail($value){
		$this->email = $value;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setNome($value){
		$this->nome = $value;
	}

	public function getNome(){
		return $this->nome;
	}
}
?>