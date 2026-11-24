<?php 

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

function nuevoEmpleado($dbh, $empleadoNuevo){
    $stmt=$dbh->prepare("INSERT INTO empleados (DNI, nombre, apellidos, edad, fecha, sexo, email, curriculum)
                        VALUES (:dni, :nombre, :apellidos, :edad, :fecha, :sexo, :email, :curriculum);");
    $stmt->execute($empleadoNuevo);
    
    
}

function buscarTodosEmpleados($dbh){
    $stmt=$dbh->prepare("SELECT * FROM empleados;");
    $stmt->execute();
    $bucarTodosEmpleados=$stmt->fetchAll();
    return $bucarTodosEmpleados;
}

?>