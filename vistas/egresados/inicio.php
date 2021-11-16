
<a name="" id="" class="btn btn-success" href="?controlador=egresados&accion=crear" role="button">Agregar Usuario</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Accion</th>
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

