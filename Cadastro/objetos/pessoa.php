<?php
/**
 * Created by PhpStorm.
 * User: dcarvalho
 * Date: 13/06/2018
 * Time: 15:11
 */

abstract class Pessoa{
    private $id;
    private $nome;
    private $dtNasc;
    private $endereco;
    private $job;
    private $salario;


    function __construct($nome, $dtNasc, $endereco, Job $job, $salario)
    {
        $this->nome = $nome;
        $this->dtNasc = $dtNasc;
        $this->endereco = $endereco;
        $this->job = $job;
        $this->salario = $salario;
    }

    //Metodo setando ID
    public function setId($id)
    {
        $this->id = $id;
    }



    //Metodo retornando ID
    public function getId(){
        return $this->id;
    }

    //Metodo retornando Nome
    public function getNome()
    {
        return $this->nome;
    }

    //Metodo retornando Data de nascimento
    public function getDtNasc(){
        return $this->dtNasc;
    }

     //Metodo retornando endereço
    public function getEndereco()
    {
        return $this->endereco;
    }

    //Metodo retornando Job
    public function getJob()
    {
        return $this->job;
    }

    //Metodo retornando salario
    public function getSalario()
    {
        return $this->salario;
    }



    //Metodo Salario com comissão // desconto padrão de 0.1
    public function salarioCom($valor = 0.1)
    {
        if($valor > 0 && $valor <= 0.5) {
            $this->salario += ($this->salario * $valor);
        }

        return $this->salario;
    }

    function __toString()
    {
        return $this->nome . ": R$  " . $this->salario;
    }

}