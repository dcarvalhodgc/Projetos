<?php
require_once("logicaDeUsuario.php");
logout();
$_SESSION["success"] = "Usuário deslogado com sucesso.";
header("Location:index.php");
die();