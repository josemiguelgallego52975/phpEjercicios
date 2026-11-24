<?php

$asunto = $_POST["asunto"] ?? null;
$email = $_POST["email"] ?? null;
$motivo = $_POST["motivo"] ?? null;
$mensaje = $_POST["mensaje"] ?? null;


if (!empty($asunto) && !empty($email) && !empty($motivo) && !empty($mensaje)) {
    $confirmacion = "Comentario enviado correctamente";
} else {
    $confirmacion = "Error al enviar el comentario";
}


require 'Ejercicio3.vista.php';

?>