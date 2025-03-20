<?php
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>
<?php require 'EstructurasBaseVDK/headVDK.php'; ?>
<body>
    <?php require 'Vdk/Carga.php'; ?>
    <?php require 'EstructurasBaseVDK/headerVDK.php'; ?>
    <?php require 'Script/ScriptVdk.php'; ?>
</body>
</html>