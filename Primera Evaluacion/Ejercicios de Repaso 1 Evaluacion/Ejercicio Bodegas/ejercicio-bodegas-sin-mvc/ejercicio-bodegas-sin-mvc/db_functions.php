<?php
require_once "database.php";
function añadirBodega(array $datos){
    $dbh = getDbConnection();

    $stmt = $dbh ->prepare("INSERT INTO bodega (nombre,direccion,email,telefono,contacto,fundacion,descripcion,restaurante,hotel)
            VALUES (:nombre,:direccion,:email,:telefono,:contacto,:fundacion,:descripcion,:restaurante,:hotel)"); 
    $stmt ->execute($datos);
}

function getBodegas () {
    $dbh = getDbCOnnection();
    $stmt = $dbh -> prepare("SELECT * FROM bodega");
    $stmt -> execute();
    return $stmt-> fetchAll();
}
?>
