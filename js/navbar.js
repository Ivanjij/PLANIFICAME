document.addEventListener("DOMContentLoaded", function () {
    const userMenuLink = document.querySelector('.user-menu a');
    const dropdown = userMenuLink ? userMenuLink.nextElementSibling : null;

    if (userMenuLink && dropdown) {
        userMenuLink.addEventListener('click', function (e) {
            e.preventDefault();
            dropdown.style.display = (dropdown.style.display === 'block') ? 'none' : 'block';
        });

        // Cierra el dropdown si se hace clic fuera
        document.addEventListener('click', function (e) {
            if (!userMenuLink.contains(e.target) && !dropdown.contains(e.target)) {
                dropdown.style.display = 'none';
            }
        });
    }

    const toggleBtn = document.getElementById("sidebar-toggle");
    const sidebar = document.getElementById("user-sidebar");

    if (toggleBtn && sidebar) {
        toggleBtn.addEventListener("click", () => {
            sidebar.classList.toggle("collapsed");

            const arrowIcon = sidebar.querySelector(".sidebar-arrow i");
            if (arrowIcon) {
                arrowIcon.classList.toggle("fa-chevron-left");
                arrowIcon.classList.toggle("fa-chevron-right");
            }
        });
    }
});
