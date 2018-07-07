<?php
require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("logica-usuario.php");
require_once("class/Produto.php");
require_once("class/Categoria.php");

verificaUsuario();

$categoria = new Categoria();
$categoria->setId(1);

$produto = new Produto("", "", "", $categoria, "");

$categorias = listaCategorias($conexao);

?>	
<div class="row"></div>
<h1>Formulário de produto</h1>
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <form class="form-horizontal" action="adiciona-produto.php" method="post">

            <?php include("produto-formulario-base.php"); ?>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</div>


<?php include("rodape.php"); ?>
