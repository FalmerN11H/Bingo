<?php

require_once "config.php";

$pergunta = new Pergunta();
$perguntadao = new PerguntaDao();


$pergunta->setPergunta(_POST["pergunta"]);
$pergunta->setAlternativa1(_POST["1"]);
$pergunta->setAlternativa2(_POST["2"]);
$pergunta->setAlternativa3(_POST["3"]);
$pergunta->setAlternativa4(_POST["4"]);
$pergunta->setAlternativa5(_POST["5"]);
$pergunta->setResposta(_POST["alternativaCorreta"]);

$perguntadao->insert($pergunta);



?>