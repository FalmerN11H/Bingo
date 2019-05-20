<?php

class Rodada{
	private $rodada;
	private $grupo;
	private $partida;
	private $pergunta;
	private $respondido;
	private $numero;

	public function setRodada($value){
		$this->rodada = $value;
	}

	public function getRodada(){
		return $this->rodada;
	}

	public function setGrupo($value){
		$this->grupo = $value;
	}

	public function getGrupo(){
		return $this->grupo;
	}

	public function setPartida($value){
		$this->partida = $value;
	}

	public function getPartida(){
		return $this->partida;
	}

	public function setPergunta($value){
		$this->pergunta = $value;
	}

	public function getPergunta(){
		return $this->pergunta;
	}

	public function setRespondido($value){
		$this->respondido = $value;
	}

	public function getRespondido(){
		return $this->respondido;
	}

	public function setNumero($value){
		$this->numero = $value;
	}

	public function getNumero(){
		return $this->numero;
	}

}

?>