<?php
require_once 'header.php';
?>
<section class="door-presentation">

    <picture>
        <!-- Desktop -->
        <source media="(min-width:768px)" srcset="img/desktop/desktop_buñada_portada.png" alt="Logo Carpinteria Zubillaga">
        <!-- Mobile  -->

        <source media="(max-width:769px)" srcset="img/mobile/mobile_buñada_portada.png" alt="Logo Carpinteria Zubillaga">
        <img src="" alt="">
    </picture>
    <h1>Puertas Buñadas</h1>
</section>
<section class="history-section">
    <article class="history-article">

        <p><strong> Trabajo hecho a medida.</strong>
            <br>
            Partimos de premarcos definidos en la obra, que se preparan según dimensiones de muros y vanos especificados. Sus medidas determinarán el ancho y la altura que tendrán cada marco y hoja, así como el espesor del marco, que podrá abarcar de filo a filo de muro.
        </p>
        <p> <strong>Buñada</strong></p>
        <ul>
            <li>Sus caras son de mdf de espesor 5,5 mm. con ranuras realizadas en centro de control numérico de alta precisión.</li>
            <li>Existe una amplia variedad de diseños para elegir.</li>
            <li>El laqueado, con poliuretano semimate color a elección.</li>
        </ul>
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
                <source media="(min-width:1200px)" srcset="img/buñada/desktop_buñada_carrusel1.jpg" alt="Logo Carpinteria Zubillaga">
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
                <source media="(min-width:1200px)" srcset="img/buñada/deskatop_buñada_carrusel2.jpg" alt="Logo Carpinteria Zubillaga">
                <!-- Mobile  -->
                <img src="img/buñada/mobile_buñada_carrusel2.jpg" alt="Foto de una parte de una puerta enchapada">
            </picture>
        </article>

    </div>
    <div class="swiper-pagination"></div>

</section>

<?php
require_once 'video.php';
require_once 'contacto.php';
require_once 'footer.php';
