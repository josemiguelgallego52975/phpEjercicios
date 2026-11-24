<?php 
$dbname="ejemplo";
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

$stmt= $dbh->prepare("SELECT * from alumnos");

$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo $row['nombre'] . "--";
    echo $row['apellidos'] . "--";
    echo $row['edad'] . "<br>";
}
$data= array ("nombre"=>"Jose", "apellidos"=>"Claveria","email"=>"jose@gmail.com","edad"=>19);
$stmt= $dbh->prepare("INSERT INTO alumnos(nombre, apellidos, email, edad)
                        VALUES(:nombre, :apellidos, :email, :edad);");

$stmt->execute($data);

$data=array("nombre"=>"Jose");
$stmt= $dbh->prepare("SELECT * from alumnos WHERE nombre=:nombre");

$stmt->execute($data);

while($fila = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo $fila['nombre'] . "--";
    echo $fila['apellidos'] . "--";
    echo $fila['edad'] . "<br>";
}
?>