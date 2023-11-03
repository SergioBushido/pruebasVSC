<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="GET">
    <label for="name">nombre</label>
    <input type="text" name="name" >

    <label for="tel">telefono</label>
    <input type="text" name="tel" >

    <input type="submit" value="enviar" name="enviar">
</form>

<?php
if (isset($_GET['enviar'])){
    session_start();

    $nom=$_GET['name'];
    $tel=$_GET['tel'];
    //Es un array multidimesnional 
    $_SESSION['agenda'][]=array("nombre"=>$nom, "telefono"=>$tel);
   
    
    if(isset($_SESSION['agenda']) && count($_SESSION['agenda']) > 0){
        echo '<fieldset class="campo">';
        echo '<legend>Datos Agenda</legend>';
        foreach($_SESSION['agenda'] as $contacto){
           echo '<p>'. $contacto['nombre'] ."&nbsp;&nbsp" . "<span>". $contacto['telefono'] ."</span>". '</p>';
       }


       /*
       Manera de complicarse con clave y valor
       
if (isset($_SESSION['agenda']) && is_array($_SESSION['agenda'])) {
    foreach ($_SESSION['agenda'] as $contacto) {
        foreach ($contacto as $clave => $valor) {
            echo "Clave: " . $clave . ", Valor: " . $valor . "<br>";
        }
        echo "<br>"; // Separador entre contactos
    }
*/

     
        echo '</fieldset>';
    }
    

}


?>
    
</body>
</html>