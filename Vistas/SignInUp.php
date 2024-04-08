<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>El Arca</title>
        <link rel="icon" type="image/png" href="../img/Logo.png">

        <link href="../css/login.css" rel="stylesheet">
    </head> 
    <body>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="#">
                    <h1 class="cc">Restaurar contraseña</h1>
                    <p>Ingresa tu correo electrónico para reestablecer tu cuenta</p>
                    <input type="email" placeholder="Correo electrónico" id="correo" />
                    <button class="cc" id="registrar">Enviar</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="#">
                    <h1 class="is">Inicia sesión</h1>
                    <?php
                        include "../Modelos/BD/conexion.php";
                        include "../Controladores/Login/controlador_login.php";
                    ?>
                    <input type="email" placeholder="Correo electrónico" id="correo"/>
                    <input type="password" placeholder="Contraseña" id="contrasenia"/>
                    <button class="is" id="iniciarsesion">Iniciar sesión</button>
                    <?php 
                            // Mostrar mensaje de error si las credenciales son incorrectas
                            if(isset($mensaje_error)) {
                                echo '<div class="alert alert-danger" role="alert">' . $mensaje_error . '</div>';
                            }
                        ?>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h3>¿Recordaste tu contraseña antes de cambiarla?</h3>
                        <button class="ghost" id="signIn">Vuelve al inicio de sesión</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h3>¿Olvidaste tu contraseña?</h3>
                        <button class="ghost" id="signUp">Restaurar cuenta</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="../js/login.js"></script>
</html>

