<?php
require_once 'includes/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inserción</title>
    <!-- Incluir estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
<h2 class="text-center mb-4">Insertar Producto</h2>

    <form action="" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre">
        </div>

        <div class="form-group">
            <label for="pvp">PVP:</label>
            <input type="number" class="form-control" name="pvp" step="0.01">
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" name="descripcion"></textarea>
        </div>

        <div class="form-group">
            <label for="tipo">Tipo:</label>
            <select class="form-control" name="tipo">
                <option value="Periferico">Periférico</option>
                <option value="Software">Software</option>
                <option value="Hardware">Hardware</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success" name="insertar">Insertar</button>
        <button type="submit" class="btn btn-primary" name="volver">Volver</button>

    </form>
</div>

<?php
include 'src/controller/insertaController.php';
?>

<!-- Incluir scripts de Bootstrap y jQuery al final del cuerpo del documento -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXylc4SQzqBxyuthK1JI5eI1b7eJK6U1Qfw1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
