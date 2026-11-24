<?php require("layoat/head.php");?>

<h1>Ejercicio 3</h1>

<h2>Listado de empleados</h2>



      
    
<!--usuario mete datos -->
<form action="index.php" method="GET">
    <h2>A&ntilde;adir nuevo empleado</h2>
    <p>
        <label for="nombreEmpleadoNuevo"><h3>Nombre: </h3></label>
        <input type="text" id="nombreEmpleadoNuevo" name="nombreEmpleadoNuevo" required>
    </p>
    <p>
        <label for="apellidosEmpleadoNuevo"><h3>Apellidos: </h3></label>
        <input type="text" id="apellidosEmpleadoNuevo" name="apellidosEmpleadoNuevo" required>
    </p>
    <p>
        <label for="edadEmpleadoNuevo"><h3>Edad: </h3></label>
        <input type="text" id="edadEmpleadoNuevo" name="edadEmpleadoNuevo" required>
    </p>
    <p>
        <label for="fechaNacimientoEmpleadoNuevo"><h3>Fecha de Nacimiento: </h3></label>
        <input type="text" id="fechaNacimientoEmpleadoNuevo" name="fechaNacimientoEmpleadoNuevo" required>
    </p>
    <p>
        <label for="emailEmpleadoNuevo"><h3>Email: </h3></label>
        <input type="text" id="emailEmpleadoNuevo" name="emailEmpleadoNuevo" required>
    </p>
    <p>
        <label for="dniEmpleadoNuevo"><h3>DNI: </h3></label>
        <input type="text" id="dniEmpleadoNuevo" name="dniEmpleadoNuevo" required>
    </p>
    <p>
        <label for="sexoEmpleadoNuevo"><h3>Sexo: </h3></label>
        <input type="radio" value="Mujer" name="sexoEmpleadoNuevo" required>Mujer</input>
        <input type="radio" value="Hombre" name="sexoEmpleadoNuevo" required>Hombre</input>
    </p>
    <p>
        <label for="cvEmpleadoNuevo"><h3>Curriculum: </h3></label>
        <input type="text" id="cvEmpleadoNuevo" name="cvEmpleadoNuevo" required>
    </p>
        
    <p>
        <input type="submit" id="accion" name="accion" value="Enviar">
    </p>
</form>
<a href="../index.php?accion=vaciar">Vaciar Lista</a>



<?php if(count($empleados)>0):?>
<table >
    <tr >
        <td>DNI</td>
        <td>Nombre</td>
        <td>Apellidos</td>
        <td>Opciones</td>
    </tr>
    <?php foreach($empleados as $s): ?>
        <tr>
            <td><?=$s["DNI"]?></td>
            <td><?=$s["nombre"]?></td>
            <td><?=$s["apellidos"]?></td>
            <td><a href="../index.php?accion=detalles&dni=<?=$s["DNI"]?>">Ver detalles</a> | <a href="../index.php?accion=eliminar&dni=<?=$s["DNI"]?>">Eliminar</a></td>
        </tr>
    <?php endforeach;?>
</table>
<?php else: ?>
    <h3>No hay ningun empleado en la lista.</h3>
<?php endif;?>