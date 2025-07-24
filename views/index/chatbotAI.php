<?php
require_once '../../includes/navbar.php';  // Ajusta la ruta si es necesario
?>

<link rel="stylesheet" href="http://localhost/PLANIFICAME/css/chatbot.css" />
<link rel="stylesheet" href="http://localhost/PLANIFICAME/css/particles.css" />

<!-- Sección de Chat con la IA -->
<section class="chatbot-container">
    <!-- Contenedor de partículas -->
<div id="tsparticles"></div>
    <div class="chatbox">
        <div class="chat-history" id="chat-history">
        </div>

        <!-- Formulario para enviar el mensaje -->
        <div class="chat-input">
            <input type="text" id="user-message" placeholder="Escribe tu pregunta..." />
            <button id="send-message">
                <i class="fas fa-paper-plane"></i>
            </button>
        </div>
    </div>
</section>

<script>
document.getElementById('send-message').addEventListener('click', () => {
    const input = document.getElementById('user-message');
    const text = input.value.trim();
    if (!text) return;

    const history = document.querySelector('.chat-history');
    history.innerHTML += `<div class="message user-message"><div class="message-content"><p>${text}</p></div></div>`;
    input.value = "";
    history.scrollTop = history.scrollHeight;

    fetch('http://localhost/PLANIFICAME/IA/chatbot.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({message: text})
    })
    .then(response => response.json())
    .then(data => {
        const reply = data.reply || 'Error en la respuesta.';
        
        history.innerHTML += `<div class="message ia-message"><div class="message-content">${reply}</div></div>`;
        history.scrollTop = history.scrollHeight;
    })
    .catch(error => {
        history.innerHTML += `<div class="message ia-message"><div class="message-content"><p>Error al conectar.</p></div></div>`;
        console.error(error);
    });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/tsparticles@2.11.1/tsparticles.bundle.min.js"></script>
<script src="http://localhost/PLANIFICAME/js/particles.js"></script>

<?php
require_once '../../includes/footer.php';  // Subir dos niveles para llegar a la carpeta 'includes'
?>
