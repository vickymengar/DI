<?php
// Incluir el archivo de conexión a la base de datos
include '../../Modelos/BD/conexion.php';
// Incluir el modelo de reservas
include '../../Modelos/Contacto/contacto_model.php';

class ReservasController {
    private $contactoModel;

    public function __construct($contactoModel) {
        $this->contactoModel = $contactoModel;
    }

    public function obtenerMensajes() {
        // Obtiene todas las reservas del modelo
        $contacto = $this->contactoModel->obtenerMensajes();

       
         include '../../Vistas/AdminMensajes.php';
    }
    
    // Otras funciones para manejar las acciones del usuario
}
?>
