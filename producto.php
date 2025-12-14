<?php

$slugProducto = $_GET['producto'];

include_once('inc/config_db.php');
$sql = "SELECT title, meta_title, meta_description, image_1, image_2, image_3, `description`, slug
        FROM product p
        WHERE slug =:slugProducto";
$stmt = $con->prepare($sql);
$stmt->execute(array('slugProducto' => $slugProducto));
$producto = $stmt->fetch(PDO::FETCH_ASSOC);

$sqlCat = "SELECT c.slug FROM product p
            LEFT JOIN category c ON p.category_id = c.id
            WHERE p.slug =:slugProducto";
$stmt = $con->prepare($sqlCat);
$stmt->execute(array('slugProducto' => $slugProducto));
$categoriaProd = $stmt->fetch(PDO::FETCH_ASSOC);
$categoriaSlug = $categoriaProd['slug'];

$sqlMer = "SELECT m.slug FROM product p
        LEFT JOIN mercado m ON p.mercado_id = m.id
        WHERE p.slug =:slugProducto";
$stmt = $con->prepare($sqlMer);
$stmt->execute(array('slugProducto' => $slugProducto));
$mercadoProd = $stmt->fetch(PDO::FETCH_ASSOC);
$mercadoSlug = $mercadoProd['slug'];

$sqlCategorias = "SELECT c.id, c.name, c.slug, count(p.id) productsNumber
        FROM category c
        LEFT JOIN product p on c.id = p.category_id
        GROUP BY c.id";

$stmt = $con->prepare($sqlCategorias);
$stmt->execute();
$categoriasList = $stmt->fetchAll(PDO::FETCH_ASSOC);
$sqlMercados = "SELECT m.id, m.name, m.slug, count(p.id) productsNumber
        FROM mercado m
        LEFT JOIN product p on m.id = p.mercado_id
        GROUP BY m.id";

$stmt = $con->prepare($sqlMercados);
$stmt->execute();
$mercadosList = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html class="no-js"  lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= $producto['meta_description'] ?>"/>
    <link rel="icon" href="/img/favicon.ico" type="image/ico" sizes="16x16">
    <title><?= $producto['meta_title'] ?> | Industrias Novaquim S.A.S. Productos de aseo a la medida de sus
        necesidades</title>
    <?php include('inc/assets.php') ?>

</head>

<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="modern" data-mobile-nav-bg-color="#242E45">
<div class="box-layout">
    <!-- start header -->
    <?php include('inc/header.php') ?>
    <!-- end header -->
    <section class="top-space-margin">
        <div class="container">
            <div class="row pb-4">
                <article class="col-md-8 pb-5">
                    <h3 class="entry-title text-uppercase mt-4 mb-3"><?= $producto['title'] ?></h3>
                    <hr>
                    <div class="container-fluid">
                        <div class="row pt-4">
                            <div class="col-sm-4 text-center">
                                <div class="et_pb_animation_left et-animated mb-4">
                                    <img class="img-fluid img-prod"
                                         src="<?= ADMIN_URL . 'uploads/images/' . $producto['image_1'] ?>"
                                         alt="<?= $producto['title'] ?>">
                                </div>

                                <?php
                                if (isset($producto['image_2']) && $producto['image_2'] != ''):
                                    ?>
                                    <div class="et_pb_animation_left et-animated mb-4">
                                        <img class="img-fluid img-prod"
                                             src="<?= ADMIN_URL . 'uploads/images/' . $producto['image_2'] ?>"
                                             alt="<?= $producto['title'] ?>">
                                    </div>


                                <?php
                                endif;
                                ?>
                                <?php
                                if (isset($producto['image_3']) && $producto['image_3'] != ''):
                                    ?>
                                    <div class="et_pb_animation_left et-animated mb-4">
                                        <img class="img-fluid img-prod"
                                             src="<?= ADMIN_URL . 'uploads/images/' . $producto['image_3'] ?>"
                                             alt="<?= $producto['title'] ?>">
                                    </div>


                                <?php
                                endif;
                                ?>
                            </div>
                            <div class="col-sm-8">
                                <?= $producto['description'] ?>
                            </div>
                        </div>
                    </div>
                </article>
                <aside class="col-md-4">
                    <h5>Categorías</h5>
                    <ul class="nav flex-column categoria-list">
                        <?php
                        foreach ($categoriasList as $categoria):
                            ?>
                            <li class="nav-item my-1">
                                <a class="nav-link <?= $categoria['slug'] == $categoriaSlug ? 'active' : '' ?>"
                                   href="<?= APP_URL . 'productos/categoria/' . $categoria['slug'] . '/' ?>"><?= $categoria['name'] ?>
                                    (<?= $categoria['productsNumber'] ?>)</a>
                            </li>
                        <?php
                        endforeach;
                        ?>


                    </ul>
                    <h5 class="mt-4">Mercados</h5>
                    <ul class="nav flex-column categoria-list">
                        <?php
                        foreach ($mercadosList as $categoria):
                            ?>
                            <li class="nav-item my-1">
                                <a class="nav-link <?= $categoria['slug'] == $mercadoSlug ? 'active' : '' ?>"
                                   href="<?= APP_URL . 'productos/mercado/' . $categoria['slug'] . '/' ?>"><?= $categoria['name'] ?>
                                    (<?= $categoria['productsNumber'] ?>)</a>
                            </li>
                        <?php
                        endforeach;
                        ?>


                    </ul>
                </aside>
            </div>


        </div>
    </section>
    <?php include 'inc/footer.php' ?>
    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>
</div>
<!-- javascript libraries -->
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/vendors.min.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
</body>

</html>
