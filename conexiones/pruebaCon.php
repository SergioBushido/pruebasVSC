<?php
/*
//Conexion externa a PDO usando clases
include 'PDOusandoClases.php';
// Crear una instancia de la clase ConexionDB
$conexion = new ConexionDB();

// Llamar a la función obtenerDatosUsuarios()

$datosUsuarios = $conexion->obtenerDatosUsuarios();
foreach ($datosUsuarios as $usuario) {
    echo "Nombre: " . $usuario['Nombre'] . ", Apellido: " . $usuario['Apellido'] . ", Dirección: " . $usuario['Direccion'] . "<br>";
}


// Cerrar la conexión
$conexion->cerrarConexion();

*/
//Conexion externa a MSQLI
//include 'MSQLI.php';

//Conexion externa a PDO
include 'PDO.php';
?>