<?php
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="headerVDK.css">
    <link rel="stylesheet" href="contenedoresVDK.css"> <!-- Incluir el nuevo CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <title>VDK</title>
</head>
<body>
    <?php require 'EstructurasBaseVDK/headVDK.php'; ?>
    <?php require 'Vdk/Carga.php'; ?>
    <?php require 'EstructurasBaseVDK/headerVDK.php'; ?>

    <!-- Contenido principal de la página -->
    <main style="display: none;"> <!-- Ocultar inicialmente -->
        <?php require 'Vdk/contenedoresBranding.php'; ?> <!-- Incluir los contenedores -->
    </main>

    <?php require 'Script/ScriptVdk.php'; ?>
    <script src="menuVDK.js"></script> <!-- Aquí se vincula menuVDK.js -->
</body>
</html>