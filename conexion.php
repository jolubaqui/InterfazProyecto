<?php
    $host="localhost";
    $user="root";
    $pass="1"; 
    $datab="egresados";

    $mysqli=new mysqli("$host", "$user", "$pass", "$datab");

    if(mysqli_connect_errno()){
        echo 'Conexión fallida: ', mysqli_connect_error();
        exit();
    }

    ///if  (!$mysqli) {
       // die('No pudo conectarse: ' . mysqli_connect_error());
    //}
    //echo 'Conectado satisfactoriamente';
    //mysqli_close($mysqli);
