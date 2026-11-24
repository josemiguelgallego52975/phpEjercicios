<?php
require "database.php";

$idioma=$_GET["idioma"]?? null;
$idiomaSeleccionado;
$db_connection;
$eventos=array();
$eventoDetalle;
$accion=$_GET["accion"]?? null;
$id=$_GET["id"]?? null;
$titulo=$_GET["titulo"]?? null;
$categoria=$_GET["categoria"]?? null;
$descripcion=$_GET["descripcion"]?? null;
$fecha=$_GET["fecha"]?? null;
$plaza=$_GET["plazas"]?? null;

function crearCookie($idioma){
    setcookie("cookie", $idioma);
    return $_COOKIE["cookie"];
}

function cogerIdioma($idioma){
    $nuevoIdioma=$_COOKIE["cookie"];
    return $nuevoIdioma;
}

function buscarEventos(){
    $db_connection=getDbConnection();
    $stmt=$db_connection->prepare("SELECT * from eventos");
    $stmt->execute();
    return $stmt->fetchAll();
    
}

function buscarPorId($id){
    $db_connection=getDbConnection();
    $stmt=$db_connection->prepare("SELECT * from eventos WHERE id=:id");
    $data=array("id"=>$id);
    $stmt->execute($data);
    return $stmt->fetch();
}
    
function cerrarEvento($id){
    $db_connection=getDbConnection();
    $stmt=$db_connection->prepare("UPDATE estado from eventos where id=:id set estado=:estado; ");
    $data=array("id"=>$id, "estado"=>"cerrado");
    $stmt->execute($data);
}


function eliminarEvento($id){
    $db_connection=getDbConnection();
    $stmt=$db_connection->prepare("DELETE from eventos WHERE id=:id");
    $data=array("id"=>$id);
    $stmt->execute($data);
}

function crearEvento($titulo, $categoria, $descripcion, $fecha, $plaza){
    $db_connection=getDbConnection();
    $stmt=$db_connection->prepare("INSERT INTO  eventos (titulo, categoria, descripcion,
        fecha, plazas_totales) VALUES (:titulo, :categoria, :descripcion, :fecha, :plaza);");
    $data=array("titulo"=>$titulo,
    "categoria"=>$categoria,
    "descripcion"=>$descripcion,
    "fecha"=>$fecha,
    "plaza"=>$plaza);
    $stmt->execute($data);
}
    

?>