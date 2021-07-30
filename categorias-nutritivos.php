<?php
$productos = array(
    'veggie-stick-natural-gf-de-papa' => array('imagenes' => 'papa/veggie-stick-natural-gf-de-papa', 'sugerencia' => '',
        'ingredientes' => 'papa', 'nombre' => 'VEGGIE STICK NATURAL GF 15KG', 'sku' => 'PPPREF005'),
    'veggie-stick-espinaca-gf-de-papa' => array('imagenes' => 'papa/veggie-stick-espinaca-gf-de-papa', 'sugerencia' => '',
        'ingredientes' => 'papa', 'nombre' => 'VEGGIE STICK ESPINACA GF 15KG', 'sku' => 'PPPREF003'),
    'veggie-stick-tomate-gf-papa' => array('imagenes' => 'papa/veggie-stick-tomate-gf-de-papa', 'sugerencia' => '',
        'ingredientes' => 'papa', 'nombre' => 'VEGGIE STICK TOMATE GF 15KG', 'sku' => 'PPPREF004'),
    'veggie-chip-natural-papa' => array('imagenes' => 'papa/veggie-chip-natural-de-papa', 'sugerencia' => '',
        'ingredientes' => 'papa', 'nombre' => 'VEGGIE CHIP NATURAL 8KG', 'sku' => 'PPPREF009'),
    'veggie-chip-espinaca-papa' => array('imagenes' => 'papa/veggie-chip-espinaca-de-papa', 'sugerencia' => '',
        'ingredientes' => 'papa', 'nombre' => 'VEGGIE CHIP ESPINACA 8KG', 'sku' => 'PPPREF007'),
    'veggie-chip-tomate-papa' => array('imagenes' => 'papa/veggie-chip-tomate-de-papa', 'sugerencia' => '',
        'ingredientes' => 'papa', 'nombre' => 'VEGGIE CHIP TOMATE 8KG', 'sku' => 'PPPREF008'),
    'veggie-straw-natural-papa' => array('imagenes' => 'papa/veggie-straw-natural-de-papa', 'sugerencia' => '',
        'ingredientes' => 'papa', 'nombre' => 'VEGGIE STRAW NATURAL 8KG', 'sku' => 'PPPREF015'),
    'veggie-straw-espinaca-papa' => array('imagenes' => 'papa/veggie-straw-espinaca-de-papa', 'sugerencia' => '',
        'ingredientes' => 'papa', 'nombre' => 'VEGGIE STRAW ESPINACA 8KG', 'sku' => 'PPPREF017'),
    'veggie-straw-tomate-papa' => array('imagenes' => 'papa/veggie-straw-tomate-de-papa', 'sugerencia' => '',
        'ingredientes' => 'papa', 'nombre' => 'VEGGIE STRAW TOMATE 8KG', 'sku' => 'PPPREF016'),
    'canelines-multigrano' => array('imagenes' => 'trigo/canelines-multigrano', 'sugerencia' => '',
        'ingredientes' => 'multigrano', 'nombre' => 'CANELINES MULTIGRANO 15KG', 'sku' => 'PTFTBR046'),
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
                        <p class="t1">NUTRITIVOS</p>
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