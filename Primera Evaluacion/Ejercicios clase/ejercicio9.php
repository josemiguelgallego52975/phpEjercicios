<!DOCTYPE html>
<hmtl>
    <body>
        <?php

        $a =$_GET["a"];
        $b =$_GET["b"];

        
        

        function concatenar($a, $b){
            
            return $a . " " . $b;
        }

        echo concatenar($a,$b);
        ?>
    </body>
</html>