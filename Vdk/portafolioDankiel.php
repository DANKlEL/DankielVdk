<?php
// portafolioDankiel.php
?>

<!-- Contenedor de DANKIEL -->
<div class="contenedor-dankiel">
  <video autoplay loop muted playsinline class="video-portafolio">
    <source src="videos/Dankiel.mp4" type="video/mp4">
  </video>
</div>

<!-- Popup de DANKIEL -->
<div class="popup">
  <div class="popup-contenido" data-artista="dankiel">
    <?php require 'portafolioModoClaroOscuro.php'; ?>
    
    <!-- Pestañas de artistas -->
    <div class="pestanas-artistas">
      <button class="pestana-artista-btn" data-artista="verake">Verake</button>
      <button class="pestana-artista-btn active" data-artista="dankiel">Dankiel</button>
      <button class="pestana-artista-btn" data-artista="ddxous">Ddxous</button>
    </div>

    <!-- Contenido principal del popup -->
    <div class="popup-principal">
      <!-- Perfil estilo red social -->
      <div class="perfil-red-social">
        <!-- Banner con video YouTube de DANKIEL-->
        <div class="banner-perfil">
          <div class="video-banner-container">
            <iframe 
              src="https://www.youtube.com/embed/uhaQFieDbDA?autoplay=1&mute=1&loop=1&playlist=uhaQFieDbDA&controls=0&disablekb=1&modestbranding=1&rel=0&showinfo=0" 
              frameborder="0" 
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
              allowfullscreen>
            </iframe>
          </div>
        </div>

        <!-- Contenedor para elementos debajo del banner de DANKIEL-->
        <div class="perfil-contenido">
          <!-- Foto de perfil de DANKIEL -->
          <div class="foto-perfil">
            <img src="img/vdk/dankiel/Dankiel.png" alt="Foto de Dankiel">
          </div>

          <!-- Nombre con efecto de letras de DANKIEL -->
          <div class="nombre-perfil">
            <h1 class="nombre-animado"><span>D</span><span>A</span><span>N</span><span>K</span><span>I</span><span>E</span><span>L</span></h1>
          </div>

          <!-- Categorías -->
          <div class="categorias-perfil">
            <button class="categoria-btn active" data-categoria="diseños">Diseños</button>
            <button class="categoria-btn" data-categoria="visuales">Visuales</button>
            <button class="categoria-btn" data-categoria="acerca">Acerca de mí</button>
          </div>

          <!-- Redes sociales de DANKIEL -->
          <div class="redes-sociales-perfil">
            <a href="https://www.youtube.com/@Dankiel" target="_blank" class="youtube-link">
              <img src="img/Logos/SocialMedia/YoutubeBlanco.png" alt="YouTube" class="logo-red-social youtube-logo">
            </a>
            <a href="https://www.instagram.com/dankiel/" target="_blank" class="instagram-link">
              <img src="img/Logos/SocialMedia/InstagramBlanco.png" alt="Instagram" class="logo-red-social instagram-logo">
            </a>
          </div>
        </div>
      </div>

      <!-- Contenido dinámico -->
      <div class="contenido-dinamico">
        <!-- Diseños -->
        <div id="diseños-content" class="categoria-content active">
          <div id="opciones-diseños" style="display: none;">
            <ul id="lista-diseños">
              <li data-categoria="renders">Renders</li>
              <li data-categoria="portadas">Portadas</li>
              <li data-categoria="miniaturas">Miniaturas</li>
              <li data-categoria="pixel-art-design">PixelArt</li>
              <li data-categoria="logos">Logos</li>
            </ul>
          </div>
          
          <div id="mensaje-diseños" class="mensaje-diseños">
            <p>Haz clic en "Diseños" para ver las categorías disponibles</p>
          </div>

          <div id="contenedor-diseños" class="contenedor-diseños grid-view">
            <!-- Aquí se cargarán los diseños -->
          </div>
        </div>

        <!-- Visuales (videos) -->
        <div id="visuales-content" class="categoria-content">
          <div id="opciones-visuales" style="display: none;">
            <ul id="lista-videos">
              <li data-categoria="video-lyrics">Video Lyrics</li>
              <li data-categoria="pixel-art">Pixel Art</li>
              <li data-categoria="3d">3D</li>
              <li data-categoria="video-clip">Video Clip</li>
              <li data-categoria="amv">AMV</li>
            </ul>
          </div>
          
          <div id="mensaje-visuales" class="mensaje-visuales">
            <p>Haz clic en "Visuales" para ver las categorías de videos disponibles</p>
          </div>

          <div id="contenedor-videos" class="contenedor-videos normal-view">
            <!-- Aquí se cargarán los videos de YouTube -->
          </div>
        </div>

        <!-- Acerca de mí -->
        <div id="acerca-content" class="categoria-content">
          <div class="acerca-texto">
            <h3>Hola soy Dankiel</h3>
            <p>Diseñador multimedia especializado en creación de contenido visual impactante.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Botones de cambio de vista -->
    <div class="vista-botones">
      <button id="vista-normal" class="vista-boton active" title="Vista individual">
        <svg class="vista-icon" viewBox="0 0 24 24">
          <path fill="currentColor" d="M4,5H20V7H4V5M4,9H20V11H4V9M4,13H20V15H4V13M4,17H20V19H4V17Z"/>
        </svg>
      </button>
      <button id="vista-grid" class="vista-boton" title="Vista cuadrícula (3x3)">
        <svg class="vista-icon" viewBox="0 0 24 24">
          <path fill="currentColor" d="M3,11H11V3H3V11M3,21H11V13H3V21M13,11H21V3H13V11M13,21H21V13H13V21Z"/>
        </svg>
      </button>
    </div>

    <!-- Flechas de navegación -->
    <div class="flechas-navegacion">
      <button id="flecha-izquierda" class="flecha-navegacion">
        <i class="bibi-arrow-left"></i>
      </button>
      <button id="flecha-derecha" class="flecha-navegacion">
        <i class="bibi-arrow-right"></i>
      </button>
    </div>
  </div>
