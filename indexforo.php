<?php

include 'header.php'

?>

<br><br><br>

<font size="4"></font>
<u> Foro Egresados </u>
<br>
<br>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td  width="5%"></td>
        <td width="35%"><b>Titulo</b></td>
        <td width="30%"><b>Fecha</b></td>
        <td width="30%"><b>Respuestas</b></td>
    </tr>
</table>


<?php

include 'conexion.php';

$mysqli = new mysqli($host,$user,$pass,$datab);

if(mysqli_connect_errno()){
    printf("Falló la conexión: %s \n", mysqli_connect_error() );
    exit();
}

$consulta="SELECT * FROM foro WHERE identificador = 0 ORDER BY fecha DESC";

if ($resultado=mysqli_query($mysqli,$consulta)) {
    echo "<hr size=10 color=ffffff width=100% aling=left>";
    while($fila = mysqli_fetch_row($resultado)){
        $titulo=$fila[2];
        $id=$fila[0];
        $fecha= $fila[4];
        $respuestas=$fila[6];
        echo ("<table width = 100% border='0' cellspacing='0' cellpadding='0'>\n");
        echo ('<tr>');
        echo (" <td width='5%'><a href=foroforo.php?id=$id>Ver</a></td>\n");
        echo (" <td width='30%'>$titulo</td>\n");
        echo (" <td width='30%'>".date("d-m-y",$fecha)."</td>\n");
        echo (" <td width='30%'>$respuestas</td>\n");
        echo ("</table>\n");
        echo "<hr size=2 color=ffffff width=100% aling=left>";
    }
    mysqli_free_result($resultado);
}
mysqli_close($mysqli);

?>
<br>
<p aling='center'>
    <font face="arial" size='1'>
        <a href=formularioforo.php?respuestas=0>
            Añadir mensaje
        </a></p>
    </font>


<br><br><br>

<?php

include 'footer.php'

?>