<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 16/06/2018
 * Time: 22:41
 */

class PessoaDao{

    private $conexao;

    function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    function listaPessoa(){
        $pessoas = array();
        $resultado = mysqli_query($this->conexao, "select u.*,j.nome as job_nome from listaDeUsuarios as u join job as j on j.id=u.job_id");

        While($pessoa_array = mysqli_fetch_assoc($resultado)){


            $job = new Job();
            $job->setNome($pessoa_array['job_nome']);

            $nome = $pessoa_array['nome'];
            $dtNasc = Ferramenta::converteData($pessoa_array['dtNasc']);
            $salario = $pessoa_array['salario'];
            $endereco = $pessoa_array['endereco'];
            $matricula = $pessoa_array['matricula'];
            $tipoContrato = $pessoa_array['tipoContrato'];

            $pessoa = new Funcionario($nome, $dtNasc, $endereco, $job, $salario);
            $pessoa->setId($pessoa_array['id']);
            $pessoa->setMatricula($pessoa_array['matricula']);
            $pessoa->setTipoContrato($pessoa_array['tipoContrato']);



            array_push($pessoas, $pessoa);
        }
        return $pessoas;
    }

    function inserePessoa(Funcionario $pessoa){
        $nome = (mysqli_real_escape_string($this->conexao, $pessoa->getNome()));
        $endereco = (mysqli_real_escape_string($this->conexao, $pessoa->getEndereco()));
        $salario =(mysqli_real_escape_string($this->conexao, $pessoa->getSalario()));

        $query = "insert into listaDeUsuarios (nome, dtNasc, endereco, job_id, salario, matricula, tipoContrato) 
        values ('{$pessoa->getNome()}','{$pessoa->getDtNasc()}', '{$pessoa->getEndereco()}',
        {$pessoa->getJob()->getId()}, {$pessoa->getSalario()}, '{$pessoa->getMatricula()}', 
        '{$pessoa->getTipoContrato()}')";

        return mysqli_query($this->conexao, $query);
    }

    function alteraPessoa(Funcionario $pessoa){
        // mysqli_real_escape_string() escapando das aspas simples
        $nome = (mysqli_real_escape_string($this->conexao, $pessoa->getNome()));
        $endereco = (mysqli_real_escape_string($this->conexao, $pessoa->getEndereco()));
        $salario =(mysqli_real_escape_string($this->conexao, $pessoa->getSalario()));

        $query = "update listaDeUsuarios set nome='{$pessoa->getNome()}', dtNasc ='{$pessoa->getDtNasc()}', 
        endereco ='{$pessoa->getEndereco()}', job_id ={$pessoa->getJob()->getId()}, salario ={$pessoa->getSalario()}, 
        matricula ='{$pessoa->getMatricula()}', tipoContrato ='{$pessoa->getTipoContrato()}' 
        where id = '{$pessoa->getId()}'";

        return mysqli_query($this->conexao, $query);

    }

    function buscaPessoa($id){
        $query = "select * from listaDeUsuarios where id = {$id}";
        $resultado = mysqli_query($this->conexao, $query);
        $usuarioBuscado = mysqli_fetch_assoc($resultado);

        $job = new Job();
        $job->setId($usuarioBuscado['job_id']);

        $nome = ($usuarioBuscado['nome']);
        $dtNasc = ($usuarioBuscado['dtNasc']);
        $endereco = ($usuarioBuscado['endereco']);
        $salario = ($usuarioBuscado['salario']);
        $matricula = $usuarioBuscado['matricula'];
        $tipoContrato = $usuarioBuscado['tipoContrato'];

        $pessoa = new Funcionario($nome, $dtNasc, $endereco, $job, $salario);
        $pessoa->setId($usuarioBuscado['id']);
        $pessoa->setTipoContrato($usuarioBuscado['tipoContrato']);
        $pessoa->setMatricula($usuarioBuscado['matricula']);

        return $pessoa;

    }

    function removePessoa($id) {
        $query = "delete from listaDeUsuarios where id = {$id}";
        return mysqli_query($this->conexao, $query);
    }
}