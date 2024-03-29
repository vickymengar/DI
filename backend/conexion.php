<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Dirección del servidor
$username = "root"; // Nombre de usuariopara conectarse a la base de datos
$password = ""; // Contraseña del usuario
$database = "ElArcaReservas"; // Nombre de la base de datos

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $database);

// Establecer la codificación de caracteres
$conexion->set_charset("utf8mb4");

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

?>
