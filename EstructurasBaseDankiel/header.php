<header>
    <link rel="icon" href="img/Logos/LogoDankiel.jpg" type="image/jpg">
    <div class="header" id="main-header">
        <div class="logo">
            <a href="" class="logo1"><img src="img/Logos/ShotByDankiel.jpg" alt="Logo 1"/></a>
            <a href="" class="logo2"><img id="logo2" src="img/Logos/LogoDankiel.jpg" alt="Logo 2"/></a>
            <a href="" class="logo3"><img src="img/Logos/LogoBlackGengar.jpg" alt="Logo 3"/></a>
        </div>
        <div class="firmas">
            <a href="" class="firma1"><img src="img/Firmas/FirmaDankiel.jpg" alt="Firma 1"/></a>
            <a href="" class="firma2"><img src="img/Firmas/FirmaBlackGengar.jpg" alt="Firma 2"/></a>
        </div>
        <div class="menu">
            <ul class="nav" id="nav">
                <li><a href="index.php">INICIO</a></li>
                <li><a href="">VISUALES</a></li>
                <li><a href="Vdk.php">SHOT BY VDK</a></li>
                <li class="dropdown">
                    <a href="ropa.php">MARCA DE ROPA</a>
                    <ul class="dropdown-menu">
                        <li><a href="novedades.php">Lo Nuevo</a></li>
                        <li><a href="hombre.php">Hombre</a></li>
                        <li><a href="mujer.php">Mujer</a></li>
                        <li><a href="peluches.php">Peluches</a></li>
                        <li><a href="llaveros.php">Llaveros</a></li>
                        <li><a href="exclusivos.php">Productos Exclusivos</a></li>
                    </ul>
                </li>
            </ul>
            <div id="user-info"> <!-- Aquí se actualizará dinámicamente la información del usuario -->
            </div>
        </div>
    </div>

    <script>
        // Obtener la imagen del logo
        const logo2 = document.getElementById('logo2');

        // Guardar el tamaño original de la imagen
        const originalWidth = logo2.clientWidth;
        const originalHeight = logo2.clientHeight;

        // Cambiar la imagen al pasar el cursor
        logo2.addEventListener('mouseover', function() {
            this.src = 'img/Animacion/Cabeza.gif';
            // Aplicar el tamaño original al GIF
            this.style.width = `${originalWidth}px`;
            this.style.height = `${originalHeight}px`;
        });

        // Restaurar la imagen al quitar el cursor
        logo2.addEventListener('mouseout', function() {
            this.src = 'img/Logos/LogoDankiel.jpg';
            // Restaurar el tamaño original al JPG
            this.style.width = `${originalWidth}px`;
            this.style.height = `${originalHeight}px`;
        });
    </script>
</header>