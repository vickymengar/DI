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
            <form action="#" method="post">
                <h1 class="is">Inicia sesión</h1>
                <?php
                            include "../Modelos/BD/conexion.php";
                            include "../Controladores/Login/controlador_login.php";
                            ?>
                <input type="email" placeholder="Correo electrónico" id="correo" name="correo"/>
                <input type="password" placeholder="Contraseña" id="contrasenia" name="contrasenia"/>
                <a href="#">¿Olvidaste tu contraseña?</a>
                <button class="is" id="iniciarsesion" name="btnIngresar">Iniciar sesión</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
            </div>
        </div>
    </div>
</body>
</html>

