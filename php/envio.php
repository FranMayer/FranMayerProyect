<?php
$nombre = $_POST ['nombre'];
$email = $_POST ['email'];
$tel = $_POST ['tel'] ;
$textarea = $_POST ['textarea'];

$formcontent ="
Nombre: $nombre \n
Email: $email \n
Telefono: $tel \n
Mensaje: $textarea 
";

$recipient ="Mayerdevelopment@hotmail.com , $email";

$subject ="Consulta via Web de $nombre";

$header = "From: $email" \r \n;
$header .= "Content-Type: text/plain; charset-UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: gracias.html");

?>
