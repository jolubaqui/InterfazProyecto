<?php


    $user="root";
    $pass="1";
    $host="localhost";
    $datab="egresados";

    $connection=mysqli_connect( $host, $user, $pass, $datab);

    $db=mysqli_select_db($connection,$datab);

    if  (!$connection) {
        die('No pudo conectarse: ' . mysqli_connect_error());
    }
    echo 'Conectado satisfactoriamente';
    mysqli_close($connection);
