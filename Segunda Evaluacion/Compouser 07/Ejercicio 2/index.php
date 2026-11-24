<?php
require "Model/PacienteModel.php";
require "Vista/index.view.php";


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