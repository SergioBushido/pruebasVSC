<?php
require '../vendor/autoload.php';
use Sergi\Database;

// Crear una instancia de la clase Database
$database = new Database();
$conexion = $database->getConexion();

if (isset($_POST['insertar'])) {
    $nom = $_POST['nombre'];
    $pvp = $_POST['pvp'];
    $des = $_POST['descripcion'];
    $tipo = $_POST['tipo'];

    

    // Preparar la consulta
    $sql = "INSERT INTO productos (nombre, pvp, descripcion, tipo) VALUES (?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);

    // Vincular parámetros
    $stmt->bindParam(1, $nom, PDO::PARAM_STR);
    $stmt->bindParam(2, $pvp, PDO::PARAM_STR);
    $stmt->bindParam(3, $des, PDO::PARAM_STR);
    $stmt->bindParam(4, $tipo, PDO::PARAM_STR);

    // Ejecutar la consulta
    $stmt->execute();

    // Redireccionar después de la inserción
    header("Location: dashboard.php?mensaje=Producto+insertado");
    exit();
}

if(isset($_POST['volver'])){
    header("Location: dashboard.php");
}
?>