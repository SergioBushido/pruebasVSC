
<?php
if (isset($_POST['actualizar'])) {
    $id_producto = $_POST['id_producto'];
    $nom = $_POST['nombre'];
    $pvp = $_POST['pvp'];
    $des = $_POST['descripcion'];
    $tipo = $_POST['tipo'];

    // Supongamos que $conexion es tu conexión a la base de datos
    $sql = "UPDATE productos SET nombre=?, pvp=?, descripcion=?, tipo=? WHERE id=?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sdsii", $nom, $pvp, $des, $tipo, $id_producto);
    $stmt->execute();
    $stmt->close();

    header("Location: dashboard.php");
}
if(isset($_POST['volver'])){
    header("Location: dashboard.php");
}
?>
