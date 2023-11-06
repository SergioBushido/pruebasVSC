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

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

    Nombre: <input type="text" name="nom">
    Apellidos: <input type="text" name="ape">

    <input type="submit" name="enviar" value="enviar">
    

    </form>

    
</body>
</html>