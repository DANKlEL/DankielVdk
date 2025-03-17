<?php
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>
<?php require 'EstructurasBaseVDK/headVDK.php'; ?>
<body>
    <div class="circle">
        <img src="img/Vdk/vdkLogo.png" alt="VDK Logo">
    </div>
    <?php require 'EstructurasBaseVDK/headerVDK.php'; ?>

    <script>
        // Agregar la clase para cambiar el fondo después de la animación
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                document.body.classList.add('animate-background');
            }, 1500); // 1500ms = 1.5s, el tiempo de la animación
        });

        // Ocultar el header al hacer scroll
        window.addEventListener('scroll', function() {
            var header = document.getElementById('main-header');
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > 0) {
                // Si no está en el tope de la página, ocultar la mitad del header
                header.classList.add('hidden');
            } else {
                // Si está en el tope de la página, mostrar el header completo
                header.classList.remove('hidden');
            }
        });
    </script>
</body>
</html>