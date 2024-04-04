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
            <div class="form-container sign-in-container">
                <form action="../backend/usuario/iniciarsesion.php" method="post">
                        <h1 class="is">Inicia sesión</h1>
                        <input type="email" placeholder="Correo electrónico" id="correo" name="correo"/>
                        <input type="password" placeholder="Contraseña" id="contrasenia" name="contrasenia"/>
                        <a href="#">¿Olvidaste tu contraseña?</a>
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
                </div>
            </div>
        </div>
    </body>
    <script src="../js/login.js"></script>
</html>