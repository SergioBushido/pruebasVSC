<?php

if(isset($_POST['enviar'])){
    session_start();
    $nom =$_POST['nom'];
    $ape =$_POST['ape'];
    $_SESSION['dato'][]=array("nombre"=>$nom,"apellidos"=>$ape);

  
        foreach($_SESSION['dato'] as $contacto){
           echo '<p>'. $contacto['nombre'] . $contacto['apellidos'] .'</p>';
       }
       echo '</fieldset>';
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>tu vieja</h1>
    <h2>tu super vieja</h2>
</body>
</html>