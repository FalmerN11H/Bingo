<?php

class Partida{
	private $partida;
	private $criador;
	private $nome;
	private $maximogrupo;
	private $maximoparticipante;
	private $tema
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

	public function setNome($value){
		$this->nome = $value;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setMaximoGrupo($value){
		$this->maximogrupo = $value;
	}

	public function getMaximoGrupo(){
		return $this->maximogrupo;
	}

	public function setMaximoParticipante($value){
		$this->maximoparticipante = $value;
	}

	public function getMaximoGrupo(){
		return $this->maximoparticipante;
	}

	public function setTema($value){
		$this->tema = $value;
	}

	public function getTema(){
		return $this->tema;
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