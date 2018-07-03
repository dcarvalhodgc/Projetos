<?php
require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("logicaDeUsuario.php");

verificaUsuario();

$job = new Job();
$job->setId(1);

$pessoa = new Funcionario("","","", $job, "");
$jobs = listaJob($conexao);

?>
<div class="row"></div>
<!-- Formulario de Cadastro -->
    <h1>Cadastro de usuários</h1>
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <form class="form-horizontal" action="adiciona-usuario.php" method="post">

            <?php include ("usuario-formulario-base.php");?>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require_once("rodape.php")?>
