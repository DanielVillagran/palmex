<?php
$productos = array(
    'hojuela-clasica-papa' => array('imagenes' => 'papa/hojuela-clasica-de-papa', 'sugerencia' => '',
        'ingredientes' => 'papa', 'nombre' => 'HOJUELA DE PAPA CLASICA 8KG', 'sku' => 'PPPREH002'),
    'hojuela-cruji-papa' => array('imagenes' => 'papa/hojuela-cruji-de-papa', 'sugerencia' => '',
        'ingredientes' => 'papa', 'nombre' => 'HOJUELA DE PAPA CRUJI 6KG', 'sku' => 'PPPREH019'),
    'ondipapas-papa' => array('imagenes' => 'papa/ondipapas-de-papa', 'sugerencia' => '',
        'ingredientes' => 'papa', 'nombre' => 'ONDIPAPAS 8KG', 'sku' => 'PPPREH010'),
    'hojuela-micro-papa' => array('imagenes' => 'papa/hojuela-micro-de-papa', 'sugerencia' => '',
        'ingredientes' => 'papa', 'nombre' => 'HOJUELA DE PAPA MICRO 8KG', 'sku' => 'PPPREH003'),
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
                        <p class="t1">CHIPS</p>
                    </div>
                </div>
            </div>
            <div class="row row-items-cat">
                <?php
foreach ($productos as $key => $value) {
    ?>
            <div class="col-lg-4 col-md-12 col-12 wow bounceIn" data-wow-delay=".7s">
                <div class="d-item-cat">
                <a href="/producto.php?producto=<?php echo $key; ?>">
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