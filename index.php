<?php
// Incluir el controlador principal
include_once 'controllers/indexController.php';

// Crear una instancia del controlador
$controller = new indexController();
$controller->renderNavbar();  // Método para renderizar el navbar
$controller->renderInitiation();  // Método para renderizar el Initiation
?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="css/index.css">