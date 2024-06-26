<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Arca</title>
    <link rel="icon" type="image/png" href="../img/Logo.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Estilos css -->
    <link href="../css/index.css" rel="stylesheet">
    <!-- Bibliotecas para el datepicker y timepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.es.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css"
        rel="stylesheet">
</head>

<body>
    <!-- Inicio de la barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-white"><img src="../img/Logo.png"> El Arca</h1>
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="../Index.php" class="nav-item nav-link active"><img
                        src="../img/iconos/inicio.png"
                        style="width: 15px; height: 20px;vertical-align: middle;">Inicio</a>
                <a href="../Index.php#acerca" class="nav-item nav-link"><img
                        src="../img/iconos/grupo.png"
                        style="width: 15px; height: 20px;vertical-align: middle;"> Acerca</a>
                <a href="../carta/Menu.pdf" class="nav-item nav-link"><img
                        src="../img/iconos/menu.png"
                        style="width: 15px; height: 20px;vertical-align: middle;">Menú</a>
                <a href="./Contacto.php" class="nav-item nav-link"><img
                        src="../img/iconos/reservas.png"
                        style="width: 15px; height: 20px;vertical-align: middle;">Contacto</a>
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
                <form action="../Controladores/Reservacion/enviarreservas_controller.php" method="post">
    <div class="row g-3">
        <div class="col-md-4">
            <div class="form-floating">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                <label for="nombre">Nombre</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
                <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" placeholder="Apellido paterno" required>
                <label for="apellidoPaterno">Apellido paterno</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
                <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" placeholder="Apellido materno">
                <label for="apellidoMaterno">Apellido materno</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
                <input type="email" class="form-control" id="correoElectronico" name="correoElectronico" placeholder="Correo Electrónico" required>
                <label for="correoElectronico">Correo Electrónico</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="fecha" name="fecha" placeholder="Fecha" required>
                <label for="fecha">Fecha</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="hora" name="hora" placeholder="Hora" required>
                <label for="hora">Hora</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <select class="form-select" id="nopersonas" name="numeroPersonas" required>
                    <option value="" disabled selected></option>
                    <option value="2">1 Persona</option>
                    <option value="3">2 Personas</option>
                    <option value="4">3 Personas</option>
                    <option value="5">4 Personas</option>
                    <option value="6">5 Personas</option>
                </select>
                <label for="nopersonas">Número de Personas</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <select class="form-select" id="zona" name="zona" required>
                    <option value="" disabled selected></option>
                    <option value="2">Zona A</option>
                    <option value="3">Zona B</option>
                    <option value="4">Zona C</option>
                </select>
                <label for="zona">Zona</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <select class="form-select" id="mesa" name="mesa" required>
                    <option value="" disabled selected></option>
                    <option value="2">Mesa 1</option>
                    <option value="3">Mesa 2</option>
                    <option value="4">Mesa 3</option>
                    <option value="4">Mesa 4</option>
                </select>
                <label for="mesa">Mesa</label>
            </div>
        </div>

    </div>
        <div class="row">
        <div class="col-6 mt-3">
            <button class="btn btn-primary w-100 py-3" type="submit">Reservar Ahora</button>
        </div>
        <div class="col-6 mt-3">
            <button class="btn btn-secondary w-100 py-3" type="reset">Limpiar Formulario</button>
        </div>
    </div>
</form>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- Inicializar datepicker y timepicker -->
    <script>
        // Inicializar el datpicker
        $('#fecha').datepicker({
            format: 'yyyy-mm-dd',
            language: 'es',
            autoclose: true,
            todayHighlight: true
        });
        

        // Inicializar el timepicker
        $('#hora').timepicker({
            showMeridian: false,
            showSeconds: false,
            defaultTime: false
        });
    </script>
</body>

</html>
