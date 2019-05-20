<?php

class GrupoParticipante{
	private $ra;
	private $grupo;

	public function setRa($value){
		$this->ra = $value;
	}

	public function getRa(){
		return $this->ra;
	}

	public function setGrupo($value){
		$this->grupo = $value;
	}

	public function getGrupo(){
		return $this->grupo;
	}

}

?>