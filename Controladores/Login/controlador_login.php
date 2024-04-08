<?php
// Iniciar o reanudar una sesión
session_start();

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnIngresar"])) {
    // Verificar si los campos de usuario y contraseña no están vacíos
    if (!empty($_POST["Logcorreo"]) && !empty($_POST["contrasenia"])) {
        // Incluir el archivo de conexión a la base de datos
        include "../Modelos/BD/conexion.php";

        // Limpiar los datos del usuario y la contraseña para prevenir la inyección de SQL
        $usuario = htmlspecialchars($_POST["Logcorreo"]);
        $password = htmlspecialchars($_POST["contrasenia"]);

        // Preparar la consulta utilizando sentencias preparadas para prevenir la inyección de SQL
        $sql = "SELECT * FROM administrador WHERE Correo = ? AND Contrasenia = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("ss", $usuario, $password); // "ss" indica que ambos parámetros son cadenas

        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();

        // Verificar si se encontró un usuario con las credenciales proporcionadas
        if ($result) {
            // Inicio de sesión exitoso, establecer variables de sesión
            $_SESSION["ID"] = $usuario;

            // Redirigir al usuario a la página de inicio
            header("Location: ../Vistas/AdminReservas.php");
            exit();
        } else {
            // No se encontró ningún usuario con las credenciales proporcionadas
            echo "<div class='alert alert-danger'>Acceso denegado</div>";
        }
    } else {
        // Uno o ambos campos están vacíos
        echo "<div class='alert alert-danger'>Por favor, rellena todos los campos</div>";
    }
}
?>
