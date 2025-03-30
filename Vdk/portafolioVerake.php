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
<div class="popup">
  <div class="popup-contenido" data-artista="verake">
    <?php require 'portafolioModoClaroOscuro.php'; ?>

    <!-- Pestañas de artistas -->
    <div class="pestanas-artistas">
      <button class="pestana-artista-btn" data-artista="verake">Verake</button>
      <button class="pestana-artista-btn" data-artista="dankiel">Dankiel</button>
      <button class="pestana-artista-btn" data-artista="ddxous">Ddxous</button>
    </div>

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

<style>
/* Estilos para las pestañas de artistas */
.pestanas-artistas {
  display: flex;
  justify-content: center;
  gap: 15px;
  padding: 15px;
  background-color: #1a1a1a;
  border-bottom: 1px solid #333;
}

.pestana-artista-btn {
  padding: 8px 20px;
  background-color: #333;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s ease;
  font-size: 14px;
}

.pestana-artista-btn:hover {
  background-color: #555;
}

.pestana-artista-btn.active {
  background-color: #a91313;
  font-weight: bold;
}

.popup {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.8);
  justify-content: center;
  align-items: center;
  z-index: 1000;
}

.popup-contenido {
  background-color: #1a1a1a;
  padding: 0;
  border-radius: 15px;
  width: 900px;
  max-width: 90%;
  height: auto;
  max-height: 90vh;
  position: relative;
  animation: fadeIn 0.5s ease;
  overflow: hidden;
  color: white;
  padding-bottom: 80px;
}

@keyframes fadeIn {
  from { opacity: 0; transform: scale(0.9); }
  to { opacity: 1; transform: scale(1); }
}

/* Estilos del banner de perfil */
.banner-perfil {
  width: 100vw;
  margin-left: calc(-50vw + 50%);
  height: 300px;
  overflow: hidden;
  position: relative;
  border-top: 4px solid white;
  border-bottom: 4px solid white;
  background-color: #000;
  z-index: 1;
}

.video-banner-container {
  position: relative;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.video-banner-container iframe {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 177.78vh;
  height: 100vh;
  min-width: 100%;
  min-height: 100%;
  transform: translate(-50%, -50%);
  pointer-events: none;
}

/* Estilos del perfil */
.perfil-contenido {
  position: relative;
  padding: 0 20px;
  margin-top: -100px;
  z-index: 10;
  text-align: center;
}

.foto-perfil {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  border: 4px solid #1a1a1a;
  overflow: hidden;
  background-color: #1a1a1a;
  margin: 0 auto 15px;
  transition: all 0.3s ease;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
}

.foto-perfil:hover {
  transform: scale(1.1);
  border-color: #a91313;
  box-shadow: 0 6px 15px rgba(169, 19, 19, 0.4);
}

.foto-perfil img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.nombre-perfil h1 {
  margin: 0;
  font-size: 24px;
  color: white;
}

/* Estilos de categorías */
.categorias-perfil {
  display: flex;
  justify-content: center;
  gap: 10px;
  margin: 15px 0;
  flex-wrap: wrap;
}

.categoria-btn {
  padding: 8px 15px;
  background-color: #333;
  color: white;
  border: none;
  border-radius: 20px;
  cursor: pointer;
  transition: all 0.3s ease;
}

.categoria-btn:hover {
  background-color: #555;
}

.categoria-btn.active {
  background-color: #a91313;
}

/* Estilos de redes sociales */
.redes-sociales-perfil {
  display: flex;
  justify-content: center;
  gap: 15px;
  margin-bottom: 20px;
}

.logo-red-social {
  width: 30px;
  height: 30px;
  transition: transform 0.3s ease;
  filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.5));
}

.logo-red-social:hover {
  transform: scale(1.2);
}

/* Estilos del contenido dinámico */
.contenido-dinamico {
  background-color: #1a1a1a;
  border-radius: 10px;
  padding: 20px;
  margin: 0 20px 20px;
  max-height: calc(100vh - 400px);
  overflow-y: auto;
}

.categoria-content {
  display: none;
}

.categoria-content.active {
  display: block;
}

/* Estilos para diseños */
.grid-diseños {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 15px;
}

.diseño-item {
  width: 100%;
  height: 200px;
  overflow: hidden;
  border-radius: 10px;
  transition: transform 0.3s ease;
}

.diseño-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.3s ease;
}

.diseño-item:hover img {
  transform: scale(1.05);
}

