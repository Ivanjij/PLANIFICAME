<?php
require_once '../../../includes/navbar.php'; // Subir dos niveles para llegar a la carpeta 'includes'

// Establecer el nombre y la URL del curso
$courseTitle = "Curso de Priorizacion y manejo de tareas";
$courseUrl = "/views/courses/habilidadesBlandas/Curso_de_Priorizacion_y_manejo_de_tareas.php";  // URL fija del curso

$showToast = false; // Variable para controlar si mostrar el toast
$showModal = true; // Variable para controlar si mostrar el modal al inicio

// Verificar si el formulario fue enviado para guardar el curso
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_course'])) {
    $userId = $_SESSION['user_id'];  // Suponiendo que el ID del usuario está en la sesión
    $courseName = $_POST['course_name'];  // El nombre del curso que se va a guardar
    $courseUrl = $_POST['course_url'];  // El URL del curso recomendado

    // Conexión a la base de datos
    include('../../../config/db.php');  // Asegúrate de incluir la ruta correcta

    // Obtener el ID del curso seleccionado
    $stmt = $conn->prepare("SELECT id FROM courses WHERE course_name = ? AND course_url = ?");
    $stmt->bind_param("ss", $courseName, $courseUrl);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // El curso existe, obtenemos su ID
        $course = $result->fetch_assoc();
        $courseId = $course['id'];

        // Guardar el curso para este usuario
        $stmt = $conn->prepare("INSERT INTO user_courses (user_id, course_id) VALUES (?, ?)");
        $stmt->bind_param("ii", $userId, $courseId);

        if ($stmt->execute()) {
            // Curso guardado correctamente
            $showToast = true; // Cambiar la variable a true para mostrar el toast
            $showModal = false; // Después de guardar el curso, no mostrar más el modal
        } else {
            // Error en la inserción
            echo "Error al guardar el curso: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "El curso no se encontró en la base de datos.";
    }
}
?>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">
<link rel="stylesheet" href="/css/courses/cards.css" />
<link rel="stylesheet" href="/css/courses/Curso_de_Comunicacion_Efectiva.css" />

<!-- Preguntar si el usuario quiere guardar este curso -->
<!-- Modal -->
<div id="saveCourseModal" class="modal" style="display: <?php echo $showModal ? 'block' : 'none'; ?>"> <!-- Mostrar el modal solo si $showModal es true -->
    <div class="modal-content">
        <span class="close">&times;</span> <!-- Botón para cerrar -->
        <h3>¿Quieres guardar este curso?</h3>
        <form method="POST">
            <input type="hidden" name="course_name" value="<?php echo $courseTitle; ?>">
            <input type="hidden" name="course_url" value="<?php echo $courseUrl; ?>">
            <button class="futuristic-btn" type="submit" name="save_course">Guardar curso</button>
        </form>
    </div>
</div>

<!-- Contenedor para la notificación -->
<div id="toast" class="toast" style="visibility: <?php echo $showToast ? 'visible' : 'hidden'; ?>;">
    <p>¡Curso guardado exitosamente!</p>
</div>

<!-- Contenido principal del curso -->
<div class="novice-container">
    <div class="course-header">
        <h1 class="course-title"><?php echo $courseTitle; ?></h1>
        <img src="https://static.vecteezy.com/system/resources/previews/011/964/282/non_2x/green-badge-correct-mark-icon-green-approved-icon-certified-medal-icon-approval-check-symbol-vector.jpg" style="width: 50px; height: 60px;">
    </div>

    <!-- Estrellas antes del índice -->
    <div class="stars">
        <span>★★★★★</span>
    </div>

    <div class="course-index">
        <h1>Índice del curso</h1>
    </div>

    <!-- Contenedor de cards -->
    <div class="cards-container">
        <!-- Card 1 -->
        <div class="card">
            <div class="module">Módulo 1</div>
            <div class="title">Introducción a la Comunicación Efectiva</div>
            <div class="bar">
                <div class="emptybar"></div>
                <div class="filledbar"></div>
            </div>
            <div class="circle">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <circle class="stroke" cx="60" cy="60" r="50" />
                </svg>
            </div>
            <button class="start-button">Iniciar</button>
        </div>
        <!-- Card 2 -->
        <div class="card">
            <div class="module">Módulo 2</div>
            <div class="bar">
                <div class="emptybar"></div>
                <div class="filledbar"></div>
            </div>
            <div class="title">Escucha Activa</div>
            <div class="circle">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <circle class="stroke" cx="60" cy="60" r="50" />
                </svg>
            </div>
            <button class="start-button">Iniciar</button>
        </div>
        <!-- Card 3 -->
        <div class="card">
            <div class="module">Módulo 3</div>
            <div class="bar">
                <div class="emptybar"></div>
                <div class="filledbar"></div>
            </div>
            <div class="title">Lenguaje No Verbal</div>
            <div class="circle">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <circle class="stroke" cx="60" cy="60" r="50" />
                </svg>
            </div>
            <button class="start-button">Iniciar</button>
        </div>
        <!-- Card 4 -->
        <div class="card">
            <div class="module">Módulo 4</div>
            <div class="bar">
                <div class="emptybar"></div>
                <div class="filledbar"></div>
            </div>
            <div class="title">Comunicación en el Entorno Laboral</div>
            <div class="circle">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <circle class="stroke" cx="60" cy="60" r="50" />
                </svg>
            </div>
            <button class="start-button">Iniciar</button>
        </div>
    </div>

<!-- Footer -->
<footer class="footer">
    <p>Formación Profesional IA &copy; 2025</p>
</footer>

<script>
// Obtener el modal y la notificación (toast)
var modal = document.getElementById("saveCourseModal");
var toast = document.getElementById("toast");

// Obtener el botón de cierre (×)
var span = document.getElementsByClassName("close")[0];

// Mostrar el modal (puedes invocar esto con un botón, por ejemplo)
function showModal() {
    modal.style.display = "block";
}

// Cuando el usuario haga clic en el botón de cierre, cerrar el modal
span.onclick = function() {
    modal.style.display = "none";
}

// Cuando el usuario haga clic fuera del modal, también lo cierra
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Mostrar la notificación (toast)
function showToast() {
    toast.style.visibility = "visible";
    toast.style.opacity = "1";

    // Desaparecer la notificación después de 3 segundos
    setTimeout(function() {
        toast.style.opacity = "0";
        toast.style.visibility = "hidden";
    }, 3000);
}

// Evitar que el modal se muestre nuevamente después de guardar el curso
<?php if ($showToast): ?>
    // Cerrar el modal y mostrar el toast
    modal.style.display = "none";
    showToast();
<?php endif; ?>
</script>
