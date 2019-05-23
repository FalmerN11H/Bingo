<?php

//Bianca Pereira da Silva - 20989373
//Bruno Milano Pedroso da Silva - 21009643
//Falmer Rodrigo Venancio Nieto - 20955356
//Thiago Rezende Santos - 20919872
//Wurdolf Andrews Silva Dias - 20974511

require_once "config.php";

$jogo = new Partida();
$jogodao = new PartidaDao();

$nome = $_POST["nomesala"];

$jogo->setNome($nome);
$result = $jogodao->entrar($jogo);
if(count($result)>0){
	header("Refresh:5;url=../tela_jogo.html");
}else{
	echo"sala não encontrada";
	header("Refresh:0;url=../entrar_sala.html");
}

?>