<?php
include_once('../inc/config_db.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/img/favicon.ico" type="image/ico" sizes="16x16">
    <title>Política de privacidad | Industrias Novaquim S.A.S. Productos de aseo a la medida de sus necesidades</title>
    <?php include('../inc/assets.php') ?>
    <style>
        /* .qr ul {
             list-style: none;
         }
         .qr ul li::before {
             content: "✅";
             display: inline-block;
             margin-right: 0.2rem;
         }

         .qr ul ul li::before {
             content: "📌";
         }
         .qr ul ul ul li::before {
             content: "🤷‍♀️";
         }*/
        .check-list li, .plus-list li {
            list-style-type: none;
            padding: 7px 0 7px 24px;
            font-size: 14px;
            line-height: 1.5;
        }
        .check-list li:before, .plus-list li:before {
            content: "";
            width: 14px;
            height: 12px;
            background: url(/img/icon-global-863d50621b14046616519056916ec67ac8a680fcb1c994a27ec6c1a92e9569d5.svg) no-repeat -155px -50px;
            float: left;
            margin: 5px 0 0 -24px;
        }
    </style>
</head>

<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="modern" data-mobile-nav-bg-color="#242E45">
<div class="box-layout">
    <!-- start header -->
    <?php include('../inc/header.php') ?>
    <section class="top-space-margin page-title-big-typography border-radius-6px lg-border-radius-0px p-0" data-parallax-background-ratio="0.5"
             style="background-image: url()">
        <div class="opacity-extra-medium bg-blue-whale"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen">
                <div class="col-lg-8 position-relative text-center page-title-extra-large"
                     data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="m-auto text-white text-shadow-double-large fw-600 ls-minus-2px">Política de tratamiento protección de datos personales Industrias Novaquim S.A.S.</h1>
                </div>
                <div class="down-section text-center" data-anime='{ "translateY": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <a href="#down-section" class="section-link">
                        <div class="text-white">
                            <i class="feather icon-feather-chevron-down icon-very-medium"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="down-section" class="border-bottom border-color-extra-medium-gray">
        <div class="container">

            <div class="">
                <?php include '../inc/politica.php' ?>
            </div>

        </div>
    </section>

    <?php include '../inc/footer.php' ?>
    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>

</div>
<!-- end scroll progress -->

<!-- javascript libraries -->
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/vendors.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
</body>

</html>
