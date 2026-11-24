<?php
require __DIR__ . '/vendor/autoload.php';

use SebastianBergmann\Timer\Timer;

$time= new Timer;

$time->start();

for($x=0; $x<=100000; $x++){
    $i=random_int(1,100000);
    echo "<p>". $i. "</p>";
}
$duracion=$time->stop();
echo "<p>Los 100000 numero aleatorios an tardado ". $duracion->asSeconds() . "</p>";




?>