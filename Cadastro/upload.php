<?php
require_once("cabecalho.php");
?>

<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <form class="form-horizontal" action="logicaUpload.php" method="post" enctype="multipart/form-data">
            <div class="col-sm-offset-1 col-sm-9">
                <input type="file" name="arquivo" class="col-sm-1">
                <button type="submit" class="btn btn-success" value="Enviar arquivo" name="enviar">Enviar</button>

            </div>
        </form>

    </div>

</div>
<?php require_once("rodape.php")?>
