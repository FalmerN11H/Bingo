<?php

require_once "config.php";

$user = new Usuario();
$userdao = new UsuarioDao();

$login = $_POST["login"];
$senha = $_POST["senha"];

$user->setLogin($login);
$user->setSenha($senha);

$result = $userdao->autenticar($user);


if(count($result)>0){
	header("Refresh:0;url=../telainicial_professor.html");
}else{
	echo("<h1>Login e/ou senha inválidos</h1>");
	header("Refresh:5;url=../login_professor.html");
}



?>