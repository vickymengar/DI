<?php
// Incluir el archivo de conexión a la base de datos
include '../../Modelos/BD/conexion.php';
// Incluir el modelo de autenticación
include '../../Modelos/Login/auth_model.php';

class AuthController {
    private $authModel;

    public function __construct($authModel) {
        $this->authModel = $authModel;
    }

    public function login($email, $password) {
        if ($this->authModel->verifyCredentials($email, $password)) {
            session_start();
            $_SESSION['ID'] = $email;
            return true; // Autenticación exitosa
        } else {
            return false; // Autenticación fallida
        }
    }
}

// Inicialización del modelo y del controlador
$authModel = new AuthModel($conexion);
$authController = new AuthController($authModel);

// Manejar la solicitud de inicio de sesión
if (isset($_POST['action']) && $_POST['action'] == 'login') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo $authController->login($email, $password) ? "success" : "error";
}

// Cerrar la conexión después de su uso
$conexion->close();
?>
