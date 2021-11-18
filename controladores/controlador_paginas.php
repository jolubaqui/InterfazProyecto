<?php

class ControladorPaginas{
    public function inicio(){
        include_once("vistas/paginas/inicio.php");
    }
    public function error(){
        include_once("vistas/paginas/error.php");
    }
    public function cursos(){
        include_once("vistas/paginas/cursos.php");
    }
    public function eventos(){
        include_once("vistas/paginas/eventos.php");
    }
    public function noticias(){
        include_once("vistas/paginas/noticias.php");
    }
    public function ofertas(){
        include_once("vistas/paginas/ofertas.php");
    }
    public function Quienes(){
        include_once("vistas/paginas/quienes.php");
    }
    public function Menu(){
        include_once("vistas/paginas/menu.php");
    }
}
