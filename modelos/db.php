<?php

class BD{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host     = 'localhost';
        $this->db       = 'egresados';
        $this->user     = 'root';
        $this->password = '1';
        $this->charset  = 'utf8mb4';
    }
    public function connect(){
        try{
            $connection = "mysql:host=".$this->host.";dbname=".$this->db.";charset=".$this->charset;

            $opcionesPDO[PDO::ATTR_ERRMODE]= PDO::ERRMODE_EXCEPTION; 

            $pdo = new PDO($connection, $this->user, $this->password, $opcionesPDO);
        }catch(PDOExepction $e){
            print_r("Error connection: ".$e->getMessage());

        }
    }

}


?>