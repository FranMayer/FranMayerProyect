<?php
$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$tel = isset($_POST["tel"]) ? $_POST["tel"] : "";
$textarea = isset($_POST["textarea"]) ? $_POST["textarea"] : "";

if ($nombre && $email && $tel && $textarea) {
    $formcontent = "Nombre: $nombre \nEmail: $email \nTelefono: $tel \nMensaje: $textarea";
    $recipient = "mayerdevelopment@hotmail.com, $email";
    $subject = "Consulta via WEB de $nombre";
    $header = "From: $email\r\n";
    $header .= "Content-type: text/plain; charset=UTF-8\r\n";
    if (mail($recipient, $subject, $formcontent, $header)) {
        header("Location: gracias.html");
        exit();
    } else {
        die("Error al enviar el correo electrónico.");
    }
} else {
    die("Por favor, complete todos los campos del formulario.");
}
?>
