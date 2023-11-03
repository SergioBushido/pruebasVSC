<?php
$host = "localhost";
$dbname = "pruebas";
$nom = "root";
$pass = "";

try {
    // Establecer la conexión a la base de datos MySQL usando mysqli
    $conexion = new mysqli($host, $nom, $pass, $dbname);

    // Verificar la conexión
    if ($conexion->connect_error) {
        throw new Exception("Conexión fallida: " . $conexion->connect_error);
    }

    // Preparar y ejecutar la consulta SQL para obtener datos de la tabla datos_usuarios
    $consulta = "SELECT Nombre, Apellido, Direccion FROM datos_usuarios";
    $resultado = $conexion->query($consulta);

    // Mostrar los resultados
    echo "<h2>Datos de la tabla datos_usuarios:</h2>";
    echo "<ul>";
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            echo "<li>Nombre: " . ($fila['Nombre']) . ", Apellido: " . ($fila['Apellido']) . ", Dirección: " . ($fila['Direccion']) . "</li>";
        }
    } else {
        echo "<li>No hay datos disponibles en la tabla datos_usuarios.</li>";
    }
    echo "</ul>";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    // Cerrar la conexión
    if (isset($conexion)) {
        $conexion->close();
    }
}
?>
