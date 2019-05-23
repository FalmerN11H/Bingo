<?php

//Bianca Pereira da Silva - 20989373
//Bruno Milano Pedroso da Silva - 21009643
//Falmer Rodrigo Venancio Nieto - 20955356
//Thiago Rezende Santos - 20919872
//Wurdolf Andrews Silva Dias - 20974511

require_once "config.php";

class UsuarioDao{
	private $sql;

	public function __construct(){
		$this->sql = new Sql();
	}

	public function __destruct(){
		$this->sql = null;
	}

	public function list(){
		return $this->sql->select("SELECT * FROM usuario ORDER BY id");
	}

	public function listar($obj){
		return $this->sql->select("SELECT id FROM usuario WHERE login = :login AND senha = :senha",array(":login"=>$obj->getLogin(),":senha"=>$obj->getSenha()));
	}

	public function insert($obj){
		$this->sql->query("INSERT INTO usuario(login,senha,email,nome) VALUES (:login,:senha,:email,:nome)",array(":login"=>$obj->getLogin(),":senha"=>$obj->getSenha(),":email"=>$obj->getEmail(),":nome"=>$obj->getNome()));
	}


	public function delete($obj){
		$this->sql->query("DELETE FROM usuario WHERE id = :id", array(":id"=>$obj->getId()));
	}

	public function update($obj){
		$this->sql->query("UPDATE usuario SET login = :login, senha = :senha, email = :email, nome = :nome WHERE id = :id",array(":login"=>$obj->getLogin(),":senha"=>$obj->getSenha(),":email"=>$obj->getEmail(),":nome"=>$obj->getNome(),":id"=>$obj->getId()));
	}

	public function search($obj){
		return $this->sql->select("SELECT * FROM usuario WHERE nome LIKE :nome ORDER BY id",array(":nome"=>"%".$obj->getNome()."%"));
	}

	public function autenticar($obj){
		return $this->sql->select("SELECT login,senha FROM usuario WHERE login = :login AND senha = :senha",array(":login"=>$obj->getLogin(),":senha"=>$obj->getSenha()));
	}

}

?>