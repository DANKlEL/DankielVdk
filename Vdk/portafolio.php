<?php
//portafolio.php
?>
<div class="portafolio-general">
  <!-- Botón Modo Claro/Nocturno (izquierda) -->
  <button id="toggle-mode" class="mode-toggle">
    <svg class="moon-icon" viewBox="0 0 24 24">
      <path fill="currentColor" d="M12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6A6,6 0 0,1 18,12A6,6 0 0,1 12,18M20,15.31L23.31,12L20,8.69V4H15.31L12,0.69L8.69,4H4V8.69L0.69,12L4,15.31V20H8.69L12,23.31L15.31,20H20V15.31Z"/>
    </svg>
    <svg class="sun-icon" viewBox="0 0 24 24" style="display:none;">
      <path fill="currentColor" d="M3.55,18.54L4.96,19.95L6.76,18.16L5.34,16.74M11,22.45C11.32,22.45 13,22.45 13,22.45V19.5H11M12,5.5A6,6 0 0,0 6,11.5A6,6 0 0,0 12,17.5A6,6 0 0,0 18,11.5A6,6 0 0,0 12,5.5M20,12.5H23V10.5H20M17.24,18.16L19.04,19.95L20.45,18.54L18.66,16.74M20.45,6.46L19.04,5.05L17.24,6.84L18.66,8.26M6.76,6.84L4.96,5.05L3.55,6.46L5.34,8.26L6.76,6.84M12,0.55H13V3.5H12M1,11.5H4V13.5H1M12,8.5A3,3 0 0,1 15,11.5A3,3 0 0,1 12,14.5A3,3 0 0,1 9,11.5A3,3 0 0,1 12,8.5Z"/>
    </svg>
  </button>

  <!--Contenedores Secundarios-->
  <div class="contenedores-secundarios">
    <!-- Primer contenedor secundario con el video -->
    <div class="contenedor-verake">
      <video autoplay loop muted playsinline class="video-portafolio">
        <source src="videos/Verake.mp4" type="video/mp4">
      </video>
    </div>
    <div class="contenedor-dankiel">
      <!-- Contenido del segundo contenedor secundario -->
    </div>
    <div class="contenedor-ddxous">
      <!-- Contenido del tercer contenedor secundario -->
    </div>
  </div>

  <!-- Botón "Más Información" -->
  <button id="boton-mas-informacion" class="boton-mas-informacion">Más Información</button>

  <!-- Popup -->
  <div id="popup" class="popup">
    <div class="popup-contenido">
      <!-- Encabezado del popup -->
      <div class="popup-encabezado">
        <button id="cerrar-popup" class="cerrar-popup">X</button>
      </div>

      <!-- Contenido principal del popup -->
      <div class="popup-principal">
        <!-- Perfil estilo red social -->
        <div class="perfil-red-social">
          <!-- Banner con video YouTube -->
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

          <!-- Contenedor para elementos debajo del banner -->
          <div class="perfil-contenido">
            <!-- Foto de perfil -->
            <div class="foto-perfil">
              <img src="img/vdk/verake/Verake.jpg" alt="Foto de Verake">
            </div>

            <!-- Nombre con efecto de letras -->
            <div class="nombre-perfil">
              <h1 class="nombre-animado"><span>V</span><span>E</span><span>R</span><span>A</span><span>K</span><span>E</span></h1>
            </div>

            <!-- Categorías -->
            <div class="categorias-perfil">
              <button class="categoria-btn active" data-categoria="diseños">Diseños</button>
              <button class="categoria-btn" data-categoria="visuales">Visuales</button>
              <button class="categoria-btn" data-categoria="acerca">Acerca de mí</button>
            </div>

            <!-- Redes sociales -->
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
</div>

<style>
/* Variables CSS para los modos */
:root {
  --color-fondo: #1a1a1a;
  --color-texto: #ffffff;
  --color-primario: #a91313;
  --color-secundario: #333333;
  --color-borde: #444444;
  --color-fondo-claro: #ffffff;
  --color-texto-claro: #333333;
  --color-contenedor: #1a1a1a;
  --color-contenedor-claro: #ffffff;
}

body {
  background-color: var(--color-fondo);
  color: var(--color-texto);
  transition: all 0.3s ease;
}

body.light-mode {
  background-color: var(--color-fondo-claro);
  color: var(--color-texto-claro);
}

/* Contenedores principales */
.popup-contenido,
.contenido-dinamico,
.categoria-content {
  background-color: var(--color-contenedor);
  transition: background-color 0.3s ease;
}

body.light-mode .popup-contenido,
body.light-mode .contenido-dinamico,
body.light-mode .categoria-content {
  background-color: var(--color-contenedor-claro);
}

