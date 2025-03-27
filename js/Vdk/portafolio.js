// Seleccionar elementos del DOM
const botonMasInformacion = document.getElementById("boton-mas-informacion");
const popup = document.getElementById("popup");
const cerrarPopup = document.getElementById("cerrar-popup");
const listaVideos = document.getElementById("lista-videos");
const contenedorVideos = document.getElementById("contenedor-videos");
const vistaNormalBtn = document.getElementById("vista-normal");
const vistaGridBtn = document.getElementById("vista-grid");
const flechaIzquierda = document.getElementById("flecha-izquierda");
const flechaDerecha = document.getElementById("flecha-derecha");

// Datos de los videos por categoría
const videos = {
    "video-lyrics": [
        "https://www.youtube.com/embed/jBII3FFTgcM",
        "https://www.youtube.com/embed/OvQeAl7Qr6U",
        "https://www.youtube.com/embed/n9RTbGCQPzc",
        "https://www.youtube.com/embed/FlOo03_G1nc",
        "https://www.youtube.com/embed/mQozoyR0Q8c",
        "https://www.youtube.com/embed/mQKzL9Sk5Ow",
        "https://www.youtube.com/embed/FEXcxUvky-A",
        "https://www.youtube.com/embed/DxaBagsDbyo",
        "https://www.youtube.com/embed/Hgm_t-41DvI",
        "https://www.youtube.com/embed/CbZ_EZ0oYOw",
        "https://www.youtube.com/embed/KFFCOZw0Frc"
    ],
    "3d": [
        "https://www.youtube.com/embed/GJQ6T2fTeyY",
        "https://www.youtube.com/embed/nV0CJg2xEMw",
        "https://www.youtube.com/embed/eqKksZNoJWM",
        "https://www.youtube.com/embed/ROcOSVbv1zY",
        "https://www.youtube.com/embed/7Kd_1y4bw-A",
        "https://www.youtube.com/embed/_KBbCwp4WzY",
        "https://www.youtube.com/embed/Q0eESw5UT2s",
        "https://www.youtube.com/embed/uhaQFieDbDA",
        "https://www.youtube.com/embed/67xxt2AiL44"
    ],
    "video-clip": [
        "https://www.youtube.com/embed/qY-Q2n8Nx1k",
        "https://www.youtube.com/embed/yiwr7E1DPk4",
        "https://www.youtube.com/embed/Ge-QUBdz6lY",
        "https://www.youtube.com/embed/pNKbUmsNM_o",
        "https://www.youtube.com/embed/swxUFeGIhRg",
        "https://www.youtube.com/embed/NVBue-kKc3A",
        "https://www.youtube.com/embed/n25ncBV-ZAQ"
    ],
    "amv": [
        "https://www.youtube.com/embed/7c0MzBfRphM",
        "https://www.youtube.com/embed/tKelvES0m5k",
        "https://www.youtube.com/embed/jCOSR0CPw9Y",
        "https://www.youtube.com/embed/PeyVcEsWEL0"
    ]
};

// Variables para controlar la vista y el índice del video
let vistaActual = "normal"; // Puede ser "normal" o "grid"
let indiceVideoActual = 0;

// Función para cambiar la vista
function cambiarVista(vista) {
    vistaActual = vista;
    contenedorVideos.className = `contenedor-videos ${vista}-view`;

    // Mostrar u ocultar flechas según la vista
    if (vista === "normal") {
        flechaIzquierda.style.display = "block";
        flechaDerecha.style.display = "block";
        mostrarVideo(indiceVideoActual); // Mostrar el video actual en la vista normal
    } else {
        flechaIzquierda.style.display = "none";
        flechaDerecha.style.display = "none";
        // Mostrar todos los videos en la vista de cuadrícula
        const iframes = contenedorVideos.querySelectorAll("iframe");
        iframes.forEach((iframe) => {
            iframe.style.display = "block";
        });
    }

    // Actualizar estado de los botones
    vistaNormalBtn.classList.toggle("active", vista === "normal");
    vistaGridBtn.classList.toggle("active", vista === "grid");
}

// Eventos para cambiar la vista
vistaNormalBtn.addEventListener("click", () => cambiarVista("normal"));
vistaGridBtn.addEventListener("click", () => cambiarVista("grid"));

// Función para mostrar un video específico (solo en vista normal)
function mostrarVideo(indice) {
    const iframes = contenedorVideos.querySelectorAll("iframe");
    iframes.forEach((iframe, i) => {
        iframe.style.display = i === indice ? "block" : "none";
    });
}

// Eventos para las flechas de navegación
flechaIzquierda.addEventListener("click", () => {
    if (indiceVideoActual > 0) {
        indiceVideoActual--;
        mostrarVideo(indiceVideoActual);
    }
});

flechaDerecha.addEventListener("click", () => {
    const iframes = contenedorVideos.querySelectorAll("iframe");
    if (indiceVideoActual < iframes.length - 1) {
        indiceVideoActual++;
        mostrarVideo(indiceVideoActual);
    }
});

// Abrir popup al hacer clic en el botón
botonMasInformacion.addEventListener("click", () => {
    popup.style.display = "flex";
});

// Cerrar popup al hacer clic en el botón "Cerrar"
cerrarPopup.addEventListener("click", () => {
    Swal.fire({
        title: "¿Cerrar el portafolio?",
        text: "¿Estás seguro de que quieres cerrar esta ventana?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#a91313",
        cancelButtonColor: "#555",
        confirmButtonText: "Sí, cerrar",
        cancelButtonText: "Cancelar"
    }).then((result) => {
        if (result.isConfirmed) {
            popup.style.display = "none";
        }
    });
});

// Cerrar popup al hacer clic fuera del contenido
popup.addEventListener("click", (event) => {
    if (event.target === popup) {
        popup.style.display = "none";
    }
});

// Cargar videos al hacer clic en una categoría
listaVideos.addEventListener("click", (event) => {
    if (event.target.tagName === "LI") {
        const categoria = event.target.getAttribute("data-categoria");
        const listaVideosCategoria = videos[categoria];
        if (listaVideosCategoria && listaVideosCategoria.length > 0) {
            // Limpiar el contenedor de videos
            contenedorVideos.innerHTML = "";
            // Agregar todos los videos de la categoría
            listaVideosCategoria.forEach(video => {
                const iframe = document.createElement("iframe");
                iframe.src = video;
                iframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture";
                iframe.allowFullscreen = true;
                iframe.classList.add("video-item"); // Clase para estilos personalizados
                contenedorVideos.appendChild(iframe);
            });
            // Mostrar el primer video en la vista normal
            if (vistaActual === "normal") {
                indiceVideoActual = 0;
                mostrarVideo(indiceVideoActual);
            }
        }
    }
});