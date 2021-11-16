<?php include'header.php'?>

<?php

include 'conexion.php';

$conexion= new mysqli("$host", "$user", "$pass", "$datab");
if ($conexion->connect_error){
    die("La conexión falló: ".$conexion->connect_error);
}

$id = $_GET['id'];
$consulta = "SELECT * FROM foro WHERE id='$id' ORDER BY fecha DESC";
if($resultado = mysqli_query($conexion, $consulta)){
     
    echo " <hr size = 10 color = ffffff widht = 100% aling= left>";
    while ($fila = mysqli_fetch_row($resultado)){
        $titulo = $fila[2];
        $autor = $fila[1];
        $mensaje = $fila[3];
        $id = $fila[0];
        $fecha = $fila[4];
        $respuestas = $fila[5];
        echo "<table><tr><td>TITULO: $titulo</td><r>";
        echo "<td>AUTOR: $autor</td><tr>";
        echo "<tr><td> $mensaje</td><tr></table>";
        echo "<center><font face-arial size=1>";
        echo "<a href=formularioforo.php?id=$id&respuestas=$respuestas>";
        echo "<br>";
        echo "<a href=respuestaforo.php?id=$id&titulo=$titulo><button>Responder</button></a>";
        echo "<br>";
        echo "<a href=formularioforo.php?respuestas=0><button>Añadir mensajes</button></a>";
    }
}



?>



<br>
    <br>
    <br>

    <?php include 'footer.php' ?>
</body>
</html>