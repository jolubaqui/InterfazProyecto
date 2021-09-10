<?php

include 'conexion.php';
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$user="root";
$pass="1";
$host="localhost";
$datab="egresados";

$connection=mysqli_connect( $host, $user, $pass, $datab);


$miquery = "select count(*) as contar from registro where reg_email='$usuario' and contrasena='$clave'";
$consulta = mysqli_query($connection, $miquery)
or die(mysqli_connect_error($conexion));
$array = mysqli_num_rows($consulta);

if($array){

    header("location: menu.php");
}else{
    
    echo "DATOS INCORRECTOS";
}



?>