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
            opacity: 0.9,
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
