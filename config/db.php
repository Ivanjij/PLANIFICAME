<?php
$host = "dpg-d22s4s15pdvs739a47qg-a";
$dbname = "planificame_db";
$user = "planificame_db_user";
$password = "VVDJJEtEe1rs3KR9dn1I6Hhj4MmsiYWc";

try {
    $conn = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Conexión fallida: " . $e->getMessage());
}
