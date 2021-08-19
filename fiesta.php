<?php
session_start();

?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- PLUGIN FONT AWESOME -->
    <link rel="stylesheet" href="css/all.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/ispinner.css">
    <link rel="stylesheet" href="css/animate.css">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon/favicon.png">
    <link rel="shortcut icon" sizes="192x192" href="images/favicon/favicon.png">
    <link rel="apple-touch-icon" href="images/favicon/favicon.png">

    <!-- OPENGRAPH -->
    <meta property="og:title" content="Palmex">
    <meta property="og:description" content="La mejor pasta para elaborar botanas, conoce la familia Palmex.">
    <meta property="og:image" content="images/og_facebook.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image" content="images/og_whatsapp.jpg" />
    <meta property="og:image:type" content=" image/jpeg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="400" />
    <meta property="og:site_name" content="Palmex" />
    <meta property="og:locale" content="es_MX" />
    <meta property="og:url" content="**********************SUSTITUIR_URL**************************" />
    <meta property="og:type" content="website" />

    <title>Palmex</title>
</head>

<body class="body-bg fiesta">
    <section class="sec-cat-centered valign">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="d-info-cat-cent">
                        <div class="d-title-cat border-none wow bounceIn" data-wow-delay=".1s">
                        <?php
                        if($_SESSION['lang']=='eng'){
                        ?>
                        <p class="t1">PARTY</p>
                        <?php } else {?>
                            <p class="t1">FIESTA</p>
                            <?php }?>
                        </div>
                        <div class="d-preloader wow fadeIn" data-wow-delay=".8s">
                            <img src="images/rueda.gif" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/wow.js"></script>
    
    <script src="js/main.js" defer></script>
    <script src="js/fiesta.js" defer></script>


</body></html>
