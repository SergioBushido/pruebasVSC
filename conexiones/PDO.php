<?php
//A la base pruebas tabla datos_usuarios


$host="localhost";
$dbname="pruebas";
$nom="root";
$pass="";


try {
    // Establecer la conexión a la base de datos MySQL usando PDO
    $conexion = new PDO("mysql:host=$host;dbname=$dbname", "$nom", "$pass");

    // Establecer el modo de error de PDO a excepciones
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Preparar y ejecutar la consulta SQL para obtener datos de la tabla datos_usuarios
    $consulta = $conexion->prepare("SELECT Nombre, Apellido, Direccion FROM datos_usuarios");
    $consulta->execute();

    // Mostrar los resultados
    echo "<h2>Datos de la tabla datos_usuarios:</h2>";
    echo "<ul>";
    while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo "<li>Nombre: " . ($fila['Nombre']) . ", Apellido: " . ($fila['Apellido']) . ", Dirección: " . ($fila['Direccion']) . "</li>";
    }
    echo "</ul>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Cerrar la conexión
$conexion = null;
?>
