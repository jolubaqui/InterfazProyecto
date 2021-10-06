<?php
    $host="localhost";
    $user="root";
    $pass=""; 
    $datab="egresados";

   $mysqli=new mysqli("$host", "$user", "$pass", "$datab");

   if(mysqli_connect_errno()){
       echo 'Conexión fallida: ', mysqli_connect_error();
       exit();
   }

?>