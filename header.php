
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egresados SENA</title>
    <link href="estilos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
  



    <div class="container" >

        <div class="header" >
            

            <!--Encabezado con logo y enlace al login--> 
            <div class= "row">
                <p class="col"><img src="images/240px-Sena_Colombia_logo.svg.png" alt="Logo SENA" width="100px" padding-left: 20px></p>
                <h1 class="col" style="color: black">EGRESADOS CBC</h1>
                <div class="col">
                    <a href="?controlador=egresados&accion=crear"><button class="btn btn-succes">Registrate</button></a>
                    <a href="?controlador=egresados&accion=login"><button class="btn btn-succes">Iniciar Sesión</button></a>
                    <?php 
                        if (isset($_COOKIE["PHPSESSID"])) {
                            ?> <a href="?controlador=egresados&accion=salir"><button class="btn btn-succes">Cerrar Sesión</button></a>
                       <?php
                       }
                       
                       ?>                
                </div>
            </div>
            <hr>
        </div>

        <!--Botones de navegacion-->
        <div class="btn-group" role="group" aria-label="Basic example">
                <a href="index.php"><button  class="btn btn-success ">Inicio</button></a>
                <a href="?controlador=paginas&accion=quienes"><button  class="btn btn-success ">Quienes Somos</button></a>
                <a href= "?controlador=paginas&accion=foros"><button  class="btn btn-success ">Foros</button></a>
                <a href="?controlador=paginas&accion=cursos"><button  class="btn btn-success ">Cursos</button></a>
                <a href="?controlador=paginas&accion=ofertas"><button  class="btn btn-success ">Empleabilidad</button></a>
                <a href="?controlador=paginas&accion=eventos"><button  class="btn btn-success ">Eventos</button></a>
                <a href="?controlador=paginas&accion=noticias"><button  class="btn btn-success ">Noticias</button></a>
            
        </div>
        <hr>