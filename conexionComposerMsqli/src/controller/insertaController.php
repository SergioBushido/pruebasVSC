<?php
if (isset($_POST['insertar'])) {
    $nom = $_POST['nombre'];
    $pvp = $_POST['pvp'];
    $des = $_POST['descripcion'];
    $tipo = $_POST['tipo'];

    // Supongamos que $conexion es tu conexión a la base de datos
    $sql = "INSERT INTO productos (nombre, pvp, descripcion, tipo) VALUES (?, ?, ?, ?)";

    // Preparar la consulta
    $stmt = $conexion->prepare($sql);

    // Vincular parámetros
    $stmt->bind_param("sdsi", $nom, $pvp, $des, $tipo);

    // Ejecutar la consulta
    $stmt->execute();

    // Cerrar la consulta preparada
    $stmt->close();

    header("Location: views/dashboard.php");
}

if(isset($_POST['volver'])){
    header("Location: views/dashboard.php");
}
?>