<?php

require_once "config.php";

$sala = Partida();
$saladao = PartidaDao();

$nome = $_POST["nomesala"];
$grupo = $_POST["part"];
$participante = $_POST["qtde"];
$tema = $_POST["tema"];

$saladao->insert($sala);

header("Refresh:0;url=../acompanhar_jogo.html");



?>