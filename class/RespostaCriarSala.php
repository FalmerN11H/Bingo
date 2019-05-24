<?php

//Bianca Pereira da Silva - 20989373
//Bruno Milano Pedroso da Silva - 21009643
//Falmer Rodrigo Venancio Nieto - 20955356
//Thiago Rezende Santos - 20919872
//Wurdolf Andrews Silva Dias - 20974511

require_once "config.php";

$sala = Partida();
$saladao = PartidaDao();

$nome = $_POST["nomesala"];
$grupo = $_POST["part"];
$participante = $_POST["qtde"];

$sala->setNome($nome);
$sala->setMaximoGrupo($grupo);
$sala->setMaximoParticipante($participante);


$saladao->insert($sala);

header("Refresh:0;url=../acompanhar_jogo.html");



?>