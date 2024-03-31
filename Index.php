<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>El Arca</title>
        <link rel="icon" type="image/png" href="./img/Logo.png">

        <!-- Estilos de Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- Estilos css -->
        <link href="./css/index.css" rel="stylesheet">
    </head>

    <body>
        <div class="container-xxl bg-white p-0">
            <!-- Inicio de la barra de navegación -->
            <div class="container-xxl position-relative p-0">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                    <a href="" class="navbar-brand p-0">
                        <h1 class="text-white"><img src="./img/Logo.png"> El Arca</h1>                    
                    </a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0 pe-4">
                            <a href="Index.php" class="nav-item nav-link active">Inicio</a>
                            <a href="#acerca" class="nav-item nav-link">Acerca</a>
                            <a href="#servicios" class="nav-item nav-link">Servicios</a>
                            <a href="#mennu" class="nav-item nav-link">Menú</a>
                            <a href="./pages/Contacto.html" class="nav-item nav-link">Contacto</a>
                            <a href="./pages/Reservas.html" class="nav-item nav-link">Reservaciones</a>
                            
                        </div>
                        <a href="./pages/SignInUp.php" class="btn btn-iniciosesion py-2 px-4">Inicia Sesión</a>
                    </div>
                </nav>

                <div class="container-xxl py-5 bg-color hero-header mb-5">
                    <div class="container my-5 py-5">
                        <div class="row align-items-center g-5">
                            <div class="col-lg-6 text-center text-lg-start">
                                <h1 class="display-3 text-white animated slideInLeft">¡Tu lugar<br>para disfrutar!</h1>
                                <p class="text-white animated slideInLeft mb-4 pb-2">"Sumérgete en un oasis gastronómico, donde la frescura se fusiona con la naturaleza. Bienvenido a nuestro restaurante bar al aire libre, un rincón familiar entre exuberantes vegetación y la compañía amistosa de nuestros adorables vecinos de la fauna. Descubre la magia de sabores que florecen. entre risas y verdor. ¡Te invitamos a compartir momentos únicos en nuestra mesa, donde la comida se convierte en una experiencia al aire libre inolvidable!</p>
                                <a href="" class="btn btn-iniciosesion py-sm-3 px-sm-5 me-3 animated slideInLeft">Reservar una Mesa</a>
                            </div>
                            <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                                <img class="img-fluid" src="./img/plato.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin de la barra de navegación -->

            <!-- Inicio de Servicios -->
            <section id="servicios">
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item rounded pt-3">
                                    <div class="p-4">
                                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                        <h5>Texto de ejemplo</h5>
                                        <p>Texto de ejemplo</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="service-item rounded pt-3">
                                    <div class="p-4">
                                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                        <h5>Texto de ejemplo</h5>
                                        <p>Texto de ejemplo</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="service-item rounded pt-3">
                                    <div class="p-4">
                                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                        <h5>Texto de ejemplo</h5>
                                        <p>Texto de ejemplo</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="service-item rounded pt-3">
                                    <div class="p-4">
                                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                        <h5>Texto de ejemplo</h5>
                                        <p>Texto de ejemplo</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Fin del Servicio -->

            <!-- Inicio de Acerca -->
            <section id="acerca">
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6">
                                <div class="row g-3">
                                    <div class="col-6 text-start">
                                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="./Recursos_index/img/about-1.jpg">
                                    </div>
                                    <div class="col-6 text-start">
                                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="./Recursos_index/img/about-2.jpg" style="margin-top: 25%;">
                                    </div>
                                    <div class="col-6 text-end">
                                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="./Recursos_index/img/about-3.jpg">
                                    </div>
                                    <div class="col-6 text-end">
                                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="./Recursos_index/img/about-4.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h5 class="section-title ff-secondary text-start text-primary-green fw-normal">Acerca de Nosotros</h5>
                                <h1 class="mb-4">Bienvenido a El Arca</h1>
                                <p class="mb-4">La mejor carne asada y bebidas de Tlaxcala</p>
                                <div class="row g-4 mb-4">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                                            <div class="ps-4">
                                                <p class="mb-0">Años de</p>
                                                <h6 class="text-uppercase mb-0">Experiencia</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn btn-primary py-3 px-5 mt-2" href="">Leer Más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>    
            <!-- Fin de Acerca -->

            <!-- Inicio de Menu -->
            <section id="mennu">
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Menú de Comida</h5>
                            <h1 class="mb-5">Artículos Más Populares</h1>
                        </div>
                        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                                <li class="nav-item">
                                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                        <i class="fa fa-coffee fa-2x text-primary"></i>
                                        <div class="ps-3">
                                            <h6 class="mt-n1 mb-0">Desayuno</h6>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                        <i class="fa fa-hamburger fa-2x text-primary"></i>
                                        <div class="ps-3">
                                            <h6 class="mt-n1 mb-0">Almuerzo</h6>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                        <i class="fa fa-utensils fa-2x text-primary"></i>
                                        <div class="ps-3">
                                            <h6 class="mt-n1 mb-0">Cena</h6>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane fade show p-0 active">
                                    <div class="row g-4">
                                        <!-- Aquí va el contenido del primer tab -->
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane fade show p-0">
                                    <div class="row g-4">
                                        <!-- Aquí va el contenido del segundo tab -->
                                    </div>
                                </div>
                                <div id="tab-3" class="tab-pane fade show p-0">
                                    <div class="row g-4">
                                        <!-- Aquí va el contenido del tercer tab -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>    
            <!-- Fin de Menu -->

            <!-- Inicio de Testimonios -->
            <section id="testimonios">
                <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container">
                        <div class="text-center">
                            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonios</h5>
                            <h1 class="mb-5">¡La opinión de nuestros clientes!</h1>
                        </div>
                        <div class="owl-carousel testimonial-carousel">
                            <div class="testimonial-item bg-transparent border rounded p-4">
                                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                <p>Ejemplo</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded-circle" src="./Recursos_index/img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                                    <div class="ps-3">
                                        <h5 class="mb-1">Nombre del cliente</h5>
                                        <small>Ocupación</small>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item bg-transparent border rounded p-4">
                                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                <p>Ejemplo</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded-circle" src="./Recursos_index/img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                                    <div class="ps-3">
                                        <h5 class="mb-1">Nombre del cliente</h5>
                                        <small>Ocupación</small>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item bg-transparent border rounded p-4">
                                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                <p>Ejemplo</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded-circle" src="./Recursos_index/img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                                    <div class="ps-3">
                                        <h5 class="mb-1">Nombre del cliente</h5>
                                        <small>Ocupación</small>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item bg-transparent border rounded p-4">
                                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                <p>ejemplo</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded-circle" src="./Recursos_index/img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                                    <div class="ps-3">
                                        <h5 class="mb-1">Nombre del cliente</h5>
                                        <small>Ocupación</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Fin de Testimonios -->

            <!-- Inicio de Pie de página -->
            <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a class="border-bottom" href="#">El Arca</a>, todos los derechos reservados.
                            </div>
                        </div>
                </div>
            </div>
            <!-- Inicio de Pie de página -->

            <!-- Volver a arriba -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>

        <!-- Template Javascript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

</html>