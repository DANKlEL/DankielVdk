<?php
// portafolioDdxous.php
?>

<!-- Contenedor de DDXOUS -->
<div class="contenedor-ddxous">
  <video autoplay loop muted playsinline class="video-portafolio">
    <source src="videos/Ddxous.mp4" type="video/mp4">
  </video>
</div>

<!-- Popup de DDXOUS -->
<div class="popup">
  <div class="popup-contenido" data-artista="ddxous">
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
        <!-- Banner con video YouTube de DDXOUS-->
        <div class="banner-perfil">
          <div class="video-banner-container">
            <iframe 
              src="https://www.youtube.com/embed/[ID_VIDEO_DDXOUS]?autoplay=1&mute=1&loop=1&playlist=[ID_VIDEO_DDXOUS]&controls=0&disablekb=1&modestbranding=1&rel=0&showinfo=0" 
              frameborder="0" 
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
              allowfullscreen>
            </iframe>
          </div>
        </div>

        <!-- Contenedor para elementos debajo del banner de DDXOUS-->
        <div class="perfil-contenido">
          <!-- Foto de perfil de DDXOUS -->
          <div class="foto-perfil">
            <img src="img/vdk/ddxous/Ddxous.jpg" alt="Foto de Ddxous">
          </div>

          <!-- Nombre con efecto de letras de DDXOUS -->
          <div class="nombre-perfil">
            <h1 class="nombre-animado"><span>D</span><span>D</span><span>X</span><span>O</span><span>U</span><span>S</span></h1>
          </div>

          <!-- Categorías -->
          <div class="categorias-perfil">
            <button class="categoria-btn active" data-categoria="diseños">Diseños</button>
            <button class="categoria-btn" data-categoria="visuales">Visuales</button>
            <button class="categoria-btn" data-categoria="acerca">Acerca de mí</button>
          </div>

          <!-- Redes sociales de DDXOUS -->
          <div class="redes-sociales-perfil">
            <a href="[LINK_YOUTUBE_DDXOUS]" target="_blank" class="youtube-link">
              <img src="img/Logos/SocialMedia/YoutubeBlanco.png" alt="YouTube" class="logo-red-social youtube-logo">
            </a>
            <a href="[LINK_INSTAGRAM_DDXOUS]" target="_blank" class="instagram-link">
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
            <h3>Hola soy Ddxous</h3>
            <p>Descripción y detalles sobre Ddxous.</p>
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
  padding-bottom: 80px; /* Espacio para controles */
}

@keyframes fadeIn {
  from { opacity: 0; transform: scale(0.9); }
  to { opacity: 1; transform: scale(1); }
}

/* Resto de tus estilos existentes... */
</style>

<script>
// JavaScript específico de DDXOUS
document.addEventListener('DOMContentLoaded', function() {
    // Datos de videos de DDXOUS
    const videos = {
        "video-lyrics": [
            "https://www.youtube.com/embed/[ID_VIDEO1_DDXOUS]",
            "https://www.youtube.com/embed/[ID_VIDEO2_DDXOUS]"
        ],
        "pixel-art": [
            "https://www.youtube.com/embed/[ID_VIDEO3_DDXOUS]",
            "https://www.youtube.com/embed/[ID_VIDEO4_DDXOUS]"
        ]
    };

    // Datos de diseños de DDXOUS
    const diseños = {
        "renders": [
            "img/vdk/ddxous/designs/render1.jpg",
            "img/vdk/ddxous/designs/render2.jpg"
        ],
        "portadas": [
            "img/vdk/ddxous/designs/portada1.jpg",
            "img/vdk/ddxous/designs/portada2.jpg"
        ]
    };

    // Resto del código JavaScript específico de Ddxous...
    // (Similar al de Verake pero con los datos de Ddxous)
});
</script>