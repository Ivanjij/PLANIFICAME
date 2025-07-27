<?php
include('../config/db.php'); // Incluir la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_completo = $_POST['nombre_completo'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($nombre_completo) && !empty($email) && !empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // ¡Nunca interpolar directamente datos en SQL! Escapamos con pg_escape_string por seguridad mínima
        $nombre_completo = pg_escape_string($conn, $nombre_completo);
        $email = pg_escape_string($conn, $email);
        $hashed_password = pg_escape_string($conn, $hashed_password);

        $sql = "INSERT INTO users (nombre_completo, email, password) VALUES ('$nombre_completo', '$email', '$hashed_password')";

        $result = pg_query($conn, $sql);
        if ($result) {
            header("Location: /views/login/register.php?registro=exitoso");
            exit();
        } else {
            echo "Error en la consulta: " . pg_last_error($conn);
        }
    } else {
        echo "Por favor complete todos los campos.";
    }
}
