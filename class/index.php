<?php

require_once "config.php";

$user = new UsuarioDao();
$usuario = new Usuario();
$usuario->setLogin("mario");
$usuario->setSenha("764");
$usuario->setEmail("luigi@ekko.com");
$user->insert($usuario);
$result = $user->list();
echo json_encode($result);


?>