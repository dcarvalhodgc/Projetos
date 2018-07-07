<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 07/07/2018
 * Time: 00:29
 */

class Ferramenta
{
    public static function converteData($data)
    {
        $converte = explode("-",$data);
        $converte = array_reverse($converte);
        return implode("/",$converte);
    }

    public  static function converteNumero($valor)
    {
        $valor = $valor;
        $valor = number_format($valor,2,",",".");
        return $valor;
    }

}