<?php
session_start();
$lang = "";
if ($_SESSION['lang'] == 'eng') {
    $lang = '-eng';
}
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
    'concha-maiz' => array('imagenes' => 'maiz/concha-de-maiz', 'sugerencia' => 'sv-j-f-cl',
        'ingredientes' => 'maiz', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005', 'nombre-eng' => 'CORN SHELL 44LB'),
    'corners-maiz' => array('imagenes' => 'maiz/mini-corners-de-maiz', 'sugerencia' => 'sv-j-f-cl',
        'ingredientes' => 'maiz', 'nombre' => 'MINI CORNERS 13KG', 'sku' => 'PMMAIZ014', 'nombre-eng' => 'CORN MINI CORNERS 28.6LB'),
    'tornillo-maiz' => array('imagenes' => 'maiz/mini-tornillo-de-maiz', 'sugerencia' => 'sv-j-f-cl',
        'ingredientes' => 'maiz', 'nombre' => 'MINI TORNILLO DE MAIZ 20KG', 'sku' => 'PMMAIZ007', 'nombre-eng' => 'CORN MINI TWIST 44LB'),
    'quesadilla-maiz' => array('imagenes' => 'maiz/quesadilla-de-maiz', 'sugerencia' => 'sv-j-f-cl',
        'ingredientes' => 'maiz', 'nombre' => 'QUESADILLA DE MAÍZ 14KG', 'sku' => 'PMMAIZ009', 'nombre-eng' => 'CORN QUESADILLA 30LB'),
    'tortilla-maiz' => array('imagenes' => 'maiz/tortilla-de-maiz', 'sugerencia' => 'sv-j-f-cl',
        'ingredientes' => 'maiz', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),

    'aro-papa' => array('imagenes' => 'papa/aro-sabor-cebolla-de-papa', 'sugerencia' => 'sn-q-ce-cl',
        'ingredientes' => 'papa', 'nombre' => 'ARO DE PAPA SABOR CEBOLLA 15KG', 'sku' => 'PTPVFI004', 'nombre-eng' => 'POTATO ONION RING 33LB'),
    'francesa-papa' => array('imagenes' => 'papa/francesa-de-papa', 'sugerencia' => 'q-j-f-cl',
        'ingredientes' => 'papa', 'nombre' => 'PAPA FRANCESA 15KG', 'sku' => 'PTPVFI002', 'nombre-eng' => 'FRENCH FRIES 33LB'),
    'hojuela-clasica-papa' => array('imagenes' => 'papa/hojuela-clasica-de-papa', 'sugerencia' => 'j-q-cl',
        'ingredientes' => 'papa', 'nombre' => 'HOJUELA DE PAPA CLASICA 8KG', 'sku' => 'PPPREH002', 'nombre-eng' => 'CLASSIC POTATO CHIP 17.6LB'),
    'hojuela-cruji-papa' => array('imagenes' => 'papa/hojuela-cruji-de-papa', 'sugerencia' => 'j-q-cl',
        'ingredientes' => 'papa', 'nombre' => 'HOJUELA DE PAPA CRUJI 6KG', 'sku' => 'PPPREH019', 'nombre-eng' => 'CRUNCHY POTATO CHIP 13.2LB'),
    'hojuela-micro-papa' => array('imagenes' => 'papa/hojuela-micro-de-papa', 'sugerencia' => 'j-q-cl',
        'ingredientes' => 'papa', 'nombre' => 'HOJUELA DE PAPA MICRO 8KG', 'sku' => 'PPPREH003', 'nombre-eng' => 'MINI RIPPLED POTATO CHIP 17.6LB'),
    'hojuzzela-clasica-papa' => array('imagenes' => 'papa/hojuzzela-clasica-de-papa', 'sugerencia' => 'j-q-cl',
        'ingredientes' => 'papa', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005'),
    'mini-cuadro-papa' => array('imagenes' => 'papa/mini-cuadro-de-papa', 'sugerencia' => 'q-j-f-cl',
        'ingredientes' => 'papa', 'nombre' => 'MINI CUADRO DE PAPA 15KG', 'sku' => 'PTPVFI003', 'nombre-eng' => 'POTATO MINI SQUARE 33LB'),
    'mini-rueda-papa' => array('imagenes' => 'papa/mini-rueda-de-papa', 'sugerencia' => 'q-j-f-cl',
        'ingredientes' => 'papa', 'nombre' => 'MINI RUEDA DE PAPA 15KG', 'sku' => 'PTPVFI001', 'nombre-eng' => 'POTATO MINI WHEEL 33LB'),
    'mini-rueda-max-plus-papa' => array('imagenes' => 'papa/mini-rueda-max-plus-de-papa', 'sugerencia' => 'q-j-f-cl',
        'ingredientes' => 'papa', 'nombre' => 'MINI RUEDA PAPA MAX´S PLUS 15KG', 'sku' => 'PTPVMX004', 'nombre-eng' => 'POTATO MAX´S MINI WHEEL 33LB'),
    'mini-rueda-premium-de-papa' => array('imagenes' => 'papa/mini-rueda-premium-de-papa', 'sugerencia' => 'j-sn-q',
        'ingredientes' => 'papa', 'nombre' => 'MINI RUEDA PAPA MAX´S 15KG', 'sku' => 'PTPVMX008'),
    'ondipapas-papa' => array('imagenes' => 'papa/ondipapas-de-papa', 'sugerencia' => 'q-j-f-cl',
        'ingredientes' => 'papa', 'nombre' => 'ONDIPAPAS 8KG', 'sku' => 'PPPREH010', 'nombre-eng' => 'RIPPLED POTATO CHIP 17.6LB'),
    'palito-max-papa' => array('imagenes' => 'papa/palito-max-de-papa', 'sugerencia' => 'q-j-f-cl',
        'ingredientes' => 'papa', 'nombre' => 'PALITO PAPA MAX´S 15KG', 'sku' => 'PTPVMX002', 'nombre-eng' => 'POTATO MAX´S STICK 33LB'),
    'rueda-max-papa' => array('imagenes' => 'papa/rueda-max-de-papa', 'sugerencia' => 'q-j-f-cl',
        'ingredientes' => 'papa', 'nombre' => 'CONCHA DE MAÍZ 20KG', 'sku' => 'PMMAIZ005', 'nombre-eng' => 'POTATO MAX´S WHEEL 44LB'),
    'veggie-chip-espinaca-papa' => array('imagenes' => 'papa/veggie-chip-espinaca-de-papa', 'sugerencia' => 'c-sm',
        'ingredientes' => 'papa', 'nombre' => 'VEGGIE CHIP ESPINACA 8KG', 'sku' => 'PPPREF007', 'nombre-eng' => 'SPINACH VEGGIE CHIPS 18LB'),
    'veggie-chip-natural-papa' => array('imagenes' => 'papa/veggie-chip-natural-de-papa', 'sugerencia' => 'c-sm',
        'ingredientes' => 'papa', 'nombre' => 'VEGGIE CHIP NATURAL 8KG', 'sku' => 'PPPREF009', 'nombre-eng' => 'POTATO VEGGIE CHIPS 18LB'),
    'veggie-chip-tomate-papa' => array('imagenes' => 'papa/veggie-chip-tomate-de-papa', 'sugerencia' => 'c-sm',
        'ingredientes' => 'papa', 'nombre' => 'VEGGIE CHIP TOMATE 8KG', 'sku' => 'PPPREF008', 'nombre-eng' => 'TOMATO VEGGIE CHIPS 18LB'),
    'veggie-stick-espinaca-gf-de-papa' => array('imagenes' => 'papa/veggie-stick-espinaca-gf-de-papa', 'sugerencia' => 'c-sm',
        'ingredientes' => 'papa', 'nombre' => 'VEGGIE STICK ESPINACA GF 15KG', 'sku' => 'PPPREF003', 'nombre-eng' => 'SPINACH VEGGIE STICKS GF 33LB'),
    'veggie-stick-natural-gf-de-papa' => array('imagenes' => 'papa/veggie-stick-natural-gf-de-papa', 'sugerencia' => 'c-sm',
        'ingredientes' => 'papa', 'nombre' => 'VEGGIE STICK NATURAL GF 15KG', 'sku' => 'PPPREF005', 'nombre-eng' => 'POTATO VEGGIE STICKS GF 33LB'),
    'veggie-stick-tomate-gf-papa' => array('imagenes' => 'papa/veggie-stick-tomate-gf-de-papa', 'sugerencia' => 'c-sm',
        'ingredientes' => 'papa', 'nombre' => 'VEGGIE STICK TOMATE GF 15KG', 'sku' => 'PPPREF004', 'nombre-eng' => 'TOMATO VEGGIE STICKS GF 33LB'),
    'veggie-straw-espinaca-papa' => array('imagenes' => 'papa/veggie-straw-espinaca-de-papa', 'sugerencia' => 'c-sm',
        'ingredientes' => 'papa', 'nombre' => 'VEGGIE STRAW ESPINACA 8KG', 'sku' => 'PPPREF017', 'nombre-eng' => 'SPINACH VEGGIE CHIPS GF 17.6LB'),
    'veggie-straw-tomate-papa' => array('imagenes' => 'papa/veggie-straw-tomate-de-papa', 'sugerencia' => 'c-sm',
        'ingredientes' => 'papa', 'nombre' => 'VEGGIE STRAW TOMATE 8KG', 'sku' => 'PPPREF016', 'nombre-eng' => 'TOMATO VEGGIE CHIPS GF 17.6LB'),
    'veggie-straw-natural-papa' => array('imagenes' => 'papa/veggie-straw-natural-de-papa', 'sugerencia' => 'c-sm',
        'ingredientes' => 'papa', 'nombre' => 'VEGGIE STRAW NATURAL 8KG', 'sku' => 'PPPREF015', 'nombre-eng' => 'POTATO VEGGIE CHIPS GF 17.6LB'),

    '2x2-trigo' => array('imagenes' => 'trigo/2x2-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => '2x2 20KG', 'sku' => 'PTFTBR007', 'nombre-eng' => '2x2 44LB'),
    '2x3-liso-trigo' => array('imagenes' => 'trigo/2x3-liso-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => '2x3 LISO 15KG', 'sku' => 'PTFTBR009', 'nombre-eng' => '2x3 PLAIN 33LB'),
    '4x4-trigo' => array('imagenes' => 'trigo/4x4-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => '4x4 15KG', 'sku' => 'PTFTBR001', 'nombre-eng' => '4x4 33LB'),
    '4x8-trigo' => array('imagenes' => 'trigo/4x8-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => '4x8 15KG', 'sku' => 'PTFTBR004', 'nombre-eng' => '4x8 33LB'),
    'anillo-trigo' => array('imagenes' => 'trigo/anillo-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'ANILLO 20KG', 'sku' => 'PTFTAR008', 'nombre-eng' => 'RING 44LB'),
    'anillo-grande-trigo' => array('imagenes' => 'trigo/anillo-grande-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'ANILLO GRANDE 15KG', 'sku' => 'PTFTAR011', 'nombre-eng' => 'BIG RING 33LB'),
    'cabellin-trigo' => array('imagenes' => 'trigo/cabellin-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'CABELLIN 20KG', 'sku' => 'PTFTBR005', 'nombre-eng' => 'CABELLIN 44LB'),
    'canelines-multigrano' => array('imagenes' => 'trigo/canelines-multigrano', 'sugerencia' => 'ac',
        'ingredientes' => 'multigrano', 'nombre' => 'CANELINES MULTIGRANO 15KG', 'sku' => 'PTFTBR046', 'nombre-eng' => 'CANELINES MULTIGRAIN 33LB'),
    'cuadri-bacon-grande-trigo' => array('imagenes' => 'trigo/cuadri-bacon-grande-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'CUADRI BACON GRANDE 15KG', 'sku' => 'PTFTBR011', 'nombre-eng' => 'LARGE CUADRI BACON 33LB'),
    'cuadri-liso-grande-trigo' => array('imagenes' => 'trigo/cuadri-liso-grande-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'CUADRI LISO GRANDE 15KG', 'sku' => 'PTFTBR058'),
    'cuadrini-trigo' => array('imagenes' => 'trigo/cuadrini-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'CUADRINI 20KG', 'sku' => 'PTFTBR019', 'nombre-eng' => 'CUADRINI 44LB'),
    'donita-trigo' => array('imagenes' => 'trigo/donita-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'DONITA 20KG', 'sku' => 'PTFTAR009', 'nombre-eng' => 'DOUGHNUT 44LB'),
    'espacial-trigo' => array('imagenes' => 'trigo/espacial-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'ESPACIAL 15KG', 'sku' => 'PTFTAR003', 'nombre-eng' => 'SPACE 33LB'),
    'magno-rendidor-trigo' => array('imagenes' => 'trigo/magno-rendidor-20-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'MAGNO RENDIDOR 20KG', 'sku' => 'PT10CL010', 'nombre-eng' => 'MAGNO RENDIDOR 44LB'),
    'magno-retro-trigo' => array('imagenes' => 'trigo/magno-retro-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'MAGNO RETRO 20KG', 'sku' => 'PT10CL007', 'nombre-eng' => 'MAGNO RETRO 44LB'),
    'mini-cuadro-trigo' => array('imagenes' => 'trigo/mini-cuadro-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'MINI CUADRO 20KG', 'sku' => 'PTFTAR005', 'nombre-eng' => 'MINI SQUARE 44LB'),
    'mini-rueda-trigo' => array('imagenes' => 'trigo/mini-rueda-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'MINI RUEDA 15KG', 'sku' => 'PTFTAR014', 'nombre-eng' => 'MINI WHEEL 33LB'),
    'mini-tornillo-trigo' => array('imagenes' => 'trigo/mini-tornillo-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'MINI TORNILLO 15KG', 'sku' => 'PTFTBR031', 'nombre-eng' => 'TWIST 33LB'),
    'pal-mix-m-mixto' => array('imagenes' => 'trigo/pal-mix-m-mixto', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'MIX M 20KG', 'sku' => 'PTFTBR029', 'nombre-eng' => 'PAL MIX M 44LB'),
    'olas-trigo' => array('imagenes' => 'trigo/olas-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'OLAS 20KG', 'sku' => 'PTFTAR007', 'nombre-eng' => 'WAVE 44LB'),
    'pal-mix-mega-trigo' => array('imagenes' => 'trigo/pal-mix-mega-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'PAL MIX MEGA 15KG', 'sku' => 'PTFTBR056', 'nombre-eng' => 'PAL MIX MEGA 33LB'),
    'palillo-trigo' => array('imagenes' => 'trigo/palillo-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'PALILLO 15KG', 'sku' => 'PTFTAR008'),
    'papas-a-la-francesa-corta-trigo' => array('imagenes' => 'trigo/papas-a-la-francesa-corta-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'PAPA FRANCESA DE TRIGO CORTA 20KG', 'sku' => 'PTFTBR014', 'nombre-eng' => 'FRENCH FRIES WHEAT 44LB'),
    'parilla-trigo' => array('imagenes' => 'trigo/parrilla-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'PARRILLA 15KG', 'sku' => 'PTFTBR054', 'nombre-eng' => 'GRILL 33LB'),
    'rotini-trigo' => array('imagenes' => 'trigo/rotini-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'ROTINI 20KG', 'sku' => 'PTFTAR006', 'nombre-eng' => 'ROTINI 44LB'),
    'rueda-trigo' => array('imagenes' => 'trigo/rueda-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'RUEDA 15KG', 'sku' => 'PTFTAR001', 'nombre-eng' => 'WHEEL 33LB'),
    'rueda-grande-trigo' => array('imagenes' => 'trigo/rueda-grande-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'RUEDA GRANDE 13KG', 'sku' => 'PTFTAR018', 'nombre-eng' => 'BIG WHEEL 28.6LB'),
    'tocinito-3x3-trigo' => array('imagenes' => 'trigo/tocinito-3x3-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'TOCINITO 3x3 15KG', 'sku' => 'PTFTBR006', 'nombre-eng' => 'BACON 3X3 33LB'),
    'tocinito-trigo' => array('imagenes' => 'trigo/tocinito-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'TOCINITO 15KG', 'sku' => 'PTFTBR002', 'nombre-eng' => 'BACON 3X1 33LB'),
    'tornillo-trigo' => array('imagenes' => 'trigo/tornillo-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'TORNILLO 15KG', 'sku' => 'PTFTAR002', 'nombre-eng' => 'TWIST 33LB'),
    'tubo-trigo' => array('imagenes' => 'trigo/tubo-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'TUBO 20KG', 'sku' => 'PTFTBR020', 'nombre-eng' => 'TUBI 44LB'),
    'tubo-grande-trigo' => array('imagenes' => 'trigo/tubo-grande-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'TUBO GRANDE 15KG', 'sku' => 'PTFTBR008', 'nombre-eng' => 'BIG TUBI 33LB'),
    'zarape-3x2-trigo' => array('imagenes' => 'trigo/zarape-3x2-de-trigo', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'ZARAPE 3x2 20KG', 'sku' => 'PTFTBR032', 'nombre-eng' => 'ZARAPE 3x2 44LB'),

    'anillo-snackit' => array('imagenes' => 'snackit/anillo-snackit', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'ANILLO 750G', 'sku' => 'PTFPAR051', 'nombre-eng' => 'RING 1.6LB HAZ TU BOTANA'),
    'mini-cuadro-snackit' => array('imagenes' => 'snackit/mini-cuadro-snackit', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'MINI CUADRO 750G', 'sku' => 'PTFPAR052','nombre-eng' => 'MINI SQUARE 1.6LB HAZ TU BOTANA'),
    'mini-rueda-snackit' => array('imagenes' => 'snackit/mini-rueda-snackit', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'MINI RUEDA 750G', 'sku' => 'PTFPAR054','nombre-eng' => 'MINI WHEEL 1.6LB HAZ TU BOTANA'),
    'rotini-snackit' => array('imagenes' => 'snackit/rotini-snackit', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'ROTINI 750G', 'sku' => 'PTFPAR053','nombre-eng' => 'ROTINI 1.6LB HAZ TU BOTANA'),
    'mini-cuadro-papa-snackit' => array('imagenes' => 'snackit/mini-cuadro-papa-snackit', 'sugerencia' => 'q-j-f-cl',
        'ingredientes' => 'papa', 'nombre' => 'MINI CUADRO DE PAPA 615G', 'sku' => 'PTPVFI024','nombre-eng' => 'POTATO MINI SQUARE 1.3LB HAZ TU BOTANA'),
    'mini-rueda-papa-snackit' => array('imagenes' => 'snackit/mini-rueda-papa-snackit', 'sugerencia' => 'q-j-f-cl',
        'ingredientes' => 'papa', 'nombre' => 'MINI RUEDA DE PAPA 615G', 'sku' => 'PTPVFI025','nombre-eng' => 'POTATO MINI WHEEL 1.3LB HAZ TU BOTANA'),
    'aro-papa-snackit' => array('imagenes' => 'snackit/aro-papa-snackit', 'sugerencia' => 'sn-j-ce-cl',
        'ingredientes' => 'papa', 'nombre' => 'ARO DE PAPA SABOR CEBOLLA 615G', 'sku' => 'PTPVFI026','nombre-eng' => 'POTATO ONION RING 1.3LB HAZ TU BOTANA'),
    'mini-rueda-453-snackit' => array('imagenes' => 'snackit/mini-rueda-453-snackit', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'MINI RUEDA 453G 1/12 PALMEX SNACKIT', 'sku' => 'PTFPAR057','nombre-eng' => 'MINI WHEEL 1LB PALMEX SNACKIT'),
    'zarape-453-snackit' => array('imagenes' => 'snackit/zarape-453-snackit', 'sugerencia' => 'j-f-cl',
        'ingredientes' => 'trigo', 'nombre' => 'ZARAPE 3x2 453G 1/12 PALMEX SNACKIT', 'sku' => 'PTFPBR052','nombre-eng' => 'ZARAPE 3x2 1LB PALMEX SNACKIT'),

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

<body class="body-producto">
    <section class="sec-producto">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="d-code-producto wow bounceIn" data-wow-delay=".8s">
                        <span class="badge badge-code">SKU <?php echo $productos[$producto]['sku'] ?></span>
                    </div>
                    <div class="d-title-cat wow bounceInDown" data-wow-delay=".1s">
                        <p class="t1"><?php echo $productos[$producto]['nombre' . $lang] ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="d-image-medidas wow fadeInUp" data-wow-delay=".4s">
                        <img src="productos/platos/<?php echo $productos[$producto]['imagenes'] ?>/medidas<?php echo $lang; ?>.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row row-pellet-frito">
                <div class="col-lg-4 col-md-12 col-12 offset-lg-2  wow bounceIn" data-wow-delay=".4s">
                    <div class="d-image-pellet">
                        <img src="productos/platos/<?php echo $productos[$producto]['imagenes'] ?>/pellet.png" alt="">
                        <img class="image-pop"
                            src="productos/platos/<?php echo $productos[$producto]['imagenes'] ?>/info-pellet<?php echo $lang; ?>.png"
                            alt="">
                    </div>

                </div>
                <div class="col-lg-4 col-md-12 col-12 wow bounceIn" data-wow-delay=".6s">
                    <div class="d-image-frito">
                        <img class="frito"
                            src="productos/platos/<?php echo $productos[$producto]['imagenes'] ?>/frito.png" alt="">
                        <br>
                        <img class="image-pop"
                            src="productos/platos/<?php echo $productos[$producto]['imagenes'] ?>/info-frito<?php echo $lang; ?>.png"
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
                        <img src="images/ingredientes<?php echo $lang; ?>/<?php
if ($productos[$producto]['ingredientes'] == 'papa') {
    echo 'papa' . $lang . '.png';
}

if ($productos[$producto]['ingredientes'] == 'trigo') {
    echo 'trigo' . $lang . '.png';
}

if ($productos[$producto]['ingredientes'] == 'multigrano') {
    echo 'multigrano' . $lang . '.png';
}

if ($productos[$producto]['ingredientes'] == 'maiz') {
    echo 'maiz' . $lang . '.png';
}
?>" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-12 ">
                    <div class="d-sugerencia wow fadeInUp" data-wow-delay=".6s">
                        <img src="images/sugerencias<?php echo $lang; ?>/<?php echo $productos[$producto]['sugerencia'] ?><?php echo $lang; ?>.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-5 order-lg-last order-first">
                    <div class="d-presentacion wow fadeInUp" data-wow-delay=".8s">
                        <img src="productos/platos/<?php echo $productos[$producto]['imagenes'] ?>/presentacion<?php echo $lang; ?>.png"
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
                    <a class="btn btn-ficha"
                         href="productos/platos/<?php echo $productos[$producto]['imagenes'] ?>/ficha-tecnica<?php echo $lang; ?>.jpg"
                        target='_blank' role="button"><i class="fas fa-file-alt"></i>Descargar ficha
                        técnica</a>
                </div>
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