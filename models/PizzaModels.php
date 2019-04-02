<?php

class PizzaModels 
{
    private $nome;
    private $caminho;
    private $descricao;
 

    public function __get($atrr){
        return $this->$atrr;
    }

    public function __set($atrr, $value){
        $this->$atrr = $value;
    }

    
}
