<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sub delegacion del IMSS </title>
    <link href="../assets/images/imss.jpg" rel="icon">
    <link rel="stylesheet" href="../css/style.css">
    <!--boostrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--boostrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--Tipografia-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!--Iconos de boostrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <header class="pb-5">
        <!--Barra de navegacion-->
        <nav class="navbar navbar-dark  fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="../assets/images/icon.png" width="170px" height="50px" alt="Gobierno de mexico"></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Subdelegacion del IMSS Tehuacán</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="index.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Departamentos
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="prestaciones.php">Prestaciones economicas</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="cobranzas.php">Cobranzas</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="auditoria.php">Auditoria</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="afiliacion.php">Afiliación y vigencia</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="apoyoAdministrativo.php">Oficina de apoyo administrativo</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </nav>

    </header>

    <!--carrusel-->
    <div class="container-fluid my-custom-carousel pt-5">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../assets/images/imss.jpg" class="d-block w-100" alt="s">
                </div>
                <div class="carousel-item">
                    <img src="../assets/images/imss.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../assets/images/imss.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>
    <!--Seccion mision y vision-->
    <section>
        <div class="container text-center mt-4">
            <h2 class="">
                ¿Quienes somos?
            </h2>
        </div>

        <div class="container mt-5">
            <div class="row">
                <!-- Primera tarjeta -->
                <div class="col-12 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-head text-center vision">
                            <div class="card-title text-center mt-1 vision">
                                <h2>Visión</h2>
                                <hr>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="card-text" style="font-size: large;">

                                Ser una unidad funcinal que atienda al usuario de marena eficiente, cálida y oportuna, que
                                le produzca al mismo un sentido de seguridad y confianza de la institucion
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Segunda tarjeta -->
                <div class="col-12 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-head text-center vision">
                            <div class="card-title text-center ">
                                <h2>Misión</h2>
                                <hr>
                            </div>

                        </div>
                        <div class="card-body">

                            <div class="card-text" style="font-size: large;">

                                Concientizar y orientar al área productiva y laboral de nuestra ciircunscripcion,
                                sobre el cumpliemiento de las obligaciones establecidas en la ley del seguro social y en su
                                caso restituir el derecho a los trabajadores para elevar la calidad de vida
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container text-center mt-5">
            <h3>ORGANIGRAMA DE LA ORGANIZACIÓN</h3>
        </div>
        <div class="organigrama">
            <img src="../assets/images/organigrama.png" class="d-block w-100" alt="Organigrama">
        </div>
    </section>

    <!--footer-->

    <footer class="footer-style">
        <div class="container col-md-10  mt-3 text-center">
            <div class="row justify-content-evenly">
                <div class="col-12 col-md-6">
                    <h4><i class="bi bi-geo-alt-fill"></i> Dirección</h4>
                    <p>

                        <a href="https://maps.app.goo.gl/kwH4mViL9LezNQQP9" class="text-light" target="_blank" rel="noopener noreferrer">"Calle 4 Nte 120 | Ignacio Zaragoza| C.P 75770 | Tehuacán, Puebla."</a>
                    </p>
                </div>
                <div class="col-12 col-md-6 ">
                    <h4>Contacto</h4>
                    <h5><i class="bi bi-telephone-fill"></i> Numero de telefono:</h5>
                    <p>
                        +52-238-382-4097
                    </p>
                    <h5><i class="bi bi-calendar-check-fill"></i> Horario de atención:</h5>
                    <p>
                        Lunes a viernes
                    </p>
                    <p>8:00 AM a 3:30 PM</p>
                </div>
            </div>
            <div class="text-center p-3" style="background-color: #0C231E;">
                <h5>Subdelegacion del IMSS Tehuacán, Puebla.</h5>
            </div>
        </div>

    </footer>

</body>

</html>