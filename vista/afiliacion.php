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
    <header >
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

    <!--informacion-->
    <main class="pt-5">
        <section class="text-center main-contend ">
            <h5 class="name title mb-4">Afiliación y vigencia</h5>
            <div class="container-fluid">
                <hr>
                <span>
                    <section id="tabs">
                        <div class="container-fluid col-md-12">
                            <div class="row">
                                <div class="col-md-12 text-justify">
                                    <nav>
                                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                                           
                                        </div>
                                    </nav>
                                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                            ...hola0
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            ...hola1
                                        </div>
                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            ...hola3
                                        </div>
                                        <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab">
                                            ...hola12
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                </span>
            </div>
        </section>
    </main>
    <!--footer-->

    <footer class="footer-style ">
        <div class="container col-md-10">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h4><i class="bi bi-geo-alt-fill"></i> Dirección</h4>
                    <p>

                        <a href="https://maps.app.goo.gl/kwH4mViL9LezNQQP9" class="text-light" target="_blank" rel="noopener noreferrer">"Calle 4 Nte 120 | Ignacio Zaragoza| C.P 75770 | Tehuacán, Puebla."</a>
                    </p>
                </div>
                <div class="col-12 col-md-6">
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