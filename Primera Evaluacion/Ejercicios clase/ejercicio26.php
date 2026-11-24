<!DOCTYPE html>
<html>
<body>
    <?php
    $coches = array(
        "Audi", "Seat", "Mercedes", "Volkswagen", "BMW", "Fiat"
    );
    $x=0;

    do{
        echo "<li>" . $coches[$x] . "</li>";
        $x++;
    }while($x < count($coches));
    ?>
</body>
</html>