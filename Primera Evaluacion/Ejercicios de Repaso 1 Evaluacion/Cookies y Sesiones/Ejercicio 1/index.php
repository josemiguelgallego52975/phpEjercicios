<?php

$usuarioCookie;
if(isset($_GET["nombre"])){
    setcookie("usuario",$_GET["nombre"]);
    $usuarioCookie=$_COOKIE["usuario"];
}
require "vista.php";
?>