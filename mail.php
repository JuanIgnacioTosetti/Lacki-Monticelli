<?php

  $nombre = $_POST['name'];
  $email = $_POST['email'];
  $mensaje = $_POST['textarea'];

  //Como va a llegar el cuerpo del mail
  $mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
  $mensaje .= "Su e-mail es " . $email . "\r\n";
  $mensaje .= "Mensaje: " . $_POST['mensaje'] . "\r\n";
  $mensaje = "Enviado el " . date('d/m/Y', time());
  
  $header.= "Conten-Type: text/plain";

  // Configuración de correo electrónico
  $destinatario = 'tosettijuan51@gmail.com';
  $asunto = 'Nuevo mensaje del formulario';
  

  // Envío de correo

  mail($destinatario, $asunto, utf8_decode($mensaje), $header);
  header('Location:exito.php');

?>
