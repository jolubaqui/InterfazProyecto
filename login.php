<?php 
    include('header.php')
?>

<body class="container">
    <form class="formulario" method="post" action="loguear1.php">

    <?php
        if(isset($errorLogin) ){
            echo $errorLogin;

        }
    ?>
    <br>
    <center>
    <h1>Login</h1>
    <div class="container">
    
    
    
        <div class="input-contenedor">
        <i class="fas fa-envelope icon"></i>
        <input class="form-control" type="text" placeholder="Correo Electronico" name="email" value="" required/>
        
        </div>
        <br>
        <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
        <input class="form-control" type="password" placeholder="Contraseña" name="password" value="" required/>

        </div>
        <input type="submit" value="Login" class="btn btn-outline-primary">
        
        <p><a class="btn btn-outline-primary" href="registro_usuario.php">Registrate </a></p>
        
        </div>
    </form>
    <br>
    </center>
</body>

<?php include('footer.php')?>