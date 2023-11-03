<?php

echo "<hr>";

//Recorrer un array normal
echo "<h1>Recorrer un array normal</h1>";
$prod=["uno",2,"tres",4,"cinco"];

foreach($prod as $valor) {

    echo $valor."</br>";
}
echo "<hr>";

//Recorrer un array asociativo
echo "<h1>Recorrer un array asociativo</h1>";

$prod=["uno"=>1," dos"=>2," tres"=>3];

foreach($prod as $clave=>$valor){
    echo $clave. " = ". $valor;
}



//Recorrer un array multidimensional
echo "<h1>Recorrer un array multidimensional</h1>";
$prod = [
    "Numero1" => ["nombre" => "Elver", "apellidos" => "galarga", "edad" => 32],
    "Numero2" => ["nombre" => "El", "apellidos" => "Vagina", "edad" => 21],
    "Numero3" => ["nombre" => "Tu", "apellidos" => "vieja", "edad" => 11],
    "Numero4" => ["nombre" => "Nelson", "apellidos" => "Mandela", "edad" => 45]
];

foreach ($prod as $key => $value) {
    echo  $key . ", ";
    foreach ($value as $clave => $valor) {
        echo $clave . " = " . $valor . ", ";
    }
    echo "<br/>";
}

