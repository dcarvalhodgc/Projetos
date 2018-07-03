<?php
require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("logicaDeUsuario.php");

verificaUsuario();

$id = $_GET['id'];
$pessoaDao = new PessoaDao($conexao);
$pessoa = $pessoaDao->buscaPessoa($id);
$jobs = listaJob($conexao);

?>

<div class="row"></div>
<!-- Alterando Cadastro -->
<h1>Cadastro de usuários</h1>
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <form class="form-horizontal" action="altera-usuario.php" method="post">
            <input type="hidden" name="id" value="<?=$pessoa->getId()?>">

            <?php include ("usuario-formulario-base.php");
            // incluindo formulario?>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Alterar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require_once("rodape.php")?>
