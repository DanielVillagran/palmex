<?php
$productos = array(
    'concha-maiz' => array('imagenes' => 'maiz/concha-de-maiz', 'sugerencia' => '',
    'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
'corners-maiz' => array('imagenes' => 'maiz/mini-corners-de-maiz', 'sugerencia' => '',
    'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
'tornillo-maiz' => array('imagenes' => 'maiz/mini-tornillo-de-maiz', 'sugerencia' => '',
    'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
'quesadilla-maiz' => array('imagenes' => 'maiz/quesadilla-de-maiz', 'sugerencia' => '',
    'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
'tortilla-maiz' => array('imagenes' => 'maiz/tortilla-de-maiz', 'sugerencia' => '',
    'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
);
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"
       >

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- PLUGIN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/ispinner.css">
    <link rel="stylesheet" href="css/animate.css">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/png" href="images_upload/favicon/favicon.png'">
    <link rel="shortcut icon" sizes="192x192" href="images_upload/favicon/favicon.png'">
    <link rel="apple-touch-icon" href="images_upload/favicon/favicon.png">

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

<body class="body-black">
    <section class="sec-cat">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="d-title-cat wow bounceInDown" data-wow-delay=".1s">
                        <p class="t1">MAIZ</p>
                    </div>
                </div>
            </div>
            <div class="row row-items-cat">
                <?php 
           foreach ($productos as $key => $value) {
            ?>
            <div class="col-lg-4 col-md-12 col-12 wow bounceIn" data-wow-delay=".7s">
                <div class="d-item-cat">
                <a href="/producto.php?producto=<?php echo $key;?>">
                        <img src="/productos/platos/<?php echo $value['imagenes']; ?>/principal.png" alt="">
                    </a>
                </div>
            </div>
            <?php
        }
            ?>
            </div>
        </div>
    </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"
       >
    </script>
    <script src="js/bootstrap.min.js"
        >
    </script>
    <script src="js/wow.js"></script>
    
    <script src="js/main.js" defer></script>


    <script>
    new WOW().init();
    </script>


</body>

</html>