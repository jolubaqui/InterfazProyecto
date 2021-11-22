<?php

include_once("modelos/egresado.php");
include_once("conexion1.php");

BD::crearInstancia();

class ControladorEgresados{
    public function inicio(){
        $egresados=Egresado::consultar();
        include_once("vistas/egresados/inicio.php");
        
    }

    public function crear(){

        if($_POST){

            
            $tipoDoc=$_POST['tipoDoc'];
            $id=$_POST['numDoc'];
            $nombres=$_POST['nombres'];
            $apellidos=$_POST['apellidos'];
            $telefono=$_POST['telefono'];
            $ciudad=$_POST['ciudad'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $tipoUsuario=$_POST['tipoUsuario'];
            Egresado::crear($tipoDoc,$id,$nombres,$apellidos,$telefono,$ciudad,$email,$password,$tipoUsuario);
            ?>
<script>
    //echo "Guardado exitoso";
    alert ("Guardado exitoso");
</script>

<?php
header("location:./?controlador=egresados&accion=inicio");

        }
        include_once("vistas/egresados/crear.php");
    }
    public function editar(){
        
        $id=$_GET['id'];
        $egresado=Egresado::buscar($id);
        

        if($_POST){

            print_r($_POST);
            $tipoDoc=$_POST['tipoDoc'];
            $id=$_POST['numDoc'];
            $nombres=$_POST['nombres'];
            $apellidos=$_POST['apellidos'];
            $telefono=$_POST['telefono'];
            $ciudad=$_POST['ciudad'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $tipoUsuario=$_POST['tipoUsuario'];
            Egresado::editar($tipoDoc,$id,$nombres,$apellidos,$telefono,$ciudad,$email,$password,$tipoUsuario);
            ?>
<script>
    //echo "Guardado exitoso";
    alert ("Modificación exitosa");
</script>

<?php
    header("location:./?controlador=egresados&accion=inicio");
        }

        

        include_once("vistas/egresados/editar.php");
    
    }


    public function menu(){
        $egresados=Egresado::consultar();
        include_once("vistas/paginas/menu.php");
    }

    public function login(){
        $egresados=Egresado::consultar();
        include_once("vistas/egresados/login.php");
    }

    public function borrar(){
        $id=$_GET['id'];
        Egresado::borrar($id);
        header("location:./?controlador=egresados&accion=inicio");
    }
}
?>