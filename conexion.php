<?php
    $host="localhost";
    $user="root";
    $pass=""; 
    $datab="egresados";

<<<<<<< HEAD
   $mysqli=new mysqli("$host", "$user", "$pass", "$datab");

   if(mysqli_connect_errno()){
       echo 'Conexión fallida: ', mysqli_connect_error();
       exit();
   }
=======

    $user="root";
    $pass="1";
    $host="localhost";
    $datab="egresados";

    $connection=mysqli_connect( $host, $user, $pass, $datab);

    $db=mysqli_select_db($connection,$datab);
>>>>>>> a5c707b0e57b94da7e44b14053e110530099819f

    if  (!$connection) {
        die('No pudo conectarse: ' . mysqli_connect_error());
    }
    echo 'Conectado satisfactoriamente';
    mysqli_close($connection);
