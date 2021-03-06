<?php
session_start();
$lang = "";
if ($_SESSION['lang'] == 'eng') {
    $lang = '-eng';
}
$productos = array(
    '2x2-trigo' => array('imagenes' => 'trigo/2x2-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    '2x3-liso-trigo' => array('imagenes' => 'trigo/2x3-liso-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    '4x4-trigo' => array('imagenes' => 'trigo/4x4-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    '4x8-trigo' => array('imagenes' => 'trigo/4x8-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'anillo-trigo' => array('imagenes' => 'trigo/anillo-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'anillo-grande-trigo' => array('imagenes' => 'trigo/anillo-grande-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'cabellin-trigo' => array('imagenes' => 'trigo/cabellin-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'cuadri-bacon-grande-trigo' => array('imagenes' => 'trigo/cuadri-bacon-grande-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'cuadri-liso-grande-trigo' => array('imagenes' => 'trigo/cuadri-liso-grande-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'cuadrini-trigo' => array('imagenes' => 'trigo/cuadrini-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'donita-trigo' => array('imagenes' => 'trigo/donita-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'espacial-trigo' => array('imagenes' => 'trigo/espacial-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'magno-rendidor-trigo' => array('imagenes' => 'trigo/magno-rendidor-20-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'magno-retro-trigo' => array('imagenes' => 'trigo/magno-retro-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'mini-cuadro-trigo' => array('imagenes' => 'trigo/mini-cuadro-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'mini-rueda-trigo' => array('imagenes' => 'trigo/mini-rueda-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'mini-tornillo-trigo' => array('imagenes' => 'trigo/mini-tornillo-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'pal-mix-m-mixto' => array('imagenes' => 'trigo/pal-mix-m-mixto', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'olas-trigo' => array('imagenes' => 'trigo/olas-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'pal-mix-mega-trigo' => array('imagenes' => 'trigo/pal-mix-mega-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'palillo-trigo' => array('imagenes' => 'trigo/palillo-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'papas-a-la-francesa-corta-trigo' => array('imagenes' => 'trigo/papas-a-la-francesa-corta-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'parilla-trigo' => array('imagenes' => 'trigo/parrilla-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'rotini-trigo' => array('imagenes' => 'trigo/rotini-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'rueda-trigo' => array('imagenes' => 'trigo/rueda-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'rueda-grande-trigo' => array('imagenes' => 'trigo/rueda-grande-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'tocinito-3x3-trigo' => array('imagenes' => 'trigo/tocinito-3x3-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'tocinito-trigo' => array('imagenes' => 'trigo/tocinito-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'tornillo-trigo' => array('imagenes' => 'trigo/tornillo-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'tubo-trigo' => array('imagenes' => 'trigo/tubo-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'tubo-grande-trigo' => array('imagenes' => 'trigo/tubo-grande-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'zarape-3x2-trigo' => array('imagenes' => 'trigo/zarape-3x2-de-trigo', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
);
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

<body class="body-black">
    <section class="sec-cat">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="d-title-cat wow bounceInDown" data-wow-delay=".1s">
                    <?php
if ($_SESSION['lang'] == 'eng') {
    ?>
                            <p class="t1">WHEAT</p>
                        <?php } else {?>
                            <p class="t1">TRIGO</p>
                            <?php }?>
                    </div>
                </div>
            </div>
            <div class="row row-items-cat">
                <?php
foreach ($productos as $key => $value) {
    ?>
                <div class="col-lg-4 col-md-12 col-12 wow bounceIn" data-wow-delay=".7s">
                    <div class="d-item-cat">
                        <a  href="producto.php?producto=<?php echo $key; ?>">
                            <img src="productos/platos/<?php echo $value['imagenes']; ?>/principal<?php echo $lang; ?>.png" alt="">
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