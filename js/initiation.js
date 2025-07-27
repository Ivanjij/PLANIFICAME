// Swiper init
var swiper = new Swiper('.swiper-container', {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});

// Animación de imágenes en el hero
window.onload = function () {
    const wrapper = document.querySelector('.hero-image-wrapper');
    const oldImage = document.getElementById('heroImage');

    setTimeout(() => {
        // Ocultar IA.svg
        oldImage.classList.remove('show');
        oldImage.classList.add('hide');

        setTimeout(() => {
            // Eliminar IA.svg
            wrapper.removeChild(oldImage);

            // Crear IA3.svg
            const newImage = document.createElement('img');
            newImage.src = 'images/index/IA3.svg';
            newImage.alt = 'Imagen IA 3';
            newImage.classList.add('hero-image');
            newImage.id = 'heroImageNew';

            wrapper.appendChild(newImage);

            // Esperar carga y mostrar
            newImage.onload = function () {
                setTimeout(() => {
                    newImage.classList.add('show');
                }, 50);
            };

            newImage.onerror = function () {
                console.error("No se pudo cargar la imagen IA3.svg. Verifica la ruta.");
            };
        }, 200); // Esperar salida de IA.svg
    }, 1300); // Mostrar IA.svg por 4 segundos
};


//Particles
tsParticles.load("tsparticles", {
    fullScreen: { enable: false },
    background: {
    },
    particles: {
        number: {
            value: 60,
            density: {
                enable: true,
                area: 800
            }
        },
        color: {
            value: "ffffff"
        },
        shape: {
            type: "circle"
        },
        opacity: {
            value: 1.5,
            random: true
        },
        size: {
            value: { min: 1, max: 5 }
        },
        move: {
            enable: true,
            speed: 1,
            direction: "none",
            outModes: {
                default: "out"
            }
        },
        links: {
            enable: true,
            distance: 120,
            color: "#ffffff",
            opacity: 0.3,
            width: 1
        }
    },
    interactivity: {
        events: {
            onHover: {
                enable: true,
                mode: "repulse"
            }
        },
        modes: {
            repulse: {
                distance: 100
            }
        }
    }
});
