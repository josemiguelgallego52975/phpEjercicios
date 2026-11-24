<?php
if (isset($_GET["nombre"])){
    setcookie("usuario", $_GET["nombre"]);
}

    $nombre=$_COOKIE["usuario"]?? null;

if(isset($_GET["borrar"])){
    setcookie("usuario", null, -1);
}    

require "ejercicio2.vista.php";
?>