<body>
    <br>
    <center>
    <form class="formulario" action="" method="post">
    
            <h2>Modificación de Usuarios</h2>
            <div class="container">
            
            
                <div class="from-group">
                    <i class="fas fa-user icon"></i>
                    <input required name="tipoDoc" class="form-control" type="text" placeholder="Tipo Documento" value="<?php echo $egresado->tipoid?>">
                </div>
                <div class="from-group">
                    <i class="fas fa-user icon"></i>
                    <input readonly name="numDoc" class="form-control" type="id" placeholder="Número Documento" value="<?php echo $egresado->numDoc?>">
                </div>
                <div class="from-group">
                    <i class="fas fa-user icon"></i>
                    <input required name="nombres" class="form-control" type="text" placeholder="Nombres" value="<?php echo $egresado->nombres?>">
                </div>
                <div class="from-group">
                    <i class="fas fa-user icon"></i>
                    <input required name="apellidos" class="form-control" type="text" placeholder="Apellidos" value="<?php echo $egresado->apellidos?>">
                </div>
                <div class="from-group">
                    <i class="fas fa-user icon"></i>
                    <input name="telefono" class="form-control" type="text" placeholder="Teléfono" value="<?php echo $egresado->telefono?>">
                </div>
                <div class="from-group">
                    <i class="fas fa-user icon"></i>
                    <input name="ciudad" class="form-control" type="text" placeholder="Ciudad Residencia" value="<?php echo $egresado->ciudad?>">
                </div>
                <div class="from-group">
                    <i class="fas fa-envelope icon"></i>
                    <input name="email" class="form-control" type="text" placeholder="Correo Electronico" value="<?php echo $egresado->email?>">
                
                </div>
                <div class="from-group">
                    <i class="fas fa-user icon"></i>
                    <input name="password" class="form-control" type="password" placeholder="Contraseña" value="<?php echo $egresado->password?>">
                </div>
                
                <div class="from-group">
                    <i class="fas fa-user icon"></i>
                    <select class="form-control" name="tipoUsuario" placeholder="Tipo de Usuario " value="<?php echo $egresado->tipoUsuario?>">
                        <option value="Egresado">Egresado</option>
                        <option value="Administrador">Administrador</option>
                    </select>
                </div>

            
                <input type="submit" value="Modificar" class="btn btn-outline-primary">

               
            </div>
        
    </form>
    </center>
    <br>
    
        




</body>