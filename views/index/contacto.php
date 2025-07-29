<?php
require_once '../../includes/navbar.php';  // Subir dos niveles para llegar a la carpeta 'includes'
?>

<link rel="stylesheet" href="/css/contacto.css" />
<link rel="stylesheet" href="/css/particles.css" />

<!-- Sección de Contacto -->
<section class="intro">
    <div id="tsparticles"></div>
        <h1>Contacto</h1>
        <p>¡Estamos aquí para ayudarte! Si tienes alguna pregunta o necesitas más información, por favor contáctanos utilizando el formulario a continuación.</p>
</section>

<section class="contacto">
    <!-- Contenedor de Paneles -->
    <div class="contacto-panels">
        <!-- Panel izquierdo: Formulario de Contacto -->
        <div class="contact-form">
            <h2>Envíanos un mensaje</h2>
            <form action="#" method="POST">
                <div class="input-box">
                    <input type="text" name="nombre" placeholder="Tu nombre" required />
                </div>
                <div class="input-box">
                    <input type="email" name="email" placeholder="Tu correo electrónico" required />
                </div>
                <div class="input-box">
                    <textarea name="mensaje" placeholder="Tu mensaje" required></textarea>
                </div>
                <button type="submit" class="btn">Enviar mensaje</button>
            </form>
        </div>

        <div class="divider"></div>

        <!-- Panel derecho: Mapa de Localización -->
        <div class="mapa">
    <h2>Ubicación</h2>
    <p>Estamos ubicados en la UTN de Nezahualcóyotl. A continuación, te mostramos nuestra ubicación en el mapa.</p>
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC2E56gJr9JRhiywjey-Fltccq7ofiGVks&q=Universidad+Tecnológica+de+Nezahualcóyotl,+Cto.+Rey+Nezahualcóyotl+Manzana+010,+Benito+Juárez,+57000+Cdad.+Nezahualcóyotl,+Méx." width="100%" height="300" style="border: 1px solid #ccc;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>

    </div>
    <br><br><br>
</section>

<script src="https://cdn.jsdelivr.net/npm/tsparticles@2.11.1/tsparticles.bundle.min.js"></script>
<script src="/js/particles.js"></script>

<?php
require_once '../../includes/footer.php';  // Subir dos niveles para llegar a la carpeta 'includes'
?>