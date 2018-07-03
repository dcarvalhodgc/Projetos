<?php
/**
 * Created by PhpStorm.
 * User: dcarvalho
 * Date: 13/06/2018
 * Time: 16:48
 */

 class Job {
    private $id;
    private $nome;

    //Metodo retornando ID
    public function getId()
    {
        return $this->id;
    }

    //Metodo setando ID
    public function setId($id)
    {
        $this->id = $id;
    }

    //Metodo retornando Nome
    public function getNome()
    {
        return $this->nome;
    }

     //Metodo setando Nome
     public function setNome($nome)
     {
         $this->nome = $nome;
     }

}