<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

require_once('../includes/db.php');

$query = "SELECT * FROM productos";
$resultado = $conexion->query($query);
?>