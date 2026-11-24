<!DOCTYPE html>
<hmtl>
    <body>
        <?php

        $array=array('Paris', 'Berlin', 'Amsterdam' , 'Praga');
        $b =$_GET["b"];

        echo "{$array[$b]}.";

        echo "<br>";
        echo "Seleciona un valor para cambiarlo por otro:
        0. {$array[0]}, 1. {$array[1]}, 2. {$array[2]} y 3. {$array[3]}.";
        $valor=$_GET["valor"];
        $posicion=$_GET["posicion"];
        echo cambiarValor($posicion,$valor,$array);
        function cambiarValor($posicion,$valor,$array){
            $array[$posicion]=$valor;
            echo"<br>";
            echo "El nuevo array:
            0. {$array[0]}, 1. {$array[1]}, 2. {$array[2]} y 3. {$array[3]}.";
        }

        

        
        ?>
    </body>
</html>