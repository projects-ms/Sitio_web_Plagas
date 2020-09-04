<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta Tags -->
    <meta name="title" content="Plagas APP">
    <meta name="description" content="Aplicación para la detección de plagas en cultivos, Desarrollado por SENNOVA.">

    <meta name="og:title" content="Plagas APP - Contacto">
    <meta name="og:description" content="Si tiene alguna duda puede comunicarse con nosotros llenando el formulario o utilizando la Información de contacto.">
    <meta name="og:type" content="website">
    <meta name="og:url" content="https://michaelsandino.github.io/Sitio_web_Plagas/contacto">
    <meta name="og:image" content="../img/logo.jpg">
    <meta name="og:site_name" content="Plagas APP - Detector de plagas">
    
    <!-- Tipografia -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&family=Open+Sans:wght@700&display=swap" rel="stylesheet" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/bootstrap.css" />

    <!-- Icono -->
    <link rel="icon" type="image/svg" href="../img/logo.svg">

    <title>Contacto</title>
</head>

<body>

    <!-- Menu -->
    <header class="container-fluit fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand subtitle" href="#">
                <img src="../img/logo.svg" height="35px" alt="Logo" loading="lazy">
                Plagas APP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="menu" data-toggle="collapse" data-target="#menu.show">
                <div class="navbar-nav">
                    <a class="nav-link" href="../">Inicio</a>
                    <a class="nav-link" href="../#acerca_de">Acerca De</a>
                    <a class="nav-link" href="../#servicios">Servicios</a>
                    <a class="nav-link" href="../#caracteristicas">Caracteristicas</a>
                    <a class="nav-link" href="../#preguntas_frecuentes">Preguntas Frecuentes</a>

                    <a class="nav-link " href="../novedades">Novedades</a>
                    <a class="nav-link " href="../plagas">Plagas</a>
                    <a class="nav-link active" href="#">Contacto</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- CONTENIDO -->
    <div class="container">
        <section class="row">

            <!-- Titulo -->
            <div class="col-12 pb-5">
                <h1 class="text-center h4 title">Contacto</h1>
            </div>

            <!-- Información de contacto -->
            <div class="col-12 col-lg-4 pb-5">
                <h2 class="h5 subtitle pb-4">Información de contacto</h2>
                <p class="text ml-2"><img src="../icons/correo.svg" alt="" class="icon mr-3">correo@gmail.com</p>
                <p class="text ml-2"><img src="../icons/ubicacion.svg" alt="" class="icon mr-3">Calle 3A #10 Norte</p>
                <p class="text ml-2"><img src="../icons/telefono.svg" alt="" class="icon mr-3">3124567890</p>
            </div>
            
            <!-- Formulario -->
            <div class="col-12 col-lg-8">

                <h2 class="h5 subtitle pb-4">Tienes alguna duda? Escribenos!</h2>
                <form action="send.php" method="POST">
                    <div class="form-group">
                      <label for="nombre" class="text">Nombre</label>
                      <input type="text" class="form-control" id="nombre" name="name" required>
                    </div>
                    <div class="form-group">
                      <label for="correo" class="text">Correo</label>
                      <input type="email" class="form-control" id="correo" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="asunto" class="text">Asunto</label>
                        <input type="text" class="form-control" id="asunto" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="mensaje" class="text">Mensaje</label>
                        <textarea class="form-control" id="mensaje" rows="4" name="message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success btn-block mt-4">Enviar</button>
                </form>
            
            </div>
    
        </section>
    </div>

    <!-- FOOTER - PIE DE PAGINA -->
    <footer class="container-fluid align-self-end text-white mt-5 text-center">
        <div class="row">

            <div class="col-6 col-md-6 col-xl-4">
                ENLACES RAPIDOS
            <ul class="text-left">
                <li><a href="https://www.sena.edu.co/es-co/Paginas/default.aspx" target="_blank" >SENA</a></li>
                <li><a href="https://www.sena.edu.co/es-co/formacion/Paginas/tecnologia-innovacion.aspx" target="_blank">SENNOVA</a></li>
                <li><a href="../identidad_visual">Identidad Visual</a></li>
            </ul>                       
            </div>

            <div class="col-12 col-md-6 col-xl-4">
                DESCARGAR APP
                <a href="#" class=""><img src="../img/google-play.png" alt="Insignia_Google-Play" class="download-app"></a>
            </div>

            <div class="col-8 col-md-6 col-xl-4 mx-auto">
                <img src="../img/sena_sennova-white.svg" alt="logo_Sena&Sennova" class="w-75 center-img">
            </div>

            
            <div class="col-12">
                <hr class="bg-gray">
                <!-- REDES SOCIALES -->
                <!-- <a href="#" class=""><img src="icons/planeta.svg" alt="#" class="icon-social-media "></a>
                <a href="#" class=""><img src="icons/planeta.svg" alt="#" class="icon-social-media "></a>
                <a href="#" class=""><img src="icons/planeta.svg" alt="#" class="icon-social-media "></a> -->
                <p class="attributions">
                    Iconos diseñados por <a href="https://www.flaticon.es/autores/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.es</a>
                    <br>Sitio Web hecho con: <a href="https://getbootstrap.com/"  target="_blank">Bootstrap V4.5</a>
                </p>
            </div>

        </div>
    </footer>
        
    <!-- Bootstrap -->
    <script src="../js/jquery-3.5.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
    
</html>

<?php

    $destination = "developerworldsas@gmail.com";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $content = "Nombre: " . $name . "\nCorreo: " . $email . "\nTema: " . $subject . "\nMensaje: " . $message;
    mail($destination, "Contacto desde el sitio web - PLAGAS APP", $content);
    
    echo"<script language='javascript'>alert('Mensaje enviado - Pronto nos comunicaremos con usted.');
    location.replace('../contacto');
    </script>";

?>
