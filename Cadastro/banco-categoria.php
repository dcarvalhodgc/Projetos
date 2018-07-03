<?php
require_once ("conecta.php");

function listaJob ($conexao){
    $jobs = array(); // criando array vazio
    $query = "select * from job"; // criando query
    $resultado = mysqli_query($conexao, $query); //executando query

        //trazer cada linha associada a execução da query ($resultado) e jogando dentro do array vazio
    while ($job_array = mysqli_fetch_assoc($resultado)){

        $job = new Job();
        $job->setId($job_array['id']);
        $job->setNome($job_array['nome']);

        array_push($jobs, $job);
    }
    return $jobs; //retornando array com as categorias.
}