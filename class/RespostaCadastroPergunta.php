<?php

//Bianca Pereira da Silva - 20989373
//Bruno Milano Pedroso da Silva - 21009643
//Falmer Rodrigo Venancio Nieto - 20955356
//Thiago Rezende Santos - 20919872
//Wurdolf Andrews Silva Dias - 20974511

require_once "config.php";

$pergunta = new Pergunta();
$perguntadao = new PerguntaDao();




$pergunta->setPergunta($_POST["pergunta"]);
$pergunta->setAlternativa1($_POST["1"]);
$pergunta->setAlternativa2($_POST["2"]);
$pergunta->setAlternativa3($_POST["3"]);
$pergunta->setAlternativa4($_POST["4"]);
$pergunta->setAlternativa5($_POST["5"]);

$resp = (int) $_POST["alternativaCorreta"];

$pergunta->setResposta($resp);


$perguntadao->insert($pergunta);

header("Refresh:0;url=../cadastro_pergunta.html");



?>