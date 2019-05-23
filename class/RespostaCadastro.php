<?php

require_once "config.php";

$user = new Usuario();
$userdao = new UsuarioDao();

$login = $_POST["login"];
$senha = $_POST["senha"];
$mail = $_POST["mail"];
$nome = $_POST["nome"];

$user->setLogin($login);
$user->setSenha($senha);
$user->setEmail($mail);
$user->setNome($nome);

$userdao = new UsuarioDao();
$userdao->insert($user);
$result = $userdao->autenticar($user);
if(count($result)>0){
	header("Refresh:0;url=../telainicial_professor.html");
}else{
	echo("<h1>Falha no cadastro</h1>");
	header("Refresh:5;url=../cadastro.html");
}


?>