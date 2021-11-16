<?php

include 'conexion.php';
session_start();

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
$array = mysqli_num_rows($consulta);

if($array){

    header("location: menu.php");
}else{
    
    echo "DATOS INCORRECTOS";
}



?>