<?php
// Comprobamos si la cookie 'visitas' existe
if (isset($_COOKIE['visitas'])) {
    $visitas = ++$_COOKIE['visitas'];
} else {
    $visitas = 1;
}

// Establecemos la cookie con el número actual de visitas
setcookie('visitas', $visitas, time() + 3600);  // Expira en 1 hora

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Ejercicio 1.3 Unidad 4</title>
</head>
<body>
<h1>Bienvenido a la página de tu madre</h1>
<?php
echo "Has entrado a ver esta mierda " . $visitas . " veces";
?>
</body>
</html>
