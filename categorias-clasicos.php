<?php
$productos = array(
    'rotini-trigo' => array('imagenes' => 'trigo/rotini-de-trigo', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => 'ROTINI 20KG', 'sku' => 'PTFTAR006'),
    'rueda-trigo' => array('imagenes' => 'trigo/rueda-de-trigo', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => 'RUEDA 15KG', 'sku' => 'PTFTAR001'),
    'rueda-grande-trigo' => array('imagenes' => 'trigo/rueda-grande-de-trigo', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => 'RUEDA GRANDE 13KG', 'sku' => 'PTFTAR018'),
    'mini-rueda-trigo' => array('imagenes' => 'trigo/mini-rueda-de-trigo', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => 'MINI RUEDA 15KG', 'sku' => 'PTFTAR014'),
    'mini-cuadro-trigo' => array('imagenes' => 'trigo/mini-cuadro-de-trigo', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => 'MINI CUADRO 20KG', 'sku' => 'PTFTAR005'),
    'cuadrini-trigo' => array('imagenes' => 'trigo/cuadrini-de-trigo', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => 'CUADRINI 20KG', 'sku' => 'PTFTBR019'),
    'zarape-3x2-trigo' => array('imagenes' => 'trigo/zarape-3x2-de-trigo', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => 'ZARAPE 3x2 20KG', 'sku' => 'PTFTBR032'),
    '4x4-trigo' => array('imagenes' => 'trigo/4x4-de-trigo', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => '4x4 15KG', 'sku' => 'PTFTBR001'),
    'mini-cuadro-papa' => array('imagenes' => 'papa/mini-cuadro-de-papa', 'sugerencia' => '',
        'ingredientes' => 'papa', 'nombre' => 'MINI CUADRO DE PAPA 15KG', 'sku' => 'PTPVFI003'),
    'mini-rueda-papa' => array('imagenes' => 'papa/mini-rueda-de-papa', 'sugerencia' => '',
        'ingredientes' => 'papa', 'nombre' => 'MINI RUEDA DE PAPA 15KG', 'sku' => 'PTPVFI001'),
    '2x2-trigo' => array('imagenes' => 'trigo/2x2-de-trigo', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => '2x2 20KG', 'sku' => 'PTFTBR007'),
    'mini-rueda-max-plus-papa' => array('imagenes' => 'papa/mini-rueda-max-plus-de-papa', 'sugerencia' => '',
        'ingredientes' => 'papa', 'nombre' => 'MINI RUEDA PAPA MAX´S PLUS 15KG', 'sku' => 'PTPVMX004'),
    'mini-rueda-premium-de-papa' => array('imagenes' => 'papa/mini-rueda-premium-de-papa', 'sugerencia' => '',
        'ingredientes' => 'papa', 'nombre' => 'MINI RUEDA PAPA MAX´S 15KG', 'sku' => 'PTPVMX008'),
    'cabellin-trigo' => array('imagenes' => 'trigo/cabellin-de-trigo', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => 'CABELLIN 20KG', 'sku' => 'PTFTBR005'),
    '2x3-liso-trigo' => array('imagenes' => 'trigo/2x3-liso-de-trigo', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => '2x3 LISO 15KG', 'sku' => 'PTFTBR009'),
    'cuadri-liso-grande-trigo' => array('imagenes' => 'trigo/cuadri-liso-grande-de-trigo', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => 'CUADRI LISO GRANDE 15KG', 'sku' => 'PTFTBR058'),
);
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
                        <p class="t1">CLASICOS</p>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="js/wow.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js" defer></script>


    <script>
    new WOW().init();
    </script>


</body>

</html>