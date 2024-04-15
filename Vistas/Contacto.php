<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>El Arca</title>
        <link rel="icon" type="image/png" href="../img/Logo.png">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <!-- Estilos de Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- Estilos css -->
        <link href="../css/contacto.css" rel="stylesheet">
    </head>

    <body>
        
        <!-- Inicio de la barra de navegación -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-white"><img src="../img/Logo.png"> El Arca</h1>                    
            </a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="../Index.php" class="nav-item nav-link active"><img src="../img/iconos/inicio.png" style="width: 15px; height: 20px;vertical-align: middle;">Inicio</a>
                    <a href="../Index.php#acerca" class="nav-item nav-link"><img src="../img/iconos/grupo.png" style="width: 15px; height: 20px;vertical-align: middle;"> Acerca</a>
                    <a href="../carta/Menu.pdf" class="nav-item nav-link"><img src="../img/iconos/menu.png" style="width: 15px; height: 20px;vertical-align: middle;">Menú</a>
                    <a href="./Contacto.php" class="nav-item nav-link"><img src="../img/iconos/reservas.png" style="width: 15px; height: 20px;vertical-align: middle;">Contacto</a>
                </div>
                <a href="./Reservas.php" class="btn btn-iniciosesion py-2 px-4">Haz tu reservación</a>
            </div>
        </nav>

        <div class="container-fluid py-5 bg-color hero-header mb-3">
            <div class="container my-5 py-5">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="display-3 text-white animated slideInLeft">¡Contáctanos!</h1>
                        <p class="text-white animated slideInLeft mb-4 pb-2">Tenemos una gran variedad de bebidas y comida para disfrutar</p>
                    </div> 
                </div>
            </div>
        </div>
        <!-- Fin de la barra de navegación -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="row g-5 mt-3 mb-3">
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item-white rounded pt-3">
                                <div class="p-4 contactoitems">
                                    <h2 class="section-title ff-secondary fw-normal text-start text-primary-green">Llama o mensajea</h2>
                                    <p><i class="fas fa-mobile-alt"></i>  5568760354</p>
                                    <p><i class="fas fa-mobile-alt"></i>  2463315971</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item-white rounded pt-3">
                                <div class="p-4">
                                    <h2 class="section-title ff-secondary fw-normal text-start text-primary-green">Correo electrónico</h2>
                                    <p><i class="fas fa-envelope-open"></i>  restaurantebarelarca@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item-white rounded pt-3">
                                <div class="p-4">
                                    <h2 class="section-title ff-secondary fw-normal text-start text-primary-green">Redes sociales</h2>
                                    <a href="https://www.facebook.com/profile.php?id=100053215637189&mibextid=LQQJ4d" class="btn btn-redsocial py-2 px-4"><i class="fab fa-facebook-square" href=></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.257828810748!2d-98.23725652591601!3d19.314615181939693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfd939075e3a53%3A0x2fbe2e36dd1ecd42!2sEl%20Arca!5e0!3m2!1ses-419!2smx!4v1711852322001!5m2!1ses-419!2smx" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <form action="../Controladores/Contacto/enviarmensajes_controller.php" method="post">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Tu Nombre">
                                            <label for="name">Tu Nombre</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Tu Correo Electrónico">
                                            <label for="email">Tu Correo Electrónico</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Asunto">
                                            <label for="subject">Asunto</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Deja aquí tu mensaje" id="message" style="height: 150px"></textarea>
                                            <label for="message">Mensaje</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Enviar Mensaje</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

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