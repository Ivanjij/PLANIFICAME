<?php
require_once '../../includes/navbar.php';  // Subir dos niveles para llegar a la carpeta 'includes'

$courseFile = $_GET['course'] ?? '';  // Obtener el curso seleccionado

if ($courseFile) {
    // Determinar la carpeta y tipo de curso (habilidades blandas, habilidades técnicas)
    $courseType = '';  // Variable para el tipo de curso ('habilidadesBlandas', 'habilidadesTecnicas')

    // Lógica para determinar el tipo de curso
    if (strpos($courseFile, 'habilidadesBlandas') !== false) {
        $courseType = 'habilidadesBlandas';
    } elseif (strpos($courseFile, 'habilidadesTecnicas') !== false) {
        $courseType = 'habilidadesTecnicas';
    }

    // Ahora construimos la URL correctamente
    $coursePath = "../../views/courses/" . rtrim($courseType, '/') . "/" . ltrim($courseFile, '/') . ".php"; // Ruta correcta para el curso

    if (file_exists($coursePath)) {
        $courseTitle = ucfirst(str_replace('habilidadesBlandas', 'Habilidades Blandas', str_replace('habilidadesTecnicas', 'Habilidades Técnicas', basename($courseFile, '.php'))));
    } else {
        $courseTitle = "Curso no encontrado";
    }
} else {
    $courseTitle = "No se seleccionó ningún curso";
}

// Verificar si el usuario ha guardado el curso
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_course'])) {
    $userId = $_SESSION['user_id'];  // Suponiendo que el ID del usuario está en la sesión
    $courseName = $_POST['course_name'];  // El nombre del curso que se va a guardar
    $courseUrl = $_POST['course_url'];  // El URL del curso recomendado

    // Conexión a la base de datos
    include('/config/db.php');  // Asegúrate de incluir la ruta correcta

    // Obtener el ID del curso seleccionado
    $stmt = $conn->prepare("SELECT id FROM courses WHERE course_name = ? AND course_url = ? AND category_id = (SELECT id FROM categories WHERE category_name = ? LIMIT 1)");
    $stmt->bind_param("sss", $courseName, $courseUrl, $courseType);  // Usar el tipo de curso para obtener el curso correcto
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $course = $result->fetch_assoc();
        $courseId = $course['id'];
    } else {
        echo "Curso no encontrado";
        exit();
    }

    // Insertar el curso en la base de datos para este usuario
    $stmt = $conn->prepare("INSERT INTO user_courses (user_id, course_id) VALUES (?, ?)");
    $stmt->bind_param("ii", $userId, $courseId);

    if ($stmt->execute()) {
        // Curso guardado correctamente
        header("Location: mejoraProfesional.php");
        exit();
    } else {
        // Error en la inserción
        echo "Error al guardar el curso: " . $stmt->error;
    }

    $stmt->close();
}

// Eliminar curso
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_course'])) {
    $courseId = $_POST['course_id'];  // El ID del curso a eliminar

    // Conexión a la base de datos
    include('../../config/db.php');  // Asegúrate de incluir la ruta correcta

    // Eliminar el curso de la base de datos
    $stmt = $conn->prepare("DELETE FROM user_courses WHERE course_id = ? AND user_id = ?");
    $stmt->bind_param("ii", $courseId, $_SESSION['user_id']);  // Asegúrate de que el curso se elimine para el usuario correcto

    if ($stmt->execute()) {
        // Curso eliminado correctamente
        header("Location: mejoraProfesional.php");  // Redirigir después de eliminar
        exit();
    } else {
        // Error al eliminar el curso
        echo "Error al eliminar el curso: " . $stmt->error;
    }

    $stmt->close();
}
?>

<link rel="stylesheet" href="../../css/mejoraProfesional.css" />

<!-- Contenido principal -->
<section class="user-progress">
    <div class="progress-header">
        <div class="welcome-section">
            <div class="welcome-text">
                <h1>Bienvenido!<br><?php echo $_SESSION['user_name']; ?></h1>
                <p>Tu progreso y cursos recomendados</p>
            </div>
            <div class="cards-grid">
                <div class="mini-card">Card 1</div>
                <div class="mini-card">Card 2</div>
                <div class="mini-card">Card 3</div>
                <div class="mini-card">Card 4</div>
            </div>
        </div>
    </div>

    <!-- Mostrar los cursos guardados -->
    <div class="saved-courses">
        <h2>Cursos guardados</h2>
        <div class="courses-container">
            <?php
            // Obtener los cursos guardados por el usuario
            include('../../config/db.php');  // Asegúrate de incluir la ruta correcta

            $userId = $_SESSION['user_id'];  // Asegúrate de que el ID del usuario esté en la sesión
            $sql = "SELECT * FROM user_courses 
                    INNER JOIN courses ON user_courses.course_id = courses.id
                    WHERE user_courses.user_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $userId);
            $stmt->execute();
            $result = $stmt->get_result();

            // Mostrar los cursos guardados en tarjetas
            while ($row = $result->fetch_assoc()) {
                $courseColor = rand(0, 1) ? "#0071b2" : "#00b23b";  // Asigna colores aleatorios a los cursos
                echo '<div class="course-card" style="background-color:' . $courseColor . ';">';
                echo '<img src="https://web-assets.esetstatic.com/tn/-x700/wls/2018/04/cursos-online-gratuitos-seguridad-inform%C3%A1tica.jpg" alt="Course Icon" class="course-img">';  // Imagen de icono del curso
                echo '<h3>' . htmlspecialchars($row['course_name']) . '</h3>';
                echo '<a href="' . htmlspecialchars($row['course_url']) . '" target="_blank" class="btn">Acceder al curso</a>';
                // Botón para eliminar el curso
                echo '<form method="POST" style="display:inline;">
                        <input type="hidden" name="course_id" value="' . $row['course_id'] . '">
                        <button type="submit" name="delete_course" class="delete-button">
                            <i class="fas fa-trash-alt"></i> Eliminar
                        </button>
                    </form>';
                echo '</div>';
            }

            $stmt->close();
            ?>
        </div>
    </div>

    <!-- Curso recomendado -->
    <div class="courses-section">
        <h2>Curso recomendado</h2>
        <div class="courses-container">
            <!-- Tarjeta del curso recomendado -->
            <div class="course-card" id="courseCard" style="background-color: #444;">
                <div class="course-title">
                    <h3><?php echo $courseTitle; ?></h3>
                </div>
                <!-- Botón para acceder al curso -->
                <?php if ($courseFile): ?>
                    <a href="<?php echo $coursePath; ?>" class="btn" target="_blank">Abrir curso</a>
                    <form method="POST">
                        <input type="hidden" name="course_name" value="<?php echo $courseTitle; ?>">
                        <input type="hidden" name="course_url" value="<?php echo $coursePath; ?>"> <!-- Aquí pasamos correctamente la URL -->
                        <button type="submit" name="save_course">¿Quieres guardar este curso?</button>
                    </form>
                <?php else: ?>
                    <p>Selecciona un curso para ver más detalles.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <br><br><br><br>

</section>

<?php
require_once '../../includes/footer.php';  // Subir dos niveles para llegar a la carpeta 'includes'
?>
