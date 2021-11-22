
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egresados SENA</title>
    <link href="estilos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .bg{
            background-image: url(images/logoegresados.png);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="container" >

        <div class="header" >
            <div class="gov" >
                <a href="#">GOV.CO</a>
            </div>
            <div class= "row">
                <p class="col"><img src="images/240px-Sena_Colombia_logo.svg.png" alt="Logo SENA" width="100px" padding-left: 20px></p>
                <h1 class="col" style="color: black">EGRESADOS CBC</h1>
                <div class="col">
                    <a href="?controlador=egresados&accion=crear"><button class="btn btn-succes">Registrate</button></a>
                    <a href="?controlador=egresados&accion=login"><button class="btn btn-succes">Login</button></a>
                </div>
            </div>
            
        </div>
        <div class="btn-group" role="group" aria-label="Basic example">
                <a href="index.php"><button  class="btn btn-success ">Inicio</button></a>
                <a href="?controlador=paginas&accion=quienes"><button  class="btn btn-success ">Quienes Somos</button></a>
                <a href= "?controlador=paginas&accion=indexforo"><button  class="btn btn-success ">Foros</button></a>
                <a href="?controlador=paginas&accion=cursos"><button  class="btn btn-success ">Cursos</button></a>
                <a href="?controlador=paginas&accion=ofertas"><button  class="btn btn-success ">Ofertas</button></a>
                <a href="?controlador=paginas&accion=eventos"><button  class="btn btn-success ">Eventos</button></a>
                <a href="?controlador=paginas&accion=noticias"><button  class="btn btn-success ">Noticias</button></a>
            
        </div>