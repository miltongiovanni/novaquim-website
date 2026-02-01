<?php
include_once('../inc/config_db.php');
$sql = "SELECT id , distribuidor, contacto, telefono, celular, direccion, longitud, latitud FROM distribuidor WHERE estado=1";
$stmt = $con->prepare($sql);
$stmt->execute();
$distribuidores = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/img/favicon.ico" type="image/ico" sizes="16x16">
    <title>Distribuidores | Industrias Novaquim S.A.S. Productos de aseo a la medida de sus necesidades</title>
    <?php include('../inc/assets.php') ?>
    <script type="text/javascript">
        var distribuidores = <?= json_encode($distribuidores); ?>;
    </script>
    <script type="module" src="/js/map.js"></script>

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
                    <h1 class="m-auto text-white text-shadow-double-large fw-600 ls-minus-2px">Distribuidores</h1>
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

            <div class="row">
                <table class="table mt-3" id="distibuidoresTable">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Distribuidor</th>
                        <th scope="col" class="d-none d-md-block">Contacto</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Celular</th>
                        <th scope="col" class="d-none d-lg-block">Dirección</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($distribuidores as $distribuidor):
                        ?>
                        <tr>
                            <th scope="row"><?= $distribuidor['id'] ?></th>
                            <td><?= $distribuidor['distribuidor'] ?></td>
                            <td class="d-none d-md-block"><?= $distribuidor['contacto'] ?></td>
                            <td><?= $distribuidor['telefono'] ?></td>
                            <td><?= $distribuidor['celular'] ?></td>
                            <td class="d-none d-lg-block"><?= $distribuidor['direccion'] ?></td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                    </tbody>
                </table>
            </div>

            <!--The div element for the map -->
            <div id="map"></div>

        </div>
    </section>

    <?php include '../inc/footer.php' ?>
    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>


    <!-- javascript libraries -->
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/vendors.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>

    <script async
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvGI1XJX1Tvvl1MBIXot5794GyOuS1nDs&region=CO&language=es&callback=initMap">
    </script>
</body>

</html>
