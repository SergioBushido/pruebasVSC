<?php
require '../vendor/autoload.php';
use Sergi\Database;

// Crear una instancia de la clase Database
$database = new Database();
$conexion = $database->getConexion();

if (isset($_GET['id'])) {
    // Obtener los datos actualizados del formulario
    $id_producto = $_GET['id']; // Cambiado a 'id'
  
    // Obtener la información actualizada del producto después de la actualización
    $sql = "SELECT * FROM productos WHERE Id = :id";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':id', $id_producto, PDO::PARAM_INT);
    $stmt->execute();
    $fila = $stmt->fetch(PDO::FETCH_ASSOC);
}

if(isset($_POST['volver'])){
    header("Location: dashboard.php");
}
?>