</div>

<script>
// JavaScript específico de DANKIEL
document.addEventListener('DOMContentLoaded', function() {
    // Datos de videos de DANKIEL
    const videosDankiel = {
        "video-lyrics": [
            "https://www.youtube.com/embed/ejemplo1",
            "https://www.youtube.com/embed/ejemplo2"
        ],
        "pixel-art": [
            "https://www.youtube.com/embed/ejemplo3",
            "https://www.youtube.com/embed/ejemplo4"
        ],
        "3d": [
            "https://www.youtube.com/embed/ejemplo5",
            "https://www.youtube.com/embed/ejemplo6"
        ],
        "video-clip": [
            "https://www.youtube.com/embed/ejemplo7",
            "https://www.youtube.com/embed/ejemplo8"
        ],
        "amv": [
            "https://www.youtube.com/embed/ejemplo9",
            "https://www.youtube.com/embed/ejemplo10"
        ]
    };

    // Datos de diseños de DANKIEL (actualiza estas rutas con las imágenes reales)
    const diseñosDankiel = {
        "renders": [
            "img/vdk/dankiel/designs/render1.jpg",
            "img/vdk/dankiel/designs/render2.jpg",
            "img/vdk/dankiel/designs/render3.jpg",
            "img/vdk/dankiel/designs/render4.jpg"
        ],
        "portadas": [
            "img/vdk/dankiel/designs/portada1.jpg",
            "img/vdk/dankiel/designs/portada2.jpg",
            "img/vdk/dankiel/designs/portada3.jpg",
            "img/vdk/dankiel/designs/portada4.jpg"
        ],
        "miniaturas": [
            "img/vdk/dankiel/designs/miniatura1.jpg",
            "img/vdk/dankiel/designs/miniatura2.jpg",
            "img/vdk/dankiel/designs/miniatura3.jpg",
            "img/vdk/dankiel/designs/miniatura4.jpg"
        ],
        "pixel-art-design": [
            "img/vdk/dankiel/designs/pixelart1.jpg",
            "img/vdk/dankiel/designs/pixelart2.jpg",
            "img/vdk/dankiel/designs/pixelart3.jpg",
            "img/vdk/dankiel/designs/pixelart4.jpg"
        ],
        "logos": [
            "img/vdk/dankiel/designs/logo1.jpg",
            "img/vdk/dankiel/designs/logo2.jpg",
            "img/vdk/dankiel/designs/logo3.jpg",
            "img/vdk/dankiel/designs/logo4.jpg"
        ]
    };

    // Elementos del DOM
    const categoriaBtns = document.querySelectorAll(".categoria-btn");
    const vistaNormalBtn = document.getElementById("vista-normal");
    const vistaGridBtn = document.getElementById("vista-grid");
    const flechaIzquierda = document.getElementById("flecha-izquierda");
    const flechaDerecha = document.getElementById("flecha-derecha");
    const contenedorVideos = document.getElementById("contenedor-videos");
    const opcionesVisuales = document.getElementById("opciones-visuales");
    const mensajeVisuales = document.getElementById("mensaje-visuales");
    const listaVideos = document.getElementById("lista-videos");
    const opcionesDiseños = document.getElementById("opciones-diseños");
    const mensajeDiseños = document.getElementById("mensaje-diseños");
    const contenedorDiseños = document.getElementById("contenedor-diseños");
    const listaDiseños = document.getElementById("lista-diseños");
    const pestanaArtistaBtns = document.querySelectorAll(".pestana-artista-btn");

    let vistaActual = "grid";
    let indiceDiseñoActual = 0;
    let indiceVideoActual = 0;

    // Función para cambiar categoría
    function cambiarCategoria(categoria) {
        document.querySelectorAll(".categoria-content").forEach(content => {
            content.classList.remove("active");
        });
        document.getElementById(`${categoria}-content`).classList.add("active");
        
        categoriaBtns.forEach(btn => {
            btn.classList.toggle("active", btn.getAttribute("data-categoria") === categoria);
        });
        
        if (categoria === "visuales") {
            opcionesVisuales.style.display = "block";
            mensajeVisuales.style.display = "none";
            contenedorVideos.innerHTML = "";
            opcionesDiseños.style.display = "none";
            mensajeDiseños.style.display = "block";
        } else if (categoria === "diseños") {
            opcionesDiseños.style.display = "block";
            mensajeDiseños.style.display = "none";
            contenedorDiseños.innerHTML = "";
            opcionesVisuales.style.display = "none";
            mensajeVisuales.style.display = "block";
        } else {
            opcionesVisuales.style.display = "none";
            mensajeVisuales.style.display = "block";
            opcionesDiseños.style.display = "none";
            mensajeDiseños.style.display = "block";
        }
    }

    // Función para cambiar vista
    function cambiarVista(vista) {
        vistaActual = vista;
        contenedorVideos.className = `contenedor-videos ${vista}-view`;
        contenedorDiseños.className = `contenedor-diseños ${vista}-view`;
        vistaNormalBtn.classList.toggle("active", vista === "normal");
        vistaGridBtn.classList.toggle("active", vista === "grid");

        if (vista === "normal") {
            const iframes = contenedorVideos.querySelectorAll("iframe");
            iframes.forEach((iframe, index) => {
                iframe.style.display = index === indiceVideoActual ? "block" : "none";
            });

            const imagenes = contenedorDiseños.querySelectorAll("img");
            imagenes.forEach((img, index) => {
                img.style.display = index === indiceDiseñoActual ? "block" : "none";
            });
        } else {
            const iframes = contenedorVideos.querySelectorAll("iframe");
            iframes.forEach(iframe => {
                iframe.style.display = "block";
            });

            const imagenes = contenedorDiseños.querySelectorAll("img");
            imagenes.forEach(img => {
                img.style.display = "block";
            });
        }
    }

    // Función para mostrar diseño específico
    function mostrarDiseño(indice) {
        const imagenes = contenedorDiseños.querySelectorAll("img");
        imagenes.forEach((img, i) => {
            img.style.display = i === indice ? "block" : "none";
        });
    }

    // Función para mostrar video específico
    function mostrarVideo(indice) {
        const iframes = contenedorVideos.querySelectorAll("iframe");
        iframes.forEach((iframe, i) => {
            iframe.style.display = i === indice ? "block" : "none";
        });
    }

    // Event listeners para botones de categoría
    categoriaBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            cambiarCategoria(btn.getAttribute("data-categoria"));
        });
    });

    // Event listeners para botones de vista
    vistaNormalBtn.addEventListener("click", () => cambiarVista("normal"));
    vistaGridBtn.addEventListener("click", () => cambiarVista("grid"));

    // Event listener para flecha izquierda
    flechaIzquierda.addEventListener("click", () => {
        if (document.querySelector(".categoria-content.active").id === "visuales-content") {
            if (indiceVideoActual > 0) {
                indiceVideoActual--;
                mostrarVideo(indiceVideoActual);
            }
        } else {
            if (indiceDiseñoActual > 0) {
                indiceDiseñoActual--;
                mostrarDiseño(indiceDiseñoActual);
            }
        }
    });

    // Event listener para flecha derecha
    flechaDerecha.addEventListener("click", () => {
        if (document.querySelector(".categoria-content.active").id === "visuales-content") {
            const iframes = contenedorVideos.querySelectorAll("iframe");
            if (indiceVideoActual < iframes.length - 1) {
                indiceVideoActual++;
                mostrarVideo(indiceVideoActual);
            }
        } else {
            const imagenes = contenedorDiseños.querySelectorAll("img");
            if (indiceDiseñoActual < imagenes.length - 1) {
                indiceDiseñoActual++;
                mostrarDiseño(indiceDiseñoActual);
            }
        }
    });

    // Event listener para lista de videos
    listaVideos.addEventListener("click", (event) => {
        if (event.target.tagName === "LI") {
            const categoria = event.target.getAttribute("data-categoria");
            const listaVideosCategoria = videosDankiel[categoria];
            if (listaVideosCategoria && listaVideosCategoria.length > 0) {
                contenedorVideos.innerHTML = "";
                listaVideosCategoria.forEach(video => {
                    const iframe = document.createElement("iframe");
                    iframe.src = video;
                    iframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture";
                    iframe.allowFullscreen = true;
                    iframe.classList.add("video-item");
                    contenedorVideos.appendChild(iframe);
                });
                if (vistaActual === "normal") {
                    indiceVideoActual = 0;
                    mostrarVideo(indiceVideoActual);
                }
            }
        }
    });

    // Event listener para lista de diseños
    listaDiseños.addEventListener("click", (event) => {
        if (event.target.tagName === "LI") {
            const categoria = event.target.getAttribute("data-categoria");
            const listaDiseñosCategoria = diseñosDankiel[categoria];
            if (listaDiseñosCategoria && listaDiseñosCategoria.length > 0) {
                contenedorDiseños.innerHTML = "";
                listaDiseñosCategoria.forEach(imagen => {
                    const img = document.createElement("img");
                    img.src = imagen;
                    img.alt = `Diseño ${categoria}`;
                    img.classList.add("diseño-item");
                    contenedorDiseños.appendChild(img);
                });
                if (vistaActual === "normal") {
                    indiceDiseñoActual = 0;
                    mostrarDiseño(indiceDiseñoActual);
                }
            }
        }
    });

    // Event listener para animación del nombre
    const letras = document.querySelectorAll('.nombre-animado span');
    letras.forEach((letra, index) => {
        letra.style.display = 'inline-block';
        letra.style.transition = 'transform 0.3s ease';
        
        letra.addEventListener('mouseover', () => {
            letra.style.transform = 'translateY(-5px) rotate(5deg)';
            setTimeout(() => {
                letra.style.transform = '';
            }, 300);
        });
    });

    // Inicialización
    cambiarCategoria("diseños");
    cambiarVista("grid");
});
</script>