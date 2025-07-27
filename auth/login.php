<?php
include('../config/db.php'); // Incluir la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        // Consulta preparada para evitar inyección SQL
        $sql = "SELECT * FROM users WHERE email = :email LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Iniciar sesión
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['nombre_completo'];

            // Redirigir con mensaje de éxito
            header("Location: /index.php?login=exitoso");
            exit();
        } else {
            // Usuario no encontrado o contraseña incorrecta
            header("Location: /login.php?login=fallido");
            exit();
        }
    } else {
        echo "Por favor complete todos los campos.";
    }
}
?>
