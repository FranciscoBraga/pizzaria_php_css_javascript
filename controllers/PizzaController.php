<?php

require '../models/PizzaModels.php';
require '../connection/Connection.php';
require '../services/PizzaServices.php';

$pizza = new PizzaModels();
$conn  = new Connection();
$conexao  = $conn->conectar();
$service = new PizzaServices($pizza, $conexao);


if(!$_POST ==null){
    $pizza->__set('nome',$_POST['nome']);
    $pizza->__set('caminho',$_FILES['caminho']['name']);
    $pizza->__set('descricao',$_POST['descricao']);
    
    
    $retorno = $service->insert();
    
    
    $name = $_FILES['caminho']['tmp_name'];
    
    if($retorno != null){
        $service->image($name);
    }
}
