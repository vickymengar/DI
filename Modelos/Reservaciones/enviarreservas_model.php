<?php
class EnviarReservasModelo {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function guardarReserva($nombre, $apellidoPaterno, $apellidoMaterno, $correoElectronico, $fecha, $hora, $numeroPersonas, $zona, $mesa) {
        // Preparar la consulta SQL para insertar una nueva reserva
        $consulta = $this->conexion->prepare("INSERT INTO reservacion (Nombre, ApellidoP, ApellidoM, Correo, Fecha, Hora, No_Personas, ID_Zona, ID_Mesa) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
        // Verificar si la preparación de la consulta fue exitosa
        if (!$consulta) {
            // Manejar el error en la preparación de la consulta
            die('Error en la preparación de la consulta: ' . $this->conexion->error);
        }
    
        // Vincular parámetros y ejecutar la consulta
        $resultado = $consulta->bind_param("ssssssssi", $nombre, $apellidoPaterno, $apellidoMaterno, $correoElectronico, $fecha, $hora, $numeroPersonas, $zona, $mesa);
    
        // Verificar si la vinculación de parámetros fue exitosa
        if (!$resultado) {
            // Manejar el error en la vinculación de parámetros
            die('Error al vincular parámetros: ' . $consulta->error);
        }
    
        // Ejecutar la consulta
        $resultado = $consulta->execute();
    
        // Devolver true si la consulta fue exitosa, de lo contrario, devolver false
        return $resultado;
    }
    
}
?>
