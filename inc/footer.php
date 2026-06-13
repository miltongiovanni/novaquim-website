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
                        <li class="my-0"><a class="twitter" href="<?= $configuration['twitter_url']?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
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
                        <i class="fas fa-phone"></i>&nbsp;&nbsp;&nbsp;(57 601) 203 9484 - (57 601) 202 2912
                    </li>
                    <li class="nav-item">
                        <i class="fas fa-at"></i>&nbsp;&nbsp;
                        <span id="emq"><a class="nav-link d-inline-block px-0" href="mailto:info@novaquim.com">info@novaquim.com</a></span>
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
    <!-- Botón flotante -->
    <div id="wa-button" onclick="toggleChat()">
        <svg width="32" height="32" viewBox="0 0 90 90" fill="#ffffff"><path d="M90 43.841c0 24.213-19.779 43.841-44.182 43.841a44.256 44.256 0 0 1-21.357-5.455L0 90l7.975-23.522a43.38 43.38 0 0 1-6.34-22.637C1.635 19.628 21.416 0 45.818 0 70.223 0 90 19.628 90 43.841zM45.818 6.982c-20.484 0-37.146 16.535-37.146 36.859 0 8.065 2.629 15.534 7.076 21.61L11.107 79.14l14.275-4.537A37.122 37.122 0 0 0 45.819 80.7c20.481 0 37.146-16.533 37.146-36.857S66.301 6.982 45.818 6.982zm22.311 46.956c-.273-.447-.994-.717-2.076-1.254-1.084-.537-6.41-3.138-7.4-3.495-.993-.358-1.717-.538-2.438.537-.721 1.076-2.797 3.495-3.43 4.212-.632.719-1.263.809-2.347.271-1.082-.537-4.571-1.673-8.708-5.333-3.219-2.848-5.393-6.364-6.025-7.441-.631-1.075-.066-1.656.475-2.191.488-.482 1.084-1.255 1.625-1.882.543-.628.723-1.075 1.082-1.793.363-.717.182-1.344-.09-1.883-.27-.537-2.438-5.825-3.34-7.977-.902-2.15-1.803-1.792-2.436-1.792-.631 0-1.354-.09-2.076-.09s-1.896.269-2.889 1.344c-.992 1.076-3.789 3.676-3.789 8.963 0 5.288 3.879 10.397 4.422 11.113.541.716 7.49 11.92 18.5 16.223C58.2 65.771 58.2 64.336 60.186 64.156c1.984-.179 6.406-2.599 7.312-5.107.9-2.512.9-4.663.631-5.111z"></path></svg>
    </div>

    <!-- Chat falso -->
    <div id="wa-chat">
        <div class="wa-header">
            <span>WhatsApp</span>
            <button onclick="toggleChat()">✕</button>
        </div>

        <div class="wa-body">
            <div class="wa-message received">
                👋 Hola, ¿en qué podemos ayudarte?
            </div>
            <div class="wa-message received">
                Escríbenos y te respondemos enseguida.
            </div>
        </div>

        <div class="wa-footer">
            <input type="text" id="wa-text" placeholder="Escribe tu mensaje..." />
            <button onclick="sendToWhatsApp()">Enviar</button>
        </div>
    </div>
    <style>
        #wa-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #25D366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            cursor: pointer;
            z-index: 1000;
        }

        #wa-chat {
            position: fixed;
            bottom: 90px;
            right: 20px;
            width: 300px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
            display: none;
            flex-direction: column;
            z-index: 1000;
            font-family: Arial, sans-serif;
        }

        .wa-header {
            background: #075E54;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .wa-header button {
            background: none;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .wa-body {
            padding: 10px;
            background: #ECE5DD;
            height: 200px;
        }

        .wa-message {
            padding: 8px 10px;
            border-radius: 8px;
            margin-bottom: 8px;
            max-width: 80%;
            font-size: 14px;
        }

        .received {
            background: white;
        }

        .wa-footer {
            display: flex;
            border-top: 1px solid #ddd;
        }

        .wa-footer input {
            flex: 1;
            border: none;
            padding: 10px;
            outline: none;
        }

        .wa-footer button {
            background: #25D366;
            border: none;
            color: white;
            padding: 10px 15px;
            cursor: pointer;
        }
    </style>
    <script>
        function toggleChat() {
            const chat = document.getElementById('wa-chat');
            chat.style.display = chat.style.display === 'flex' ? 'none' : 'flex';
        }

        function sendToWhatsApp() {
            const text = document.getElementById('wa-text').value;
            const phone = '573168731806'; // TU NÚMERO CON CÓDIGO DE PAÍS
            const url = `https://wa.me/${phone}?text=${encodeURIComponent(text)}`;
            window.open(url, '_blank');
        }
    </script>

</footer>