<?php
class EnviarReservasModelo {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function guardarReserva($nombre, $apellidoPaterno, $apellidoMaterno, $correoElectronico, $fecha, $hora, $numeroPersonas, $zona, $mesa) {
        // Preparar la consulta SQL para insertar una nueva reserva
        $consulta = $this->conexion->prepare("INSERT INTO reservas (nombre, apellido_paterno, apellido_materno, correo_electronico, fecha, hora, numero_personas, zona, mesa) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

        // Vincular parámetros y ejecutar la consulta
        $consulta->bind_param("sssssssss", $nombre, $apellidoPaterno, $apellidoMaterno, $correoElectronico, $fecha, $hora, $numeroPersonas, $zona, $mesa);
        $resultado = $consulta->execute();

        // Devolver true si la consulta fue exitosa, de lo contrario, devolver false
        return $resultado;
    }
}
?>
