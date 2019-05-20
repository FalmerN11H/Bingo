<?php

class Partida{
	private $partida;
	private $criador;
	private $rodadas;
	private $acertos;
	private $erros;

	public function setPartida($value){
		$this->partida = $value;
	}

	public function getPartida(){
		return $this->partida;
	}

	public function setCriador($value){
		$this->criador = $value;
	}

	public function getCriador(){
		return $this->criador;
	}

	public function setRodadas($value){
		$this->rodadas = $value;
	}

	public function getRodadas(){
		return $this->rodadas;
	}

	public function setAcertos($value){
		$this->acertos = $value;
	}

	public function getAcertos(){
		return $this->acertos;
	}

	public function setErros($value){
		$this->erros = $value;
	}

	public function getErros(){
		return $this->erros;
	}

}

?>