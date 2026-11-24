<?php


if (isset($_GET["nombre"])){
    setcookie("usuario", $_GET["nombre"]);
}

    $nombre=$_COOKIE["usuario"]?? null;

require "ejercicio1.vista.php";
?>