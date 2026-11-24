<?php 
$dbname="ejercicio2";
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

$empleados= array();

$stmt=$dbh->query("SELECT nombre, DNI, apellidos, edad, sexo, fecha, email, curriculum from empleados;");
$empleados= $stmt->fetchAll();

$empleadoBuscar=array();

if(isset($_GET["accion"])){
    buscarAccion($dbh,$empleados, $empleadoBuscar);
}

function buscarAccion($dbh, $empleados, $empleadoBuscar){
    switch($_GET["accion"]){
        case "Enviar":
            enviarEmpleado($dbh);
            break;
        case "vaciar":
            vaciarLista($dbh,$empleados);
            break;
        case "eliminar":
            eliminarEmpleado($dbh);
            break;
        case "detalles":
            $empleadoBuscar = buscarEmpleado($dbh, $empleadoBuscar);
            require "ejercicio2.vista2.php";
            die();         
    }
}

function buscarEmpleado($dbh, $empleadoBuscar){
    $stmt=$dbh->prepare("SELECT nombre, DNI, apellidos, edad, sexo, fecha, email, curriculum from empleados WHERE DNI = :dni;");
    $data= array("dni" =>$_GET["dni"]?? null);
    $stmt->execute($data);
    $empleadoBuscar= $stmt->fetchAll();
    return $empleadoBuscar;
}

function eliminarEmpleado($dbh){
    $elementoEliminar=$_GET["dni"];
    $stmt=$dbh->prepare("DELETE from empleados
                        WHERE DNI=:dni;");
    $data=array("dni"=>$elementoEliminar);
    $stmt->execute($data);
    
}

function enviarEmpleado($dbh){
    $stmt=$dbh->prepare("INSERT INTO empleados (DNI, nombre, apellidos, edad, fecha, sexo, email, curriculum)
                        VALUES (:dni, :nombre, :apellidos, :edad, :fecha, :sexo, :email, :curriculum);");
    $data=array("nombre"=>$_GET["nombreEmpleadoNuevo"]?? null,
    "apellidos"=>$_GET["apellidosEmpleadoNuevo"]?? null,
    "edad"=>$_GET["edadEmpleadoNuevo"]?? null,
    "fecha"=>$_GET["fechaNacimientoEmpleadoNuevo"]?? null,
    "email"=>$_GET["emailEmpleadoNuevo"]?? null,
    "dni"=>$_GET["dniEmpleadoNuevo"]?? null,
    "sexo"=>$_GET["sexoEmpleadoNuevo"]?? null,
    "curriculum"=>$_GET["cvEmpleadoNuevo"]?? null );
    $stmt->execute($data);
    
}

function vaciarLista($dbh, $empleados){
    foreach($empleados as $empleadosEliminar){
        $stmt=$dbh->prepare("DELETE from empleados
                        WHERE DNI=:dni;");
        $data=array("dni"=>$empleadosEliminar["DNI"]);
        $stmt->execute($data);
    }
    
}

require "ejercicio2.vista1.php";
?>