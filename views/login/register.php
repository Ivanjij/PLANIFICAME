<link rel="stylesheet" href="/css/register.css" />
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

<canvas id="particle-canvas"></canvas>

<div class="container">
    <div class="form-box login">
        <form action="auth/login.php" method="POST">
            <h1>Inicio de Sesion</h1>
            <div class="input-box">
                <input type="email" name="email" placeholder="Correo electrónico" required />
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Contraseña" required />
                <i class="bx bxs-lock-alt"></i>
            </div>
            <div class="forgot-link">
                <a href="#">¿Has olvidado tu contraseña?</a>
            </div>
            <button type="submit" class="btn">Iniciar sesion</button>
            <p>o iniciar sesión con plataformas sociales</p>
            <div class="social-icons">
                <a href="#"><i class="bx bxl-google"></i></a>
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="#"><i class="bx bxl-github"></i></a>
                <a href="#"><i class="bx bxl-linkedin"></i></a>
            </div>
        </form>
    </div>

    <div class="form-box register">
        <form action="auth/registro.php" method="POST">
            <h1>Registro</h1>
            <div class="input-box">
                <input type="text" name="nombre_completo" placeholder="Nombre completo" required />
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Correo electrónico" required />
                <i class="bx bxs-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Contraseña" required />
                <i class="bx bxs-lock-alt"></i>
            </div>
            <button type="submit" class="btn">Registrarse</button>
            <p>o regístrate en plataformas sociales</p>
            <div class="social-icons">
                <a href="#"><i class="bx bxl-google"></i></a>
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="#"><i class="bx bxl-github"></i></a>
                <a href="#"><i class="bx bxl-linkedin"></i></a>
            </div>
        </form>
    </div>

    <div class="toggle-box">
        <div class="toggle-panel toggle-left">
            <h1>Hola, Bienvenido</h1>
            <p>¿No tienes una cuenta?</p>
            <button class="btn register-btn">Registrarse</button>
        </div>

        <div class="toggle-panel toggle-right">
            <h1>Bienvenido de nuevo</h1>
            <p>¿Ya tienes una cuenta?</p>
            <button class="btn login-btn">Iniciar sesion</button>
        </div>
    </div>
</div>

<?php
if (isset($_GET['registro']) && $_GET['registro'] == 'exitoso') {
    echo '<div class="notification">Registro exitoso</div>';
}
?>


<script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>
<script src="js/register.js"></script>