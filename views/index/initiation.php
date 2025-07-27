<?php
// Verificar si el parámetro 'login' está presente en la URL y su valor es 'exitoso'
if (isset($_GET['login']) && $_GET['login'] == 'exitoso') {
    echo '<div class="notification">Inicio de sesión exitoso</div>';
}
?>

<!-- Link a Font Awesome para los íconos -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="/css/initiation.css">
    <link rel="stylesheet" href="/css/footer.css"> <!-- Aquí incluye tu archivo de estilos -->

<!-- Link a un carousel moderno -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@6.4.5/swiper-bundle.min.css">

<!-- Sección Principal -->
<section class="hero">
  <!-- Contenedor para partículas -->
  <div id="tsparticles"></div>

  <div class="hero-content">
    <h1>¡Bienvenido a tu IA de Formación Profesional!</h1>
    <p>La IA más avanzada para mejorar tu carrera profesional,
        mediante cursos, talleres, consejos personalizados y mucho más.</p>
    <button class="cta-btn">Comienza ahora</button>
  </div>

  <div class="hero-image-wrapper">
    <img src="/images/index/IA.svg"
         alt="Imagen IA"
         class="hero-image init-animate show"
         id="heroImage">
  </div>
</section>



<!-- Sección de Servicios -->
<section class="services">
    <h2>¿Cómo puede ayudarte nuestra IA?</h2>
    <div class="service-cards">
        <!-- Card 1 -->
        <div class="service-card">
            <i class="fas fa-comments"></i>
            <h3>Chatbot Asesor</h3>
            <p>Interactúa con un chatbot especializado que te ofrecerá recomendaciones personalizadas para tu carrera.</p>
        </div>
        <!-- Card 2 -->
        <div class="service-card">
            <i class="fas fa-laptop-code"></i>
            <h3>Cursos Interactivos</h3>
            <p>Accede a cursos interactivos y aprende nuevas habilidades de manera dinámica y efectiva.</p>
        </div>
        <!-- Card 3 -->
        <div class="service-card">
            <i class="fas fa-people-carry"></i>
            <h3>Talleres Virtuales</h3>
            <p>Participa en talleres y webinars en vivo para mejorar tus habilidades con expertos en el área.</p>
        </div>
    </div>
</section>

<!-- Sección de Consejos -->
<section class="tips">
    <h2>Consejos para tu crecimiento profesional</h2>
    <div class="tip-cards-container">
        <!-- Card 1 -->
        <div class="tip-card">
            <i class="fas fa-lightbulb"></i>
            <h3>Aprende de tus errores</h3>
            <p>La clave para crecer es aprender de cada desafío y mejorar continuamente.</p>
        </div>
        <!-- Card 2 -->
        <div class="tip-card">
            <i class="fas fa-users"></i>
            <h3>Construye tu red profesional</h3>
            <p>El networking es fundamental para tu desarrollo, conoce a personas influyentes de tu industria.</p>
        </div>
        <!-- Card 3 -->
        <div class="tip-card">
            <i class="fas fa-clock"></i>
            <h3>Gestiona tu tiempo</h3>
            <p>El tiempo es tu recurso más valioso, organiza tus tareas de manera eficiente para avanzar rápidamente.</p>
        </div>
    </div>
</section>

<!-- Sección de Testimonios (Carousel) -->
<section class="testimonials">
    <h2>Lo que dicen nuestros usuarios</h2><br><br>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- Testimonio 1 -->
            <div class="swiper-slide">
                <div class="testimonial">
                    <p>"Gracias a la IA, mis habilidades han mejorado enormemente, ¡recomiendo totalmente este servicio!"</p>
                    <h4>Juan Pérez</h4>
                    <p>Desarrollador Web</p>
                </div>
            </div>
            <!-- Testimonio 2 -->
            <div class="swiper-slide">
                <div class="testimonial">
                    <p>"Los talleres virtuales son muy interactivos, aprendí muchísimo en poco tiempo."</p>
                    <h4>María González</h4>
                    <p>Marketing Digital</p>
                </div>
            </div>
            <!-- Testimonio 3 -->
            <div class="swiper-slide">
                <div class="testimonial">
                    <p>"El chatbot de asesoramiento es como tener un mentor personalizado. ¡Una experiencia increíble!"</p>
                    <h4>Carlos Martínez</h4>
                    <p>Consultor de IT</p>
                </div>
            </div>
        </div>
        <!-- Agregar paginación -->
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- Galería de Imágenes -->
<section class="gallery">
    <h2>Explora nuestra Galería</h2>
    <div class="gallery-container">
        <div class="gallery-item">
            <img src="https://afsformacion.com/wp-content/webp-express/webp-images/uploads/2023/01/beneficios-cursos-online.jpg.webp" alt="Imagen 1">
        </div>
        <div class="gallery-item">
            <img src="https://afsformacion.com/wp-content/webp-express/webp-images/uploads/2023/01/Marketing2.png.webp" alt="Imagen 2">
        </div>
        <div class="gallery-item">
            <img src="https://www.uhipocrates.edu.mx/wp-content/uploads/2022/08/Beneficios-de-tomar-cursos-en-linea-2.jpg" alt="Imagen 3">
        </div>
        <div class="gallery-item">
            <img src="https://www.uhipocrates.edu.mx/wp-content/uploads/2022/08/Beneficios-de-tomar-cursos-en-linea.jpg" alt="Imagen 4">
        </div>
    </div>
</section>

<!-- Sección para redirigir al registro o inicio de sesión -->
<section class="auth-redirect">
    <div class="auth-text">
        <h2>¿A qué esperas para mejorar tu formación?</h2>
        <p>Únete ahora a nuestra plataforma y empieza a potenciar tu carrera con la ayuda de nuestra IA.</p>
    </div>
    <div class="auth-buttons">
        <a href="/registro.php" class="cta-btn">Regístrate</a>
        <a href="/iniciar_sesion.php" class="cta-btn">Iniciar Sesión</a>
    </div>
</section>

<br><br><br><br><br><br>

<!-- Footer -->
<footer class="footer">
    <div class="footer-container">
        <!-- Logo -->
        <div class="footer-logo">
        <!--    <img src="logo.png" alt="Logo" class="footer-logo-img">  -->
        </div>
        
        <!-- Enlaces -->
        <div class="footer-links">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>
        
        <!-- Redes Sociales -->
        <div class="footer-socials">
            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>

    <!-- Parte inferior -->
    <div class="footer-bottom">
        <p>&copy; 2025 PLANIFICAME. Todos los derechos reservados.</p>
    </div>
</footer>


<!-- tsParticles CDN -->
<script src="https://cdn.jsdelivr.net/npm/tsparticles@2.11.1/tsparticles.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@6.4.5/swiper-bundle.min.js"></script>
<script src="/js/initiation.js"></script>