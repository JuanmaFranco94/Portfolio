<?php
if(isset($_POST['submit'])) {
    $to = "juanmatiasfranco@outlook.es"; // Correo donde recibirás los mensajes
    $subject = "Mensaje desde tu sitio web"; // Asunto del mensaje

    // Aquí se guardan los campos del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Crea el cuerpo del mensaje
    $body = "De: $name\nEmail: $email\nMensaje:\n$message";

    // Envia el mensaje
    mail($to, $subject, $body);

    // Muestra un mensaje de éxito
    echo "¡Gracias por tu mensaje!";
}
?>
