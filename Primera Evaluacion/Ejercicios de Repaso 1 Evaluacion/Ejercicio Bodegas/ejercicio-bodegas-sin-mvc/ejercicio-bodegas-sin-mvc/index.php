<?php
require_once "db_functions.php";
$bodegas = getBodegas();
$accion = $_GET["accion"]??null;

switch($accion){
    case "bodega_nueva":
        require "views/bodega_nueva.view.php";
        die();
        break;
    case "bodega_insertar":
        añadirBodega($_POST);
        break;
}


require "views/index.view.php";
?>