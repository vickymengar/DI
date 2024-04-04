<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>El Arca</title>
        <link rel="icon" type="image/png" href="./img/Logo.png">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <!-- Estilos de Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- Estilos css -->
        <link href="./css/index.css" rel="stylesheet">
    </head>

    <body>
        <!-- Inicio de la barra de navegación -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-white"><img src="./img/Logo.png"> El Arca</h1>                    
            </a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 pe-4">
                    <a href="Index.php" class="nav-item nav-link active">Inicio</a>
                    <a href="#acerca" class="nav-item nav-link">Acerca</a>
                    <a href="./carta/Menu.pdf" class="nav-item nav-link">Menú</a>
                    <a href="./pages/Contacto.php" class="nav-item nav-link">Contacto</a>
                </div>
                <a href="./pages/Reservas.php" class="btn btn-iniciosesion py-2 px-4">Haz tu reservación</a>
            </div>
        </nav>

        <div class="container-fluid py-5 bg-color hero-header mb-5">
            <div class="container my-5 py-5">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="display-3 text-white animated slideInLeft">¡Tu lugar<br>para disfrutar!</h1>
                        <p class="text-white animated slideInLeft mb-4 pb-2">"Sumérgete en un oasis gastronómico, donde la frescura se fusiona con la naturaleza. Bienvenido a nuestro restaurante bar al aire libre, un rincón familiar entre exuberantes vegetación y la compañía amistosa de nuestros adorables vecinos de la fauna. Descubre la magia de sabores que florecen. entre risas y verdor. ¡Te invitamos a compartir momentos únicos en nuestra mesa, donde la comida se convierte en una experiencia al aire libre inolvidable!</p>
                        <a href="./pages/Reservas.html" class="btn btn-iniciosesion py-sm-3 px-sm-5 me-3 animated slideInLeft">Reservar una Mesa</a>
                    </div>
                     <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                        <img class="img-fluid" src="./img/plato.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin de la barra de navegación -->

        <!-- Inicio de Acerca -->
        <section id="acerca">
                    <div class="container">
                        <div class="row g-5 align-items-center mb-3">
                            <div class="col-lg-6">
                                <div class="row g-3">
                                    <div class="col-6 text-start">
                                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="./img/fondo1.jpg">
                                    </div>
                                    <div class="col-6 text-start">
                                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="./img/fondo2.jpg" style="margin-top: 25%;">
                                    </div>
                                    <div class="col-6 text-end">
                                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="./img/fondo3.jpg">
                                    </div>
                                    <div class="col-6 text-end">
                                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="./img/fondo4.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h1 class="section-title ff-secondary text-start text-primary-green">Acerca de nosotros</h1>
                                <p class="mb-4"><strong>Bienvenido a El Arca</strong></p>
                                <p class="mb-4">Bienvenido a nuestro bar al aire libre, donde la buena comida se encuentra con la naturaleza y la diversión, creando un destino único para disfrutar, celebrar y conectar.</p>
                                <p class="mb-4">¡Esperamos verte pronto en nuestro refugio de sabores y alegría!</p>
                                <div class="row g-4 mb-4">
                                    <div class="col-sm-12">
                                        <div class="d-flex align-items-center line px-3">
                                            <h1 class="flex-shrink-0 display-5 text-primary-green mb-0" data-toggle="counter-up">17</h1>
                                            <div class="ps-4">
                                                <h5 class="mb-0">Años de</h5>
                                                <h5 class="mb-0"><strong>Experiencia</strong></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-5 mt-3 mb-3">
                            <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item rounded pt-3">
                                    <div class="p-4">
                                        <i class="fas fa-handshake"></i>
                                        <h5><strong> Nuestra misión</strong></h5>
                                        <p>Crear momentos inolvidables en un entorno al aire libre, ofreciendo experiencias gastronómicas únicas con ingredientes frescos y locales, en un ambiente acogedor y lleno de vida, siendo el destino preferido para escapadas culinarias.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="service-item rounded pt-3">
                                    <div class="p-4">
                                        <i class="fas fa-compass"></i>
                                        <h5><strong>Nuestra visión</strong></h5>
                                        <p>Convertirnos en el rincón gastronómico al aire libre por excelencia, destacando por la combinación de sabores excepcionales, sostenibilidad y excelencia en el servicio, siendo reconocidos como un referente en la creación de experiencias únicas que celebran la vida y la naturaleza.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>    
        <!-- Fin de Acerca -->

        <!-- Inicio de Pie de página -->
        <div class="container-fluid bg-color text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            <p href="#">&copy; El Arca, todos los derechos reservados.</p>
                            </div>
                        </div>
                </div>
        </div>
        <!-- Inicio de Pie de página -->

        <!-- Volver a arriba -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fas fa-arrow-up"></i></a>
        
        <!-- Template Javascript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

</html>