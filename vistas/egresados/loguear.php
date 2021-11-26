<?php

include 'conexion.php';


$vemail = $_POST['email'];
$vpassword = $_POST['password'];

//echo $vemail;
//echo $vpassword;

session_start();
$_SESSION['email']=$vemail;



$user="root";
$pass="1";
$host="localhost";
$datab="egresados";

$miconexion=new mysqli( "localhost", "root", "1", "egresados");

//if($miconexion){    echo "conectado";}

$miquery = "SELECT usuMail,usuPass FROM `usuarios` WHERE usuMail='joseluis@gmail.com' AND usuPass='12345'";
$consulta = mysqli_query($miconexion, $miquery)
or die(mysqli_connect_error());
$array = mysqli_num_rows($consulta);

if($miquery){    echo "conectado";}


if($array){

    header("location: ?controlador=egresados&accion=menu");
}else{
    
    echo "DATOS INCORRECTOS";
}



?>