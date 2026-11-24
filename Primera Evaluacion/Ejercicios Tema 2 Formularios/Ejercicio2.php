<?php

$n1 = $_GET["n1"] ?? null;
$n2 = $_GET["n2"] ?? null;
$operacion = $_GET["operacion"] ?? null;

function calculo(float $n1, float $n2, string $operacion){
    switch($operacion){
        case "suma":
            $resultado = $n1 + $n2;
        return $resultado;

        case "resta":
            $resultado = $n1 - $n2;
        return $resultado;

        case "multiplicacion":
            $resultado = $n1 * $n2;
        return $resultado;

        case "division":
            if ($n2 == 0){
                $resultado = "no se puede dividir entre 0";
                return $resultado;
            }else{
                $resultado = $n1 / $n2;
                return $resultado;
            }

        default:
            echo "ha ocurrido un error";
    }
}


if(isset($_GET["n1"], $_GET["n2"], $_GET["operacion"])) {
    $resultado = calculo($n1, $n2, $operacion);
}


require 'Ejercicio2.vista.php';

?>