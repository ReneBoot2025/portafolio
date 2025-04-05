<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $destino = "reneraul123@gmail.com";
    $asunto = "Mensaje de $nombre";
    $contenido = "Nombre: $nombre\nEmail: $email\nMensaje: $mensaje";

    if (mail($destino, $asunto, $contenido)) {
        echo "<script>alert('Mensaje enviado correctamente'); window.history.back();</script>";
    } else {
        echo "<script>alert('Error al enviar el mensaje'); window.history.back();</script>";
    }
}
?>
