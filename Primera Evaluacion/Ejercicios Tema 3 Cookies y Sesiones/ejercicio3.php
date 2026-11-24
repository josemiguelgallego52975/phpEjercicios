<?php

if(isset($_GET["idioma"])){
    setcookie("cookie",$_GET["idioma"], time() + 60);
    
}

$idioma=$_COOKIE["cookie"]?? null;

require "ejercicio3.vista.php";
?>