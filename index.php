<?php
include_once('inc/config_db.php');
$sql = "SELECT id, title, subtitle, background_image, front_image FROM banner";
$stmt = $con->prepare($sql);
$stmt->execute();
$banners = $stmt->fetchAll(PDO::FETCH_ASSOC);
$info = [
        0 => [
                'categoria' => 'Mantenimiento de pisos',
                'ruta' => '/productos/sellador-polimerico/',
        ],
        1 => [
                'categoria' => 'Especialidades',
                'ruta' => '/productos/desengrasante-industrial/',
        ],
        2 => [
                'categoria' => 'Mantenimiento de pisos',
                'ruta' => '/productos/cera-polimerica/',
        ],
        3 => [
                'categoria' => 'Mantenimiento de pisos',
                'ruta' => '/productos/removedor-de-cera/',
        ],
        4 => [
                'categoria' => 'Limpieza general',
                'ruta' => '/productos/limpiador-neutro/',
        ],
        5 => [
                'categoria' => 'Limpieza general',
                'ruta' => '/productos/limpiador-multiusos/',
        ],
        6 => [
                'categoria' => 'Especialidades',
                'ruta' => '/productos/limpiador-ultra/',
        ],
        7 => [
                'categoria' => 'Cuidado ropa',
                'ruta' => '/productos/categoria/cuidado-ropa/',
        ],
        8 => [
                'categoria' => 'Limpieza general',
                'ruta' => '/productos/ambientador-liquido/',
        ],
        9 => [
                'categoria' => 'Higiene cocina',
                'ruta' => '/productos/lavaloza-liquido/',
        ],
        10 => [
                'categoria' => 'Aseo doméstico y oficina',
                'ruta' => '/productos/shampoo-para-alfombras/',
        ],
        11 => [
                'categoria' => 'Aseo doméstico y oficina',
                'ruta' => '/productos/lustramuebles/',
        ],
        12 => [
                'categoria' => 'Limpieza equipos de oficina',
                'ruta' => '/productos/dirt-free-office/',
        ],
        13 => [
                'categoria' => 'Limpieza automotriz',
                'ruta' => '/productos/categoria/limpieza-automotriz/',
        ],
];

foreach ($banners as $key => &$banner) {
    $banner['categoria'] = $info[$key]['categoria'];
    $banner['ruta'] = $info[$key]['ruta'];
}
$sqlMercados = "SELECT m.id, m.name, m.slug, count(p.id) productsNumber
        FROM mercado m
        LEFT JOIN product p on m.id = p.mercado_id
        GROUP BY m.id";

$stmt = $con->prepare($sqlMercados);
$stmt->execute();
$mercadosList = $stmt->fetchAll(PDO::FETCH_ASSOC);
$fechaInicio = new DateTime('2001-10-01');

// Fecha actual
$fechaActual = new DateTime();

// Calculamos la diferencia entre las dos fechas
$diferencia = $fechaInicio->diff($fechaActual);
?>
<!doctype html>
<html class="no-js" lang="es">

<head>
    <title>Industrias Novaquim S.A.S. | Productos de aseo a la medida de sus necesidades</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="author" content="Industrias Novaquim">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <link rel="icon" href="/img/favicon.ico" type="image/ico" sizes="16x16">
    <meta name="description" content="Servicios de aseo">

    <?php include('inc/assets.php') ?>
</head>

