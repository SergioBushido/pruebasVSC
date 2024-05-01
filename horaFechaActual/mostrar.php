<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje de Saludo</title>
</head>
<body>
    <h1>Mensaje de Saludo</h1>

    <?php

    //MES NUMÉRICO
    // Establecer la zona horaria a Canarias
    date_default_timezone_set('Atlantic/Canary');

    // Obtener la hora, el día, el mes y el año actuales
    $horaActual = date('H:i'); // Formato de 24 horas (por ejemplo, 14:30)
    $diaActual = date('d'); // Día del mes (por ejemplo, 27)
    $mesActual = date('n'); // Número del mes (por ejemplo, 10 para octubre)
    $anioActual = date('Y'); // Año (por ejemplo, 2023)

    // Imprimir el mensaje
    echo "<p>Buenos días, son las $horaActual horas del día $diaActual del mes  $mesActual del año $anioActual.</p>";
    

    
//CON ESTO SE PONE EN ESPAÑOL
 // Establecer la zona horaria a Canarias
    date_default_timezone_set('Atlantic/Canary');

    // Obtener la hora, el día, el mes y el año actuales
    $horaActual = date('H:i'); // Formato de 24 horas (por ejemplo, 14:30)
    $diaActual = date('d'); // Día del mes (por ejemplo, 27)
    
    // Array asociativo para traducir números de mes a nombres en español
    $mesesEnEspanol = array(
        1 => 'enero', 2 => 'febrero', 3 => 'marzo', 4 => 'abril', 5 => 'mayo', 6 => 'junio',
        7 => 'julio', 8 => 'agosto', 9 => 'septiembre', 10 => 'octubre', 11 => 'noviembre', 12 => 'diciembre'
    );

    $mesActual = $mesesEnEspanol[date('n')]; // Obtener el nombre del mes en español
    $anioActual = date('Y'); // Año (por ejemplo, 2023)

    // Imprimir el mensaje
    echo "<p>Buenos días, son las $horaActual horas del día $diaActual del mes de $mesActual del año $anioActual.</p>";



    // Establecer la configuración regional a español
    setlocale(LC_TIME, 'es_ES.UTF-8');

    // Establecer la zona horaria a Canarias
    date_default_timezone_set('Atlantic/Canary');

    // Obtener la hora, el día, el mes y el año actuales
    $horaActual = date('H:i'); // Formato de 24 horas (por ejemplo, 14:30)
    $diaActual = date('d'); // Día del mes (por ejemplo, 27)
    $nombreMes = ucfirst(strftime('%B')); // Nombre del mes en español, con la primera letra en mayúscula

    $anioActual = date('Y'); // Año (por ejemplo, 2023)

    // Imprimir el mensaje
    echo "<p>Buenos días, son las $horaActual horas del día $diaActual del mes de $nombreMes del año $anioActual.</p>";

/////////////////////////////////////////////


setlocale(LC_ALL, 'es_ES.UTF-8');
    date_default_timezone_set('Atlantic/Canary');
    $ahora=new DateTime();
    $fecha = strftime("Hoy es %A, %d de %B de %Y y son las %H:%M:%S", date_timestamp_get($ahora));
    echo $fecha;



   ?>
setlocale(LC_ALL, 'es_ES.UTF-8');
    date_default_timezone_set('Atlantic/Canary');
    $ahora=new DateTime();
    $fecha = strftime("Hoy es %A, %d de %B de %Y y son las %H:%M:%S", date_timestamp_get($ahora));
    echo $fecha;




</body>
</html>
