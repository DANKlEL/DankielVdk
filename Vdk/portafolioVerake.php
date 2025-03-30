<?php
// portafolioVerake.php
?>

<!-- Contenedor de VERAKE -->
<div class="contenedor-verake">
  <video autoplay loop muted playsinline class="video-portafolio">
    <source src="videos/Verake.mp4" type="video/mp4">
  </video>
</div>

<!-- Popup de VERAKE -->
<div id="popup" class="popup">
  <div class="popup-contenido">
    <?php require 'portafolioModoClaroOscuro.php'; ?>

    <!-- Contenido principal del popup -->
    <div class="popup-principal">
      <!-- Perfil estilo red social -->
      <div class="perfil-red-social">
        <!-- Banner con video YouTube de VERAKE-->
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

        <!-- Contenedor para elementos debajo del banner de VERAKE-->
        <div class="perfil-contenido">
          <!-- Foto de perfil de VERAKE -->
          <div class="foto-perfil">
            <img src="img/vdk/verake/Verake.jpg" alt="Foto de Verake">
          </div>

          <!-- Nombre con efecto de letras de VERAKE -->
          <div class="nombre-perfil">
            <h1 class="nombre-animado"><span>V</span><span>E</span><span>R</span><span>A</span><span>K</span><span>E</span></h1>
          </div>

          <!-- Categorías -->
          <div class="categorias-perfil">
            <button class="categoria-btn active" data-categoria="diseños">Diseños</button>
            <button class="categoria-btn" data-categoria="visuales">Visuales</button>
            <button class="categoria-btn" data-categoria="acerca">Acerca de mí</button>
          </div>

          <!-- Redes sociales de VERAKE -->
          <div class="redes-sociales-perfil">
            <a href="https://www.youtube.com/@esverake" target="_blank" class="youtube-link">
              <img src="img/Logos/SocialMedia/YoutubeBlanco.png" alt="YouTube" class="logo-red-social youtube-logo">
            </a>
            <a href="https://www.instagram.com/edverake/?igsh=MXFrMHUxOXVqY3lkbQ%3D%3D" target="_blank" class="instagram-link">
              <img src="img/Logos/SocialMedia/InstagramBlanco.png" alt="Instagram" class="logo-red-social instagram-logo">
            </a>
          </div>
        </div>
      </div>

      <!-- Contenido dinámico -->
      <div class="contenido-dinamico">
        <!-- Diseños (2x2 grid) -->
        <div id="diseños-content" class="categoria-content active">
          <div class="grid-diseños">
            <div class="diseño-item"><img src="img/vdk/verake/diseño1.jpg" alt="Diseño1"></div>
            <div class="diseño-item"><img src="img/vdk/verake/diseño2.jpg" alt="Diseño2"></div>
            <div class="diseño-item"><img src="img/vdk/verake/diseño3.jpg" alt="Diseño3"></div>
            <div class="diseño-item"><img src="img/vdk/verake/diseño4.jpg" alt="Diseño4"></div>
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
            <h3>Hola soy Verake</h3>
            <p>Creativo y apasionado por el diseño multimedia con 5 años de experiencia.</p>
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
// JavaScript específico de VERAKE
document.addEventListener('DOMContentLoaded', function() {
    // Datos de videos de VERAKE
    const videos = {
        "video-lyrics": [
            "https://www.youtube.com/embed/jBII3FFTgcM",
            "https://www.youtube.com/embed/OvQeAl7Qr6U",
            "https://www.youtube.com/embed/n9RTbGCQPzc",
            "https://www.youtube.com/embed/FlOo03_G1nc",
            "https://www.youtube.com/embed/mQozoyR0Q8c"
        ],
        "pixel-art": [
            "https://www.youtube.com/embed/ejemplo1",
            "https://www.youtube.com/embed/ejemplo2"
        ],
        "3d": [
            "https://www.youtube.com/embed/GJQ6T2fTeyY",
            "https://www.youtube.com/embed/nV0CJg2xEMw"
        ],
        "video-clip": [
            "https://www.youtube.com/embed/qY-Q2n8Nx1k",
            "https://www.youtube.com/embed/yiwr7E1DPk4"
        ],
        "amv": [
            "https://www.youtube.com/embed/7c0MzBfRphM",
            "https://www.youtube.com/embed/tKelvES0m5k"
        ]
    };

    const categoriaBtns = document.querySelectorAll(".categoria-btn");
    const vistaNormalBtn = document.getElementById("vista-normal");
    const vistaGridBtn = document.getElementById("vista-grid");
    const flechaIzquierda = document.getElementById("flecha-izquierda");
    const flechaDerecha = document.getElementById("flecha-derecha");
    const contenedorVideos = document.getElementById("contenedor-videos");
    const opcionesVisuales = document.getElementById("opciones-visuales");
    const mensajeVisuales = document.getElementById("mensaje-visuales");
    const listaVideos = document.getElementById("lista-videos");

    let vistaActual = "normal";
    let indiceVideoActual = 0;

    // Funciones específicas de VERAKE
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
        } else {
            opcionesVisuales.style.display = "none";
            mensajeVisuales.style.display = "block";
        }
    }

    function cambiarVista(vista) {
        vistaActual = vista;
        contenedorVideos.className = `contenedor-videos ${vista}-view`;
        vistaNormalBtn.classList.toggle("active", vista === "normal");
        vistaGridBtn.classList.toggle("active", vista === "grid");

        const iframes = contenedorVideos.querySelectorAll("iframe");
        iframes.forEach((iframe, index) => {
            if (vista === "normal") {
                iframe.style.display = index === indiceVideoActual ? "block" : "none";
            } else {
                iframe.style.display = "block";
            }
        });
    }

    function mostrarVideo(indice) {
        const iframes = contenedorVideos.querySelectorAll("iframe");
        iframes.forEach((iframe, i) => {
            iframe.style.display = i === indice ? "block" : "none";
        });
    }

    // Event listeners específicos de VERAKE
    categoriaBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            cambiarCategoria(btn.getAttribute("data-categoria"));
        });
    });

    vistaNormalBtn.addEventListener("click", () => cambiarVista("normal"));
    vistaGridBtn.addEventListener("click", () => cambiarVista("grid"));

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

    listaVideos.addEventListener("click", (event) => {
        if (event.target.tagName === "LI") {
            const categoria = event.target.getAttribute("data-categoria");
            const listaVideosCategoria = videos[categoria];
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

    // Inicialización
    cambiarCategoria("diseños");
    cambiarVista("normal");
});
</script>