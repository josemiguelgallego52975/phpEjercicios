<!DOCTYPE html>
<hmtl>
    <body>
        <?php

        $a =$_GET["a"];
        $b =$_GET["b"];
        $resultado;

        function multiplicar($a, $b){
            $resultado = $a*$b;  
            return $resultado;    
        }


        
        echo "El resultado es :" .multiplicar($a,$b);

        ?>
    </body>
</html>
