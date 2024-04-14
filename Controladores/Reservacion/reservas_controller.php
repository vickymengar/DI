<?php
// Incluir el archivo de conexión a la base de datos
include '../../Modelos/BD/conexion.php';
// Incluir el modelo de reservas
include '../../Modelos/Reservaciones/reservas_model.php';

class ReservasController {
    private $reservasModel;

    public function __construct($reservasModel) {
        $this->reservasModel = $reservasModel;
    }

    public function obtenerReservas() {
        // Obtener las reservas utilizando el modelo
        $reservas = $this->reservasModel->obtenerReservas();
        
        // Incluir la vista para mostrar las reservas
        include '../../Vistas/AdminReservas.php';
    }

    public function agregarReserva($datosReserva) {
        // Aquí puedes implementar la lógica para agregar una nueva reserva
    }

    public function actualizarReserva($idReserva, $datosActualizados) {
        // Aquí puedes implementar la lógica para actualizar una reserva existente
    }

    public function eliminarReserva($idReserva) {
        // Aquí puedes implementar la lógica para eliminar una reserva
    }

    // Otras funciones del controlador...
}

// Inicialización del modelo y del controlador
$reservasModel = new ReservasModel($conexion); // Pasa la conexión como argumento
$reservasController = new ReservasController($reservasModel);

// Obtener y mostrar las reservas
$reservasController->obtenerReservas();

// Resto del código...
?>
