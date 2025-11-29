<?php
$sql = "SELECT id, name, slug FROM category";
$stmt = $con->prepare($sql);
$stmt->execute();
$categoriasMenu = $stmt->fetchAll(PDO::FETCH_UNIQUE | PDO::FETCH_ASSOC);
foreach ($categoriasMenu as $key => $categoria) {
    $sql2 = "SELECT title, slug FROM product
            WHERE category_id=:category_id";
    $stmt2 = $con->prepare($sql2);
    $stmt2->execute(array('category_id' => $key));
    $categoriasMenu[$key]['productos'] = $stmt2->fetchAll(PDO::FETCH_ASSOC);
}
$sql3 = "SELECT id, name, slug FROM mercado";
$stmt3 = $con->prepare($sql3);
$stmt3->execute();
$mercadosMenu = $stmt3->fetchAll(PDO::FETCH_UNIQUE | PDO::FETCH_ASSOC);
foreach ($mercadosMenu as $key => $mercado) {
    $sql4 = "SELECT title, slug FROM product
            WHERE mercado_id=:mercado_id";
    $stmt4 = $con->prepare($sql4);
    $stmt4->execute(array('mercado_id' => $key));
    $mercadosMenu[$key]['productos'] = $stmt4->fetchAll(PDO::FETCH_ASSOC);
}
?>

<header class="header-with-topbar">
    <!-- start header top bar -->
    <div class="header-top-bar header-dark bg-base-color top-bar-dark" >
        <div class="container-fluid">
            <div class="d-flex h-45px xs-h-auto align-items-center justify-content-between m-0 xs-pt-5px xs-pb-5px">
                <div class="text-center text-md-start xs-px-0">
                    <div class="header-icon d-none d-md-flex">
                        <div class="header-social-icon icon light icon-with-animation">
                            <a class="nav-link" href="mailto:comercial01.nova@novaquim.com"><i class="bi bi-envelope-fill"></i></a>
                            <a href="https://www.facebook.com/industrias.novaquim.1" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            <!--<a href="https://twitter.com/IndustriasNova2" target="_blank"><i class="fa-brands fa-twitter"></i></a>-->
                            <!--<a href="http://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>-->
                        </div>
                    </div>
                </div>
                <div id="slogan" class="d-none d-xl-block">PRODUCTOS PARA EL ASEO A LA MEDIDA DE SUS NECESIDADES</div>
                <div class="text-end d-none d-md-flex">
                    <div class="widget fs-15 fw-500 me-35px lg-me-25px md-me-0 "><a href="<?= SISTEMA_URL?>" class="text-white" target="_blank"><i class="feather icon-feather-external-link"></i>Iniciar Sesión</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header top bar -->
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-dark bg-base-color responsive-sticky">
        <div class="container-fluid">
            <div class="col-auto col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="<?= APP_URL ?>">
                    <img src="/img/logo.png" data-at2x="img/logo-100.png" alt="" class="default-logo">
                    <img src="/img/logo-50.png" data-at2x="img/logo-100.png" alt="" class="alt-logo">
                    <img src="/img/logo-50.png" data-at2x="img/logo-100.png" alt="" class="mobile-logo">
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
                        <li class="nav-item"><a href="/quienes-somos/" class="nav-link <?=$_SERVER['REQUEST_URI'] == '/nosotros/' ? 'active' : ''?>">Quiénes somos</a></li>
                        <li class="nav-item dropdown submenu">
                            <a href="javascript:void(0);" class="nav-link">Productos</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <div class="dropdown-menu submenu-content" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="d-lg-flex mega-menu m-auto flex-wrap">
                                    <?php
                                    foreach ($categoriasMenu as $categoria):
                                    ?>
                                    <ul class="col-md-2 flex-column">
                                        <li class=""><h6 class="title my-3"><a class="fw-bold" href="<?= APP_URL .'productos/categoria/'. $categoria['slug'] . '/'?>"><?= $categoria['name'] ?></a></h6></li>
                                        <?php
                                        foreach ($categoria['productos'] as $productoMenu):
                                            ?>
                                            <li class=""><a class="" href="<?= APP_URL .'productos/' . $productoMenu['slug']. '/' ?>"><?= $productoMenu['title'] ?></a></li>
                                        <?php
                                        endforeach;
                                        ?>
                                    </ul>
                                    <?php
                                    endforeach;
                                    ?>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a href="javascript:void(0);" class="nav-link">Mercados</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <div class="dropdown-menu submenu-content" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="d-lg-flex mega-menu m-auto flex-wrap">
                                    <?php
                                    foreach ($mercadosMenu as $mercado):
                                    ?>
                                    <ul class="col-md-2 flex-column">
                                        <li class=""><h6 class="title my-3"><a class="fw-bold" href="<?= APP_URL .'productos/mercado/'. $mercado['slug']. '/' ?>"><?= $mercado['name'] ?></a></h6></li>
                                        <?php
                                        foreach ($mercado['productos'] as $productoMenu):
                                            ?>
                                            <li class=""><a class="" href="<?= APP_URL .'productos/' . $productoMenu['slug']. '/' ?>"><?= $productoMenu['title'] ?></a></li>
                                        <?php
                                        endforeach;
                                        ?>
                                    </ul>
                                    <?php
                                    endforeach;
                                    ?>
                                </div>
                            </div>
                        </li>
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