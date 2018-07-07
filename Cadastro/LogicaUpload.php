<?php
require_once("cabecalho.php");
if(isset($_POST['enviar'])) {

    if (move_uploaded_file($_FILES['arquivo']['tmp_name'], 'uploadArquivo/'.$_FILES['arquivo']['name'])) {

        ?>
            <p class="text-success">Upload com Sucesso!  <br/></p>
        <?php
    }else{
        ?>
        <p class="text-success">Erro!  <br/></p>
        <?php
    }


}else{
    header("Location:upload.php");
}

require_once("rodape.php");