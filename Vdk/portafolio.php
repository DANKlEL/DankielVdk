<?php
// portafolio.php
?>
<div class="portafolio-general">
  <!--Contenedores Secundarios-->
  <div class="contenedores-secundarios">
    <div class="contenedor-verake">
      <?php require 'portafolioVerake.php'; ?>
    </div>
    <div class="contenedor-dankiel">
      <?php require 'portafolioDankiel.php'; ?>
    </div>
    <div class="contenedor-ddxous">
      <?php require 'portafolioDdxous.php'; ?>
    </div>
  </div>

  <!-- Botón "Más Información" -->
  <button id="boton-mas-informacion" class="boton-mas-informacion">Más Información</button>
</div>

<style>
/* Estilos generales */
.portafolio-general {
  width: 100%;
  padding: 0;
  box-sizing: border-box;
  margin-top: 0;
  position: relative;
}

.contenedores-secundarios {
  display: flex;
  justify-content: space-between;
  gap: 20px;
  width: 95%;
  padding: 0 20px;
  margin-top: 0;
}

.contenedor-verake,
.contenedor-dankiel,
.contenedor-ddxous {
  flex: 1;
  height: 850px;
  background-color: #e0e0e0;
  overflow: hidden;
  position: relative;
  border: 10px solid transparent;
  border-image-slice: 1;
  animation: gradient-rotate 3s linear infinite;
}

.video-portafolio {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

@keyframes gradient-rotate {
  0% { border-image: linear-gradient(45deg, #000000, #a91313) 1; }
  50% { border-image: linear-gradient(45deg, #a91313, #000000) 1; }
  100% { border-image: linear-gradient(45deg, #000000, #a91313) 1; }
}

/* Botón Más Información */
.boton-mas-informacion {
  display: block;
  margin: 20px auto;
  padding: 10px 20px;
  background-color: #a91313;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  transition: all 0.3s ease;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.boton-mas-informacion:hover {
  background-color: #8a0f0f;
  transform: translateY(-2px);
  box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
}

/* Estilos para las pestañas de artistas */
.pestanas-artistas {
  position: absolute;
  top: 20px;
  left: 20px;
  z-index: 100;
  display: flex;
  gap: 10px;
}

.pestana-artista-btn {
  padding: 8px 16px;
  background: rgba(0,0,0,0.7);
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-weight: bold;
  transition: all 0.3s ease;
}

.pestana-artista-btn:hover {
  background: rgba(169,19,19,0.8);
}

.pestana-artista-btn.active {
  background: #a91313;
  box-shadow: 0 0 10px rgba(169,19,19,0.8);
}

/* Estilos para el popup */
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
  padding: 20px;
  border-radius: 15px;
  width: 90%;
  max-width: 900px;
  max-height: 90vh;
  overflow-y: auto;
  position: relative;
  animation: fadeIn 0.3s ease;
}

@keyframes fadeIn {
  from { opacity: 0; transform: scale(0.95); }
  to { opacity: 1; transform: scale(1); }
}
</style>

<script>
// Variable para rastrear el estado del popup
let popupAbierto = false;
let artistaActual = 'verake';

document.addEventListener('DOMContentLoaded', function() {
    // Ocultar todos los contenedores excepto Verake al inicio
    document.querySelectorAll('.contenedor-dankiel, .contenedor-ddxous').forEach(el => {
        el.style.display = 'none';
    });
    
    // Activar la pestaña Verake por defecto
    document.querySelectorAll('.pestana-artista-btn[data-artista="verake"]').forEach(btn => {
        btn.classList.add('active');
    });
    
    // Control del botón de información
    document.getElementById("boton-mas-informacion").addEventListener("click", function() {
        const popup = document.querySelector(`.contenedor-${artistaActual} .popup`);
        popup.style.display = "flex";
        popupAbierto = true;
    });
    
    // Función para cambiar entre artistas
    function cambiarPortafolio(artista) {
        // Guardar el estado actual del popup
        const popupAnterior = document.querySelector(`.contenedor-${artistaActual} .popup`);
        const estabaAbierto = popupAnterior.style.display === 'flex';
        
        // Ocultar todos los portafolios
        document.querySelectorAll('.contenedor-verake, .contenedor-dankiel, .contenedor-ddxous').forEach(el => {
            el.style.display = 'none';
        });
        
        // Mostrar el portafolio seleccionado
        const contenedorNuevo = document.querySelector(`.contenedor-${artista}`);
        contenedorNuevo.style.display = 'block';
        artistaActual = artista;
        
        // Actualizar estado activo de las pestañas en TODOS los popups
        document.querySelectorAll('.pestana-artista-btn').forEach(btn => {
            btn.classList.remove('active');
            if(btn.getAttribute('data-artista') === artista) {
                btn.classList.add('active');
            }
        });
        
        // Restaurar el estado del popup si estaba abierto
        if(estabaAbierto) {
            const popupNuevo = document.querySelector(`.contenedor-${artista} .popup`);
            popupNuevo.style.display = 'flex';
        }
    }
    
    // Delegación de eventos para las pestañas
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('pestana-artista-btn')) {
            e.preventDefault();
            const artista = e.target.getAttribute('data-artista');
            cambiarPortafolio(artista);
        }
        
        // Cerrar popup al hacer clic fuera
        if (e.target.classList.contains('popup')) {
            e.target.style.display = 'none';
            popupAbierto = false;
        }
    });
});
</script>