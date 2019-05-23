<?php

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

	public function insert($obj){
		$this->sql->query("INSERT INTO usuario(login,senha,email,nome) VALUES (:login,:senha,:email,:nome)",array(":login"=>$obj->getLogin(),":senha"=>$obj->getSenha(),":email"=>$obj->getEmail(),":nome"=>$obj->getNome()));
	}


	public function delete($obj){
		$this->sql->query("DELETE FROM usuario WHERE id = :id", array(":id"=>$obj->getId()));
	}

	public function update($obj){
		$this->sql->query("UPDATE usuario SET login = :login, senha = :senha, nome = :nome WHERE id = :id",array(":login"=>$obj->getLogin(),":senha"=>$obj->getSenha(),":id"=>$obj->getId(),":nome"=>$obj->getNome()));
	}

	public function search($obj){
		return $this->sql->select("SELECT * FROM usuario WHERE nome LIKE :nome ORDER BY id",array(":nome"=>"%".$obj->getNome()."%"));
	}

	public function autenticar($obj){
		return $this->sql->select("SELECT login,senha FROM usuario WHERE login = :login AND senha = :senha",array(":login"=>$obj->getLogin(),":senha"=>$obj->getSenha()));
	}

}

?>