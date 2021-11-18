<?php

include_once 'modelos/user.php';
include_once 'modelos/user_session.php';

$usersession= new UserSession();
$user= new User();

if(isset($_SESSION['user'])){
    echo "Hay Sesión";
}else if(isset($_POST['email']) && isset($_POST['password'])){
    //echo 'Validación de Login';
    $userForm = $_POST['email'];
    $passForm = $_POST['password'];

    if($user->userExists($userForm,$passForm)){
        echo "Usuario Validado";
    }else{
        //echo "Nombre de Usuario y/o Password incorrecto";
        $errorLogin = "Nombre de usuario es incorrecto";
        include_once "login.php";
    }

}else{
    //echo 'Login';
    include_once 'login.php';
}


?>