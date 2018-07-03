<?php
/**
 * Created by PhpStorm.
 * User: dcarvalho
 * Date: 29/06/2018
 * Time: 15:19
 */

class Funcionario extends Pessoa
{
    protected $matricula;
    protected $tipoContrato;

    //Metodo Setando Matricula
    public  function  setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    //Metodo Setando Contrato
    public  function  setTipoContrato($tipoContrato)
    {
        $this->tipoContrato = $tipoContrato;
    }

    //Metodo retornando Matricula
    public function getMatricula()
    {
        return $this->matricula;
    }

    //Metodo retornando Contrato
    public function getTipoContrato()
    {
        return $this->tipoContrato;
    }
}