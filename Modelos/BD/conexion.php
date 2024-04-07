<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Dirección del servidor
$username = "root"; // Nombre de usuario para conectarse a la base de datos
$password = ""; // Contraseña del usuario
$database = "ElArcaReservas"; // Nombre de la base de datos

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conexion->connect_error) {
    // Manejar el error de conexión de manera más elegante
    // Por ejemplo, podrías redirigir a una página de error o registrar el error en un archivo de registro
    die("Conexión fallida: " . $conexion->connect_error);
}

// Establecer la codificación de caracteres
if (!$conexion->set_charset("utf8mb4")) {
    // Manejar el error de establecimiento de caracteres
    // Esto puede ser crítico si tu aplicación depende de una codificación de caracteres específica
    die("Error al establecer el conjunto de caracteres: " . $conexion->error);
}

// La conexión se ha establecido correctamente en este punto
// Ahora puedes realizar operaciones en la base de datos
?>
