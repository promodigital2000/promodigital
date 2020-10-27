<?php
if(isset($_POST['email'])) {

<bold>// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias</bold>
$email_to = "companypromodigital@gmail.com";
$email_subject = "Contacto desde el sitio web";

if(!isset($_POST['introducir_nombre']) ||
!isset($_POST['introducir_email']) ||
!isset($_POST['introducir_telefono']) ||
!isset($_POST['introducir_website']) ||
!isset($_POST['introducir_asunto']) ||
!isset($_POST['introducir_mensaje'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['introducir_nombre'] . "\n";
$email_message .= "E-mail: " . $_POST['introducir_email'] . "\n";
$email_message .= "Telefono: " . $_POST['introducir_telefono'] . "\n";
$email_message .= "Pagina web: " . $_POST['introducir_website'] . "\n";
$email_message .= "Asunto: " . $_POST['introducir_asunto'] . "\n\;
$email_message .= "Asunto: " . $_POST['introducir_mensaje'] . "\n\n";



$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>