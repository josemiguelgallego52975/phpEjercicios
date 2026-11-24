<?php 
$dbname="ejercicio1";
$host="localhost";
$user="root";
$pass="";
function connect($host, $dbname, $user, $pass){
 try {
 # MySQL
 $dbh= new PDO(
 "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
 $user, $pass
 );
 $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 return $dbh;
 }
 catch(PDOException $e) {
 echo $e->getMessage();
 }
}
$dbh= connect($host, $dbname, $user, $pass);

$elementos= array();
$articulo=$_GET["nombreArticulo"]?? null;
$_GET["accion"]?? null;

$stmt=$dbh->query("SELECT nombre, id from compra;");
$elementos= $stmt->fetchAll();
if(isset($_GET["accion"])){
    buscarAccion($dbh, $articulo,$elementos);
}

function buscarAccion($dbh, $articulo,$elementos){
    switch($_GET["accion"]){
        case "Enviar":
            enviarProducto($dbh, $articulo);
            break;
        case "vaciar":
            vaciarLista($dbh,$elementos);
            break;
        case "eliminar":
            eliminarElemento($dbh);
            break;            
    }
}

function eliminarElemento($dbh){
    $elementoEliminar=$_GET["id"];
    $stmt=$dbh->prepare("DELETE from compra
                        WHERE id=:id;");
    $data=array("id"=>$elementoEliminar);
    $stmt->execute($data);
    
}

function enviarProducto($dbh, $articulo){
    $stmt=$dbh->prepare("INSERT INTO compra (nombre)
                        VALUES (:nombre);");
    $data=array("nombre"=>$articulo);
    $stmt->execute($data);
    
}

function vaciarLista($dbh, $elementos){
    foreach($elementos as $elementoEliminar){
        $stmt=$dbh->prepare("DELETE from compra
                        WHERE id=:id;");
        $data=array("id"=>$elementoEliminar["id"]);
        $stmt->execute($data);
    }
    
}

require "ejercicio1.vista.php";
?>