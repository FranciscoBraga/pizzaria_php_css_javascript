<?php

require 'models/PizzaModels.php';
require 'connection/Connection.php';
require 'services/PizzaServices.php';

$pizza = new PizzaModels();
$conn  = new Connection();
$conexao  = $conn->conectar();
$service = new PizzaServices($pizza, $conexao);
$retorno = $service->get(8);


?>

