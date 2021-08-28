<?php

$user="root";
$pass="1";
$host="localhost";
$datab="egresados";

$connection=mysqli_connect($host, $user, $pass);

$db=mysqli_select_db($connection,$datab);

if  (!$connection) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';
mysqli_close($connection);

?>