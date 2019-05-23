<?php

//Bianca Pereira da Silva - 20989373
//Bruno Milano Pedroso da Silva - 21009643
//Falmer Rodrigo Venancio Nieto - 20955356
//Thiago Rezende Santos - 20919872
//Wurdolf Andrews Silva Dias - 20974511

require_once "config.php";

$cadastrar = new Participante();
$grupo = new Grupo();
$grupodao = new GrupoDao();
$cadastrardao = new ParticipanteDao();
$partida = new PartidaDao();
$mix = new GrupoParticipante();
$mixdao = new GrupoParticipanteDao();



$gruponome = $_POST["apelido1"];
$partidaid = $partida->topper();
$part;
$grupo->setNome($gruponome);
foreach ($partidaid as $key) {
	foreach ($key as $value) {
		$part = $value;
	}
}
$grupo->setPartida($part);
$grupodao->insert($grupo);
$ra = "ra";
$nome = "nome";
$email = "email";
$tam = floor(count($_POST)/3);
$tam = (int)$tam;

if($tam = 1){
	$cadastrar->setRa($_POST["ra"]);
	$cadastrar->setNome($_POST["nome"]);
	$cadastrar->setEmail($_POST["email"]);
	$cadastrardao->insert($cadastrar);
	$mix->setRa($ra);
	$mix->setGrupo($part);
}elseif($tam>1){
	$cadastrar->setRa($_POST["ra"]);
	$cadastrar->setNome($_POST["nome"]);
	$cadastrar->setEmail($_POST["email"]);
	$cadastrardao->insert($cadastrar);
	$mix->setRa($ra);
	$mix->setGrupo($part);
	for ($i=2; $i <= $tam; $i++) { 
		$ra = $ra.$i;
		$nome = $nome.$i;
		$email = $email.$i;
		$cadastrar->setRa($ra);
		$cadastrar->setNome($nome);
		$cadastrar->setEmail($email);
		$cadastrardao->insert($cadastrar);
		$mix->setRa($ra);
		$mix->setGrupo($part);
		$ra = "ra";
		$nome = "nome";
		$email = "email";
	}
}

header("Refresh:0;url=../tela_jogo.html");



?>