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
        // Obtiene todas las reservas del modelo
        $reservas = $this->reservasModel->obtenerReservas();

       
         include '../../Vistas/AdminReservas.php';
    }

    public function cambiarEstadoReserva($idReserva, $nuevoEstado) {
        return $this->reservasModel->cambiarEstadoReserva($idReserva, $nuevoEstado);
    }
    
}
 // Crear una nueva instancia de ReservasModel
 $reservasModel = new ReservasModel($conexion);
 // Crear una nueva instancia de ReservasController
 $reservasController = new ReservasController($reservasModel);

 // Llamar al método para obtener las reservas y mostrar la página de reservas
 $reservasController->obtenerReservas();

 $reservasModel = new ReservasModel($conexion);
// Crear una nueva instancia de ReservasController
$reservasController = new ReservasController($reservasModel);

$action = $_POST['action'];

if ($action == 'cambiarEstadoReserva') {
    $idReserva = $_POST['idReserva'];
    $nuevoEstado = $_POST['nuevoEstado'];
    $success = $reservasController->cambiarEstadoReserva($idReserva, $nuevoEstado);

    echo json_encode(['success' => $success]);
}
?>
