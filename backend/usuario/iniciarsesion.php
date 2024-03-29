<?php
session_start(); // Iniciar la sesión para almacenar datos de sesión

// Verificar si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Incluir el archivo de conexión a la base de datos
    include '../conexion.php';

    // Obtener los valores del formulario
    $correo = $conexion->real_escape_string($_POST['correo']);
    $contrasenia = $conexion->real_escape_string($_POST['contrasenia']);

    // Consulta SQL para verificar las credenciales del usuario
    $sql = "SELECT * FROM Usuario WHERE Correo = '$correo' AND Contrasenia = '$contrasenia'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows == 1) {
        // Las credenciales son correctas
        // Iniciar sesión y redirigir al usuario a la página de inicio
        $_SESSION['correo'] = $correo;
        header("Location: ../../index.php");
        exit();
    } else {
        // Las credenciales son incorrectas
        $mensaje_error = "El correo electrónico o la contraseña son incorrectos.";
        echo $mensaje_error;
    }
}
?>
