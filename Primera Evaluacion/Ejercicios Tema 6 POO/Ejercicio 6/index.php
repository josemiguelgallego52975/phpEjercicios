<?php
$divisor=$_GET["divisor"]?? null; 
$dividendo=$_GET["dividendo"]?? null;
$accion=$_GET["accion"]?? null;
$resultado;

try{
    switch($accion){
        case "enviar":
            $resultado=division($divisor, $dividendo);
            break;
    }
}catch(Exception $e){
    $e->getMessage();
}

function division($divisor, $dividendo){

    if($divisor==0){
        throw new Exception("No se puede dividir un numero entre 0.");
    }else{
    $resultado=$dividendo/$divisor;
    return $resultado;
    }
}

require "view.php";
?>