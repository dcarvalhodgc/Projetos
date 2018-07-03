<?php
session_start();
function usuarioEstaLogado(){
    return isset($_SESSION["usuario_logado"]);
}


//Verificando se o usuario esta logado
function VerificaUsuario(){
    if(!usuarioEstaLogado()){
        $_SESSION["danger"] = "Você não tem acesso a esta funcionalidade.";
        header("Location:index.php");
        die();
    }

}

function usuarioLogado(){
    return $_SESSION["usuario_logado"];
}

function logaUsuario($email){
    $_SESSION["usuario_logado"] = $email;
}

//dessetando variavel -- unset($_SESSION["usuario_logado"]);
// ou encerrando seção
function logout(){
    session_destroy();
    session_start();
}