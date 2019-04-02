<?php

class PizzaServices 
{
    private $model;
    private $conn;

    public function __construct($model, $conn){
        $this->model = $model;
        $this->conn = $conn;
    }

   

    public function insert(){
        $query = "insert into pizzas (nome, ingredientes, tipo_molho, tamanho) values (:nome, :ingredientes, :tipoMolho,:tamanho)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':nome', $this->model->__get('nome'));
        $stmt->bindValue(':ingredientes', $this->model->__get('ingredientes'));
        $stmt->bindValue(':tipoMolho', $this->model->__get('tipoMolho'));
        $stmt->bindValue(':tamanho', $this->model->__get('tamanho'));
        $stmt->execute();

        return $this;

    }
    
    public function update(){

    }

    public function delete(){

    }

    public function getAll(){

    }

    public function getId(){

    }

    public function get($value){

    }
}
