<?php
include('conexion.php');

    session_start();
    $vtipoDoc=$_POST['tipoDoc'];
    $vnumDoc=$_POST['numDoc'];
    $vnombres=$_POST['nombres'];
    $vapellidos=$_POST['apellidos'];
    $vtelefono=$_POST['telefono'];
    $vciudad=$_POST['ciudad'];
    $vemail=$_POST['email'];
    $vpassword=$_POST['password'];
    $vtipoUsuario=$_POST['tipoUsuario'];

    $miconexion=$mysqli('', 'egresados');



    $resultado=new mysqli($miconexion, "insert into usuarios (tipoDoc,numDoc,nombres,apellidos,telefono,ciudad,email,password,tipoUsuario') 
    values ('{$vtipoDoc}','{$vnumDoc}','{$vnombres}','{$vapellidos}','{$vtelefono}','{$vciudad}','{$vemail}','{$vpassword}','{$vtipousuario}')");

    if ($resultado)
    {
        echo "Guardado exitoso";
    }
    else{
        echo "No guardado";
    }
?>