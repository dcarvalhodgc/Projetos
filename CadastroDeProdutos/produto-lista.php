<?php
require_once("cabecalho.php");
require_once("banco-produto.php");
?>

<table class="table table-striped table-bordered">
	<?php
	$produtos = listaProdutos($conexao);
	foreach($produtos as $produto) :
	?>
		<tr>
			<td><?= $produto->getNome() ?></td>
			<td>R$ <?= Ferramenta::converteNumero($produto->getPreco(),2,',','.') ?></td>
            <td>Desconto R$ <strong><?= Ferramenta::converteNumero($produto->precoComDesconto(0.1),2,',','.') ?> </strong></td>
			<td><?= substr($produto->getDescricao(), 0, 40) ?></td>
			<td><?= $produto->getCategoria()->getNome() ?></td>
            <td><?= $produto->isUsado()== 1?"Usado":"Novo" ?></td>
			<td>
				<a class="btn btn-primary"
					href="produto-altera-formulario.php?id=<?=$produto->getId()?>">
                    <i class='fa fa-pencil'></i>
				</a>
			</td>
			<td>
				<form action="remove-produto.php" method="post">
					<input type="hidden" name="id" value="<?=$produto->getId()?>">
					<button class="btn btn-danger"><i class='fa fa-times-circle'></i></button>
				</form>
			</td>
		</tr>
	<?php
	endforeach
	?>
</table>

<?php include("rodape.php"); ?>