<?php
require_once 'header.php';
?>
        <section class="door-presentation">
            <picture>
                <!-- Desktop -->
                <source media="(min-width:768px)" srcset="img/buñada/desktop_buñada_portada.png"
                    alt="Logo Carpinteria Zubillaga">
                <!-- Mobile  -->
                <img src="img/buñada/mobile_buñada_portada.png" alt="">
            </picture>
            <h1>Buñada</h1>
        </section>
        <section class="history-section" id="history">
            <article class="history-article">

                <p>Eran épocas de herramientas manuales y nobles maderas macizas (roble eslavonia, cedro paraguayo) que
                    se desembarcaban en el antiguo puerto de Mar del Plata y se transportaban en carretones hasta el
                    taller. Fue en el año 1891 cuando Ramón Zubillaga instaló su taller de carpintería en La Rioja al
                    2100 (hoy centro), Mar del Plata. En aquel primer edificio comenzó a elaborar en forma artesanal,
                    carpintería para importantísimos y típicos chalets marplatenses.</p>
            </article>
        </section>
        <section class="swiper generic-swiper">
            <div class="swiper-wrapper">
                <!-- SLIDE 1 -->
                <article class="swiper-slide">
                    <div class="content-div">
                        <a href="#contacto">consulta</a></figcaption>
                        <h4>Diseño</h4>
                    </div>
                    <picture>
                        <!-- Desktop -->
                        <source media="(min-width:1200px)" srcset="img/buñada/desktop_buñada_carrusel1.jpg"
                            alt="Logo Carpinteria Zubillaga">
                        <!-- Mobile  -->
                        <img src="img/buñada/mobile_buñada_carrusel1_Mesa de trabajo 1.jpg" alt="test">
                    </picture>
                </article>

                <!-- SLIDE 2 -->
                <article class="swiper-slide">
                    <div class="content-div">
                        <a href="#contacto">consulta</a></figcaption>
                        <h4>Colores</h4>
                    </div>
                    <picture>
                        <!-- Desktop -->
                        <source media="(min-width:1200px)" srcset="img/buñada/desktop_buñada_carrusel2.jpg"
                            alt="Logo Carpinteria Zubillaga">
                        <!-- Mobile  -->
                        <img src="img/buñada/mobile_buñada_carrusel2.jpg"
                            alt="Foto de una parte de una puerta enchapada">
                    </picture>
                </article>

            </div>
            <div class="swiper-pagination"></div>

        </section>

<?php
require_once 'video.php';
require_once 'contacto.php';
require_once 'footer.php';