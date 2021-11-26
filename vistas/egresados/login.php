
</div>
<body>

<div class="container w-75 bg-primary my-5 rounded shadow">


    <div class="row align-items-stretch">
        <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded"></div>
        <div class="col bg-white p-5 rounded-end">
            <div class="text-end">
                <img src="images/Logosena.jpg" width="48">
            </div>
            <h2 class="fw-bold text-center pt-5 mb-5">Bienvenidos!</h2>
        <!--Login-->
            <form action="?controlador=egresados&accion=menu" method="post">
                <div class="mb-4">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="mail" class="form-control" name="email"> 
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password"> 
                </div>
                <div class="mb-4 form-check">
                    <input type="checkbox" name="connected" class="form-check-input" id="">
                    <label for="connected" class="form-check-label">Mantenerme conectado</label>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Iniciar Sesión</button>
                </div>
                <div class="my-3">
                    <span>¿No tienes cuenta? <a href="#">Registrate</a></span><br>
                    <span><a href="#">Recuperar password</a></span>
                </div>
            </form>

            <!-- Login con redes sociales -->

            <div class="container w-100 my-5">
                <div class="row">
                    <div class="col-12">Inicia Sesión con tus Redes</div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button class="btn btn-outline-primary w-100 my-1">
                        <div class="row align-items-center" >
                            <div class="col-2 d-none d-md-block">
                                <img src="images/icono-de-facebook.png" width="32" alt="">
                            </div>
                            <div class="col-10 col-md-12">Facebook</div>
                        </div>
                    </button>
                </div>
                <div class="col">
                    <button class="btn btn-outline-danger w-100 my-1">
                        <div class="row align-items-center" >
                            <div class="col-2 d-none d-md-block">
                                <img src="images/Icono-google.jpg" width="32" alt="">
                            </div>
                            <div class="col-10 col-md-12">Google</div>
                        </div>
                    </button>
                </div>
            </div>
        
        </div>
    </div>
</div>









