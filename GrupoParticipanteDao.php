<?php

require_once "config.php";

class GrupoParticipanteDao{
	private $sql;

	public function __construct(){
		$this->sql = new Sql();
	}

	public function __destruct(){
		$this->sql = null;
	}

	public function list(){
		return $this->sql->select("SELECT * FROM grupoparticipante ORDER BY ra");
	}

	public function insert($obj){
		$this->sql->query("INSERT INTO grupoparticipante(ra,grupo) VALUES (:ra,:grupo)",array(":ra"=>$obj->getRa(),":grupo"=>$obj->getGrupo()));
	}

	public function delete($obj){
		$this->sql->query("DELETE FROM grupoparticipante WHERE ra = :ra", array(":ra"=>$obj->getRa()));
	}

	public function update($obj){
		$this->sql->query("UPDATE grupoparticipante SET ra = :ra, grupo = :grupo WHERE ra = :ra AND grupo = :grupo",array(":ra"=>getRa(),":grupo"=>getGrupo()));
	}

	public static function search($obj){
		return $this->sql->select("SELECT * FROM grupoparticipante WHERE grupo LIKE :grupo ORDER BY grupo",array(":grupo"=>"%".$obj->getGrupo()."%"));
	}

}

?>