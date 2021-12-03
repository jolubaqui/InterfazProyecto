<?php 
include_once("controladores/controlador_paginas.php");
include_once("controladores/controlador_egresados.php");
include_once("controladores/controlador_plantilla.php");

//echo $controlador;
//echo $accion;


include_once("controladores/controlador_".$controlador.".php"); 
$objControlador="Controlador".ucfirst($controlador);
$controlador= new $objControlador();
$controlador->$accion();


?>
