<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Imagenes/Fondo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Monster Gym Fitness Center</title>
</head>

<?php
// Cargar PHPMailer manualmente
require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger y limpiar los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Crear instancia de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP (Gmail)
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'netfexprogrammer@gmail.com'; // correo del gym
        $mail->Password = 'jsrjacnksprobdbj'; // contraseña de google
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Configuración del correo
        $mail->setFrom($email, $nombre);
        $mail->addAddress('netfexprogrammer@gmail.com'); // correo del gym
        $mail->Subject = 'Mensaje para Monster Gym';
        $mail->Body = "Nombre del client@: $nombre\nCorreo del client@: $email\nMensaje recido:\n$mensaje";
        $mail->CharSet = 'UTF-8';

        // Enviar el correo
        $mail->send();
        // Mensaje de éxito estilizado
        echo "<!DOCTYPE html><html lang='es'><head><meta charset='UTF-8'>";
        echo "<style>
                body { font-family: Arial, sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
                .alert { max-width: 500px; padding: 20px; border-radius: 10px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
                .success { background-color: #dff0d8; border: 2px solid #3c763d; color: #3c763d; }
                .error { background-color: #f2dede; border: 2px solid #a94442; color: #a94442; }
                .warning { background-color: #fcf8e3; border: 2px solid #8a6d3b; color: #8a6d3b; }
                h2 { margin: 0 0 10px; font-size: 24px; }
                p { margin: 0 0 15px; font-size: 16px; }
                a { display: inline-block; padding: 10px 20px; background-color: #333; color: #fff; text-decoration: none; border-radius: 5px; transition: background-color 0.3s; }
                a:hover { background-color: #555; }
              </style>";
        echo "</head><body>";
        echo "<div class='alert success'>";
        echo "<h2>¡Mensaje enviado con éxito, $nombre!</h2>";
        echo "<p>Gracias por contactarte conmigo. Hemos recibido tu mensaje y te responderé en breve a tu correo $email. ¡Estoy a las órdenes siempre!</p>";
        echo "<a href='index.php'>Volver al formulario</a>"; // Cambiado a index.html
        echo "</div></body></html>";
    } catch (Exception $e) {
        // Mensaje de error estilizado
        echo "<!DOCTYPE html><html lang='es'><head><meta charset='UTF-8'>";
        echo "<style>
                body { font-family: Arial, sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
                .alert { max-width: 500px; padding: 20px; border-radius: 10px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
                .success { background-color: #dff0d8; border: 2px solid #3c763d; color: #3c763d; }
                .error { background-color: #f2dede; border: 2px solid #a94442; color: #a94442; }
                .warning { background-color: #fcf8e3; border: 2px solid #8a6d3b; color: #8a6d3b; }
                h2 { margin: 0 0 10px; font-size: 24px; }
                p { margin: 0 0 15px; font-size: 16px; }
                a { display: inline-block; padding: 10px 20px; background-color: #333; color: #fff; text-decoration: none; border-radius: 5px; transition: background-color 0.3s; }
                a:hover { background-color: #555; }
              </style>";
        echo "</head><body>";
        echo "<div class='alert error'>";
        echo "<h2>¡Ups! Algo salió mal</h2>";
        echo "<p>No pudimos enviar tu mensaje al equipo de Monster Gym. Error: {$mail->ErrorInfo}. Intenta de nuevo o escríbenos a netfexprogrammer@gmail.com.</p>";
        echo "<a href='index.php'>Volver a intentarlo</a>"; // Cambiado a index.html
        echo "</div></body></html>";
    }
} else {
    // Mensaje de acceso directo estilizado
    echo "<!DOCTYPE html><html lang='es'><head><meta charset='UTF-8'>";
    echo "<style>
            body { font-family: Arial, sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
            .alert { max-width: 500px; padding: 20px; border-radius: 10px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
            .success { background-color: #dff0d8; border: 2px solid #3c763d; color: #3c763d; }
            .error { background-color: #f2dede; border: 2px solid #a94442; color: #a94442; }
            .warning { background-color: #fcf8e3; border: 2px solid #8a6d3b; color: #8a6d3b; }
            h2 { margin: 0 0 10px; font-size: 24px; }
            p { margin: 0 0 15px; font-size: 16px; }
            a { display: inline-block; padding: 10px 20px; background-color: #333; color: #fff; text-decoration: none; border-radius: 5px; transition: background-color 0.3s; }
            a:hover { background-color: #555; }
          </style>";
    echo "</head><body>";
    echo "<div class='alert warning'>";
    echo "<h2>¡Ruta incorrecta!</h2>";
    echo "<p>Parece que intentaste acceder directamente. Usa el formulario de contacto de Monster Gym Fitness Center para enviarnos tu mensaje.</p>";
    echo "<a href='index.php'>Ir al formulario</a>";
    echo "</div></body></html>";
}
?>