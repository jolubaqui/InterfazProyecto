<?php 
    include('header.php')
?>

<body class="container">
    <form class="formulario" method="post" action="loguear.php">
    <br>
    <center>
    <h1>Login</h1>
    <div class="container">
    
    
    
        <div class="input-contenedor">
        <i class="fas fa-envelope icon"></i>
<<<<<<< HEAD
        <input class="form-control" type="text" placeholder="Correo Electronico" name="email" value="" required/>
=======
        <input class="form-control" type="text" placeholder="Correo Electronico" name="usuario" value="" required/>
>>>>>>> a5c707b0e57b94da7e44b14053e110530099819f
        
        </div>
        
        <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
<<<<<<< HEAD
        <input class="form-control" type="password" placeholder="Contraseña" name="password" value="" required/>
=======
        <input class="form-control" type="password" placeholder="Contraseña" name="clave" value="" required/>
>>>>>>> a5c707b0e57b94da7e44b14053e110530099819f

        </div>
        <input type="submit" value="Login" class="btn btn-outline-primary">
        
        <p><a class="btn btn-outline-primary" href="registro_usuario.php">Registrate </a></p>
        
        </div>
    </form>
    <br>
    </center>
</body>

<?php include('footer.php')?>