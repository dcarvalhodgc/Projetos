
<?php


spl_autoload_register(function($nomeDaClasse) {
    require_once("objetos/" . $nomeDaClasse . ".php");
});


error_reporting(E_ALL ^ E_NOTICE);
require_once("mostra-alerta.php");
require_once("conecta.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/cadastro.css" rel="stylesheet">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
<body>
    <div class= "navbar navbar-inverse navbar-fixed-top"
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Inicio</a>
            </div>
            <div>
             <ul class="nav navbar-nav">
                <li><a href="usuario-formulario.php">Cadastrar Usuario</a> </li>
                 <li><a href="listaDeUsuarios.php">Lista de Usuarios</a> </li>
                 <li><a href="sobre.php">Upload de arquivos</a> </li>
                 <li><a href="sobre.php">Download de arquivos</a> </li>
                 <li><a href="contato.php">Contato</a> </li>
             </ul>
            </div>
        </div>
    </div>


    <!-- Corpo da pagina -->
    <div class="container">
    <div class="principal">

<?php
    mostraAlerta("success");
    mostraAlerta("danger");

?>