<?php
include('../config/db.php'); // Incluir la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_completo = $_POST['nombre_completo'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($nombre_completo) && !empty($email) && !empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Consulta preparada para evitar inyección SQL
        $sql = "INSERT INTO users (nombre_completo, email, password) VALUES (:nombre, :email, :password)";
        $stmt = $conn->prepare($sql);
        
        $result = $stmt->execute([
            ':nombre' => $nombre_completo,
            ':email' => $email,
            ':password' => $hashed_password
        ]);

        if ($result) {
            header("Location: /views/login/register.php?registro=exitoso");
            exit();
        } else {
            echo "Error al insertar datos.";
        }
    } else {
        echo "Por favor complete todos los campos.";
    }
}
