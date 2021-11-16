<body>
    <br>
    <center>
    <form class="formulario" action="" method="post">
    
            <h2>Registro de Usuarios</h2>
            <div class="container">
            
            
                <div class="from-group">
                    <i class="fas fa-user icon"></i>
                    <input name="tipoDoc" class="form-control" type="text" placeholder="Tipo Documento" required>
                </div>
                <div class="from-group">
                    <i class="fas fa-user icon"></i>
                    <input name="numDoc" class="form-control" type="id" placeholder="Número Documento" required>
                </div>
                <div class="from-group">
                    <i class="fas fa-user icon"></i>
                    <input name="nombres" class="form-control" type="text" placeholder="Nombres" required>
                </div>
                <div class="from-group">
                    <i class="fas fa-user icon"></i>
                    <input name="apellidos" class="form-control" type="text" placeholder="Apellidos" required>
                </div>
                <div class="from-group">
                    <i class="fas fa-user icon"></i>
                    <input name="telefono" class="form-control" type="text" placeholder="Teléfono" required>
                </div>
                <div class="from-group">
                    <i class="fas fa-user icon"></i>
                    <input name="ciudad" class="form-control" type="text" placeholder="Ciudad Residencia" required>
                </div>
                <div class="from-group">
                    <i class="fas fa-envelope icon"></i>
                    <input name="email" class="form-control" type="text" placeholder="Correo Electronico" required>
                
                </div>
                <div class="from-group">
                    <i class="fas fa-user icon"></i>
                    <input name="password" class="form-control" type="password" placeholder="Contraseña" required>
                </div>
                
                <div class="from-group">
                    <i class="fas fa-user icon"></i>
                    <select class="form-control" name="tipoUsuario" placeholder="Tipo de Usuario " required>
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
    
        




</body>