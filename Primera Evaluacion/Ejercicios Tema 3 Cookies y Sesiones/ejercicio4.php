<?php
session_start();
$_GET["usuarioNuevo"]?? null;
$_GET["accion"]?? null;

function realizarAccion(){
    if(isset($_GET["accion"])){
    $accion=$_GET["accion"];
    if($accion=="Añadir"){
        if(isset($_GET["usuarioNuevo"])){
            $usuario=$_GET["usuarioNuevo"];
            cargarLista();
            array_push($_SESSION["lista"],$usuario);
        }
    }else{
        unset($_SESSION["lista"]);
    }
}
}
function cargarLista(): array {
    if(!isset($_SESSION["lista"])){
        $_SESSION["lista"]=array();
    }
    return $_SESSION["lista"];
}

if(isset($_GET["accion"])) {
    $accion = $_GET["accion"];
    realizarAccion();
}
$usuarios = cargarLista();

require "ejercicio4.vista.php";
?>