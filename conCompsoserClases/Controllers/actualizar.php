<?php
if (isset($_POST['actualizar'])) {
    $id_producto = $_POST['id_producto'];
    $nom = $_POST['nombre'];
    $pvp = $_POST['pvp'];
    $des = $_POST['descripcion'];
    $tipo = $_POST['tipo'];

    // Supongamos que $conexion es tu conexión a la base de datos
    $sql = "UPDATE productos SET nombre=:nombre, pvp=:pvp, descripcion=:descripcion, tipo=:tipo WHERE id=:id";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':nombre', $nom, PDO::PARAM_STR);
    $stmt->bindParam(':pvp', $pvp, PDO::PARAM_STR);
    $stmt->bindParam(':descripcion', $des, PDO::PARAM_STR);
    $stmt->bindParam(':tipo', $tipo, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id_producto, PDO::PARAM_INT);
    $stmt->execute();
   

    header("Location: dashboard.php?mensaje=Producto+actualizado");
    exit();
}

if (isset($_POST['volver'])) {
    header("Location: dashboard.php");
}
?>
