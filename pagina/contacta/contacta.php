<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header class="contacta">

    <div class="logo"><img src="../img/palomitas-de-maiz.png" alt=""></div>

    <nav>
        <a href="../index.php">Inicio</a>
        <a href="">Quiénes somos</a>
        <a href="../contacta/contacta.php">Contacta</a>
    </nav>

</header>

<section class="seccionForm">
    <div class="cajaForm">
        <h1>Contacto</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="cajainput">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required value="<?php echo isset($nombre) ? htmlspecialchars($nombre) : ''; ?>">
                <span style="color: red;"><?php echo isset($errores['nombre']) ? $errores['nombre'] : ''; ?></span>
            </div>
       
            <div class="cajainput">
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" required value="<?php echo isset($telefono) ? htmlspecialchars($telefono) : ''; ?>">
                <span style="color: red;"><?php echo isset($errores['telefono']) ? $errores['telefono'] : ''; ?></span>
            </div>
       
            <div class="cajainput">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
                <span style="color: red;"><?php echo isset($errores['email']) ? $errores['email'] : ''; ?></span>
            </div>
       
            <input type="submit" value="Enviar" class="enviar">
        </form>
    </div>
</section>

<div class="error">
<?php
// Ruta hacia el directorio PHPMailer relativa a contacta.php
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require '../PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$nombre = $telefono = $email = '';
$errores = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = limpiarEntrada($_POST['nombre']);
    $telefono = limpiarEntrada($_POST['telefono']);
    $email = limpiarEntrada($_POST['email']);
    
    if (empty($nombre)) {
        $errores['nombre'] = 'El nombre es requerido.';
    }

    if (empty($telefono)) {
        $errores['telefono'] = 'El teléfono es requerido.';
    }

    if (empty($email)) {
        $errores['email'] = 'El correo electrónico es requerido.';
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errores['email'] = 'El correo electrónico no es válido.';
        }
    }

    if (empty($errores)) {
        $to = 'avazquezpvr@gmail.com'; // Reemplaza con tu dirección de correo electrónico
        $subject = 'Nuevo mensaje del formulario de contacto';
        $message = "Nombre: $nombre\nTeléfono: $telefono\nEmail: $email";

        $mail = new PHPMailer(true);

        try {
            // Configuración del servidor SMTP (Mailtrap en este caso)
            $mail->isSMTP();
            $mail->Host = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = '5fbec350c10063';
            $mail->Password = '11590bfcfa85bc';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Remitente y destinatario
            $mail->setFrom('avazquezpvr@gmail.com', 'Tu Nombre'); // Cambia esto por la dirección de correo y nombre que desees mostrar como remitente
            $mail->addAddress($to);

            // Contenido del mensaje
            $mail->isHTML(false); // El contenido no es HTML en este caso
            $mail->Subject = $subject;
            $mail->Body = $message;

            // Configurar la codificación de caracteres
            $mail->CharSet = 'UTF-8';

            // Enviar el correo y mostrar un mensaje de éxito o error
            $mail->send();
            echo '<p style="color: red;">El formulario se envió correctamente. ¡Gracias!</p>';
        } catch (Exception $e) {
            echo '<p style="color: red;">Hubo un error al enviar el formulario. Por favor, inténtalo nuevamente.</p>';
            echo 'Error de correo: ' . $mail->ErrorInfo;
        }
    }
}

function limpiarEntrada($dato) {
    $dato = trim($dato);
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}
?>


</div>

</body>
</html>
