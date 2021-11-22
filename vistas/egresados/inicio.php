
<a name="" id="" class="btn btn-success" href="?controlador=egresados&accion=crear" role="button">Agregar Usuario</a>

<table class="table">
    <thead>
        <tr>
            <th style="color: black">ID</th>
            <th style="color: black">Nombre</th>
            <th style="color: black">Apellidos</th>
            <th style="color: black">Teléfono</th>
            <th style="color: black">Correo Electrónico</th>
            <th style="color: black">Tipo de Usuario</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($egresados as $egresado){ ?>

        
        <tr>

            <td> <?php echo $egresado->numDoc ?> </td>
            <td><?php echo $egresado->nombres ?></td>
            <td><?php echo $egresado->apellidos ?></td>
            <td><?php echo $egresado->telefono ?></td>
            <td><?php echo $egresado->email ?></td>
            <td><?php echo $egresado->tipoUsuario ?></td>
            <td> 
            <div class="btn-group" role="group" aria-label="">
                <a href="?controlador=egresados&accion=editar&id=<?php echo $egresado->numDoc?>" class="btn btn-info">Editar</a>
                <a href="?controlador=egresados&accion=borrar&id=<?php echo $egresado->numDoc?>" class="btn btn-danger">Borrar</a>
                
            </div>    
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<br><br>

