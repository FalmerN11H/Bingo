<?php


//Bianca Pereira da Silva - 20989373
//Bruno Milano Pedroso da Silva - 21009643
//Falmer Rodrigo Venancio Nieto - 20955356
//Thiago Rezende Santos - 20919872
//Wurdolf Andrews Silva Dias - 20974511

class Partida{
	private $partida;
	private $criador;
	private $nome;
	private $maximogrupo;
	private $maximoparticipante;
	private $rodadas;
	private $acertos;
	private $erros;


	//getters and setters
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

	public function getMaximoParticipante(){
		return $this->maximoparticipante;
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