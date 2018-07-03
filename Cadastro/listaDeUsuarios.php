<?php
require_once("cabecalho.php");



?>



    <!-- Lista de Cadastro -->
<h1>Lista de usuários cadastrados:</h1>
    <table class="table table-striped table-bordered">

        <?php

        $pessoaDao = new PessoaDao($conexao);
        $pessoas = $pessoaDao->listaPessoa(); //Listando todos os dados
            foreach ($pessoas as $pessoa):
        ?>
        <tr>
            <td><?=$pessoa->getNome()?></td>
            <td><?=$pessoa->getDtNasc()?></td>
            <td><?=$pessoa->getJob()->getNome()?></td>
            <td><?=Ferramenta::converteNumero($pessoa->getSalario(),2,',','.')?></td>
            <td>Comissão: R$ <strong><?=Ferramenta::converteNumero($pessoa->salarioCom(0.2))?></strong></td>
            <td><?=$pessoa->getEndereco()?></td>
            <td><?=$pessoa->getTipoContrato()=="Estagio"?$pessoa->getTipoContrato():"Matricula: <br><strong>".$pessoa->getMatricula()."</strong>"?></td>
           <!-- <td>Tipo de Contrato: <?=$pessoa->getTipoContrato()?></td> -->
            <td><a class="btn btn-primary"
                   href="usuario-altera-formulario.php?id=<?=$pessoa->getId()?>"><i class='fa fa-pencil'></i></a></td>
            <td>
                <form action="remove-usuario.php" method="post">
                    <input type="hidden" name="id" value="<?=$pessoa->getId()?>">
                <button class="btn btn-danger"><i class='fa fa-times-circle'></i></button>
                </form>
            </td>
        </tr>
        <?php
        endforeach;
        ?>
    </table>

<?php require_once("rodape.php");?>