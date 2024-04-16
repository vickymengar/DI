<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../Lib/Mailer/src/Exception.php';
require '../../Lib/Mailer/src/PHPMailer.php';
require '../../Lib/Mailer/src/SMTP.php';

// Verificar si se recibieron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['name'];
    $app = $_POST['app'];
    $apm = $_POST['apm'];
    $correo = $_POST['email'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $num_personas = $_POST['nopersonas'];
    $zona = $_POST['zona'];
    $mesa = $_POST['mesa'];

    // // Crear una instancia de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configurar el servidor SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp-mail.outlook.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'angelitamagt2702@gmail.com';
        $mail->Password   = 'pzjkyhtqocrhomen';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Configurar el remitente y el destinatario
        $mail->setFrom('angelitamagt2702@gmail.com', 'El Arca');
        $mail->addAddress($correo, $nombre); // Agregar el destinatario proporcionado en el formulario

        // Configurar el contenido del correo electrónico
        $mail->isHTML(true);
        $mail->Subject = "Reservación para: $nombre $app $apm";
        $mail->Body    = " 
                            Gracias por reservar con nosostros aquí están los datos de tu reservación: <br>
                            Nombre: $nombre $app $apm <br>
                            Fecha y hora: $fecha $hora <br>
                            Número de personas: $num_personas
                            En la mesa número $mesa que está en la $zona
                        ";

        // Enviar el correo electrónico
        $mail->send();
        echo '¡El mensaje ha sido enviado!';
        echo $correo;
    } catch (Exception $e) {
        echo $e;
        echo "El mensaje no pudo ser enviado. Error del correo: {$mail->ErrorInfo}";
    }
} else {
    // Si no se recibieron datos del formulario, redirigir a la página del formulario
    // header("Location: formulario_de_contacto.html");
    exit;
}
?>