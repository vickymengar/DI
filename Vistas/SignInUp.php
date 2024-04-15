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
                    <input type="email" placeholder="Correo electrónico" id="Recorreo" />
                    <button class="cc" id="registrar">Enviar</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form id="login-form" action="#" method="post">
                    <h1 class="is">Inicia sesión</h1>
                    <input type="email" placeholder="Correo electrónico" id="Logcorreo" name="Logcorreo"/>
                    <input type="password" placeholder="Contraseña" id="contrasenia" name="contrasenia"/>
                    <button class="is" id="iniciarsesion">Iniciar sesión</button>
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


        <script>
document.getElementById('iniciarsesion').addEventListener('click', function(event) {
    event.preventDefault();

    var correo = document.getElementById('Logcorreo').value;
    var contrasenia = document.getElementById('contrasenia').value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../Controladores/Login/auth_controller.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            if (this.responseText === 'success') {
                alert('Inicio de sesión exitoso!');
                window.location.href = '../Controladores/Reservacion/reservas_controller.php';
            } else {
                alert('Correo electrónico o contraseña incorrectos.');
            }
        }
    }

    xhr.send("Logcorreo=" + correo + "&contrasenia=" + contrasenia);
});
</script>

    </body>
    



</html>

