<?php include('header.php');
    session_start();
?>

    </div>
    <br>
    <br>
    <section>
        <div class="divContainer">
            <div>
                <h1 class="tittlePanelControl">Panel de Control</h1>
            </div>
            <div class="dashboard">
                <a href="panelusuarios.php">
                    <i class="fas fa-user">
                        <p>
                            <strong>Usuarios</strong><br>
                            <span>40</span>
                        </p>
                    </i>
                </a>
                <a href="paneleventos.php">
                    <i>
                        <p>
                            <strong>Eventos</strong><br>
                            <span>5</span>
                        </p>
                    </i>
                </a>
                <a href="panelcursos.php">
                    <i>
                        <p>
                            <strong>Cursos</strong><br>
                            <span>20</span>
                        </p>
                    </i>
                </a>
                <a href="panelnoticias.php">
                    <i>
                        <p>
                            <strong>Noticias</strong><br>
                            <span>5</span>
                        </p>
                    </i>
                </a>
                <a href="panelofertas.php">
                    <i class="fas fa-file-alt">
                        <p>
                            <strong>Ofertas</strong><br>
                            <span>10</span>
                        </p>
                    </i>
                </a>


            </div>
        </div>
    </section>



    <?php include('footer.php')?>
</body>
</html>