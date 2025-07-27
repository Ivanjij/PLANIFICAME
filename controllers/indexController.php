<?php

class indexController
{
    // Método para renderizar el navbar
    public function renderNavbar()
    {
        include_once 'includes/navbar.php';
    }

    // Método para renderizar el initiation
    public function renderInitiation()
    {
        include_once 'views/index/initiation.php';
    }
}
