<?php
require_once("cabecalho.php");
require_once("logicaDeUsuario.php");

verificaUsuario();
$pessoaDao = new PessoaDao($conexao);

//removendo dados

$id = $_POST['id'];
$pessoaDao->removePessoa($id);
$_SESSION["success"] = "Usuario removido com sucesso!";
header("Location: listaDeUsuarios.php");
die(); //Encerrando a requisição Location.
?>


