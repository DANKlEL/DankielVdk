<?php
// portafolio.php
?>
<div class="portafolio-general">
  <!--Contenedores Secundarios-->
  <div class="contenedores-secundarios">
    <?php require 'portafolioVerake.php'; ?>
    
    <div class="contenedor-dankiel">
      <!-- Contenido del segundo contenedor secundario -->
    </div>
    <div class="contenedor-ddxous">
      <!-- Contenido del tercer contenedor secundario -->
    </div>
  </div>

  <!-- Botón "Más Información" -->
  <button id="boton-mas-informacion" class="boton-mas-informacion">Más Información</button>
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
.popup-encabezado {
  display: flex;
  justify-content: space-between;
  padding: 15px;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  z-index: 10;
}

.mode-toggle {
  background-color: var(--color-primario);
  border: none;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
  z-index: 11;
  margin-right: auto; /* Lo posiciona a la izquierda */
}

.mode-toggle:hover {
  transform: scale(1.1);
}

.mode-toggle svg {
  width: 20px;
  height: 20px;
  fill: white;
}

.cerrar-popup {
  background-color: var(--color-primario);
  color: white;
  border: none;
  border-radius: 50%;
  width: 30px;
  height: 30px;
  cursor: pointer;
  font-size: 16px;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: all 0.3s ease;
  z-index: 11;
  margin-left: auto; /* Lo posiciona a la derecha */
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
    
    // Control del popup
    const botonMasInformacion = document.getElementById("boton-mas-informacion");
    const popup = document.getElementById("popup");
    const cerrarPopup = document.getElementById("cerrar-popup");

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
});
</script>