<!DOCTYPE html>
<hmtl>
    <body>
        <?php

        $a =$_GET["a"];
        $b =$_GET["b"];
        $resultado;

        echo "Es el numero a mayor que el b? ";
        echo "".mayor($a,$b);

        function mayor($a, $b){
            $resultado=$a>$b;
            return var_export($resultado);
        }
        ?>
    </body>
</html>