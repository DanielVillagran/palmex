<?php
session_start();
$_SESSION['lang'] = "esp";
$lang = "";
if (isset($_GET['language'])) {
    $lenguaje = $_GET['language'];
    if ($lenguaje == 'eng') {
        $_SESSION['lang'] = "eng";
        $lang = "-eng";
    }
}
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- PLUGIN -->
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

<body class="body-black categorias">
    <section class="sec-cat">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="d-btn-idioma">
                        <button type="button" id="<?php if ($_SESSION['lang'] != "eng") {echo "to_eng";} else {echo "to_esp";}?>" class="btn btn-idioma wow fadeInLeft" data-wow-delay=".2s">
                            <?php if ($_SESSION['lang'] == "eng") {?>
                            <img src="images/icons/estados-unidos.svg"><span>Change Language</span>
                            <?php } else {?>
                            <img src='images/icons/mexico.svg'><span>Cambiar Idioma</span>
                            <?php }?>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row row-title-segmentos">
                <div class="col-lg-12 col-md-12">
                    <div class="d-logo">
                        <img src="images/logo-palmex.png" alt="">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="d-title-cat wow bounceInDown" data-wow-delay=".1s">
                        <?php if ($_SESSION['lang'] == "eng") {?>
                        <p class="t1">PRODUCT SEGMENTATION</p>
                        <?php } else {?>
                        <p class="t1">SEGMENTOS</p>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="row row-items-cat">
                <div class="col-lg-4 col-md-12 col-12 wow bounceIn" data-wow-delay=".7s">
                    <div class="d-item-cat">
                        <a href="duritos.php">
                            <img src="images/categorias-palmex/cat-duritos<?php echo $lang; ?>.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 wow bounceIn" data-wow-delay=".8s">
                    <div class="d-item-cat">
                        <a href="clasicos.php">
                            <img src="images/categorias-palmex/cat-clasicos<?php echo $lang; ?>.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 wow bounceIn" data-wow-delay=".9s">
                    <div class="d-item-cat">
                        <a href="fiesta.php">
                            <img src="images/categorias-palmex/cat-fiesta<?php echo $lang; ?>.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row row-items-cat-2">
                <div class="col-lg-4 col-md-12 col-12 offset-lg-2  wow bounceIn" data-wow-delay="1s">
                    <div class="d-item-cat">
                        <a href="chips.php">
                            <img src="images/categorias-palmex/cat-chips<?php echo $lang; ?>.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 wow bounceIn" data-wow-delay="1.1s">
                    <div class="d-item-cat">
                        <a href="viva-mexico.php">
                            <img src="images/categorias-palmex/cat-viva-mexico<?php echo $lang; ?>.png" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="row row-items-cat-2">
                <div class="col-lg-4 col-md-12 col-12 wow bounceIn" data-wow-delay=".7s">
                    <div class="d-item-cat">
                        <a href="palmix.php">
                            <img src="images/categorias-palmex/cat-pal-mix<?php echo $lang; ?>.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 wow bounceIn" data-wow-delay=".8s">
                    <div class="d-item-cat">
                        <a href="nutritivos.php">
                            <img src="images/categorias-palmex/cat-nutritivos<?php echo $lang; ?>.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 wow bounceIn" data-wow-delay=".9s">
                    <div class="d-item-cat">
                        <a href="tocinitos.php">
                            <img src="images/categorias-palmex/cat-tocinitos<?php echo $lang; ?>.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row row-items-cat-2">
                <div class="col-lg-4 col-md-12 col-12 offset-lg-2  wow bounceIn" data-wow-delay="1s">
                    <div class="d-item-cat">
                        <a href="snackit.php">
                            <img src="images/categorias-palmex/cat-snackit<?php echo $lang; ?>.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 wow bounceIn" data-wow-delay="1.1s">
                    <div class="d-item-cat">
                        <a href="made.php">
                            <img src="images/categorias-palmex/cat-botanas-a-tu-medida<?php echo $lang; ?>.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row row-icons-ingredientes">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="d-filtro">
                        <div class="d-title-filtro">
                            <p class="t1 wow fadeInLeft" data-wow-delay=".1s">
                                <?php if ($_SESSION['lang'] == "eng") {?>
                                Select products by<span>-</span><b>main ingredient</b></p>
                            <?php } else {?>
                            Selecciona los productos por<span>-</span><b>ingrediente principal</b></p>
                            <?php }?>

                        </div>
                        <div class="d-btns-ingredientes">
                            <ul>
                                <li class="wow fadeInUp" data-wow-delay=".2s"><a class="btn btn-icon-ingredientes" href="productos-maiz.php" role="button"><img src="images/icon-ingredientes/maiz.png" alt="Maiz">
                                        <?php if ($_SESSION['lang'] == "eng") {?>
                                        Corn
                                        <?php } else {?>
                                        Maíz
                                        <?php }?>
                                    </a></li>
                                <li class="wow fadeInUp" data-wow-delay=".4s"><a class="btn btn-icon-ingredientes" href="productos-trigo.php" role="button"><img src="images/icon-ingredientes/trigo.png" alt="Trigo">
                                        <?php if ($_SESSION['lang'] == "eng") {?>
                                        Wheat
                                        <?php } else {?>
                                        Trigo
                                        <?php }?>
                                    </a></li>
                                <li class="wow fadeInUp" data-wow-delay=".6s"><a class="btn btn-icon-ingredientes" href="productos-papa.php" role="button"><img src="images/icon-ingredientes/papa.png" alt="Papa">
                                        <?php if ($_SESSION['lang'] == "eng") {?>
                                        Potato
                                        <?php } else {?>
                                        Papa
                                        <?php }?>
                                    </a></li>
                                <li class="wow fadeInUp" data-wow-delay=".8s"><a class="btn btn-icon-ingredientes multigrano" href="productos-multigrano.php" role="button"><img src="images/icon-ingredientes/multigrano.png" alt="Multigrano">
                                        <?php if ($_SESSION['lang'] == "eng") {?>
                                        Multigrain
                                        <?php } else {?>
                                        Multigrano
                                        <?php }?>
                                    </a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>

    <script src="js/main.js" defer></script>



</body>

</html>
