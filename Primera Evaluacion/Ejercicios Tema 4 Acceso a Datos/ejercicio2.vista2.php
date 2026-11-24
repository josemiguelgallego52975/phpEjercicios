<!DOCTYPE html>
<html lang="en">
<body>
    <h1>Ejercicio 2 Vista 2<h1>

    <h2>Detalles de Empleado</h2>

    
    <table >
        <?php foreach($empleadoBuscar as $s): ?>
            <tr>
                <td>DNI</td>
                <td><?=$s["DNI"]?></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><?=$s["nombre"]?></td>
            </tr>
            <tr>
                <td>Apellidos</td>
                <td><?=$s["apellidos"]?></td>
            </tr>
            <tr>
                <td>Sexo</td>
                <td><?=$s["sexo"]?></td>
           </tr>
            <tr>
                <td>Fecha de Nacimiento</td>
                <td><?=$s["fecha"]?></td>
            </tr>
            <tr>
                <td>Curriculum</td>
                <td><?=$s["curriculum"]?></td>
            </tr>
        <?php endforeach;?>
    </table>
    <p><a href="ejercicio2.php">Volver</a></p>

      
    
    


<body>
<html>