<?php

include 'conexion.php';
session_start();

<<<<<<< HEAD
$vemail = $_POST['email'];
$vpassword = $_POST['password'];

$user="root";
$pass="";
$host="localhost";
$datab="egresados";

$miconexion=new mysqli( "localhost", "root", "", "egresados");


$miquery = "select count(*) from usuarios where email='$vemail' and password='$vpassword'";
$consulta = mysqli_query($miconexion, $miquery)
or die(mysqli_connect_error());
=======
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
>>>>>>> a5c707b0e57b94da7e44b14053e110530099819f
$array = mysqli_num_rows($consulta);

if($array){

    header("location: menu.php");
}else{
    
    echo "DATOS INCORRECTOS";
}



<<<<<<< HEAD

=======
>>>>>>> a5c707b0e57b94da7e44b14053e110530099819f
?>