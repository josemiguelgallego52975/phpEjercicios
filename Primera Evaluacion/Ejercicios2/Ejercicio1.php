<?php

$temperatura = $_GET["temperatura"] ?? null;
$unidad = $_GET["unidad"] ?? null;

function conversion(float $temperatura, string $unidad){
    if($unidad == "celsius"){
        $resultado = 1.8 * $temperatura + 32;
    }else{
        $resultado = ($temperatura - 32) / 1.8;
    }
    return $resultado;
}

if(isset($_GET["temperatura"], $_GET["unidad"])) {
    $resultado = conversion($temperatura, $unidad);
}


require 'Ejercicio1.vista.php';

?>