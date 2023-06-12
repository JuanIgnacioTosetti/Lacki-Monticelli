<?php
if($_SERVER['REQUEST_METHOD'] != 'POST' ){
    header("Location: ./layout/formulario.php" );
}

require 'phpmailer/PHPMailer.php';
require 'phpmailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

if( empty(trim($nombre)) ) $nombre = 'anonimo';
if( empty(trim($apellido)) ) $apellido = '';

$body = <<<HTML
    <h1>Contacto desde la web</h1>
    <p>De: $nombre $apellido / $email</p>
    <h2>Mensaje</h2>
    $mensaje
HTML;

$mailer = new PHPMailer();
$mailer->setFrom( $email, "$nombre $apellido" );
$mailer->addAddress('tosettijuan51@gmail.com','Sitio web');
$mailer->Subject = "Mensaje web: $asunto";
$mailer->msgHTML($body);
$mailer->AltBody = strip_tags($body);
$mailer->CharSet = 'UTF-8';


$mailer->send( );


header("Location: exito.php" );