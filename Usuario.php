<?php

class Usuario{
	private $id;
	private $login;
	private $senha;
	private $email;

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
}
?>