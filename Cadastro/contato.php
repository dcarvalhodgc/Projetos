<?php
require_once("cabecalho.php");
?>

<div class="row">
     <div class="col-sm-8 col-sm-offset-2">
        <form action="envia-contato.php" method="post">
            <div class="form-group">
                <label for="exampleInputPassword1">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome"
                       data-validation="required">
            </div>
            <div class="form-group">
                 <label for="exampleInputEmail1">Endereço de e-mail</label>
                 <input type="email" class="form-control" name="email" placeholder="Email"
                           data-validation="required">
            </div>
            <div class="form-group">
                 <label for="exampleInputPassword1">Mensagem</label>
                 <textarea type="text" class="form-control" name="mensagem" placeholder="mensagem"
                           data-validation="required"></textarea>
            </div>
                <button type="submit" class="btn btn-default">Enviar</button>
        </form>
     </div>
</div>

<?php require_once("rodape.php")?>