<?php


include_once 'db.php';

class User extends BD{
    
    private $nombre;
    private $username;
    
    BD::connect();

    public function userExists($user,$pass){
        $md5pass = md5($pass);

        $query= $this->connect()->prepare("select * from usuarios where usuMail='$user' and usuPass='$pass'");
        $query->excute(['user'=>$user,'pass'=>$md5pass]);

        if($query->rowCount()){
            return true;

        }else{
            return false;
        }
    }
    public function setUser($user){
        $query= $this->connect()->prepare("select * from usuarios where usuMail='$user'");
        $query->excute(['user'=>$user]);

        foreach ($query as $currentUser){
            $this->nombre=$currentuser['nombre'];
            $this->username=$currentuser['username'];
        }

    }

    public function getNombre($user){
        return $this->nombre; 

    }

}

?>
