<?php
require_once 'header.php';
?>
        <section class="door-presentation">
            <picture>
                <!-- Desktop -->
                <source media="(min-width:768px)" srcset="img/enchapada/desktop_enchapada_portada.png"
                    alt="Logo Carpinteria Zubillaga">
                <!-- Mobile  -->
                <img src="img/enchapada/mobile_portada.png" alt="">
            </picture>
            <h1>Enchapadas</h1>
        </section>
        <section class="history-section" id="history">
            <article class="history-article">
                <h3>DESDE 1890</h3>
                <h4>Ramón Zubillaga</h4>
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

                    <picture>
                        <!-- Desktop -->
                        <source media="(min-width:1200px)" srcset="img/enchapada/desktop_enchapada_carrusel1.jpg"
                            alt="Logo Carpinteria Zubillaga">
                        <!-- Mobile  -->
                        <img src="img/enchapada/desktop_enchapada_carrusel1.jpg" alt="Foto de una parte de una puerta enchapada">
                    </picture>
                </article>

                <!-- SLIDE 2 -->
                <article class="swiper-slide">

                    <picture>
                        <!-- Desktop -->
                        <source media="(min-width:1200px)" srcset="img/enchapada/desktop_enchapada_carrusel2.jpg"
                            alt="Logo Carpinteria Zubillaga">
                        <!-- Mobile  -->
                        <img src="img/enchapada/desktop_enchapada_carrusel2.jpg" alt="Foto de una parte de una puerta enchapada">
                    </picture>                </article>

            </div>
            <div class="swiper-pagination">

            </div>
            <div class="content-div">
                <a href="#contacto">consulta</a></figcaption>
                <h4>Chapa Reconstituida</h4>
            </div>
        </section>
        <section class="video-section" id="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/-JAQbMNdgQ0"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </section>
        <section class="contact-section">
            <p>HOLA, escribinos tu consulta</p>
            <form action="">
                <div>
                    <label for="">Nombre<input type="text" name="" id="" placeholder="Nombre"></label>
                    <label for="">Mail<input type="mail" placeholder="Mail"></label>
                </div>
                <textarea name="" id="" cols="30" rows="10" placeholder="Consulta"></textarea>
                <button>enviar</button>
            </form>
        </section>
<?php

require_once 'footer.php';