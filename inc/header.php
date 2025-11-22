<?php
var_dump($_SERVER['REQUEST_URI']);
?>

<header class="header-with-topbar">
    <!-- start header top bar -->
    <div class="header-top-bar header-light top-bar-dark bg-very-light-gray" >
        <div class="container-fluid">
            <div class="row h-45px xs-h-auto align-items-center m-0 xs-pt-5px xs-pb-5px">
                <div class="col-md-2 text-center text-md-start xs-px-0">
                    <div class="header-icon d-none d-lg-flex">
                        <div class="header-social-icon icon">
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i></a>
                            <a href="http://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="http://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 text-end d-none d-md-flex">
                    <div class="widget fs-15 fw-500 me-35px lg-me-25px md-me-0 text-dark-gray"><a href="tel:(310) 602-2403"><i class="feather icon-feather-phone-call"></i>(310) 602-2403</a></div>
                    <div class="widget fs-15 fw-500 me-35px lg-me-25px md-me-0 text-dark-gray"><a href="mailto:contacto@novaclean.com.co"><i class="feather icon-feather-mail"></i>contacto@novaclean.com.co</a></div>
                    <div class="widget fs-15 fw-500 text-dark-gray d-none d-lg-inline-block"><i class="feather icon-feather-map-pin"></i>Carrera 33A #35A -12 sur, Bogotá D.C.</div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header top bar -->
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-light bg-white responsive-sticky">
        <div class="container-fluid">
            <div class="col-auto col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="demo-accounting.html">
                    <img src="/img/logo-novaclean-50.png" data-at2x="img/logo-novaclean-100.png" alt="" class="default-logo">
                    <img src="/img/logo-novaclean-50.png" data-at2x="img/logo-novaclean-100.png" alt="" class="alt-logo">
                    <img src="/img/logo-novaclean-50.png" data-at2x="img/logo-novaclean-100.png" alt="" class="mobile-logo">
                </a>
            </div>
            <div class="col-auto menu-order position-static">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav fw-600">
                        <li class="nav-item"><a href="/" class="nav-link <?=$_SERVER['REQUEST_URI'] == '/' ? 'active' : ''?>">Inicio</a></li>
                        <li class="nav-item"><a href="/nosotros/" class="nav-link <?=$_SERVER['REQUEST_URI'] == '/nosotros/' ? 'active' : ''?>">Nosotros</a></li>
                        <li class="nav-item"><a href="/servicios/" class="nav-link <?=$_SERVER['REQUEST_URI'] == '/servicios/' ? 'active' : ''?>">Servicios</a></li>
                        <li class="nav-item"><a href="/empleo/" class="nav-link <?=$_SERVER['REQUEST_URI'] == '/empleo/' ? 'active' : ''?>">Trabaja con nosotros</a></li>
                        <li class="nav-item"><a href="/testimonios/" class="nav-link  <?=$_SERVER['REQUEST_URI'] == '/testimonios/' ? 'active' : ''?>">Testimonios</a></li>
                        <li class="nav-item"><a href="/contacto/" class="nav-link <?=$_SERVER['REQUEST_URI'] == '/contacto/' ? 'active' : ''?>">Contacto</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-auto col-lg-2 text-end d-none d-sm-flex">
                <div class="header-icon">
                    <div class="header-button">
                        <a href="demo-accounting-contact.html" class="btn btn-small btn-rounded btn-base-color btn-box-shadow">Let's discuss</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>