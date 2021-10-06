<<<<<<< HEAD
<?php include('header.php')

?>
=======
<?php include('header.php')?>
>>>>>>> a5c707b0e57b94da7e44b14053e110530099819f

<body>
    <br>
    <center>
<<<<<<< HEAD
    <form class="formulario" action="registro_usuario.php" method="post">
    
            <h2>Registrate</h2>
            <div class="container">
        
            
                <div class="from-group">
                    <i class="fas fa-user icon"></i>
                    <input name="tipoDoc" class="form-control" type="text" placeholder="Tipo Documento">
                </div>
                <div class="from-group">
                    <i class="fas fa-user icon"></i>
                    <input name="numDoc" class="form-control" type="id" placeholder="Número Documento">
                </div>
                <div class="from-group">
                    <i class="fas fa-user icon"></i>
                    <input name="nombres" class="form-control" type="text" placeholder="Nombres">
                </div>
                <div class="from-group">
                    <i class="fas fa-user icon"></i>
                    <input name="apellidos" class="form-control" type="text" placeholder="Apellidos">
                </div>
                <div class="from-group">
                    <i class="fas fa-user icon"></i>
                    <input name="telefono" class="form-control" type="text" placeholder="Teléfono">
                </div>
                <div class="from-group">
                    <i class="fas fa-user icon"></i>
                    <input name="ciudad" class="form-control" type="text" placeholder="Ciudad Residencia">
                </div>
                <div class="from-group">
                    <i class="fas fa-envelope icon"></i>
                    <input name="email" class="form-control" type="text" placeholder="Correo Electronico">
                
                </div>
                <div class="from-group">
                    <i class="fas fa-user icon"></i>
                    <input name="password" class="form-control" type="password" placeholder="Contraseña">
                </div>
                
                <div class="from-group">
                    <i class="fas fa-user icon"></i>
                    <select class="form-control" name="tipoUsuario" placeholder="Tipo de Usuario ">
                        <option value="Egresado">Egresado</option>
                        <option value="Administrador">Administrador</option>
                    </select>
                </div>

            
                <input type="submit" value="Registrate" class="btn btn-outline-primary">

                <p><a class="btn btn-outline-primary" href="login.php">Iniciar Sesion</a></p>
            </div>
        
    </form>
    </center>
    <br>
    <?php
    if ($_POST){

       
        $miconexion=new mysqli( "localhost", "root", "", "egresados");
    
    
        if ($miconexion->connect_error){
            die('Error de conexión ('. $miconexion->connect_errno.') '.$miconexion->connect_errno);
        }
        else{
            echo 'conexion exitosa';
        }

        $vtipoDoc=$_POST['tipoDoc'];
        $vnumDoc=$_POST['numDoc'];
        $vnombres=$_POST['nombres'];
        $vapellidos=$_POST['apellidos'];
        $vtelefono=$_POST['telefono'];
        $vciudad=$_POST['ciudad'];
        $vemail=$_POST['email'];
        $vpassword=$_POST['password'];
        $vtipoUsuario=$_POST['tipoUsuario'];
    
        $resultado=$miconexion->query("insert into usuarios (usu_id,tipoDoc,numDoc,nombres,apellidos,telefono,ciudad,email,password,tipoUsuario) 
        values(null,'{$vtipoDoc}',{$vnumDoc},'{$vnombres}','{$vapellidos}',{$vtelefono},'{$vciudad}','{$vemail}','{$vpassword}','{$vtipoUsuario}')");
    
        $execute_resultado = mysqli_query($miconexion,$resultado);

    if (!$resultado)
    {
        echo 'No se pudo ejecultar la consulta: ' . $miconexion->errno;
        exit;
    }
    else
    {
        ?>
        <script>
            //echo "Guardado exitoso";
            alert ("Guardado exitoso");
        </script>
        <?php
    }

}
?>




=======
    <form class="formulario">
    
    <h1>Registrate</h1>
        <div class="container">
    
        
        <div class="from-group">
            <i class="fas fa-user icon"></i>
            <input class="form-control" type="text" placeholder="Tipo Documento">
        </div>
        <div class="from-group">
            <i class="fas fa-user icon"></i>
            <input class="form-control" type="id" placeholder="Número Documento">
        </div>
        <div class="from-group">
            <i class="fas fa-user icon"></i>
            <input class="form-control" type="text" placeholder="Nombres">
        </div>
        <div class="from-group">
            <i class="fas fa-user icon"></i>
            <input class="form-control" type="text" placeholder="Apellidos">
        </div>
        <div class="from-group">
            <i class="fas fa-user icon"></i>
            <input class="form-control" type="text" placeholder="Teléfono">
        </div>
        <div class="from-group">
            <i class="fas fa-user icon"></i>
            <input class="form-control" type="text" placeholder="Ciudad Residencia">
        </div>
        <div class="from-group">
            <i class="fas fa-envelope icon"></i>
            <input class="form-control" type="text" placeholder="Correo Electronico">
        
        </div>
        <div class="from-group">
            <i class="fas fa-user icon"></i>
            <input class="form-control" type="password" placeholder="Contraseña">
        </div>
        
        </div>
        <input type="submit" value="Registrate" class="btn btn-outline-primary">
            <p><a class="btn btn-outline-primary" href="login.php">Iniciar Sesion</a></p>
        </div>
    </form>
    </center>
    <br>
>>>>>>> a5c707b0e57b94da7e44b14053e110530099819f
</body>

<?php include('footer.php')?>