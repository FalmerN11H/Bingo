<?php

require_once "config.php";

$altera = new Usuario();
$alteradao = new UsuarioDao();

$login = $_POST["loginAntigo"];
$senha = $_POST["senhaAntiga"];

$altera->setLogin($login);
$altera->setSenha($senha);
$result = $alteradao->listar($altera);
var_dump($result);

foreach ($result as $key) {
	foreach ($key as $value) {
		$altera->setId($value);
	}
}

$login = $_POST["login"];
$senha = $_POST["senha"];
$mail = $_POST["mail"];
$nome = $_POST["nome"];

$altera->setLogin($login);
$altera->setSenha($senha);
$altera->setEmail($mail);
$altera->setNome($nome);

$alteradao->update($altera);

header("Refresh:0;url=../telainicial_professor.html");

?>