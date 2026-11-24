<?php 
require "bd.php";
$dbh=connect("localhost", "ejercicio2", "root", "");

$todosEmpleados=array();
$todosEmpleados=buscarTodosEmpleados($dbh);

if(isset($_GET["accion"])){
    buscarAccion($dbh);
}



function buscarAccion($dbh){
    switch($_GET["accion"]){
        case "Enviar":
            enviarEmpleado($dbh);
            break;
        case "eliminar":
            break;
        case "vaciar":
            break;
        case "detalles":
            die();
        case "filtrar":
            break;    
    }
}

function enviarEmpleado($dbh){
    $empleadoNuevo=array("nombre"=>$_GET["nombreEmpleadoNuevo"]?? null,
    "apellidos"=>$_GET["apellidosEmpleadoNuevo"]?? null,
    "edad"=>$_GET["edadEmpleadoNuevo"]?? null,
    "fecha"=>$_GET["fechaNacimientoEmpleadoNuevo"]?? null,
    "email"=>$_GET["emailEmpleadoNuevo"]?? null,
    "dni"=>$_GET["dniEmpleadoNuevo"]?? null,
    "sexo"=>$_GET["sexoEmpleadoNuevo"]?? null,
    "curriculum"=>$_GET["cvEmpleadoNuevo"]?? null );
    nuevoEmpleado($dbh, $empleadoNuevo);
}

require "views/indexview.php";
?>