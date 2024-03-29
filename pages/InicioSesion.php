<!doctype html>
<html lang="en">
<head>
    <title>El Arca | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Recursos_login/css/style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('../Recursos_login/images/Gradientbg.png');
        }
    </style>
</head>
<body> 
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Inicio de sesión</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <h3 class="mb-4 text-center">¿Ya tienes una cuenta?</h3>
                    <form method="post" action="../backend/usuario/iniciarsesion.php" class="signin-form">
                        <div class="form-group">
                            <input type="text" class="form-control" name="correo" placeholder="Correo electrónico" required>
                        </div>
                        <div class="form-group">
                            <input id="password-field" type="password" class="form-control" name="contrasenia" placeholder="Contraseña" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" style="background-color: #3b5284;" class="form-control btn submit px-3">Ingresar</button>
                        </div>
                        <?php 
                            // Mostrar mensaje de error si las credenciales son incorrectas
                            if(isset($mensaje_error)) {
                                echo '<div class="alert alert-danger" role="alert">' . $mensaje_error . '</div>';
                            }
                        ?>
                        <div class="form-group d-md-flex">
                            <div class="w-50">
                                <label class="checkbox-wrap checkbox" style="color: #3b5284;">Recordar
                                    <input type="checkbox" style="color: #3b5284;" checked>
                                    <span class="checkmark" style="color: #3b5284;"></span>
                                </label>
                            </div>
                            <div class="w-50 text-md-right">
                                <a href="#" style="color: #fff">Olvidé mi contraseña</a>
                            </div>
                        </div>
                    </form>
                    <p class="w-100 text-center">&mdash; O ingresa con &mdash;</p>
                    <div class="social d-flex text-center">
                        <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
                        <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="../../Recursos_login/js/jquery.min.js"></script>
<script src="../../Recursos_login/js/popper.js"></script>
<script src="../../Recursos_login/js/bootstrap.min.js"></script>
<script src="../../Recursos_login/js/main.js"></script>
</body>
</html>
