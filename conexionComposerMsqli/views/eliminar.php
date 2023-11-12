<?php

include '../src/controller/dashboardController.php';
//En este caso paso 4K de la seguridad
//en la de PDO si lo ago con bindParam
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM productos WHERE id=$id";
    $stmt = $conexion->prepare($sql);
    $stmt->execute();
    $stmt->close();
    header("Location: dashboard.php");
}