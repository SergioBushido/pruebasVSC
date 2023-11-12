<?php
session_start();
require 'vendor/autoload.php';
use Sergi\Database;

// Crear una instancia de la clase Database
$database = new Database();
$conexion = $database->getConexion();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['iniciar'])) {
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        $passhash = hash('sha256', $contrasena);

        // Utilizar consultas preparadas con PDO
        $query = "SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :pass";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
        $stmt->bindParam(':pass', $passhash, PDO::PARAM_STR);
        $stmt->execute();

        // Obtener resultados
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($resultado) {
            $_SESSION['usuario'] = $usuario;
            header("Location: views/dashboard.php");
            exit();
        } else {
            $error = "Usuario o contraseña incorrectos";
        }
    }
}
?>