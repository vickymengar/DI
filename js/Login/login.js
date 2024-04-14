document.addEventListener("DOMContentLoaded", function() {
    const loginForm = document.getElementById('login-form');

    loginForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const email = document.getElementById('Logcorreo').value;
        const password = document.getElementById('contrasenia').value;

        // Enviar datos de inicio de sesión al servidor usando AJAX
        const xhr = new XMLHttpRequest();
        xhr.open('POST', '../Controladores/Login/auth_controller.php'); // Cambia la ruta si es diferente
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                if (xhr.responseText.trim() === 'success') {
                    window.location.href = '../Vistas/AdminReservas.php'; // Redirigir al dashboard en caso de éxito
                } else {
                    alert('Credenciales incorrectas'); // Mostrar mensaje de error en caso de fallo
                }
            }
        };
        xhr.send('action=login&email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password));
    });
});
