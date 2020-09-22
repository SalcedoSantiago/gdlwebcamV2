<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>GdlWebcam</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->


    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antic+Slab&family=Lato:ital,wght@0,700;1,400&family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/358a88855b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <?php
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if ($pagina == "invitados" || $pagina == "index") {
        echo '<link rel="stylesheet" href="./css/colorbox.css">';
    } else if ($pagina == "conferencia") {
        echo '<link rel="stylesheet" href="./css/lightbox.css">';
    }
    ?>

    <link rel="stylesheet" href="./css/main.css">



    <meta name="theme-color" content="#fafafa">
</head>

<body class="<?php echo $pagina?>">

    <header id="" class="fondo-header clearfix">
        <div class="contenedor clearfix">
            <div class="iconos">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
                <i class="fab fa-instagram"></i>
            </div>
            <div class="contenedor texto-header">
                <div class="iconos-main clearfix">
                    <p class="calendar-o"><i class="fas fa-calendar-alt"></i> 10-12</p>
                    <p class="pin"><i class="fas fa-map-marker-alt"></i> Buenos Aires, Argentina</p>
                </div>
                <div class="texto-spa">
                    <h1 class="text-main">GdlWebcam</h1>
                    <p class="last-text">La mejor conferencia de <span>diseño web</span></p>
                </div>
            </div>
        </div>
    </header>
    <div class="barra">
        <div class="contenedor clearfix">
            <a href="./index.php">
                <div class="logo">
                    <img src="./img/logo.svg" alt="">
                </div>
            </a>
            <div class="menu-mobil clearfix">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="navegacion-principal">
                <nav class="navegacion">
                    <a href="./conferencia.php">conferencia</a>
                    <a href="./calendario.php">calendario</a>
                    <a href="./invitados.php">invitados</a>
                    <a href="./registro.php">reservacion</a>
                </nav>
            </div>
        </div>
    </div>