<?php

require_once "config.php";

$user = new Usuario();
$userdao = new UsuarioDao();

$login = $_POST["login"];
$senha = $_POST["senha"];

$user->setLogin($login);
$senha->setSenha($senha);

$result = $userdao->autenticar($user);

if(count($results)>0){
	header("Refresh:0;url=../telainicial_professor.html");
}else{
	echo("Login e/ou senha inválidos");
	header("Refresh:5;url=../login_professor.html");
}



?>