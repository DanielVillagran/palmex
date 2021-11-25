<?php
session_start();
$lang = "";
if ($_SESSION['lang'] == 'eng') {
    $lang = '-eng';
}
$productos = array(
    'pal-mix-m-mixto' => array('imagenes' => 'trigo/pal-mix-m-mixto', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => 'MIX M 20KG', 'sku' => 'PTFTBR029'),
    'pal-mix-mega-trigo' => array('imagenes' => 'trigo/pal-mix-mega-de-trigo', 'sugerencia' => '',
        'ingredientes' => 'trigo', 'nombre' => 'PAL MIX MEGA 15KG', 'sku' => 'PTFTBR056'),
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
                        <p class="t1">TAILOR MADE PRODUCTS</p>
                        <?php } else {?>
                        <p class="t1">PELLETS A TU MEDIDA</p>
                        <?php }?>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="d-title-cat wow bounceInDown" data-wow-delay=".1s">
                        <?php
if ($_SESSION['lang'] == 'eng') {
    ?>
                        <p class="t2"> Palmex® has the ability to make customized products based on the
                            specific needs of each customer.
                            <br><br>

                            Figures in various forms with wheat flour, whole wheat, corn,
                            potato, rice, legumes (lentils, chickpeas, peas, beans), ancient grains
                            (quinoa, amaranth, chia) and vegetables (spinach, tomato, beets,
                            kale, carrots, cauliflower, sweet potato).
                            <br><br>

                            These products can be produced in different packaging such as
                            boxes, sacks and super sacks in different weights. In addition, we
                            can develop products with specific characteristics such as low
                            sodium, low acrylamide, Non GMO, organic, clean label, Kosher and
                            with natural colorings and/or flavorings.
                            <br><br>

                            We have product developments for frying or exploding in hot air.
                        </p>
                        <?php } else {?>
                        <p class="t2"> Palmex® tiene la capacidad para hacer productos a la medida y
                            con base a las necesidades específicas de cada cliente.
                            <br><br>
                            Figuras en diversas formas con harinas de trigo, integrales, maíz,
                            papa, arroz, leguminosas (lenteja, garbanzo, chícharos, frijol),
                            granos ancestrales (quinoa, amaranto, chía) y vegetales (espinaca,
                            tomate, betabel, kale, zanahoria, coliflor, camote).
                            <br><br>
                            Estos productos se podrán elaborar en diferentes empaques como
                            cajas, sacos y supersacos en diversos gramajes. Además, podemos
                            desarrollar productos con características específicas como bajos en
                            sodio, bajos en acrilamidas, Non GMO, orgánicos, clean label,
                            Kosher y con colorantes y/o saborizantes naturales.
                            <br><br>
                            Contamos con desarrollos de productos para freírse o explotarse
                            en aire caliente.
                        </p>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
    <script src="js/wow.js"></script>

    <script src="js/main.js" defer></script>
    <script src="js/onlywow.js" defer></script>


</body>

</html>
