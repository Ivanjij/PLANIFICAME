const container = document.querySelector('.container');
const registerBtn = document.querySelector('.register-btn');
const loginBtn = document.querySelector('.login-btn');

registerBtn.addEventListener('click', () => {
    container.classList.add('active');
})

loginBtn.addEventListener('click', () => {
    container.classList.remove('active');
})

//Particles
tsParticles.load("tsparticles", {
    fullScreen: { enable: true },
    background: {
        color: {
            value: "transparent"
        }
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
            value: "#000"
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
            color: "#000",
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