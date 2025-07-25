<?php include 'includes/templates/header.php'; ?>

<main class="contenedor seccion">
    <h1>Conoce sobre nosotros</h1>

    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img src="build/img/nosotros.jpg" alt="Imagen sobre nosotros" loading="lazy">
            </picture>
        </div>

        <div class="texto-nosotros">
            <blockquote>25 años de experiencia</blockquote>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate optio odio, odit ad enim sint nemo dolor provident asperiores nisi hic accusantium omnis debitis velit dicta? Nesciunt consequuntur ad fugiat!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate optio odio, odit ad enim sint nemo dolor provident asperiores nisi hic accusantium omnis debitis velit dicta? Nesciunt consequuntur ad fugiat!</p>
        </div>
    </div>
</main>

<section class="contenedor seccion">
    <h1>Más sobre nosotros</h1>

    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Iste ex architecto hic adipisci ratione explicabo? Cumque fugiat magnam quisquam reiciendis ducimus
                dolorem illo eaque libero!</p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
            <h3>Precio</h3>
            <p>Iste ex architecto hic adipisci ratione explicabo? Cumque fugiat magnam quisquam reiciendis ducimus
                dolorem illo eaque libero!</p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
            <h3>A Tiempo</h3>
            <p>Iste ex architecto hic adipisci ratione explicabo? Cumque fugiat magnam quisquam reiciendis ducimus
                dolorem illo eaque libero!</p>
        </div>
    </div>
</section>

<?php include 'includes/templates/footer.php'; ?>