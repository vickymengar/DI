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
        $nombre = $_POST['NombrePer'];
        $correoElectronico = $_POST['CorreoPer'];
        $asunto = $_POST['Asunto'];
        $mensaje = $_POST['Mensaje'];

        // Guardar el mensaje en la base de datos
        $resultado = $this->modelo->guardarMensaje($nombre, $correoElectronico, $asunto, $mensaje);

        // Redireccionar según el resultado
        if ($resultado) {
            // Éxito
            header("Location: mensaje_exitoso.php");
            exit();
        } else {
            // Error
            header("Location: mensaje_error.php");
            exit();
        }
    }
}

// Crear instancia del controlador y ejecutar el método enviarMensaje si se envió el formulario
$controlador = new EnviarMensajesControlador($conexion);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controlador->enviarMensaje();
}
?>