/* Botón modo claro/nocturno */
.mode-toggle {
  position: fixed;
  top: 20px;
  left: 20px;
  background-color: var(--color-primario);
  border: none;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  cursor: pointer;
  z-index: 1001;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.mode-toggle:hover {
  transform: scale(1.1);
}

.mode-toggle svg {
  width: 24px;
  height: 24px;
  fill: white;
}

/* Estilos para el modo claro */
body.light-mode {
  --color-contenedor: #ffffff;
}

body.light-mode .popup-contenido,
body.light-mode .contenido-dinamico,
body.light-mode .categoria-content,
body.light-mode .vista-boton,
body.light-mode .flecha-navegacion {
  background-color: var(--color-contenedor-claro);
  color: var(--color-texto-claro);
  border-color: var(--color-borde);
}

body.light-mode .categoria-btn.active,
body.light-mode .vista-boton.active {
  background-color: var(--color-primario);
  color: white;
}

body.light-mode .logo-red-social {
  filter: brightness(0) invert(0);
}

/* Resto de estilos... */
.nombre-animado {
  display: flex;
  justify-content: center;
  gap: 2px;
}

.nombre-animado span {
  display: inline-block;
  transition: transform 0.3s ease;
}

.nombre-animado:hover span {
  animation: bounce 0.5s ease;
  animation-fill-mode: both;
}

@keyframes bounce {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-10px); }
}

.grid-diseños {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 20px;
  padding: 10px;
}

/* ... (mantener todos los demás estilos existentes) ... */
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Modo claro/nocturno
    const toggleMode = document.getElementById('toggle-mode');
    const moonIcon = toggleMode.querySelector('.moon-icon');
    const sunIcon = toggleMode.querySelector('.sun-icon');
    const body = document.body;
    
    // Verificar preferencia del sistema
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const savedMode = localStorage.getItem('portfolio-mode');
    
    // Aplicar modo inicial
    if (savedMode === 'light' || (!savedMode && !prefersDark)) {
        body.classList.add('light-mode');
        moonIcon.style.display = 'none';
        sunIcon.style.display = 'block';
        
        // Cambiar logos a versión negra
        document.querySelectorAll('.youtube-logo').forEach(img => {
            img.src = img.src.replace('Blanco', 'Negro');
        });
        document.querySelectorAll('.instagram-logo').forEach(img => {
            img.src = img.src.replace('Blanco', 'Negro');
        });
    }
    
    // Alternar modo
    toggleMode.addEventListener('click', function() {
        body.classList.toggle('light-mode');
        const isLight = body.classList.contains('light-mode');
        
        moonIcon.style.display = isLight ? 'none' : 'block';
        sunIcon.style.display = isLight ? 'block' : 'none';
        
        // Guardar preferencia
        localStorage.setItem('portfolio-mode', isLight ? 'light' : 'dark');
        
        // Cambiar logos de redes sociales
        const youtubeLogos = document.querySelectorAll('.youtube-logo');
        const instagramLogos = document.querySelectorAll('.instagram-logo');
        
        if (isLight) {
            youtubeLogos.forEach(img => img.src = img.src.replace('Blanco', 'Negro'));
            instagramLogos.forEach(img => img.src = img.src.replace('Blanco', 'Negro'));
        } else {
            youtubeLogos.forEach(img => img.src = img.src.replace('Negro', 'Blanco'));
            instagramLogos.forEach(img => img.src = img.src.replace('Negro', 'Blanco'));
        }
    });
    
    // Animación del nombre
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
    
    // Resto del código JavaScript existente...
    const botonMasInformacion = document.getElementById("boton-mas-informacion");
    const popup = document.getElementById("popup");
    const cerrarPopup = document.getElementById("cerrar-popup");
    const categoriaBtns = document.querySelectorAll(".categoria-btn");
    const vistaNormalBtn = document.getElementById("vista-normal");
    const vistaGridBtn = document.getElementById("vista-grid");
    const flechaIzquierda = document.getElementById("flecha-izquierda");
    const flechaDerecha = document.getElementById("flecha-derecha");
    const contenedorVideos = document.getElementById("contenedor-videos");
    const opcionesVisuales = document.getElementById("opciones-visuales");
    const mensajeVisuales = document.getElementById("mensaje-visuales");
    const listaVideos = document.getElementById("lista-videos");

    // Datos de videos
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

    let vistaActual = "normal";
    let indiceVideoActual = 0;

    // Funciones
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

    // Event listeners
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

    botonMasInformacion.addEventListener("click", () => {
        popup.style.display = "flex";
    });

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

    popup.addEventListener("click", (event) => {
        if (event.target === popup) {
            popup.style.display = "none";
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