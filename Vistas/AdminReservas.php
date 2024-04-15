<?php

session_start();

if (empty($_SESSION["ID"])) {
    header("Location: ../Vistas/SignInUp.php");
}
?>
<!DOCTYPE html>
<html>

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
    <!-- Estilos css -->
    <link href="../../css/index.css" rel="stylesheet">
</head>

<body>
    <!-- Inicio de la barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-white"><img src="../../img/Logo.png"> El Arca</h1>
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="../../carta/Menu.pdf" class="nav-item nav-link">
                    <img src="../../img/iconos/menu.png" style="width: 15px; height: 20px;vertical-align: middle;">Menú
                </a>
                <a href="../../Controladores/Reservacion/reservas_controller.php" class="nav-item nav-link">
                    <img src="../../img/iconos/reservas2.png" style="width: 20px; height: 15px;vertical-align: middle;"> Reservas
                </a>
                <a href="../../Controladores/Contacto/mensajes_controller.php" class="nav-item nav-link">
                <img src="../../img/iconos/reservas.png" style="width: 15px; height: 20px;vertical-align: middle;"> Mensajes
                </a>
            </div>
            <a href="../../Controladores/Logout/controlador_cerrar_session.php" class="btn btn-iniciosesion py-2 px-4">Cerrar sesión</a>
        </div>
    </nav>

    <div class="container-fluid py-5 bg-color hero-header mb-3">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 text-white animated slideInLeft">Administración de Reservas</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la barra de navegación -->

    <!-- Inicio de la tabla de reservaciones -->
    <!-- Tabla de reservas -->
    <div class="container">
    <h2>Reservas</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Correo</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Número de Personas</th>
                <th>Zona</th>
                <th>Mesa</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Verificar si $reservas está definido y no es nulo
            if (isset($reservas) && !empty($reservas)) {
                // Iterar sobre las reservas y mostrar cada reserva en una fila de la tabla
                foreach ($reservas as $reserva) {
                    echo "<tr>";
                    echo "<td>" . $reserva['Nombre'] . "</td>";
                    echo "<td>" . $reserva['ApellidoP'] . "</td>";
                    echo "<td>" . $reserva['ApellidoM'] . "</td>";
                    echo "<td>" . $reserva['Correo'] . "</td>";
                    echo "<td>" . $reserva['Fecha'] . "</td>";
                    echo "<td>" . $reserva['Hora'] . "</td>";
                    echo "<td>" . $reserva['No_Personas'] . "</td>";
                    echo "<td>" . $reserva['NombreZona'] . "</td>"; // Mostramos el nombre de la zona
                    echo "<td>" . $reserva['ID_Mesa'] . "</td>"; // Aquí podrías mostrar el número de la mesa o algún otro identificador de la mesa
                    echo "<td>" . $reserva['Estado'] . "</td>";
                    // Aquí podrías agregar un enlace para editar o eliminar la reserva
                    echo "<td class='d-flex align-items-center'>"; // Agrega la clase d-flex para hacer los botones flexibles
                   echo "<button class='btn btn-danger me-1' onclick='cancelarReserva(" . $reserva['ID'] . ")'>Cancelar</button>";
                    echo "<button class='btn btn-warning me-1' onclick='marcarEnCurso(" . $reserva['ID'] . ")'>En curso</button>";
                    echo "<button class='btn btn-info me-1' onclick='marcarPendiente(" . $reserva['ID'] . ")'>Pendiente</button>";
                    echo "<button class='btn btn-success' onclick='marcarEjecutada(" . $reserva['ID'] . ")'>Ejecutada</button>";

                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                // Manejar el caso en que no hay reservas
                echo "<tr><td colspan='11'>No hay reservas disponibles.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

    <!-- Fin de de la tabla de reservaciones-->


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
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    
        <script>
        function cancelarReserva(idReserva) {
            cambiarEstadoReserva(idReserva, 'Cancelada');
        }

        function marcarEnCurso(idReserva) {
            cambiarEstadoReserva(idReserva, 'En curso');
        }

        function marcarPendiente(idReserva) {
            cambiarEstadoReserva(idReserva, 'Pendiente');
        }

        function marcarEjecutada(idReserva) {
            cambiarEstadoReserva(idReserva, 'Ejecutada');
        }

        function cambiarEstadoReserva(idReserva, nuevoEstado) {
            // Aquí puedes hacer una solicitud AJAX a tu controlador de PHP para cambiar el estado de la reserva
            $.ajax({
                url: '../../Controladores/Reservacion/reservas_controller.php', // Reemplaza esto con la ruta a tu controlador de PHP
                method: 'POST',
                data: {
                    action: 'cambiarEstadoReserva',
                    idReserva: idReserva,
                    nuevoEstado: nuevoEstado
                },
                success: function(response) {
                if(response) {
                    alert('Estado de la reserva actualizado con éxito');
                    location.reload(); // Recarga la página para actualizar la tabla
                } else {
                    alert('Hubo un error al actualizar el estado de la reserva');
                }
            }

        });
        }

        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    
</body>

</html>
