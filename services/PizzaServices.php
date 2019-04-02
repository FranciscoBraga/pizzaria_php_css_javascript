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
        $query = "insert into pizzas (nome, caminho, descricao) values (:nome, :caminho, :descricao)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':nome', $this->model->__get('nome'));
        $stmt->bindValue(':caminho', $this->model->__get('caminho'));
        $stmt->bindValue(':descricao', $this->model->__get('descricao'));
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

    public function get(){
        $query = "select id, nome, caminho, descricao from pizzas limit 0,8";
        $stmt = $this->conn->prepare($query);
        ///$stmt->bindValue(':value', $value);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function image( $name){
        $path = 'C:/xampp/htdocs/pizzaria/wwwroot/img/';
        $file = $path.basename($this->model->__get('caminho'));
        if(move_uploaded_file($name,$file)){
            header('Location:../cadastro/cadastro_pizza.html');
        }else{
            echo  "erro";
        }
    }
}
