<?php

class Database extends PDO{

    private $dbname = 'distribuidores';
    private $host = 'localhost';
    private $user = 'tabeli';
    private $pwd = 'psql';
    private $port = 5432;

    private $dbh;

        public function __construct(){
            try{
                $this->dbh = parent::__construct("pgsql:host=$this->host;port=$this->port;dbname=$this->dbname;user=$this->user;password=$this->pwd");
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

    public function close(){
        $this->dbh = null;
    }
}

?>