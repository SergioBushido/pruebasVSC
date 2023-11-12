<?php
require '../vendor/autoload.php';
use Sergi\Database;

session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php");
    exit();
}

// Crear una instancia de la clase Database
$database = new Database();
$conexion = $database->getConexion();

// Consultar productos con PDO
$query = "SELECT * FROM productos";
$resultado = $conexion->query($query);

?>