/* Estilos para visuales (videos) */
.contenedor-videos.normal-view {
  display: flex;
  justify-content: center;
  padding: 15px;
}

.contenedor-videos.normal-view iframe {
  width: 100%;
  max-width: 800px;
  height: 450px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}

.contenedor-videos.grid-view {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 15px;
  padding: 15px;
}

.contenedor-videos.grid-view iframe {
  width: 100%;
  height: 200px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}

/* Estilos para botones de vista */
.vista-botones {
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  gap: 15px;
  z-index: 10;
  background-color: rgba(0, 0, 0, 0.7);
  padding: 10px;
  border-radius: 50px;
}

.vista-boton {
  background-color: #333;
  color: white;
  border: none;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  cursor: pointer;
  transition: all 0.3s ease;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0;
}

.vista-boton:hover {
  background-color: #a91313;
  transform: scale(1.1);
}

.vista-boton.active {
  background-color: #a91313;
  box-shadow: 0 0 0 3px rgba(169, 19, 19, 0.5);
}

.vista-icon {
  width: 24px;
  height: 24px;
  fill: white;
}

/* Estilos para flechas de navegación */
.flechas-navegacion {
  position: absolute;
  bottom: 20px;
  left: 0;
  right: 0;
  display: flex;
  justify-content: space-between;
  padding: 0 20px;
  z-index: 9;
}

.flecha-navegacion {
  background-color: #333;
  color: white;
  border: none;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  cursor: pointer;
  transition: all 0.3s ease;
  display: flex;
  align-items: center;
  justify-content: center;
}

.flecha-navegacion:hover {
  background-color: #a91313;
}

/* Estilos para el texto "Acerca de mí" */
.acerca-texto {
  padding: 20px;
  text-align: center;
}

.acerca-texto h3 {
  font-size: 24px;
  margin-bottom: 10px;
}

/* Estilos para animación del nombre */
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

/* Estilos responsivos */
@media (max-width: 768px) {
  .popup-contenido {
    width: 95%;
  }
  
  .contenedor-videos.grid-view {
    grid-template-columns: repeat(2, 1fr);
  }
  
  .contenedor-videos.normal-view iframe {
    height: 250px;
  }
  
  .vista-boton {
    width: 45px;
    height: 45px;
  }
}

@media (max-width: 480px) {
  .contenedor-videos.grid-view {
    grid-template-columns: 1fr;
  }
  
  .contenedor-videos.grid-view iframe {
    height: 180px;
  }
  
  .vista-boton {
    width: 40px;
    height: 40px;
  }
  
  .vista-icon {
    width: 20px;
    height: 20px;
  }
  
  .flechas-navegacion {
    padding: 0 10px;
  }
}
</style>

<script>
// JavaScript específico de VERAKE
document.addEventListener('DOMContentLoaded', function() {
    // Datos de videos de VERAKE
    const videosVerake = {
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

    // Datos de diseños de VERAKE
    const diseñosVerake = {
        "renders": [
            "img/vdk/verake/designs/render1.jpg",
            "img/vdk/verake/designs/render2.jpg",
            "img/vdk/verake/designs/render3.jpg",
            "img/vdk/verake/designs/render4.jpg"
        ],
        "portadas": [
            "img/vdk/verake/designs/portada1.jpg",
            "img/vdk/verake/designs/portada2.jpg",
            "img/vdk/verake/designs/portada3.jpg",
            "img/vdk/verake/designs/portada4.jpg"
        ],
        "miniaturas": [
            "img/vdk/verake/designs/miniatura1.jpg",
            "img/vdk/verake/designs/miniatura2.jpg",
            "img/vdk/verake/designs/miniatura3.jpg",
            "img/vdk/verake/designs/miniatura4.jpg"
        ],
        "pixel-art-design": [
            "img/vdk/verake/designs/pixelart1.jpg",
            "img/vdk/verake/designs/pixelart2.jpg",
            "img/vdk/verake/designs/pixelart3.jpg",
            "img/vdk/verake/designs/pixelart4.jpg"
        ],
        "logos": [
            "img/vdk/verake/designs/logo1.jpg",
            "img/vdk/verake/designs/logo2.jpg",
            "img/vdk/verake/designs/logo3.jpg",
            "img/vdk/verake/designs/logo4.jpg"
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
            const listaVideosCategoria = videosVerake[categoria];
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
            const listaDiseñosCategoria = diseñosVerake[categoria];
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