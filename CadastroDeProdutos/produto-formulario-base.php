<!-- Campo Name -->
<div class="form-group">
    <label for="nome" class="col-sm-3 control-label">Nome</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" placeholder="Produto" name="nome" data-validation="required"
               value="<?=$produto->getNome()?>">
    </div>
</div>
<!-- Campo Preço -->
<div class="form-group">
    <label for="preco" class="col-sm-3 control-label">Preço</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" placeholder="Preço" name="preco" data-validation="required"
               value="<?=$produto->getPreco()?>">
    </div>
</div>
<!-- Campo Descrição -->
<div class="form-group">
    <label for="descricao" class="col-sm-3 control-label">Descrição</label>
    <div class="col-sm-8">
        <input type="textarea" class="form-control" placeholder="Descrição" name="descricao" data-validation="required"
               value="<?=$produto->getdescricao()?>">
    </div>
</div>

<div class="form-group">
    <label for="nome" class="col-sm-3 control-label">Função</label>
    <div class="col-sm-4">
        <select name="categoria_id" class="form-control">
            <?php
            foreach($categorias as $categoria) :
                $essaEhACategoria = $produto->getCategoria()->getId() == $categoria->getId();
                $selecao = $essaEhACategoria ? "selected='selected'" : "";
                ?>
                <option value="<?=$categoria->getId()?>" <?=$selecao?>>
                    <?=$categoria->getNome()?>
                </option>
            <?php
            endforeach
            ?>
        </select>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-8">
        <input type="checkbox" name="usado" <?=$produto->isUsado()?> value="true"> Usado
    </div>
</div>





