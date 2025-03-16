<?php
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>
<?php require 'EstructurasBase/head.php'; ?>
<body>
<?php require 'EstructurasBase/header.php'; ?>
    <div class="pais" id="pais-container"> 
        <?php require 'js/Paises/seleccionPais.php'; ?>
    </div>
<main>
    <div class="image-container">
        <div class="image-item">
            <a href="Visuales/Visuales.php"><img src="img/Carteles/Visuales.jpg" alt="Visuales"></a>
            <button class="btn btn-dark font-weight-bold" id="btn-visuales">MÁS DETALLES</button>
        </div>
    </div>
</main>
<?php require 'Visuales/visuales.php'; ?>
<?php require 'js/Scroll/scrollDownUp.php'; ?>
<?php require 'Script/script.php'; ?> 
</body>
</html>