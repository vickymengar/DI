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
                    <h1 class="cc">Crea una cuenta</h1>
                    <input type="text" placeholder="Nombre" id="usuario" />
                    <input type="text" placeholder="Apellido Paterno" id="ap_usuario" />
                    <input type="text" placeholder="Apellido Materno" id="am_usuario" />
                    <input type="email" placeholder="Correo electrónico" id="correo" />
                    <input type="cellphone" placeholder="Teléfono celular" id="celular" />
                    <input type="password" placeholder="Contraseña" id="contrasenia" />
                    <button class="cc" id="registrar">Registrarse</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="#">
                    <h1 class="is">Inicia sesión</h1>
                    <input type="email" placeholder="Correo electrónico" id="correo"/>
                    <input type="password" placeholder="Contraseña" id="contrasenia"/>
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
                    <div class="overlay-panel overlay-left">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <button class="ghost" id="signIn">Iniciar sesión</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h3>¿No tienes una cuenta todavía?</h3>
                        <button class="ghost" id="signUp">Registrarse</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="../js/login.js"></script>
</html>