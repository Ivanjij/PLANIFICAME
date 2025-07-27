<?php
$host = "dpg-d22s4s15pdvs739a47qg-a"; // O la IP de tu servidor de base de datos
$user = "planificame_db_user"; // El usuario de MySQL
$password = "VVDJJEtEe1rs3KR9dn1I6Hhj4MmsiYWc"; // La contraseña de MySQL (si la tienes configurada)
$dbname = "planificame_db"; // El nombre de la base de datos

// Crear conexión
$conn = pg_connect("host=$host db_name=$dbname user=$user password=$password");

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida con la base de datos.");
}
