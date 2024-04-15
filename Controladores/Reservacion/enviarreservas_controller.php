<?php
include '../../Modelos/BD/conexion.php';
include '../../Modelos/Reservaciones/enviarreservas_model.php';

class EnviarReservasControlador {
    private $modelo;

    public function __construct($conexion) {
        $this->modelo = new ReservaModelo($conexion);
    }

    public function guardarReserva() {
        // Recuperar los datos del formulario
        $nombre = $_POST['nombre'];
        $apellidoPaterno = $_POST['apellidoPaterno'];
        $apellidoMaterno = $_POST['apellidoMaterno'];
        $correoElectronico = $_POST['correoElectronico'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $numeroPersonas = $_POST['numeroPersonas'];
        $zona = $_POST['zona'];
        $mesa = $_POST['mesa'];

        // Guardar la reserva en la base de datos
        $resultado = $this->modelo->guardarReserva($nombre, $apellidoPaterno, $apellidoMaterno, $correoElectronico, $fecha, $hora, $numeroPersonas, $zona, $mesa);

        // Redireccionar según el resultado
        if ($resultado) {
            // Éxito
            header("Location: reserva_exitosa.php");
        } else {
            // Error
            header("Location: reserva_error.php");
        }
    }
}

// Crear instancia del controlador y ejecutar el método guardarReserva si se envió el formulario
$controlador = new EnviarReservasControlador($conexion);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controlador->guardarReserva();
}
?>
