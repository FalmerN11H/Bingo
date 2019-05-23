<?php

class Pergunta{
	private $id;
	private $pergunta;
	private $alternativa1;
	private $alternativa2;
	private $alternativa3;
	private $alternativa4;
	private $alternativa5;
	private $resposta;
	private $categoria;

	public function setId($value){
		$this->id = $value;
	}

	public function getId(){
		return $this->id;
	}

	public function setPergunta($value){
		$this->pergunta = $value;
	}

	public function getPergunta(){
		return $this->pergunta;
	}

	public function setAlternativa1($value){
		$this->alternativa1 = $value;
	}

	public function getAlternativa1(){
		return $this->alternativa1;
	}

	public function setAlternativa2($value){
		$this->alternativa2 = $value;
	}

	public function getAlternativa2(){
		return $this->alternativa2;
	}

	public function setAlternativa3($value){
		$this->alternativa3 = $value;
	}

	public function getAlternativa3(){
		return $this->alternativa3;
	}
	
	public function setAlternativa4($value){
		$this->alternativa4 = $value;
	}

	public function getAlternativa4(){
		return $this->alternativa4;
	}

	public function setAlternativa5($value){
		$this->alternativa5 = $value;
	}

	public function getAlternativa5(){
		return $this->alternativa5;
	}

	public function setResposta($value){
		$this->resposta = $value;
	}

	public function getResposta(){
		return $this->resposta;
	}

	public function setCategoria($value){
		$this->categoria = $value;
	}

	public function getCategoria(){
		return $this->categoria;
	}

}

?>