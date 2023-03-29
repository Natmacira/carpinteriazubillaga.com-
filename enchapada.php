<?php
require_once 'header.php';
?>
<section class="door-presentation">

    <picture>
        <!-- Desktop -->
        <source media="(min-width:768px)" srcset="img/desktop/desktop_enchapada_portada.png" alt="Logo Carpinteria Zubillaga">
        <!-- Mobile  -->

        <source media="(max-width:769px)" srcset="img/mobile/mobile_enchapada_portada.png" alt="Logo Carpinteria Zubillaga">
        <img src="" alt="">
    </picture>
    <h1>Puertas Enchapadas</h1>
</section>
<section class="history-section">
    <article class="history-article">
        <p><strong> Trabajo hecho a medida.</strong>
            <br>
            Partimos de premarcos definidos en la obra, que se preparan según dimensiones de muros y vanos especificados. Sus medidas determinarán el ancho y la altura que tendrán cada marco y hoja, así como el espesor del marco, que podrá abarcar de filo a filo de muro.
        </p>
        <strong>Lisas</strong>
        <ul>
            <li>Sus caras son de mdf de espesor 5,5 mm. revestidas con chapas reconstituidas</li>
            <li>El lustre, con poliuretano semimate transparente.</li>
        </ul>
    </article>
</section>
<section class="swiper generic-swiper">
    <div class="swiper-wrapper">
        <!-- SLIDE 1 -->
        <article class="swiper-slide">
            <div class="content-div">
                <a href="#contacto">consulta</a></figcaption>
                <h4>Reconstituida</h4>
            </div>
            <picture>
                <!-- Desktop -->
                <source media="(min-width:1200px)" srcset="img/enchapada/desktop_enchapada_carrusel1.jpg" alt="Logo Carpinteria Zubillaga">
                <!-- Mobile  -->
                <img src="img/enchapada/desktop_enchapada_carrusel1.jpg" alt="Foto de una parte de una puerta enchapada">
            </picture>
        </article>

        <!-- SLIDE 2 -->
        <article class="swiper-slide">
            <div class="content-div">
                <a href="#contacto">consulta</a></figcaption>
                <h4>Zebrano</h4>
            </div>
            <picture>
                <!-- Desktop -->
                <source media="(min-width:1200px)" srcset="img/enchapada/desktop_enchapada_carrusel2.jpg" alt="Logo Carpinteria Zubillaga">
                <!-- Mobile  -->
                <img src="img/enchapada/desktop_enchapada_carrusel2.jpg" alt="Foto de una parte de una puerta enchapada">
            </picture>
        </article>

    </div>
    <div class="swiper-pagination"></div>

</section>

<?php
require_once 'video.php';
require_once 'contacto.php';
require_once 'footer.php';
