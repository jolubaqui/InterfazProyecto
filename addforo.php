<?php include'header.php'?>

    </div>
    <br>
    <br>
    <div class="container">
       
    <?php
    $mensaje=$_POST['mensaje'];
    $titulo=$_POST['titulo'];
    $autor=$_POST['autor'];
    $id=$_POST['identificador'];
    $respuestas=$_POST['respuestas'];

    include 'conexion.php';

    $conexion= new mysqli("$host", "$user", "$pass", "$datab");
    if ($conexion->connect_error){
        die("La conexión falló: ".$conexion->connect_error);
    }
	$respuestas=0;
    $fecha= time();
    if(empty($identificador))
    {$identificador=0;}
    $respuestas= $respuestas + 1;

    $consulta= "INSERT INTO foro (autor,titulo,mensaje,fecha,identificador)
    value('$autor','$titulo','$mensaje','$fecha','$identificador')";
    $resultado1=$conexion->query($consulta);

    $consulta2= "UPDATE foro SET respuestas = '$respuestas' where id='$identificador'";
    $resultado2= $conexion->query($consulta2);

    $consulta3= "SELECT '$mensaje' FROM foro where mensaje='$mensaje'";
    $resultado3= $conexion->query($consulta3);

    while ($reg = mysqli_fetch_row($resultado3))
    {
        echo '<tr>';
        foreach($reg as $clave)
        {
            echo '<td>',$clave,'</td>';
        }
    }
    echo '<br><br>';
    echo '<a href=indexforo.php>Volver al foro</a>';

    ?>


    </div>
    <br>
    <br>
    <br>

    <?php include 'footer.php' ?>
</body>
</html>