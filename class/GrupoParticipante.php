<?php

//Bianca Pereira da Silva - 20989373
//Bruno Milano Pedroso da Silva - 21009643
//Falmer Rodrigo Venancio Nieto - 20955356
//Thiago Rezende Santos - 20919872
//Wurdolf Andrews Silva Dias - 20974511

class GrupoParticipante{
	private $ra;
	private $grupo;


	//Getters and setters
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