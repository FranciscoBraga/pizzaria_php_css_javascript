<?php

class Connection 
{
    private $host = 'localhost';
    private $dbname = 'pizzaria_php';
    private $user = 'root';
    private $pass = '';

    public function conectar(){
        try{
            $conn = new PDO(
                "mysql:host=$this->host; dbname=$this->dbname",
                "$this->user",
                "$this->pass"
            );
       
            return $conn;
        }catch(PDOException $ex){
            echo "Erro: ". $ex->getMessege();
        }
    }
}

