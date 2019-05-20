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
		$this->sql->query("INSERT INTO usuario(login,senha,email) VALUES (:login,:senha,:email)",array(":login"=>$obj->getLogin(),":senha"=>$obj->getSenha(),":email"=>$obj->getEmail()));
	}


	public function delete($obj){
		$this->sql->query("DELETE FROM usuario WHERE id = :id", array(":id"=>$obj->getId()));
	}

	public function update($obj){
		$this->sql->query("UPDATE usuario SET login = :login, senha = :senha WHERE id = :id",array(":login"=>$obj->getLogin(),":senha"=>$obj->getSenha(),":id"=>$obj->getId()));
	}

	public static function search($obj){
		return $this->sql->select("SELECT * FROM usuario WHERE login LIKE :search ORDER BY id",array(":search"=>"%".$obj->getLogin()."%"));
	}

}

?>