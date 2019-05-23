<?php

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
$grupo->setNome($gruponome);
$grupo->setPartida($partidaid);
$grupodao->insert($grupo);
$ra = "ra";
$nome = "nome";
$email = "email";
$tam = (int)count($_POST)/3;

if($tam = 1){
	$cadastrar->setRa($_POST["ra"]);
	$cadastrar->setRa($_POST["nome"]);
	$cadastrar->setRa($_POST["email"]);
	$cadastrardao->insert($cadastrar);
	$mix->setRa($ra);
	$mix->setGrupo($grupodao->pegarid($grupo));
}elseif($tam>1){
	$cadastrar->setRa($_POST["ra"]);
	$cadastrar->setRa($_POST["nome"]);
	$cadastrar->setRa($_POST["email"]);
	$cadastrardao->insert($cadastrar);
	$mix->setRa($ra);
	$mix->setGrupo($grupodao->pegarid($grupo));
	for ($i=2; $i <= $tam; $i++) { 
		$ra = $ra.$i;
		$nome = $nome.$i;
		$email = $email.$i;
		$cadastrar->setRa($ra);
		$cadastrar->setNome($nome);
		$cadastrar->setEmail($email);
		$cadastrardao->insert($cadastrar);
		$mix->setRa($ra);
		$mix->setGrupo($grupodao->pegarid($grupo));
		$ra = "ra";
		$nome = "nome";
		$email = "email";
	}
}




?>