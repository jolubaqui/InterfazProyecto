<?php

include 'conexion.php';


$vemail = $_POST['email'];
$vpassword = $_POST['password'];

session_start();
$_SESSION['email']=$vemail;



$user="root";
$pass="1";
$host="localhost";
$datab="egresados";

$miconexion=new mysqli( "localhost", "root", "1", "egresados");


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