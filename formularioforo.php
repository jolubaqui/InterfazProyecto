<?php

include 'header.php'

?>

<br><br>

<form action="addforo.php" name="formulario" method="post">
    <input type='hidden' name="respuestas" value="<?php echo $respuestas; ?>">
    <input type='hidden' name="identificador" value="<?php echo $id; ?>">    

    AUTOR:<input type="text" name="autor" size="25">
    <br><br>
    TITULO:<input type="text" name="titulo" size="25">
    <br><br>
    MENSAJE:<textarea name="mensaje" ></textarea>
    <br><br>
    <input type="submit" value="enviar">
</form>

<br>
<?php

include 'footer.php'

?>