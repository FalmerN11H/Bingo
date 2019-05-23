<?php

require_once "config.php";

$altera = new Usuario();
$alteradao = new UsuarioDao();

$login = $_POST["login"];
$senha = $_POST["senha"];
$mail = $_POST["mail"];
$nome = $_POST["nome"];

$altera->setLogin($login);
$altera->setSenha($senha);
$altera->setMail($mail);
$altera->setNome($nome);//Implementar funcoes para nome

$alteradao = new UsuarioDao();
$alteradao->insert($altera);
if(count($results)>0){
	header("Refresh:0;url=../telainicial_professor.html");
}else{
	echo("Login e/ou senha inválidos");
	header("Refresh:5;url=../cadastro.html");
}

?>