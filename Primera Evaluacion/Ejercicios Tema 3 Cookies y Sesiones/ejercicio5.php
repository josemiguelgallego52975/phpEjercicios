<?php
$_GET["usuario"]?? null;
$_GET["contrasena"] ?? null;

$todosUsuarios = array(
    "user1" => array(
        "nombre" => 'Jose',
        "apellidos" => 'Claveria',
        "password" => '123Abc'
    ),
    "user2" => array(
        "nombre" => 'Ibai',
        "apellidos" => 'Payo',
        "password" => '123ABc'
    )
);








require "ejercicio5.vista.php";
?>