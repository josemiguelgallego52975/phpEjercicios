<?php
require "vendor/autoload.php";
use eftec\bladeone\BladeOne ;
use Zapatilla\ZapatillaModel;
$blade = new BladeOne();


$zapatillas= new ZapatillaModel("Adidas", "F50", "Futbol 11", "250");
echo $blade-run("index",[
    "zapatillas" => $zapatillas
]);
?>