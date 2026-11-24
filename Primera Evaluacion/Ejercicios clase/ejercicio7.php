<!DOCTYPE html>
<hmtl>
    <body>
        <?php

        $a =$_GET["a"];
        $b =$_GET["b"];
        $resultado;

        function multiplicar($a, $b){
              
            return $a*$b;    
        }


        
        echo "El resultado es :" .multiplicar($a,$b);

        ?>
    </body>
</html>
