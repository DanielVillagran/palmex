<?php
$productos = array(
    'anillo-trigo' => array('imagenes' => 'trigo/anillo-de-trigo', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => 'ANILLO 20KG', 'sku' => 'PTFTAR008'),
    'aro-papa' => array('imagenes' => 'papa/aro-sabor-cebolla-de-papa', 'sugerencia' => '',
        'ingredientes' => 'papa', 'nombre' => 'ARO DE PAPA SABOR CEBOLLA 15KG', 'sku' => 'PTPVFI004'),
    'palillo-trigo' => array('imagenes' => 'trigo/palillo-de-trigo', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => 'PALILLO 15KG', 'sku' => 'PTFTAR008'),
    'donita-trigo' => array('imagenes' => 'trigo/donita-de-trigo', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => 'DONITA 20KG', 'sku' => 'PTFTAR009'),
    'anillo-grande-trigo' => array('imagenes' => 'trigo/anillo-grande-de-trigo', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => 'ANILLO GRANDE 15KG', 'sku' => 'PTFTAR011'),
    'tornillo-trigo' => array('imagenes' => 'trigo/tornillo-de-trigo', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => 'TORNILLO 15KG', 'sku' => 'PTFTAR002'),
    'espacial-trigo' => array('imagenes' => 'trigo/espacial-de-trigo', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => 'ESPACIAL 15KG', 'sku' => 'PTFTAR003'),
    'francesa-papa' => array('imagenes' => 'papa/francesa-de-papa', 'sugerencia' => '',
        'ingredientes' => 'papa', 'nombre' => 'PAPA FRANCESA 15KG', 'sku' => 'PTPVFI002'),
    'tubo-trigo' => array('imagenes' => 'trigo/tubo-de-trigo', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => 'TUBO 20KG', 'sku' => 'PTFTBR020'),
    'tubo-grande-trigo' => array('imagenes' => 'trigo/tubo-grande-de-trigo', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => 'TUBO GRANDE 15KG', 'sku' => 'PTFTBR008'),
    'olas-trigo' => array('imagenes' => 'trigo/olas-de-trigo', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => 'OLAS 20KG', 'sku' => 'PTFTAR007'),
    'palito-max-papa' => array('imagenes' => 'papa/palito-max-de-papa', 'sugerencia' => '',
        'ingredientes' => 'papa', 'nombre' => 'PALITO PAPA MAX´S 15KG', 'sku' => 'PTPVMX002'),
    'papas-a-la-francesa-corta-trigo' => array('imagenes' => 'trigo/papas-a-la-francesa-corta-de-trigo', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => 'PAPA FRANCESA DE TRIGO CORTA 20KG', 'sku' => 'PTFTBR014'),
    'parilla-trigo' => array('imagenes' => 'trigo/parrilla-de-trigo', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => 'PARRILLA 15KG', 'sku' => 'PTFTBR054'),
    'mini-tornillo-trigo' => array('imagenes' => 'trigo/mini-tornillo-de-trigo', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => 'MINI TORNILLO 15KG', 'sku' => 'PTFTBR031'),
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
                        <p class="t1">FIESTA</p>
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