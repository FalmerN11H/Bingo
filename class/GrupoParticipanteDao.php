<?php

//Bianca Pereira da Silva - 20989373
//Bruno Milano Pedroso da Silva - 21009643
//Falmer Rodrigo Venancio Nieto - 20955356
//Thiago Rezende Santos - 20919872
//Wurdolf Andrews Silva Dias - 20974511

require_once "config.php";

class GrupoParticipanteDao{
	private $sql;

	public function __construct(){
		$this->sql = new Sql();
	}

	public function __destruct(){
		$this->sql = null;
	}

	//listar
	public function list(){
		return $this->sql->select("SELECT * FROM grupoparticipante ORDER BY ra");
	}

	//inserir
	public function insert($obj){
		$this->sql->query("INSERT INTO grupoparticipante(ra,grupo) VALUES (:ra,:grupo)",array(":ra"=>$obj->getRa(),":grupo"=>$obj->getGrupo()));
	}

	//deletar
	public function delete($obj){
		$this->sql->query("DELETE FROM grupoparticipante WHERE ra = :ra AND grupo = :grupo", array(":ra"=>$obj->getRa(),":grupo"=>$obj->getGrupo());
	}

	//atualizar
	public function update($obj){
		$this->sql->query("UPDATE grupoparticipante SET ra = :ra, grupo = :grupo WHERE ra = :ra AND grupo = :grupo",array(":ra"=>getRa(),":grupo"=>getGrupo()));
	}

	//procurar por grupo
	public function search($obj){
		return $this->sql->select("SELECT * FROM grupoparticipante WHERE grupo LIKE :grupo ORDER BY grupo",array(":grupo"=>"%".$obj->getGrupo()."%"));
	}

}

?>