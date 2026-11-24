<?php
require 'vendor/autoload.php';
require "Vista/index.view.php";

use Paciente\Model\PacienteModel;

$accion=$_GET["accion"]?? null;
$mensaje;

if(isset($accion)){
    switch($accion){
        case "curar":
            $mensaje=PacienteModel::curar();
            break;
        case "enfermar":
            $mensaje=PacienteModel::enfermar();
            break;    
    }
}

if(isset($mensaje)){
    echo $mensaje;
}









?>