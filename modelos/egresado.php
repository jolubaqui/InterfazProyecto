<?php


class Egresado{

    public $tipoid;
    public $id;
    public $nombres;
    public $apellidos;
    public $telefono;
    public $ciudad;
    public $email;
    public $password;
    public $tipoUsuario;
    public function __construct($tipoid,$id,$nombres,$apellidos,$telefono,$ciudad,$email,$password,$tipoUsuario){
        
        $this->tipoid=$tipoid;
        $this->numDoc=$id;
        $this->nombres=$nombres;
        $this->apellidos=$apellidos;
        $this->telefono=$telefono;
        $this->ciudad=$ciudad;
        $this->email=$email;
        $this->password=$password;
        $this->tipoUsuario=$tipoUsuario;

    }

    public static function consultar(){
        $listaUsuarios=[];
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->query("select * from usuarios");

        foreach($sql->fetchAll() as $usuario){
            $listaUsuarios[]= new Egresado($usuario['usuTipoId'],$usuario['usuCedula'],$usuario['usuNombres'],$usuario['usuApellidos'],$usuario['usuTelefono'],$usuario['usuCiudad'],$usuario['usuMail'],$usuario['usuPass'],$usuario['usuTipoUsu']);
        }

        return $listaUsuarios;

    }

    public static function crear($tipoDoc,$id,$nombres,$apellidos,$telefono,$ciudad,$email,$password,$tipoUsuario){

        $conexionBD=BD::crearInstancia();

        $sql= $conexionBD->prepare("INSERT into usuarios(usuTipoId,usuCedula,usuNombres,usuApellidos,usuTelefono,usuCiudad,usuMail,usuPass,usuTipoUsu) values(?,?,?,?,?,?,?,?,?)");
        $sql->execute(array($tipoDoc,$id,$nombres,$apellidos,$telefono,$ciudad,$email,$password,$tipoUsuario));
    }

    public static function borrar($id){
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->prepare("delete from usuarios where usuCedula=?");
        $sql->execute(array($id));
    }
    
    public static function buscar($id){
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->prepare("select * from usuarios where usuCedula=?");
        $sql->execute(array($id));
        $usuario=$sql->fetch();
        return new Egresado($usuario['usuTipoId'],$usuario['usuCedula'],$usuario['usuNombres'],$usuario['usuApellidos'],$usuario['usuTelefono'],$usuario['usuCiudad'],$usuario['usuMail'],$usuario['usuPass'],$usuario['usuTipoUsu']);
    }

    public static function editar($tipoDoc,$id,$nombres,$apellidos,$telefono,$ciudad,$email,$password,$tipoUsuario){

        $conexionBD=BD::crearInstancia();

        $sql= $conexionBD->prepare("UPDATE usuarios SET usuTipoId=?, usuNombres=?,usuApellidos=?,usuTelefono=?,usuCiudad=?,usuMail=?,usuPass=?,usuTipoUsu=? WHERE usuCedula=?");
        $sql->execute(array($tipoDoc,$nombres,$apellidos,$telefono,$ciudad,$email,$password,$tipoUsuario,$id));
    }

}



?>