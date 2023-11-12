<?php
include '../Controllers/dashboardController.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php
                // Mostrar mensaje si está presente en la URL
                if (isset($_GET['mensaje'])) {
                    echo '<div class="alert alert-success" role="alert">' . $_GET['mensaje'] . '</div>';
                }
                ?>
                <h2 class="text-dark">Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h2>
                <a href="cerrarSession.php" class="btn btn-danger">Cerrar sesión</a>
                <a href="inserta.php" class="btn btn-success">Insertar Producto</a>

                <table class="table table-dark mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Tipo</th>
                            <th>Eliminar</th>
                            <th>Actualizar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        if ($resultado->rowCount() > 0) {

                            while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
                                //Mismo resultado con foreach
                                // $filas = $resultado->fetchAll(PDO::FETCH_ASSOC);
                                //  foreach ($filas as $fila) {
                        ?>
                                <tr>
                                    <td><?php echo $fila['Id']; ?></td>
                                    <td><?php echo $fila['nombre']; ?></td>
                                    <td><?php echo $fila['pvp']; ?></td>
                                    <td><?php echo $fila['tipo']; ?></td>
                                    <td>
                                        <a href='eliminar.php?id=<?php echo $fila["Id"]; ?>' class='btn btn-danger'>Eliminar</a>
                                    </td>
                                    <td>
                                        <a href='actualizar.php?id=<?php echo $fila["Id"]; ?>' class='btn btn-success'>Actualizar</a>
                                    </td>
                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="4">Sin resultados</td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>