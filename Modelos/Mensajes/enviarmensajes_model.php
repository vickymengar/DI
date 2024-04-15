<?php
class EnviarMensajesModelo {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function guardarMensaje($nombre, $correoElectronico, $asunto, $mensaje) {
        // Preparar la consulta SQL para insertar el mensaje en la base de datos
        $consulta = $this->conexion->prepare("INSERT INTO mensajes (nombre, correo_electronico, asunto, mensaje) VALUES (?, ?, ?, ?)");

        // Vincular parámetros y ejecutar la consulta
        $consulta->bind_param("ssss", $nombre, $correoElectronico, $asunto, $mensaje);
        $resultado = $consulta->execute();

        // Devolver true si la consulta fue exitosa, de lo contrario, devolver false
        return $resultado;
    }
}
?>