<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="modern" data-mobile-nav-bg-color="#242E45">
<div class="box-layout">
    <!-- start header -->
    <?php include('inc/header.php') ?>
    <!-- end header -->
    <!-- start slider -->
    <section id="slider" class="p-0 top-space-margin ">
        <div class="demo-corporate-slider_wrapper fullscreen-container" data-alias="portfolio-viewer" data-source="gallery" style="background-color:transparent;padding:0px;">
            <div id="demo-corporate-slider" class="rev_slider bg-regal-blue fullscreenbanner" style="display:none;" data-version="5.3.1.6">
                <!-- begin slides list -->
                <ul>
                    <!-- minimum slide structure -->
                    <?php
                    foreach ($banners as $key => $banner):
                    ?>
                    <li data-index="rs-<?=$key+1 ?>" data-transition="parallaxleft" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                        data-easeout="default" data-masterspeed="1500" data-rotate="0" data-saveperformance="off"
                        data-title="Crossfit" data-param1="" data-param2="" data-param3="" data-param4=""
                        data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                        data-description="">
                        <!-- slide's main background image -->
                        <img src="<?= ADMIN_URL ?>uploads/images/<?= $banner['background_image'] ?>" alt="Image"
                             data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                             class="rev-slidebg" data-no-retina>
                        <!-- start overlay layer -->
                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-1-layer-01"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
                             data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                             data-frames='[{"delay":0,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                     {"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power4.easeInOut"}]' style="background:rgba(22,35,63,0.1); z-index: 0;">
                                </div>
                                <!-- end overlay layer -->
                                <!-- start shape layer -->
                                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme bg-regal-blue border-radius-50"
                                     id="slide-1-layer-02" data-x="['center','center','center','center']"
                                     data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                     data-voffset="['0','0','0','0']" data-width="['700','700','700','600']"
                                     data-height="['700','700','700','600']" data-whitespace="nowrap" data-type="shape"
                                     data-responsive_offset="on"
                                     data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"x:0px;y:50px;rX:0deg;rY:0deg;rZ:0deg;sX:0.5;sY:0.5;opacity:0;","to":"o:0.5;","ease":"Back.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                     data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]" style="z-index: 0;">
                                </div>
                                <!-- end shape layer -->
                                <!-- start shape layer -->
                                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme bg-regal-blue border-radius-50"
                                     id="slide-1-layer-03" data-x="['center','center','center','center']"
                                     data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                     data-voffset="['0','0','0','0']" data-width="['1000','1000','900','800']"
                                     data-height="['1000','1000','900','800']" data-whitespace="nowrap" data-type="shape"
                                     data-responsive_offset="on"
                                     data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"x:0px;y:50px;rX:0deg;rY:0deg;rZ:0deg;sX:0.5;sY:0.5;opacity:0;","to":"o:0.3;","ease":"Back.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                     data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]" style="z-index: 0;">
                                </div>
                                <!-- end shape layer -->
                                <!-- start row zone layer -->
                                <div id="rrzm_638" class="rev_row_zone rev_row_zone_middle">
                                    <!-- start row layer -->
                                    <div class="tp-caption  " id="slide-1-layer-04" data-x="['left','left','left','left']"
                                         data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                         data-voffset="['-426','-426','-426','-426']" data-width="none" data-height="none"
                                         data-whitespace="nowrap" data-type="row" data-columnbreak="3"
                                         data-responsive_offset="on" data-responsive="off"
                                         data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                         data-paddingtop="[0,0,0,0]" data-paddingright="[100,75,50,30]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[100,75,50,30]">
                                        <!-- start column layer -->
                                        <div class="tp-caption" id="slide-1-layer-05" data-x="['left','left','left','left']"
                                             data-hoffset="['100','100','100','100']" data-y="['top','top','top','top']"
                                             data-voffset="['100','100','100','100']" data-width="none" data-height="none"
                                             data-whitespace="nowrap" data-type="column" data-responsive_offset="on"
                                             data-responsive="off"
                                             data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                             data-columnwidth="100%" data-verticalalign="top"
                                             data-textAlign="['center','center','center','center']">
                                            <!-- start subtitle layer -->
                                            <div class="tp-caption mx-auto text-uppercase" id="slide-1-layer-06"
                                                 data-x="['center','center','center','center']"
                                                 data-hoffset="['0','0','0','0']"
                                                 data-y="['middle','middle','middle','middle']"
                                                 data-voffset="['0','0','0','0']" data-fontsize="['13','13','13','13']"
                                                 data-lineheight="['20','20','20','20']"
                                                 data-fontweight="['500','500','500','500']"
                                                 data-letterspacing="['1','1','1','1']"
                                                 data-color="['#ffffff','#ffffff','#ffffff','#ffffff']"
                                                 data-width="['800','auto','auto','auto']" data-height="auto"
                                                 data-whitespace="normal" data-basealign="grid" data-type="text"
                                                 data-responsive_offset="off" data-verticalalign="middle"
                                                 data-responsive="off"
                                                 data-frames='[{"delay":2500,"speed":800,"frame":"0","from":"y:-50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"power3.inOut"}]'
                                                 data-textAlign="['center','center','center','center']"
                                                 data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                 data-paddingbottom="[25,25,10,10]" data-paddingleft="[0,0,0,0]"
                                                 style="word-break: initial;">
                                                <?= $banner['categoria'] ?>
                                            </div>
                                            <!-- end subtitle layer -->
                                            <!-- start title layer -->
                                            <div class="tp-caption mx-auto" id="slide-1-layer-07"
                                                 data-x="['center','center','center','center']"
                                                 data-hoffset="['0','0','0','0']"
                                                 data-y="['middle','middle','middle','middle']"
                                                 data-voffset="['0','0','0','0']" data-fontsize="['75','60','70','50']"
                                                 data-lineheight="['70','65','75','55']"
                                                 data-fontweight="['700','700','700','700']"
                                                 data-letterspacing="['-2','-2','-2','0']"
                                                 data-color="['#ffffff','#ffffff','#ffffff','#ffffff']"
                                                 data-width="['700','600','600','auto']" data-height="auto"
                                                 data-whitespace="normal" data-basealign="grid" data-type="text"
                                                 data-responsive_offset="off" data-verticalalign="middle"
                                                 data-responsive="on"
                                                 data-frames='[{"delay":"1500","split":"chars","splitdelay":0.03,"speed":800,"split_direction":"middletoedge","frame":"0","from":"x:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":100,"frame":"999","to":"opacity:0;fb:0;","ease":"Power4.easeOut"}]'
                                                 data-textAlign="['center','center','center','center']"
                                                 data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                 data-paddingbottom="[33,28,35,25]" data-paddingleft="[0,0,0,0]"
                                                 style="word-break: initial; text-shadow: #0b1236 3px 3px 15px;">
                                                <?= $banner['title'] ?>
                                            </div>
                                            <!-- end title layer -->
                                            <!-- start text layer -->
                                            <div class="tp-caption mx-auto" id="slide-1-layer-08"
                                                 data-x="['center','center','center','center']"
                                                 data-hoffset="['0','0','0','0']"
                                                 data-y="['middle','middle','middle','middle']"
                                                 data-voffset="['0','0','0','0']" data-fontsize="['20','20','24','20']"
                                                 data-lineheight="['36','36','40','30']"
                                                 data-fontweight="['300','300','300','300']"
                                                 data-letterspacing="['0','0','0','0']"
                                                 data-color="['#ffffff','#ffffff','#ffffff','#ffffff']"
                                                 data-width="['500','500','auto','auto']" data-height="auto"
                                                 data-whitespace="normal" data-basealign="grid" data-type="text"
                                                 data-responsive_offset="off" data-verticalalign="middle"
                                                 data-responsive="on"
                                                 data-frames='[{"delay":2500,"speed":800,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:0.6;fb:0;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"power3.inOut"}]'
                                                 data-textAlign="['center','center','center','center']"
                                                 data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                 data-paddingbottom="[36,36,60,40]" data-paddingleft="[0,0,0,0]">
                                                <?= $banner['subtitle'] ?>.
                                            </div>
                                            <!-- end text layer -->
                                            <!-- start button layer -->
                                            <div class="tp-caption tp-resizeme" id="slide-1-layer-09"
                                                 data-x="['center','center','center','center']"
                                                 data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                                 data-voffset="['0','0','0','0']" data-width="auto" data-height="none"
                                                 data-whitespace="nowrap" data-fontsize="['18','16','16','16']"
                                                 data-lineheight="['70','55','55','55']" data-type="text"
                                                 data-responsive_offset="off" data-responsive="off"
                                                 data-frames='[{"delay":3000,"speed":1000,"frame":"0","from":"y:100px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                 data-textAlign="['inherit','inherit','inherit','inherit']"
                                                 data-paddingtop="[0,0,0,0]" data-paddingright="[75,70,65,60]"
                                                 data-paddingbottom="[0,0,0,0]" data-paddingleft="[45,35,30,30]">
                                                <a href="<?= $banner['ruta'] ?>"
                                                   class="btn btn-extra-large get-started-btn btn-rounded with-rounded btn-gradient-flamingo-amethyst-green btn-box-shadow">Ver más<span
                                                            class="bg-white text-base-color"><i
                                                                class="fa-solid fa-arrow-right"></i></span></a>
                                            </div>
                                            <!-- end button layer -->
                                        </div>
                                        <!-- end column layer -->
                                    </div>
                                    <!-- end row layer -->
                                </div>
                                <!-- end row zone layer -->
                                <!-- start beige background layer -->
                                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme bg-base-color border-radius-50"
                                     id="slide-1-layer-10" data-x="['center','center','center','center']"
                                     data-hoffset="['370','410','310','0']" data-y="['middle','middle','middle','middle']"
                                     data-voffset="['-200','-250','-250','0']" data-width="['122','122','120','120']"
                                     data-height="['122','122','120','120']" data-visibility="['on','on','off','off']"
                                     data-whitespace="nowrap" data-basealign="grid" data-type="shape"
                                     data-responsive_offset="on"
                                     data-frames='[{"delay":3500,"speed":1000,"frame":"0","from":"x:0px;y:50px;rX:0deg;rY:0deg;rZ:0deg;sX:0.5;sY:0.5;opacity:0;","to":"o:1;","ease":"Back.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                     data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]" style="z-index: 0;">
                                </div>
                                <!-- end beige background layer -->
                                <!-- start beige text layer -->
                                <div class="tp-caption d-inline-block" id="slide-1-layer-11"
                                     data-x="['center','center','center','center']" data-hoffset="['370','410','310','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['-190','-250','-250','0']"
                                     data-visibility="['on','on','off','off']" data-fontsize="['13','13','13','13']"
                                     data-lineheight="['16','16','16','16']" data-fontweight="['500','600','600','600']"
                                     data-letterspacing="['0','0','0','0']"
                                     data-color="['#ffffff','#ffffff','#ffffff','#ffffff']"
                                     data-width="['100','100','100','100']" data-height="auto" data-whitespace="normal"
                                     data-basealign="grid" data-type="text" data-responsive_offset="on"
                                     data-verticalalign="middle" data-responsive="on"
                                     data-frames='[{"delay":3700,"speed":1000,"frame":"0","from":"x:0px;y:50px;rX:0deg;rY:0deg;rZ:0deg;sX:0.5;sY:0.5;opacity:0;","to":"o:1;","ease":"Back.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                     data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]" data-paddingbottom="[33,0,0,0]"
                                     data-paddingleft="[0,0,0,0]" style="word-break: initial;">
                                    <i class="bi bi-patch-check-fill icon-extra-medium d-block pb-10px"></i> <span
                                            class="d-block text-uppercase">Calidad garantizada</span>
                                </div>
                                <!-- end beige text layer -->
                                <!-- BEGIN IMAGE LAYER -->
                                <div class="tp-caption tp-resizeme hide-on-mobile"

                                     data-frames='[{"delay":2000,"speed":500,"frame":"0","from":"x:left;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                     data-visibility="['on', 'off', 'off', 'off']"
                                     data-type="image"
                                     data-x="['center', 'center', 'center', 'center']"
                                     data-y="['center', 'center', 'center', 'center']"
                                     data-hoffset="['-550','-400','-300','-200']"
                                     data-voffset="['-80','-250','-250','-200']"
                                     data-width="['auto', 'auto', 'auto', 'auto']"
                                     data-height="['auto','auto','auto','auto']"
                                     data-paddingtop="[0, 0, 0, 0]"
                                     data-paddingright="[0, 0, 0, 0]"
                                     data-paddingbottom="[0, 0, 0, 0]"
                                     data-paddingleft="[0, 0, 0, 0]"

                                     data-basealign="slide"
                                     data-responsive_offset="on"
                                     data-responsive="on"
                                     data-scalec="1"
                                     data-scaleend="1"
                                     data-scale="1"

                                ><img class="img-fluid" src="<?= ADMIN_URL ?>uploads/images/<?= $banner['front_image'] ?>" alt="App Store"></div>
                                <!-- END IMAGE LAYER -->




                        <!--<div class="et_pb_animation_left et-animated mb-4 image-front">
                            <img class="image-banner" src="<?php /*= ADMIN_URL */?>uploads/images/<?php /*= $banner['front_image'] */?>"
                                 alt="<?php /*= $banner['subtitle'] */?>">
                        </div>-->
                    </li>
                    <?php
                    endforeach;
                    ?>
                </ul>
                <div class="tp-bannertimer"
                     style="height: 10px; background-color: rgba(0, 0, 0, 0.10); z-index: 98"></div>
            </div>
        </div>
    </section>
    <!-- end slider -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center mb-6 sm-pb-9">
                <div class="col-lg-6 col-md-9 position-relative md-mb-15 text-center text-lg-start d-flex align-items-center justify-content-center"
                     data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 15, "easing": "easeOutQuad" }'>
                    <div class="position-absolute z-index-9 counter-style-02 text-center">
                        <span class="fs-160 fw-800 text-dark-gray ls-minus-10px xs-ls-minus-5px position-relative lg-fs-130 xs-fs-75"><?= $diferencia->y ?><sub
                                    class="align-top fs-80 lg-fs-70 text-dark-gray position-relative top-minus-3px">+</sub></span>
                        <span class="d-block mx-auto fs-20 fw-500 lh-26 w-70 text-center text-dark-gray xs-w-100">Años de experiencia</span>
                    </div>
                    <img src="images/demo-corporate-03.png" alt="">
                    <img src="/img/logo-300.png" class="position-absolute top-50 left-minus-100px lg-left-minus-40px sm-left-minus-30px lg-w-50 sm-w-55"
                         data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-220px)" alt="">
                    <img src="/img/circle-01.png" class="position-absolute top-0px xl-top-minus-10px w-170px right-20px md-right-40px xs-w-40" data-bottom-top="transform: translateY(-50px)"
                         data-top-bottom="transform: translateY(50px)" alt="">
                </div>
                <div class="col-lg-6 ps-6 text-center text-lg-start lg-ps-15px"
                     data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-block">Productos de alto desempeño</span>
                    <h3 class="text-dark-gray fw-700 ls-minus-1px">Calidad superior a precios competitivos, siempre.</h3>
                    <p class="w-80 xl-w-90 lg-w-100 mb-40px sm-mb-25px">Industrias Novaquim S.A.S. es una compañía colombiana con más de <?= $diferencia->y ?> años de trayectoria, especializada en el desarrollo y
                        fabricación de productos de higiene y limpieza diseñados para satisfacer las exigencias de los sectores industrial, institucional y doméstico. Nuestro crecimiento ha sido
                        impulsado por la innovación, la calidad y el compromiso permanente con nuestros clientes.</p>
                    <a href="/quienes-somos/" class="btn btn-large btn-dark-gray btn-hover-animation-switch btn-box-shadow btn-rounded me-25px xs-me-0">
                                <span>
                                    <span class="btn-text">Nosotros</span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                </span>
                    </a>
                    <span class="text-dark-gray fw-700 ls-minus-05px d-block d-sm-inline-block sm-mt-15px"><a href="tel:316 8731806"><i class="feather icon-feather-phone-call me-10px"></i>316 8731806</a></span>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 justify-content-center counter-style-01">
                <!-- start counter item -->
                <div class="col feature-box md-mb-50px xs-mb-30px">
                    <div class="feature-box-icon">
                        <i class="bi bi-crosshair icon-large text-dark-gray mb-20px d-block"></i>
                    </div>
                    <div class="feature-box-content">
                        <h2 class="d-inline-block align-middle counter-number fw-700 text-dark-gray mb-0 counter" data-speed="2000" data-to="100"></h2>
                        <span class="d-block text-dark-gray lh-1 fw-500">Comprometidos con el medio ambiente</span>
                    </div>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col feature-box md-mb-50px xs-mb-30px">
                    <div class="feature-box-icon">
                        <i class="bi bi-check-lg icon-large text-dark-gray mb-20px d-block"></i>
                    </div>
                    <div class="feature-box-content">
                        <h2 class="d-inline-block align-middle counter-number fw-700 text-dark-gray mb-0 counter" data-speed="2000" data-to="100"></h2>
                        <span class="d-block text-dark-gray fw-500">Calidad y Seguridad</span>
                    </div>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col feature-box xs-mb-30px">
                    <div class="feature-box-icon">
                        <i class="bi bi-calendar icon-large text-dark-gray mb-20px d-block"></i>
                    </div>
                    <div class="feature-box-content">
                        <h2 class="d-inline-block align-middle counter-number fw-700 text-dark-gray mb-0 counter" data-speed="2000" data-to="<?= $diferencia->y ?>"></h2>
                        <span class="d-block text-dark-gray fw-500">Años de servicio</span>
                    </div>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col feature-box">
                    <div class="feature-box-icon">
                        <i class="fa-solid fa-users align-middle icon-large text-dark-gray mb-20px d-block"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <h2 class="d-inline-block align-middle counter-number fw-700 text-dark-gray mb-0 counter" data-speed="2000" data-to="2000"></h2>
                        <span class="d-block text-dark-gray fw-500">Profesionales en Aseo</span>
                    </div>
                </div>
                <!-- end counter item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="overflow-hidden bg-base-color position-relative border-radius-6px lg-border-radius-0px z-index-0">
        <!--<img src="https://placehold.co/760x792" class="position-absolute top-minus-150px left-minus-30px z-index-minus-1" data-bottom-top="transform: rotate(0deg) translateY(0)"
             data-top-bottom="transform:rotate(-20deg) translateY(0)" alt=""/>-->
        <div class="container">
            <div class="row align-items-center mb-6 sm-mb-9 text-center text-lg-start">
                <div class="col-lg-5 md-mb-20px">
                    <span class="ps-25px pe-25px mb-10px text-uppercase text-white fs-13 lh-42px fw-600 border-radius-100px bg-gradient-blue-whale-transparent d-inline-block">Soluciones de higiene y limpieza para cada industria</span>
                    <h3 class="text-white fw-700 mb-0 ls-minus-1px">Mercados</h3>
                </div>
                <div class="col-lg-5 last-paragraph-no-margin md-mb-20px">
                    <p class="w-85 md-w-100">En Novaquim entendemos que cada sector tiene necesidades diferentes. Por eso desarrollamos soluciones específicas de higiene, limpieza y mantenimiento que se adaptan a los requerimientos de cada cliente.</p>
                </div>
                <div class="col-lg-2 d-flex justify-content-center justify-content-lg-end">
                    <!-- start slider navigation -->
                    <div class="slider-one-slide-prev-1 icon-extra-medium text-white swiper-button-prev slider-navigation-style-04 border border-1 border-color-transparent-white-light">
                        <i class="feather icon-feather-chevron-left"></i>
                    </div>
                    <div class="slider-one-slide-next-1 icon-extra-medium text-white swiper-button-next slider-navigation-style-04 border border-1 border-color-transparent-white-light">
                        <i class="feather icon-feather-chevron-right"></i>
                    </div>
                    <!-- end slider navigation -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 position-relative">
                    <div class="outside-box-right-20 sm-outside-box-left-0 sm-outside-box-right-0"
                         data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <div class="swiper magic-cursor slider-one-slide"
                             data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false },  "pagination": { "el": ".slider-four-slide-pagination", "clickable": true, "dynamicBullets": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1400": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper pt-20px pb-20px">
                                    <!-- start slider item -->
                                    <div class="swiper-slide">
                                        <div class="box-shadow-extra-large hover-box last-paragraph-no-margin border-radius-4px overflow-hidden">
                                            <div class="bg-very-light-gray position-relative box-image text-center">
                                                <img class="img-product" src="/img/hogar.jpg" alt="hogar y oficina">
                                            </div>
                                            <div class="bg-white">
                                                <div class="ps-50px pe-50px pt-35px sm-p-35px sm-pb-0" style="height: 190px;">
                                                    <a href="<?= APP_URL .'productos/mercado/hogar-y-oficina/' ?>" class="d-inline-block fs-19 primary-font fw-600 text-dark-gray mb-5px">HOGAR Y OFICINA</a>
                                                    <p>El cuidado del hogar y los espacios de trabajo medianos requiere de soluciones prácticas y eficientes.</p>
                                                </div>
                                                <div class="border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px mt-30px sm-ps-35px sm-pe-35px position-relative">
                                                    <p class="mb-3"><a href="<?= APP_URL .'productos/mercado/hogar-y-oficina/' ?>">Ver productos <small>(<?= $mercadosList[0]['productsNumber']?>)</small></a></p>
                                                    <a href="<?= APP_URL .'productos/mercado/hogar-y-oficina/' ?>"
                                                       class="d-flex justify-content-center align-items-center w-55px h-55px lh-55 rounded-circle bg-dark-gray position-absolute right-40px top-minus-30px"><i
                                                                class="bi bi-arrow-right-short text-white icon-very-medium"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slider item -->
                                    <!-- start slider item -->
                                    <div class="swiper-slide">
                                        <div class="box-shadow-extra-large hover-box last-paragraph-no-margin border-radius-4px overflow-hidden">
                                            <div class="bg-very-light-gray position-relative box-image text-center">
                                                <img class="img-product" src="/img/conjunto.jpg" alt="propiedad horizontal">
                                            </div>
                                            <div class="bg-white">
                                                <div class="ps-50px pe-50px pt-35px sm-p-35px sm-pb-0" style="height: 190px;">
                                                    <a href="<?= APP_URL .'productos/mercado/propiedad-horizontal/' ?>" class="d-inline-block fs-19 primary-font fw-600 text-dark-gray mb-5px">PROPIEDAD HORIZONTAL</a>
                                                    <p>Mantener las zonas comunes impecables, seguras y con una presentación intachable es clave para el bienestar de cualquier propiedad horizontal.</p>
                                                </div>
                                                <div class="border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px mt-30px sm-ps-35px sm-pe-35px position-relative">
                                                    <p class="mb-3"><a href="<?= APP_URL .'productos/mercado/propiedad-horizontal/' ?>">Ver productos <small>(<?= $mercadosList[1]['productsNumber']?>)</small></a></p>
                                                    <a href="<?= APP_URL .'productos/mercado/propiedad-horizontal/' ?>"
                                                       class="d-flex justify-content-center align-items-center w-55px h-55px lh-55 rounded-circle bg-dark-gray position-absolute right-40px top-minus-30px"><i
                                                                class="bi bi-arrow-right-short text-white icon-very-medium"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slider item -->
                                    <!-- start slider item -->
                                    <div class="swiper-slide">
                                        <div class="box-shadow-extra-large hover-box last-paragraph-no-margin border-radius-4px overflow-hidden">
                                            <div class="bg-very-light-gray position-relative box-image text-center">
                                                <img class="img-product" src="/img/distribucionweb.jpg" alt="Institucional">
                                            </div>
                                            <div class="bg-white">
                                                <div class="ps-50px pe-50px pt-35px sm-p-35px sm-pb-0" style="height: 190px;">
                                                    <a href="<?= APP_URL .'productos/mercado/institucional/' ?>" class="d-inline-block fs-19 primary-font fw-600 text-dark-gray mb-5px">INSTITUCIONAL</a>
                                                    <p>Las instituciones de salud, educación y del sector público exigen el máximo nivel de protección y bioseguridad.</p>
                                                </div>
                                                <div class="border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px mt-30px sm-ps-35px sm-pe-35px position-relative">
                                                    <p class="mb-3"><a href="<?= APP_URL .'productos/mercado/institucional/' ?>">Ver productos <small>(<?= $mercadosList[2]['productsNumber']?>)</small></a></p>
                                                    <a href="<?= APP_URL .'productos/mercado/institucional/' ?>"
                                                       class="d-flex justify-content-center align-items-center w-55px h-55px lh-55 rounded-circle bg-dark-gray position-absolute right-40px top-minus-30px"><i
                                                                class="bi bi-arrow-right-short text-white icon-very-medium"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slider item -->
                                    <!-- start slider item -->
                                    <div class="swiper-slide">
                                        <div class="box-shadow-extra-large hover-box last-paragraph-no-margin border-radius-4px overflow-hidden">
                                            <div class="bg-very-light-gray position-relative box-image text-center">
                                                <img class="img-product" src="/img/carro.jpg" alt="Automotriz">
                                            </div>
                                            <div class="bg-white">
                                                <div class="ps-50px pe-50px pt-35px sm-p-35px sm-pb-0" style="height: 190px;">
                                                    <a href="<?= APP_URL .'productos/mercado/automotriz/' ?>" class="d-inline-block fs-19 primary-font fw-600 text-dark-gray mb-5px">AUTOMOTRIZ</a>
                                                    <p>Enfrentar la suciedad pesada, grasas y aceites sin comprometer la estética del vehículo exige soluciones de alta calidad.</p>
                                                </div>
                                                <div class="border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px mt-30px sm-ps-35px sm-pe-35px position-relative">
                                                    <p class="mb-3"><a href="<?= APP_URL .'productos/mercado/automotriz/' ?>">Ver productos <small>(<?= $mercadosList[3]['productsNumber']?>)</small></a></p>
                                                    <a href="<?= APP_URL .'productos/mercado/automotriz/' ?>"
                                                       class="d-flex justify-content-center align-items-center w-55px h-55px lh-55 rounded-circle bg-dark-gray position-absolute right-40px top-minus-30px"><i
                                                                class="bi bi-arrow-right-short text-white icon-very-medium"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slider item -->
                                    <!-- start slider item -->
                                    <div class="swiper-slide">
                                        <div class="box-shadow-extra-large hover-box last-paragraph-no-margin border-radius-4px overflow-hidden">
                                            <div class="bg-very-light-gray position-relative box-image text-center">
                                                <img class="img-product" src="/img/planta.jpg" alt="Industrial">
                                            </div>
                                            <div class="bg-white">
                                                <div class="ps-50px pe-50px pt-35px sm-p-35px sm-pb-0" style="height: 190px;">
                                                    <a href="<?= APP_URL .'productos/mercado/industrial/' ?>" class="d-inline-block fs-19 primary-font fw-600 text-dark-gray mb-5px">INDUSTRIAL</a>
                                                    <p>Los entornos industriales exigen soluciones robustas para combatir la suciedad pesada y las grasas rebeldes.</p>
                                                </div>
                                                <div class="border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px mt-30px sm-ps-35px sm-pe-35px position-relative">
                                                    <p class="mb-3"><a href="<?= APP_URL .'productos/mercado/industrial/' ?>">Ver productos <small>(<?= $mercadosList[4]['productsNumber']?>)</small></a></p>
                                                    <a href="<?= APP_URL .'productos/mercado/industrial/' ?>"
                                                       class="d-flex justify-content-center align-items-center w-55px h-55px lh-55 rounded-circle bg-dark-gray position-absolute right-40px top-minus-30px"><i
                                                                class="bi bi-arrow-right-short text-white icon-very-medium"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slider item -->
                            </div>
                        </div>
                    </div>
                    <!-- start slider pagination -->
                    <!--<div class="swiper-pagination slider-four-slide-pagination swiper-pagination-style-2 swiper-pagination-clickable swiper-pagination-bullets"></div>-->
                    <!-- end slider pagination -->
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <i class="bi bi-envelope text-white d-inline-block align-middle icon-extra-medium me-10px md-m-5px"></i>
                    <div class="fs-18 text-white d-inline-block align-middle">Save your precious time and effort spent for finding a solution. <a href="demo-corporate-contact.html"
                                                                                                                                                  class="text-white text-decoration-line-bottom">Contact
                            us now</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <section class="mb-5">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-3">
                    <h3><span style="color: #000080;">UBICACIÓN</span></h3>
                    <p class="mb-0"><strong>Dirección:</strong></p>
                    <p class="mb-0">Calle 35 C Sur No. 26 F - 40</p>
                    <p class="mb-0">Bogotá D.C. Colombia</p>
                    <p class="mb-0"><strong>Teléfonos:</strong></p>
                    <p class="mb-0">(+57-601) 203 9484 - (+57-601) 202 2912</p>
                    <p class="mb-0"><strong>Celular:</strong></p>
                    <p class="mb-0">(+57) 311 252 6120</p>
                    <p class="mb-0"><strong>Email:</strong></p>
                    <p class="mb-0"><a href="mailto:info@novaquim.com?target=">info@novaquim.com</a></p>
                </div>
                <div class="col-sm-9">
                    <iframe width="100%" height="450"
                            src="https://embed.waze.com/es/iframe?zoom=17&lat=4.587338722815989&lon=-74.12103295326234&pin=1&ct=livemap"></iframe>
                </div>
            </div>

        </div>
    </section>
    <!-- start footer -->
    <?php include('inc/footer.php') ?>
    <!-- end footer -->
    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->
</div>
<!-- javascript libraries -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/vendors.min.js"></script>
<!-- slider revolution core javaScript files -->
<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- slider revolution extension scripts. ONLY NEEDED FOR LOCAL TESTING -->
<!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>-->
<!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>-->
<!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>-->
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>-->
<!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>-->
<!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>-->
<!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>-->
<!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>-->

<!-- Slider's main "init" script -->
<script>
    var tpj = jQuery;
    var revapi7;
    var $ = jQuery.noConflict();
    tpj(document).ready(function () {
        if (tpj("#demo-corporate-slider").revolution == undefined) {
            revslider_showDoubleJqueryError("#demo-corporate-slider");
        } else {
            revapi7 = tpj("#demo-corporate-slider").show().revolution({
                sliderType: "standard",
                /* sets the Slider's default timeline */
                delay: 9000,
                /* options are 'auto', 'fullwidth' or 'fullscreen' */
                sliderLayout: 'fullwidth',
                /* RESPECT ASPECT RATIO */
                autoHeight: 'off',
                /* options that disable autoplay */
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                navigation: {
                    keyboardNavigation: 'on',
                    keyboard_direction: 'horizontal',
                    mouseScrollNavigation: 'off',
                    mouseScrollReverse: 'reverse',
                    onHoverStop: 'off',
                    arrows: {
                        enable: true,
                        style: 'hesperiden',
                        rtl: false,
                        hide_onleave: false,
                        hide_onmobile: true,
                        hide_under: 500,
                        hide_over: 9999,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        left: {
                            container: 'slider',
                            h_align: 'left',
                            v_align: 'center',
                            h_offset: 50,
                            v_offset: 0
                        },
                        right: {
                            container: 'slider',
                            h_align: 'right',
                            v_align: 'center',
                            h_offset: 50,
                            v_offset: 0
                        }
                    },
                    bullets: {

                        enable: true,
                        style: 'hermes',
                        tmp: '',
                        direction: 'horizontal',
                        rtl: false,

                        container: 'layergrid',
                        h_align: 'center',
                        v_align: 'bottom',
                        h_offset: 0,
                        v_offset: 30,
                        space: 12,

                        hide_onleave: false,
                        hide_onmobile: true,
                        hide_under: 0,
                        hide_over: 500,
                        hide_delay: true,
                        hide_delay_mobile: 500

                    },
                    touch: {
                        touchenabled: 'on',
                        touchOnDesktop: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: 'horizontal',
                        drag_block_vertical: true
                    }
                },
                responsiveLevels: [1240, 1024, 768, 480],
                visibilityLevels: [1240, 1024, 768, 480],
                gridwidth: [1240, 1024, 768, 480],
                gridheight: [650, 400, 500, 480],
                /* Lazy Load options are "all", "smart", "single" and "none" */
                lazyType: "smart",
                spinner: "spinner0",
                parallax: {
                    type: "scroll",
                    origo: "slidercenter",
                    speed: 400,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 5],
                },
                shadow: 0,
                shuffle: "off",
                fullScreenAutoWidth: "on",
                fullScreenAlignForce: "on",
                fullScreenOffsetContainer: "nav",
                fullScreenOffset: "",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    }); /*ready*/
</script>
<script type="text/javascript" src="js/main.js"></script>
</body>

</html>