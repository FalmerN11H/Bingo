<?php

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