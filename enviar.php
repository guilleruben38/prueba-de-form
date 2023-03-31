<?php
// Variables del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Correo electrónico a donde se enviará el mensaje
$para = 'guilleruben38@gmail.com';

// Asunto del correo electrónico
$asunto = 'Mensaje desde el formulario de contacto';

// Cuerpo del correo electrónico
$mensaje_correo = "Nombre: $nombre\n";
$mensaje_correo .= "Correo electrónico: $email\n\n";
$mensaje_correo .= "Mensaje:\n$mensaje\n";

// Cabeceras del correo electrónico
$cabeceras = "From: $email\r\n";
$cabeceras .= "Reply-To: $email\r\n";

// Envía el correo electrónico
mail($para, $asunto, $mensaje_correo, $cabeceras);

// Redirige al usuario a una página de confirmación
header('Location: confirmacion.html');
?>
