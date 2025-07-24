<?php
$host = "localhost"; // O la IP de tu servidor de base de datos
$user = "root"; // El usuario de MySQL
$password = ""; // La contraseña de MySQL (si la tienes configurada)
$dbname = "planificame"; // El nombre de la base de datos

// Crear conexión
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
