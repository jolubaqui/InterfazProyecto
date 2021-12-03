
<?php include_once "./modelos/egresado.php"; 

session_start();
$has_session = session_status() == PHP_SESSION_ACTIVE;

// if (isset($_COOKIE["PHPSESSID"])) {
//     echo "active";
// } else {
//     echo "don't see one";
// }


?>

<div class="row" >
<div id="sidebar" style="text-align:center" class="col-4">

    
    <h2 class="text-end">Egresados</h2>

    <ul id="evento">
        <li><button class="btn btn-outline-success" id="inicio" onclick="dinicio()">Inicio</button></li>
        <li><button class="btn btn-outline-success" id="usuarios" onclick="duser()"><a href="?controlador=egresados&accion=inicio">Usuarios</a></button></li>
        <li><button class="btn btn-outline-success" id="encuesta" onclick="dencuesta()"><a href="?controlador=egresados&accion=encuesta2">Encuesta</a></button></li>
        <li><button class="btn btn-outline-success" id="encuesta" onclick="dencuesta()"><a href="?controlador=paginas&accion=foros">Foros</a></button></li>
        
        
    </ul>

</div>
<div id="contenidoPanel" class="col-8 p-2">

<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                        <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">¡Realiza la encuesta!</h1>
                                        <p class="mb-4">¡Te invitamos a que realices nuestra encuesta aquí!</p>
                                    </div>
                                    <form class="user">
                                        
                                        <a href="https://forms.gle/W5QnJNYE8nsduymt5" class="btn btn-primary btn-user btn-block">
                                            Ir a la encuesta
                                        </a>
                                    </form>
                                    <hr>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
<br><br>
<script src="js/menu.js"></script>