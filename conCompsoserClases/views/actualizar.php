<?php
include '../Controllers/mostrar.php';
include '../Controllers/actualizar.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Actualizar Producto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-dark">Actualizar Producto</h2>
                <form action="" method="POST">
                    <input type="hidden" name="id_producto" value="<?php echo $fila['Id']; ?>"> <!-- Cambiado a 'id' -->
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" value="<?php echo $fila['nombre']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="pvp">PVP:</label>
                        <input type="number" class="form-control" name="pvp" step="0.01" value="<?php echo $fila['pvp']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción:</label>
                        <textarea class="form-control" name="descripcion" required><?php echo $fila['descripcion']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tipo">Tipo:</label>
                        <select class="form-control" name="tipo" required>
                            <option value="Periferico" <?php echo ($fila['tipo'] == 'Periferico') ? 'selected' : ''; ?>>Periférico</option>
                            <option value="Software" <?php echo ($fila['tipo'] == 'Software') ? 'selected' : ''; ?>>Software</option>
                            <option value="Hardware" <?php echo ($fila['tipo'] == 'Hardware') ? 'selected' : ''; ?>>Hardware</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success" name="actualizar">Actualizar</button>
                    <button type="submit" class="btn btn-primary" name="volver">Volver</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
