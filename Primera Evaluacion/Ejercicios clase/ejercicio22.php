<!DOCTYPE html>
<html>
<body>
    <?php

    $pais=array[“Brasil”, “Portugal”, “Islandia”, “Mexico”, “Filipinas”, “Marruecos”]

    $dia =$_GET["dia"];

    function dias($dia){
        switch ($dia){
            case 1:
                echo "Tu dia es el lunes";
                break;
            case 2:
                echo "Tu dia es el martes";
                break;
            case 3:
                echo "Tu dia es el miercoles";
                break;
            case 4:
                echo "Tu dia es el jueves";
                break;
            case 5:
                echo "Tu dia es el viernes";
                break;
            case 6:
                echo "Tu dia es el sabado";
                break;
            case 7:
                echo "Tu dia es el domingo";
                break;
            default:
                echo "Tu dia es incorrecto";    
        }
    }

    echo dias($dia);
    ?>
</body>
</html>