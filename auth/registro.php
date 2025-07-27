<?php
include('../config/db.php'); // Incluir la conexión a la base de datos

// Si se ha enviado el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $nombre_completo = $_POST['nombre_completo'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validar los campos
    if (!empty($nombre_completo) && !empty($email) && !empty($password)) {
        // Encriptar la contraseña antes de guardarla
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insertar los datos en la base de datos
        $sql = "INSERT INTO users (nombre_completo, email, password) VALUES ('$nombre_completo', '$email', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            // Redirigir a la página de login con el mensaje de éxito
            header("Location: /views/login/register.php?registro=exitoso");
            exit(); // Asegura que el script se detenga aquí
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Por favor complete todos los campos.";
    }
}
