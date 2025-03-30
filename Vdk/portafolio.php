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
/* Estilos generales */
body {
  background-color: var(--color-fondo);
  color: var(--color-texto);
  transition: all 0.3s ease;
}

/* Contenedores principales */
.popup-contenido,
.contenido-dinamico,
.categoria-content {
  background-color: var(--color-contenedor);
  transition: background-color 0.3s ease;
}

/* Animación del nombre */
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
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Control del botón de información
    const botonMasInformacion = document.getElementById("boton-mas-informacion");
    const popup = document.getElementById("popup");

    botonMasInformacion.addEventListener("click", () => {
        popup.style.display = "flex";
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
});
</script>