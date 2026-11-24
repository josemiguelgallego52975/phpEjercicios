<!DOCTYPE html>
<hmtl>
    <body>
        <?php
        $nombre ="Mikel";
        $edad = 22;

        echo $nombre;
        echo "<br>";
        echo $edad;
        ?>

        <?php

        echo "<p>Mi amigo $nombre tiene $edad años</p>";
        echo "Hola, mi nombre es {$nombre} y tengo {$edad} años";
        echo "Hola, mi nombre es ". $nombre ." y tengo ". $edad." años";

        

    </body>
</html>