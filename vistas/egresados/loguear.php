<?php

include 'conexion.php';



$vemail = $_POST['email'];
$vpassword = $_POST['password'];

//echo $vemail;
//echo $vpassword;

session_start();
$_SESSION['email']=$vemail;



$user="root";
$pass="";
$host="localhost";
$datab="egresados";

$miconexion=new mysqli( "localhost", "root", "", "egresados");

//if($miconexion){    echo "conectado";}

$miquery = "SELECT * FROM `usuarios` WHERE usuMail='$vemail' AND usuPass='$vpassword'";
$consulta = mysqli_query($miconexion, $miquery)
or die(mysqli_connect_error());
$array = mysqli_fetch_array($consulta);




if($array['usuTipoUsu']=='Administrador'){

    header("location: ?controlador=egresados&accion=inicio");
}else
if($array['usuTipoUsu']=='Egresado'){
    header("location: ?controlador=egresados&accion=encuesta");
}else{
    
    //echo "DATOS INCORRECTOS";
    header("location: ?controlador=egresados&accion=login");
}


?>