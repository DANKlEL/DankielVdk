// Listas de videos para cada tipo de visual
const videosPorTipo = {
    'lyric-con-portada': ['ZRV_zPK18Gg', 'toA7TAhdJQM', 'ABS1KqO6Dro', 'azfkhwF1jGw'],
    'lyric-simple': ['NyeYJHwbMgw', 'x1RprL97HJs'],
    'edit-video-clip': ['90OnAT9ELks'],
    'just-visual-concept': ['9PfPgOhJJaA'],
    'amv': ['aEFW1vrqyBg']
};

let currentTipoVisual = 'lyric-con-portada';
let currentVideoIndexRestoVisuales = 0;

// Función para actualizar el video en el contenedor de resto de visuales
function updateVideoRestoVisuales() {
    const iframe = document.getElementById('playerRestoVisuales');
    iframe.src = `https://www.youtube.com/embed/${videosPorTipo[currentTipoVisual][currentVideoIndexRestoVisuales]}`;
}

// Cambiar el tipo de visual
document.querySelectorAll('.menu-lateral a').forEach(enlace => {
    enlace.addEventListener('click', (e) => {
        e.preventDefault();
        const tipo = e.target.getAttribute('data-tipo');
        currentTipoVisual = tipo;
        currentVideoIndexRestoVisuales = 0;

        // Ocultar todas las imágenes
        document.querySelectorAll('.visual-image').forEach(img => {
            img.style.display = 'none';
        });

        // Mostrar la imagen correspondiente al tipo de visual seleccionado
        switch (tipo) {
            case 'lyric-con-portada':
                document.getElementById('imagenLyricPro').style.display = 'block';
                break;
            case 'lyric-simple':
                document.getElementById('imagenLyricSimple').style.display = 'block';
                break;
            case 'edit-video-clip':
                document.getElementById('imagenVideoClip').style.display = 'block';
                break;
            case 'just-visual-concept':
                document.getElementById('imagenConcept').style.display = 'block';
                break;
            case 'amv':
                document.getElementById('imagenAMV').style.display = 'block';
                break;
        }

        updateVideoRestoVisuales();
    });
});

// Inicializar el primer video
updateVideoRestoVisuales();