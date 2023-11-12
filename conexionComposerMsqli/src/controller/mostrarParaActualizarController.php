<?php
if (isset($_GET['id'])) {
    $id_producto = $_GET['id'];
    $sql = "SELECT * FROM productos WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $id_producto);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $fila = $resultado->fetch_assoc();
    $stmt->close();
} else {
    // Manejar el caso en que no se proporciona un ID válido.
    // Puedes redirigir al usuario o mostrar un mensaje de error.
    // Aquí simplemente redirigimos al dashboard.
    header("Location: views/dashboard.php");
    exit(); // Asegurémonos de que el script se detenga después de la redirección.
}
?>