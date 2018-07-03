<?php
require_once("cabecalho.php");

$job = new job();
$job->setId($_POST["job_id"]);

$nome = ($_POST["nome"]);
$dtNasc = ($_POST["dtNasc"]);
$endereco = ($_POST["endereco"]);
$salario = ($_POST["salario"]);
$matricula = ($_POST["matricula"]);
$tipoContrato = ($_POST["tipoContrato"]);


$pessoa = new Funcionario($nome, $dtNasc, $endereco, $job, $salario);
$pessoa->setId($_POST['id']);
$pessoa->setMatricula($matricula);
$pessoa->setTipoContrato($tipoContrato);


$pessoaDao = new PessoaDao($conexao);



//Inserindo cadastro
if($pessoaDao->alteraPessoa($pessoa)){
    ?>
    <p class="text-success"> O usuário <?= $pessoa->getNome()?> foi alterado! <br/></p>
    <?php

}else{
    $msg = mysqli_error($conexao);
    ?>
    <p class="text-danger">Usuário não Alterado! Erro: <?=$msg?> </p>
    <?php
}
mysqli_close($conexao);

?>

<?php require_once("rodape.php")?>
