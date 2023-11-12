<?php
// Inicia la sesión
session_start();

// Finaliza la sesión
session_destroy();

// Redirige a la página de inicio
header("Location: ../index.php");
?>
