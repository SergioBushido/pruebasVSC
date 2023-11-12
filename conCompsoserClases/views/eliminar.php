<?php

require '../vendor/autoload.php';
use Sergi\Database;

// Crear una instancia de la clase Database
$database = new Database();
$conexion = $database->getConexion();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Utilizar una consulta preparada para evitar inyección SQL
    $sql = "DELETE FROM productos WHERE id = :id";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    header("Location: dashboard.php");
}
?>
