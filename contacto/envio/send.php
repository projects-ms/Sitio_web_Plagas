<?php

    $destination = "correo@gmail.com";
    $subject = $_POST["subject"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $content = "Asunto: " . $subject . "\nNombre: " . $name . "\nCorreo: " . $email . "\nMensaje: " . $message;
    mail($destination, "Contacto desde nuestra web", $content);
    echo"<script language='javascript'>alert('Mensaje enviado - Pronto nos comunicaremos con usted.');
    location.replace('index.html');
    </script>";

?>