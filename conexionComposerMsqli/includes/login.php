<?php
session_start();
require_once('includes/db.php');

//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['iniciar'])){
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $passhash=hash('sha256', $contrasena);

    $query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND pass = '$passhash'";
    $resultado = $conexion->query($query);

    if ($resultado->num_rows > 0) {
        $_SESSION['usuario'] = $usuario;
        header("Location: views/dashboard.php");
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}
?>