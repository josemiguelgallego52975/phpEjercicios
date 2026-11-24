<?php
require "funciones.php";

$idiomaSeleccionado;
if(!isset($_COOKIE["cookie"])){
    $idiomaSeleccionado=crearCookie($idioma);
}else{
    $idiomaSeleccionado=cogerIdioma($idioma);
}



if(isset($accion)){
    switch($accion){
        case "verMas":
            $eventoDetalle=buscarPorId($id);
            require "views/detallesEvento.php";
            die();
        case "eliminar":
            eliminarEvento($id);
            break;
        case "crear":
            crearEvento($titulo, $categoria, $descripcion, $fecha, $plaza);
            break;
        case "irCrear":
            require "views/crearEvento.php";
            die();
        case "cerrarEvento":
            cerrarEvento($id);
            break;     
        
    }
}



$eventos=buscarEventos();



require "views/index.view.php";
?>