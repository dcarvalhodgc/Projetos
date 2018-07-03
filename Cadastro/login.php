<?php
require_once("cabecalho.php");
require_once("banco-usuario.php");
require_once("logicaDeUsuario.php");

$nomeUsuario = buscaNomeUsuario($conexao, $_POST["email"], $_POST["senha"]);
if ($nomeUsuario == NULL){
    $_SESSION["danger"] = "Usuário ou senha invalida!";
    header("Location: index.php");
    }else{
    $_SESSION["success"] = "Usuário logado com Sucesso.";
    logaUsuario($nomeUsuario["email"]);
    header("Location: index.php");

}
die();


