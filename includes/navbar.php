<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PLANIFICAME</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

<nav class="navbar">
    <div class="logo">
        <div class="triangle"></div>
        <span class="logo-text">PLANIFICAME</span>
    </div>

    <div class="nav-center">
    <ul class="nav-links">
        <li><a href="index.php">INICIO</a></li>
        <li class="separator">|</li>
        <li><a href="views/index/nosotros.php">NOSOTROS</a></li>
        <li class="separator">|</li>
        <li><a href="views/index/contacto.php">CONTACTO</a></li>
    </ul>
</div>

<div class="nav-right">
    <ul class="nav-user">
        <?php if (isset($_SESSION['user_id'])): ?>
            <li class="user-menu">
                <a href="#"><i class="fas fa-robot"></i> <?php echo $_SESSION['user_name']; ?></a>
                <ul class="dropdown">
                    <li><a href="auth/logout.php">Cerrar sesión</a></li>
                </ul>
            </li>
        <?php else: ?>
            <li><a href="views/login/register.php"><i class="fas fa-user"></i> INICIAR SESION</a></li>
        <?php endif; ?>
    </ul>
</div>


    <div class="navbar-bottom-line"></div>
</nav>

<?php if (isset($_SESSION['user_id'])): ?>
    <div id="user-sidebar" class="collapsed">
        <div id="sidebar-toggle">
            <i class="fas fa-bars"></i>
        </div>
        <div class="sidebar-arrow">
            <i class="fas fa-chevron-left"></i>
        </div>
        <ul>
            <li><a href="views/index/chatbotAI.php">
                <i class="fas fa-robot"></i> <span class="link-text">ChatBot</span></a>
            </li>
            <li><a href="views/index/mejoraProfesional.php">
                <i class="fas fa-chart-line"></i> <span class="link-text">Cursos</span></a>
            </li>
        </ul>
    </div>
<?php endif; ?>

<script src="js/navbar.js"></script>
</body>
</html>
