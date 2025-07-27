<?php
include('../config/db.php'); // Incluir la conexión a la base de datos

// Si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validar los campos
    if (!empty($email) && !empty($password)) {
        // Consultar la base de datos para obtener los datos del usuario
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Usuario encontrado
            $user = $result->fetch_assoc();

            // Verificar si la contraseña ingresada coincide con la almacenada
            if (password_verify($password, $user['password'])) {
                // Iniciar sesión y redirigir al usuario
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['nombre_completo'];
                
                // Redirigir con mensaje de inicio de sesión exitoso
                header("/index.phpindex.php?login=exitoso");
                exit(); // Asegura que el script se detenga aquí
            } else {
                // Contraseña incorrecta
                header("Location: /login.php?login=fallido");
            }
        } else {
            // Usuario no encontrado
            header("Location: /login.php?login=fallido");
        }
    } else {
        echo "Por favor complete todos los campos.";
    }
}
?>
