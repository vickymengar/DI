<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Arca - Administración de Reservas</title>
    <link rel="icon" type="image/png" href="../../img/Logo.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Estilos css -->
    <style>
        body {
            font-family: 'Lato';
            font-weight: 300;
        }

        .container {
            text-align: center;
        }

        .btn {
            font-family: 'Lato';
            font-weight: 500;
            text-transform: uppercase;
            transition: .5s;
        }

        .btn.btn-primary,
        .btn.btn-secondary {
            border-radius: 20px;
        }

        .btn.btn-primary {
            color: #ffffff;
            background-color: #027997;
            border-color: #027997;
        }

        .btn.btn-secondary {
            color: #027997;
            background-color: #cbe54e;
            border-color: #cbe54e;
        }

        .btn.btn-iniciosesion {
            border-radius: 20px;
            color: #027997;
            background-color: #cbe54e;
            border-color: #cbe54e;
        }

        .btn-lg-square {
            width: 48px;
            height: 48px;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: normal;
            border-radius: 2px;
        }

        .bg-color {
            background: linear-gradient(90deg, #3a5183 0%, #027997 100%);
        }

        .bg-section {
            background: linear-gradient(90deg, #cbe54e 0%, #8bc34a 100%);
        }

        /* CSS personalizado para cambiar el color de la tabla */
        .custom-table {
            background-color: #ffff;
        }

        /* CSS personalizado para cambiar el color del encabezado y los bordes */
        .custom-table thead {
            background-color: #343a40;
            color: white;
        }

        .custom-table th,
        .custom-table td {
            border-color: #027997;
        }
    </style>
</head>

<body>
    <!-- Inicio de la barra de navegación -->
    <!-- Inserta el código de la barra de navegación aquí -->
    <nav class="navbar navbar-expand-lg navbar-dark px-4 px-lg-5 py-3 py-lg-0"
        style="background: linear-gradient(90deg, #3a5183 0%, #027997 100%);">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-white"><img src="../../img/Logo.png"> El Arca</h1>
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="../Index.php" class="nav-item nav-link active"><img src="../img/iconos/inicio.png"
                        style="width: 15px; height: 20px;vertical-align: middle;">Inicio</a>
                <a href="../Index.php#acerca" class="nav-item nav-link"><img src="../img/iconos/grupo.png"
                        style="width: 15px; height: 20px;vertical-align: middle;"> Acerca</a>
                <a href="../carta/Menu.pdf" class="nav-item nav-link"><img src="../img/iconos/menu.png"
                        style="width: 15px; height: 20px;vertical-align: middle;">Menú</a>
                <a href="./Contacto.php" class="nav-item nav-link"><img src="../img/iconos/reservas.png"
                        style="width: 15px; height: 20px;vertical-align: middle;">Contacto</a>
            </div>
            <a href="./Reservas.php" class="btn btn-iniciosesion py-2 px-4">Haz tu reservación</a>
        </div>
    </nav>


    <!-- Fin de la barra de navegación -->

    <div class="container mt-5">
        <h2>Resumen de Reserva</h2>
        <p>¡Gracias por reservar con nosotros!</p>
        <p>Estos son los detalles de tu reservación</p>
        <form id="reservation-form" action="guardar_reserva.php" method="post">
            <div class="reservation-summary">
                <p class="mt-3"><strong>Reserva a nombre de:</strong></p>
                <input name="nombre">

                <p class="mt-3"><strong>Correo electrónico:</strong></p>
                <input name="email">

                <p class="mt-3"><strong>Fecha:</strong></p>
                <input name="fecha">

                <p class="mt-3"><strong>Hora:</strong></p>
                <input name="hora">

                <p class="mt-3"><strong>No. personas:</strong></p>
                <input name="personas">

                <p class="mt-3"><strong>Mesa:</strong></p>
                <input name="mesa">

                <p class="mt-3"><strong>Zona:</strong></p>
                <input name="zona">
            </div>
            <div class="btn-container mt-3">
                <!-- Botón para cancelar -->
                <button type="button" class="btn btn-secondary cancel-btn">Cancelar cita</button>
            </div>
        </form>
    </div>

    <!-- Inicio de Pie de página -->
    <footer>
    <div class="container-fluid bg-color text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <p href="#">&copy; El Arca, todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </div>
    </footer>
    <!-- Fin de Pie de página -->
    <!-- Template Javascript -->
    <!-- Inserta los scripts necesarios aquí -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>
