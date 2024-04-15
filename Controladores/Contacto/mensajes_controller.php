<?php
// Incluir el archivo de conexión a la base de datos
include '../../Modelos/BD/conexion.php';
// Incluir el modelo de mensajes
include '../..//Modelos/Mensajes/mensajes_model.php';

class MensajesController {
    private $mensajesModel;

    public function __construct($mensajesModel) {
        $this->mensajesModel = $mensajesModel;
    }

    public function obtenerMensajes() {
        // Obtiene todos los mensajes del modelo
        $mensajes = $this->mensajesModel->obtenerMensajes();

        // Incluir la vista para mostrar los mensajes
        include '../../Vistas/AdminMensajes.php';
    }
    
    // Otras funciones para manejar las acciones del usuario
}

// Crear una nueva instancia de MensajesModel
$mensajesModel = new MensajesModel($conexion);
// Crear una nueva instancia de MensajesController
$mensajesController = new MensajesController($mensajesModel);

// Llamar al método para obtener los mensajes y mostrar la página de mensajes
$mensajesController->obtenerMensajes();

?>
