<!DOCTYPE html>
<hmtl>
    <body>
        <?php

        $arrayAnimales=array('Perro', 'Gato', 'Leon' , 'Lobo');
        $arrayColor=array('Blanco', 'Negro', 'Rojo' , 'Negro');
        

        echo "Array de Animales: ";
        echo count($arrayAnimales);
        echo "<br> Array de colores: ";
        echo count($arrayColor);

        function anadirAlFinal($arrayAnimales, $elemento) {
            array_push($arrayAnimales, $elemento);
            return $arrayAnimales;
        }

        function anadirAlPrincipio($arrayColor, $elemento) {
            array_unshift($arrayColor, $elemento);
            return $arrayColor;
        }

        $arrayAnimales=anadirAlFinal($arrayAnimales, 'Tigre');
        $arrayColor=anadirAlPrincipio($arrayColor, 'Verde');

        $combinado = array_merge($arrayAnimales, $arrayColor);

        echo "<br>";
        print_r($arrayAnimales);
        echo "<br>";
        print_r($arrayColor);
        echo "<br>";
        print_r($combinado);
        ?>
    </body>
</html>