<?php

$usuario = $_GET["usuario"] ?? null;
$contrasena = $_GET["contrasena"] ?? null;

$usuarios = array(
 "user1" => array (
    "nombre" => "Ane",
    "apellidos" => "López",
    "password" => "123Abc"
 ),
 "user2" => array (
    "nombre" => "Amaia",
    "apellidos" => "Otsoa",
    "password" => "456Xyz"
 )
);



function comprovacion($usuarios, string $usuario, string $contrasena){
    if(array_key_exists($usuario, $usuarios)){
        if($usuarios[$usuario]["password"] == $contrasena){
            return "Sesion iniciada correctamente, bienvenido/a " . $usuarios[$usuario]["nombre"] . " " . $usuarios[$usuario]["apellidos"];
        }else{
            return "Contraseña incorrecta";
        }
    }else{
        return "Usuario no encontrado";
    }

}


if(isset($_GET["usuario"], $_GET["contrasena"])) {
    $informe = comprovacion($usuarios, $usuario, $contrasena);
}


require 'Ejercicio4.vista.php';

?>