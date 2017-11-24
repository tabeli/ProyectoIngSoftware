<?php

class Distribuidor{
    private $name;
    private $estado;
    private $numero;

    private $mysql;

    public function __construct(PDO $db){
        $this->mysql = $db;
    }

    public function readAll(){
        try{
            $query = $this->mysql->prepare('SELECT * from distribuidores ORDER BY estado');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
            
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

}


?>