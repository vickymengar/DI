<?php
include '../../Modelos/BD/conexion.php';
include '../../Modelos/Mensajes/enviarmensajes_model.php';

class EnviarMensajesControlador {
    private $modelo;

    public function __construct($conexion) {
        $this->modelo = new EnviarMensajesModelo($conexion);
    }

    public function enviarMensaje() {
        // Recuperar los datos del formulario
        $nombre = $_POST['nombre'];
        $correoElectronico = $_POST['email'];
        $asunto = $_POST['subject'];
        $mensaje = $_POST['message'];

        // Guardar el mensaje en la base de datos
        $resultado = $this->modelo->guardarMensaje($nombre, $correoElectronico, $asunto, $mensaje);

        // Redireccionar según el resultado
        if ($resultado) {
            // Éxito
            header("Location: mensaje_exitoso.php");
        } else {
            // Error
            header("Location: mensaje_error.php");
        }
    }
}

// Crear instancia del controlador y ejecutar el método enviarMensaje si se envió el formulario
$controlador = new EnviarMensajesControlador($conexion); // $conexion se obtiene del archivo conexion.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controlador->enviarMensaje();
}
?>
