<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>El Arca</title>
        <link rel="icon" type="image/png" href="../img/Logo.png">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <!-- Estilos de Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- Estilos css -->
        <link href="../css/index.css" rel="stylesheet">
    </head>

    <body>
        <!-- Inicio de la barra de navegación -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-white"><img src="../img/Logo.png"> El Arca</h1>                    
            </a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 pe-4">
                    <a href="../Index.php" class="nav-item nav-link active">Inicio</a>
                    <a href="../Index.php#acerca" class="nav-item nav-link">Acerca</a>
                    <a href="../carta/Menu.pdf" class="nav-item nav-link">Menú</a>
                    <a href="./Contacto.php" class="nav-item nav-link">Contacto</a>
                </div>
                <a href="./Reservas.php" class="btn btn-iniciosesion py-2 px-4">Haz tu reservación</a>
            </div>
        </nav>

        <div class="container-fluid py-5 bg-color hero-header mb-3">
            <div class="container my-5 py-5">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="display-3 text-white animated slideInLeft">¡Reserva en línea ahora!</h1>
                        <p class="text-white animated slideInLeft mb-4 pb-2">Y disfruta de un momento inolvidable con nosotros.</p>
                    </div> 
                </div>
            </div>
        </div>
        <!-- Fin de la barra de navegación -->

        <!-- Inicio de Reservacion -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-0">
                        <div class="col-md-12 d-flex align-items-center">
                            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                                <form>
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <label for="name">Nombre</label>
                                                <input type="text" class="form-control" id="name">
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <label for="name">Apellido paterno</label>
                                                <input type="text" class="form-control" id="app">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <label for="name">Apellido materno</label>
                                                <input type="text" class="form-control" id="apm">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <label for="email">Correo Electrónico</label>
                                                <input type="email" class="form-control" id="email">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating date" id="date3" data-target-input="nearest">
                                                <label for="datetime">Fecha</label>
                                                <input type="text" class="form-control datetimepicker-input" id="date" placeholder="Fecha y Hora" data-target="#date3" data-toggle="datetimepicker" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating date" id="date3" data-target-input="nearest">
                                                <label for="datetime">Hora</label>
                                                <input type="text" class="form-control datetimepicker-input" id="time" placeholder="Fecha y Hora" data-target="#date3" data-toggle="datetimepicker" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <label for="select1">Número de Personas</label>
                                                <select class="form-select" id="select1">
                                                    <option value="1"></option>
                                                    <option value="2">1 Persona</option>
                                                    <option value="3">2 Personas</option>
                                                    <option value="4">3 Personas</option>
                                                    <option value="5">4 Personas</option>
                                                    <option value="6">5 Personas</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <label for="zona">Zona</label>
                                                <input type="text" class="form-control" id="zona">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <label for="mesa">Mesa</label>
                                                <input type="text" class="form-control" id="mesa">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">Reservar Ahora</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
        </div>
        
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content rounded-0">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Video de Youtube</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Proporción de aspecto 16:9 -->
                                <div class="ratio ratio-16x9">
                                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        <!-- Fin de Reservacion-->

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