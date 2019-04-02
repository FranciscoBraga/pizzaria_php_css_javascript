<?php

class PizzaModels 
{
    private $nome;
    private $ingredientes=[];
    private $tipoMolho;
    private $tamanho;

    public function __get($atrr){
        return $this->$atrr;
    }

    public function __set($atrr, $value){
        $this->$atrr = $value;
    }

    
}
