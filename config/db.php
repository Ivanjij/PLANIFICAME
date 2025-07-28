<?php
$host = "planificame-planificame.g.aivencloud.com"; // Cambia esto por el host de Aiven
$user = "avnadmin"; // Usuario de Aiven
$password = "AVNS_S8b9PDewcMFHuc0MwUF"; // Reemplaza por tu contraseña real
$dbname = "defaultdb"; // Por defecto en Aiven es defaultdb
$port = 13784; // Puerto típico de Aiven MySQL

// Ruta al certificado SSL
$ssl_ca = __DIR__ . "/ssl/ca.pem";

// Crear conexión mysqli con SSL
$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, $ssl_ca, NULL, NULL);

if (!mysqli_real_connect($conn, $host, $user, $password, $dbname, $port, NULL, MYSQLI_CLIENT_SSL)) {
    die("Conexión fallida: " . mysqli_connect_error());
} else {
    echo "¡Conexión exitosa a MySQL en Aiven!";
}
