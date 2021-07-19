<?php
/*$directorio = 'productos/platos/trigo';
$ficheros1 = scandir($directorio);
$contador = 0;
$texto = "";
foreach ($ficheros1 as $key) {
    if ($contador >= 2) {
        $texto .= "'" . str_replace("de-trigo", "trigo", $key) . "' => array('imagenes' => 'trigo/" . $key . "', 'sugerencia' => '',\n
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),\n";
        
    }
    $contador++;
}
var_dump($texto);
*/
$producto = $_GET['producto'];
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

    'aro-papa' => array('imagenes' => 'papa/aro-sabor-cebolla-de-papa', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'francesa-papa' => array('imagenes' => 'papa/francesa-de-papa', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'hojuela-clasica-papa' => array('imagenes' => 'papa/hojuela-clasica-de-papa', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'hojuela-cruji-papa' => array('imagenes' => 'papa/hojuela-cruji-de-papa', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'hojuela-micro-papa' => array('imagenes' => 'papa/hojuela-micro-de-papa', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'hojuzzela-clasica-papa' => array('imagenes' => 'papa/hojuzzela-clasica-de-papa', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'mini-cuadro-papa' => array('imagenes' => 'papa/mini-cuadro-de-papa', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'mini-rueda-papa' => array('imagenes' => 'papa/mini-rueda-de-papa', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'mini-rueda-max-plus-papa' => array('imagenes' => 'papa/mini-rueda-max-plus-de-papa', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'mini-rueda-premium-papa' => array('imagenes' => 'papa/mini-rueda-premium-papa', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'ondipapas-papa' => array('imagenes' => 'papa/ondipapas-de-papa', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'palito-max-papa' => array('imagenes' => 'papa/palito-max-de-papa', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'rueda-max-papa' => array('imagenes' => 'papa/rueda-max-de-papa', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'veggie-chip-espinaca-papa' => array('imagenes' => 'papa/veggie-chip-espinaca-de-papa', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'veggie-chip-natural-papa' => array('imagenes' => 'papa/veggie-chip-natural-de-papa', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'veggie-chip-tomate-papa' => array('imagenes' => 'papa/veggie-chip-tomate-de-papa', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'veggie-stick-espinaca-gf-papa' => array('imagenes' => 'papa/veggie-stick-espinaca-gf-papa', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'veggie-stick-natural-gf-papa' => array('imagenes' => 'papa/veggie-stick-natural-gf-papa', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'veggie-stick-tomate-gf-papa' => array('imagenes' => 'papa/veggie-stick-tomate-gf-de-papa', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'veggie-straw-espinaca-papa' => array('imagenes' => 'papa/veggie-straw-espinaca-de-papa', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'veggie-straw-tomate-papa' => array('imagenes' => 'papa/veggie-straw-tomate-de-papa', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'veggie-straw-natural-papa' => array('imagenes' => 'papa/veggie-straw-natural-de-papa', 'sugerencia' => '',
        'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),

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
    'canelines-multigrano' => array('imagenes' => 'trigo/canelines-multigrano', 'sugerencia' => '',
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
    'magno-rendidor-trigo' => array('imagenes' => 'trigo/magno-rendidor-de-trigo', 'sugerencia' => '',
    'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'magno-retro-trigo' => array('imagenes' => 'trigo/magno-retro-de-trigo', 'sugerencia' => '',
    'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'mini-cuadro-trigo' => array('imagenes' => 'trigo/mini-cuadro-de-trigo', 'sugerencia' => '',
    'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'mini-rueda-trigo' => array('imagenes' => 'trigo/mini-rueda-de-trigo', 'sugerencia' => '',
    'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'mini-tornillo-trigo' => array('imagenes' => 'trigo/mini-tornillo-de-trigo', 'sugerencia' => '',
    'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'mix-m-mixto' => array('imagenes' => 'trigo/mix-m-mixto', 'sugerencia' => '',
    'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'olas-trigo' => array('imagenes' => 'trigo/olas-de-trigo', 'sugerencia' => '',
    'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'pal-mix-mega-trigo' => array('imagenes' => 'trigo/pal-mix-mega-de-trigo', 'sugerencia' => '',
    'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'palillo-trigo' => array('imagenes' => 'trigo/palillo-de-trigo', 'sugerencia' => '',
    'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'papas-a-la-francesa-corta-trigo' => array('imagenes' => 'trigo/papas-a-la-francesa-corta-de-trigo', 'sugerencia' => '',
    'ingredientes' => '', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'parilla-trigo' => array('imagenes' => 'trigo/parilla-de-trigo', 'sugerencia' => '',
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

<body class="body-producto">
    <section class="sec-producto">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="d-code-producto wow bounceIn" data-wow-delay=".8s">
                        <span class="badge badge-code">SKU <?php echo $productos[$producto]['sku'] ?></span>
                    </div>
                    <div class="d-title-cat wow bounceInDown" data-wow-delay=".1s">
                        <p class="t1"><?php echo $productos[$producto]['nombre'] ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="d-image-medidas wow fadeInUp" data-wow-delay=".4s">
                        <img src="/productos/platos/<?php echo $productos[$producto]['imagenes'] ?>/medidas.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row row-pellet-frito">
                <div class="col-lg-4 col-md-12 col-12 offset-lg-2  wow bounceIn" data-wow-delay=".4s">
                    <div class="d-image-pellet">
                        <img src="/productos/platos/<?php echo $productos[$producto]['imagenes'] ?>/pellet.png" alt="">
                        <img class="image-pop"
                            src="/productos/platos/<?php echo $productos[$producto]['imagenes'] ?>/info-pellet.png"
                            alt="">
                    </div>

                </div>
                <div class="col-lg-4 col-md-12 col-12 wow bounceIn" data-wow-delay=".6s">
                    <div class="d-image-frito">
                        <img class="frito"
                            src="/productos/platos/<?php echo $productos[$producto]['imagenes'] ?>/frito.png" alt="">
                        <br>
                        <img class="image-pop"
                            src="/productos/platos/<?php echo $productos[$producto]['imagenes'] ?>/info-frito.png"
                            alt="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-12 col-12 offset-lg-2  wow bounceIn" data-wow-delay=".4s">
                    <div class="d-image-arrow">
                        <img src="images/arrow-1.gif" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12  wow bounceIn" data-wow-delay=".4s">
                    <div class="d-image-arrow">
                        <img src="images/arrow-1.gif" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-info-producto">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-7 col-7 order-lg-first order-first">
                    <div class="d-ingrediente wow fadeInUp" data-wow-delay=".4s">
                        <img src="images/viva-mexico/concha-de-maiz/ingrediente.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-12 ">
                    <div class="d-sugerencia wow fadeInUp" data-wow-delay=".6s">
                        <img src="images/viva-mexico/concha-de-maiz/sugerencia.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-5 order-lg-last order-first">
                    <div class="d-presentacion wow fadeInUp" data-wow-delay=".8s">
                        <img src="/productos/platos/<?php echo $productos[$producto]['imagenes'] ?>/presentacion.png"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-ficha">
        <div class="container">
            <div class="col-lg-4 col-md-6 col-12 offset-lg-4 offset-md-3">
                <div class="d-btn-ficha wow fadeInUp" data-wow-delay=".5s">
                    <a class="btn btn-ficha" href="/productos/platos/<?php echo $productos[$producto]['imagenes'] ?>/ficha-tecnica.jpg" target='_blank' role="button"><i class="fas fa-file-alt"></i>Descargar ficha
                        técnica</a>
                </div>
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