<?php
class EnviarMensajesModelo {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function guardarMensaje($nombre, $correoElectronico, $asunto, $mensaje) {
        // Preparar la consulta SQL para insertar el mensaje en la base de datos
        $consulta = $this->conexion->prepare("INSERT INTO mensaje (NombrePer, CorreoPer, Asunto, Mensaje) VALUES (?, ?, ?, ?)");

        // Verificar si la preparación de la consulta fue exitosa
        if (!$consulta) {
            // Si la preparación de la consulta falla, mostrar el error
            die('Error en la preparación de la consulta: ' . $this->conexion->error);
        }

        // Vincular parámetros y ejecutar la consulta
        $resultado = $consulta->bind_param("ssss", $nombre, $correoElectronico, $asunto, $mensaje);
        
        // Verificar si la vinculación de parámetros fue exitosa
        if (!$resultado) {
            // Si la vinculación de parámetros falla, mostrar el error
            die('Error al vincular parámetros: ' . $consulta->error);
        }

        // Ejecutar la consulta
        $resultado = $consulta->execute();

        // Verificar si la ejecución de la consulta fue exitosa
        if (!$resultado) {
            // Si la ejecución de la consulta falla, mostrar el error
            die('Error al ejecutar la consulta: ' . $consulta->error);
        }

        // Devolver true si la consulta fue exitosa, de lo contrario, devolver false
        return $resultado;
    }
}
?>
