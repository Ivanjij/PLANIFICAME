
// Función para mostrar u ocultar el dropdown al hacer clic
document.querySelector('.user-menu a').addEventListener('click', function (e) {
    e.preventDefault();
    const dropdown = this.nextElementSibling;

    // Verificar si el dropdown está visible
    if (dropdown.style.display === 'block') {
        dropdown.style.display = 'none';
    } else {
        dropdown.style.display = 'block';
    }
});

// Función para el Slider
document.addEventListener("DOMContentLoaded", function () {
    const toggleBtn = document.getElementById("sidebar-toggle");
    const sidebar = document.getElementById("user-sidebar");

    if (toggleBtn && sidebar) {
        toggleBtn.addEventListener("click", () => {
            sidebar.classList.toggle("collapsed");

            // Cambia dirección de la flecha decorativa
            const arrowIcon = sidebar.querySelector(".sidebar-arrow i");
            if (arrowIcon) {
                arrowIcon.classList.toggle("fa-chevron-left");
                arrowIcon.classList.toggle("fa-chevron-right");
            }
        });
    }
});

