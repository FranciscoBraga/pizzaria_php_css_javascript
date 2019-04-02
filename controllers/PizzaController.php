<?php

require '../models/PizzaModels.php';
require '../connection/Connection.php';
require '../services/PizzaServices.php';

$pizza = new PizzaModels();
$conn  = new Connection();
$conexao  = $conn->conectar();
$service = new PizzaServices($pizza, $conexao);



$pizza->__set('nome',$_POST['nome']);
$pizza->__set('ingredientes',$_POST['ingredientes']);
$pizza->__set('tipoMolho',$_POST['tipoMolho']);
$pizza->__set('tamanho',$_POST['tamanho']);

$retorno =$service->insert();

print_r($retorno);