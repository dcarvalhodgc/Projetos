<?php
require_once("cabecalho.php");
require_once("logica-usuario.php");
?>

<h1>Bem vindo!</h1>

<?php
if(usuarioEstaLogado()) {
?>
	<p class="text-success">Você está logado como <?= usuarioLogado() ?>.
        <a href="logout.php">Deslogar</a></p>
<?php
} else {
?>
	<div class="row">
        <div class="col-sm-8 col-sm-offset-2">
    <h2>Login</h2>
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Endereço de e-mail</label>
                    <input type="email" class="form-control" name="email" placeholder="Email"
                           data-validation="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" name="senha" placeholder="Senha"
                           data-validation="required">
                </div>
                <button type="submit" class="btn btn-default">Entrar</button>
            </form>
        </div>
    </div>
<?php
}
?>

<?php include("rodape.php"); ?>