<?php
require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("banco-produto.php");
require_once("logica-usuario.php");

verificaUsuario();

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);

$selecao_usado = $produto->isUsado() ? "checked='checked'" : "";
$produto->setUsado($selecao_usado);

?>
<div class="row"></div>
<h1>Alterando produto</h1>
<div class="row">
<div class="col-sm-8 col-sm-offset-2">
    <form class="form-horizontal" action="altera-produto.php" method="post">
        <input type="hidden" name="id" value="<?=$produto->getId()?>">
        <?php include("produto-formulario-base.php"); ?>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Alterar</button>
            </div>
        </div>
    </form>
</div>
</div>

<?php include("rodape.php"); ?>