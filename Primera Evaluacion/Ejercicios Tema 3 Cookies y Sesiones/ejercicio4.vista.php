<!DOCTYPE html>
<html lang="en">
<body>
    <h1>Ejercicio 4<h1>
    <h2>Lista de asistentes</h2>
    <!--scuando el usuario convierta -->
    <?php if(count($usuarios)>0):?>
        <p>
            <ul>
                <?php foreach ($usuarios as $user): ?>
                    <li><b><?= $user ?></b></li>
                <?php endforeach; ?>
            </ul>
        </p>
    <?php else:?>
        <p>
            <b>No hay ningun usuario.</b>
        </p>
    <?php endif;?>    
    
    <!--usuario mete datos -->
    <form action="ejercicio4.php" method="GET">
        <p>
            <label for="usuarioNuevo"><h3>A&ntilde;adir asistente</h3></label>
            <input type="text" id="usuarioNuevo" name="usuarioNuevo">
            <input type="submit" value="Añadir" id="accion" name="accion">
        </p>
        <a href="ejercicio4.php?accion=limpiar">Limpiar lista</a>
    </form>

<body>
<html>