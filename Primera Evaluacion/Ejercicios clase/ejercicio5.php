<!DOCTYPE html>
<hmtl>
    <body>
        <?php
        $a =$_GET["a"];
        $b=$_GET["b"];

        $resta= $a+$b;
        echo "Resta: $resta ";
        $division = $a/$b;
        echo "Division: $division";
        $mayor=$a>$b;
        echo "A mayor que b?:";
        var_export($mayor);
        $menor=$a<=$b;
        echo "A menor o igual que b?: ";
        var_export($menor);







        ?>

        

    </body>
</html>