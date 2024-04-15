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
        // Verifica las credenciales del usuario
        $isValid = $this->authModel->verifyCredentials($email, $password);

        if ($isValid) {
            // Las credenciales son válidas
            // Inicia la sesión y redirige al usuario a la página principal
            session_start();
            $_SESSION['ID'] = $email;
            echo 'success';
        } else {
            // Las credenciales no son válidas
            // Muestra un mensaje de error
            echo 'error';
        }
    }
}

// Crear una nueva instancia de AuthModel
$authModel = new AuthModel($conexion);
// Crear una nueva instancia de AuthController
$authController = new AuthController($authModel);

if (isset($_POST['Logcorreo']) && isset($_POST['contrasenia'])) {
    $correo = $_POST['Logcorreo'];
    $contrasenia = $_POST['contrasenia'];
    // Llamar al método de inicio de sesión del controlador
    $authController->login($correo, $contrasenia);
}
?>
