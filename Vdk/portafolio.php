<?php
// portafolio.php
?>
<div class="portafolio-general">
    <!-- Contenedores Secundarios -->
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
                <h2>Portafolio</h2>
                <button id="cerrar-popup" class="cerrar-popup">X</button>
            </div>

            <!-- Contenido principal del popup -->
            <div class="popup-principal">
                <!-- Lista de categorías en el lado izquierdo -->
                <div class="popup-lista">
                    <ul id="lista-videos">
                        <li data-categoria="video-lyrics">Video Lyrics</li>
                        <li data-categoria="pixel-art">Pixel Art</li>
                        <li data-categoria="3d">3D</li>
                        <li data-categoria="video-clip">Video Clip</li>
                        <li data-categoria="amv">AMV</li>
                    </ul>
                </div>

                <!-- Línea vertical separadora -->
                <div class="linea-vertical"></div>

                <!-- Contenido del lado derecho -->
                <div class="popup-derecha">
                    <!-- Contenedor para la información y la imagen -->
                    <div class="info-imagen-container">
                        <!-- Información de la tarjeta -->
                        <div class="tarjeta-info">
                            <p><strong>Nombre:</strong> Verake</p>
                            <p><strong>Nacionalidad:</strong> Argentina</p>
                            <p><strong>Experiencia:</strong> 5 años</p>
                            <p><strong>Descripción:</strong> Creativo y apasionado por el diseño multimedia.</p>
                        </div>

                        <!-- Imagen de Verake -->
                        <div class="tarjeta-imagen">
                            <img src="img/vdk/portafolio/verake.jpg" alt="Imagen de Verake">
                        </div>
                    </div>

                    <!-- Redes sociales -->
                    <div class="redes-sociales">
                        <a href="https://www.youtube.com/watch?v=qY-Q2n8Nx1k&list=PLSAe6Q-LxvYE3T92Ks_xiFGyjxtIuCkVm" target="_blank">
                            <img src="img/Logos/SocialMedia/Youtube.png" alt="YouTube" class="logo-red-social youtube-logo">
                        </a>
                        <a href="https://www.instagram.com/edverake/?igsh=MXFrMHUxOXVqY3lkbQ%3D%3D" target="_blank">
                            <img src="img/Logos/SocialMedia/Instagram.png" alt="Instagram" class="logo-red-social instagram-logo">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Botones de cambio de vista -->
            <div class="vista-botones">
                <button id="vista-normal" class="vista-boton active" title="Vista normal (1 por 1)">
                    <i class="bi bi-arrow-left-right"></i> <!-- Icono de flechas -->
                </button>
                <button id="vista-grid" class="vista-boton" title="Vista en cuadrícula (3x3)">
                    <i class="bi bi-grid-3x3"></i> <!-- Icono de cuadrícula -->
                </button>
            </div>

            <!-- Contenedor para los videos de YouTube -->
            <div id="contenedor-videos" class="contenedor-videos normal-view">
                <!-- Aquí se cargarán los videos de YouTube -->
            </div>

            <!-- Flechas de navegación (solo para vista normal) -->
            <div class="flechas-navegacion">
                <button id="flecha-izquierda" class="flecha-navegacion">
                    <i class="bi bi-arrow-left"></i> <!-- Flecha izquierda -->
                </button>
                <button id="flecha-derecha" class="flecha-navegacion">
                    <i class="bi bi-arrow-right"></i> <!-- Flecha derecha -->
                </button>
            </div>
        </div>
    </div>
</div>