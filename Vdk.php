<?php
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>
<?php require 'EstructurasBaseVDK/headVDK.php'; ?>
<body>
    <!-- Contenedor para las tomas iniciales (destello) -->
    <div id="flash-container" class="flash-container">
        <img id="flash-image" src="" alt="Flash Image" style="display: none;">
    </div>

    <!-- Contenedor del texto "Shot by VDK" -->
    <div id="welcome-container" class="welcome-container">
        <h1 class="welcome-text">
            <span>S</span>
            <span>h</span>
            <span>o</span>
            <span>t</span>
            <span> </span>
            <span>b</span>
            <span>y</span>
            <span> </span>
            <span>V</span>
            <span>D</span>
            <span>K</span>
        </h1>
    </div>

    <!-- Header -->
    <?php require 'EstructurasBaseVDK/headerVDK.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const flashContainer = document.getElementById('flash-container');
            const flashImage = document.getElementById('flash-image');
            const welcomeContainer = document.getElementById('welcome-container');
            const welcomeText = document.querySelector('.welcome-text');
            const letters = document.querySelectorAll('.welcome-text span');

            // 1. Mostrar las tomas iniciales en secuencia rápida (destello)
            const flashImages = [
                'img/Vdk/toma1.png',
                'img/Vdk/toma2.png',
                'img/Vdk/toma3.png',
                'img/Vdk/toma4.png'
            ];
            let currentIndex = 0;

            function showFlashImages() {
                if (currentIndex < flashImages.length) {
                    flashImage.src = flashImages[currentIndex];
                    flashImage.style.display = 'block';
                    currentIndex++;
                    setTimeout(showFlashImages, 50); // Cambiar cada 50ms (más rápido)
                } else {
                    // Ocultar el contenedor de destello después de la secuencia
                    flashContainer.style.display = 'none';

                    // 2. Mostrar el texto "Shot by VDK"
                    welcomeContainer.style.display = 'flex';

                    // 3. Después de 1 segundo, hacer que cada letra caiga una por una
                    setTimeout(function() {
                        let delay = 0; // Retardo inicial

                        letters.forEach((letter, index) => {
                            setTimeout(() => {
                                letter.style.transform = 'translateY(100vh)'; // Caída hacia abajo
                                letter.style.opacity = '0'; // Desvanecimiento

                                // 4. Mostrar el header justo cuando caiga la última letra
                                if (index === letters.length - 1) {
                                    document.body.style.transition = 'background-color 1s ease-in-out';
                                    document.body.style.backgroundColor = 'white';

                                    setTimeout(() => {
                                        welcomeContainer.style.display = 'none';

                                        // Mostrar el header
                                        var header = document.getElementById('main-header');
                                        header.classList.remove('initial-hidden');
                                    }, 500); // Esperar un poco más después de la última letra
                                }
                            }, delay);

                            delay += 100; // Retardo entre cada letra (100ms)
                        });
                    }, 1000); // Iniciar después de 1 segundo
                }
            }

            // Iniciar la secuencia de destello
            showFlashImages();
        });

        // Ocultar el header al hacer scroll
        window.addEventListener('scroll', function() {
            var header = document.getElementById('main-header');
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > 0) {
                header.classList.add('hidden');
            } else {
                header.classList.remove('hidden');
            }
        });
    </script>
</body>
</html>