<?php
$sql = "SELECT  description, value FROM configuration";
$stmt = $con->prepare($sql);
$stmt->execute();
$configuration = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
?>
<footer class="p-0 fs-16 border-top border-color-extra-medium-gray">
    <div class="container">
        <div class="row justify-content-center pt-6 sm-pt-40px">
            <!-- start footer column -->
            <div class="col-12 col-xl-4 col-lg-12 col-sm-6 last-paragraph-no-margin text-center order-sm-1 lg-mb-50px sm-mb-30px">
                <a href="<?= APP_URL?>" class="footer-logo mb-15px d-inline-block">
                    <!--<img src="/img/logo.png" data-at2x="img/logo-100.png" alt="" class="default-logo">
                    <img src="/img/logo-50.png" data-at2x="img/logo-100.png" alt="" class="alt-logo">-->
                    <img src="/img/logo-300.png" class="img-fluid" alt="Industrias Novaquim S.A.S." >
                </a>
                <div class="elements-social social-icon-style-02 mt-15px">
                    <ul class="medium-icon dark">
                        <li class="my-0"><a class="facebook" href="<?= $configuration['facebook_url']?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li class="my-0"><a class="twitter" href="<?= $configuration['twitter_url']?>" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                        <li class="my-0"><a class="instagram" href="<?= $configuration['instagram_url']?>" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li class="my-0"><a href="javascript:void(0)" class="whatsapp"><i class="fa-brands fa-whatsapp me-5px"></i><?= $configuration['celular_1']?></a></li>
                    </ul>
                </div>
            </div>
            <!-- end footer column -->
            <!-- start footer column -->
            <div class="col-6 col-xl-2 col-lg-3 col-sm-6 text-center text-md-start xs-mb-30px order-sm-3 order-lg-2">
                <!--<span class="fs-17 fw-600 d-block text-dark-gray mb-5px">Compañía</span>-->
                <ul>
                    <li><a href="<?= APP_URL?>">Inicio</a></li>
                    <li><a href="<?= APP_URL?>quienes-somos/">Quienes somos</a></li>
                    <li><a href="<?= APP_URL?>contacto/">Contacto</a></li>
                </ul>
            </div>
            <!-- end footer column -->
            <!-- start footer column -->
            <div class="col-6 col-xl-2 col-lg-3 col-sm-6 text-center text-md-start xs-mb-30px order-sm-4 order-lg-3">
                <!--<span class="fs-17 fw-600 d-block text-dark-gray mb-5px">Services</span>-->
                <ul>
                    <li><a href="<?= APP_URL?>servicios/">Servicios</a></li>
                    <li><a href="<?= APP_URL?>distribuidores/">Distribuidores</a></li>
                    <li><a href="<?= APP_URL?>formas-de-pago/">Formas de pago</a></li>
                </ul>
            </div>
            <!-- end footer column -->
            <!-- start footer column -->
            <div class="col-12 col-xl-4 col-lg-6 text-center text-sm-start col-sm-6 md-mb-50px sm-mb-30px xs-mb-0 order-sm-2 order-lg-5">
                <!--<span class="fs-17 fw-600 d-block text-dark-gray mb-5px">Contáctenos</span>-->
                <ul class="flex-column navbar-nav">
                    <li class="nav-item">
                        <i class="fas fa-phone"></i>&nbsp;&nbsp;(57 601) 203 9484 - (57 601) 202 2912
                    </li>
                    <li class="nav-item">
                        <i class="fas fa-at"></i>&nbsp;&nbsp;
                        <span id="emq"><a class="nav-link d-inline-block" href="mailto:info@novaquim.com">info@novaquim.com</a></span>
                    </li>
                    <li class="nav-item">
                        <i class="fas fa-home"></i> &nbsp; Calle 35 C sur No. 26F - 40<br> Zona Industrial Bravo Páez
                    </li>
                </ul>
            </div>
            <!-- end footer column -->
        </div>
        <div class="row justify-content-center align-items-center pt-2">
            <!-- start divider -->
            <div class="col-12">
                <div class="divider-style-03 divider-style-03-01 border-color-transparent-white-light"></div>
            </div>
            <!-- end divider -->
            <!-- start copyright -->
            <div class="col-lg-5 pt-35px pb-35px md-pt-0 order-2 order-lg-1 text-center text-lg-start last-paragraph-no-margin"><p>Diseñado por Industrias Novaquim S.A.S. © <?= date("Y") ?></p></div>
            <!-- end copyright -->
            <!-- start footer menu -->
            <div class="col-lg-7 pt-35px pb-35px md-pt-25px md-pb-5px order-1 order-lg-2 text-center text-lg-end">
                <ul class="footer-navbar sm-lh-normal">
                    <li><a class="nav-link" href="<?= APP_URL?>politica-de-privacidad/">Política de privacidad</a></li>
                </ul>
            </div>
            <!-- end footer menu -->
        </div>
    </div>
</footer>