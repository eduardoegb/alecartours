<?php

$firstname = $lastname = $country = $email_from = $phone = $subject = $comments = $email_to = $headers = NULL;

if(isset($_POST['submit'])) {

    //Initial
    $email_subject = "Contacto desde el sitio web";
    $email_from = $_POST['email'];
    $email_to = "alecartours@gmail.com";
    
    //Info
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $comments = $_POST['comments'];

    //Headers
    $headers = 'From: '.$email_from."\r\n".
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";

    //Body
    $message = "<html>".
               "<head>". 
               "<title>Una persona ha enviado un mensaje</title>".
               "</head>".
               "<body>".
               "<h1>" . $firstname . " " . $lastname . " ha enviado un mensaje</h1>".
               "<div>".
               "<p style='font-size=14px'>País: " . $country . "</p>".
               "<p>Correo electrónico: " . $email_from . "</p>".
               "<p>Teléfono: " . $phone . "</p>".
               "</div>".
               "<div>".
               "<p>Asunto: " . $subject . "</p>".
               "<p>Mensaje: " . $comments . "</p>".
               "</div>".
               "</body>".
               "</html>";
}

if (mail("eduardoegb@gmail.com", "Contacto desde el sitio web", $message, $headers)) {
    echo "<script language='javascript'>
        alert('Mensaje enviado, muchas gracias.');
        window.location='http://www.alecartours.com';
    </script>";
} else {
    echo "<script language='javascript'>
        alert('Algo salió mal, lo sentimos, inténtalo de nuevo');
        window.location='http://www.alecartours.com';
    </script>";
}
?>