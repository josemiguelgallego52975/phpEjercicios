<!DOCTYPE html>
<html lang="en">
<body>
    <h2>Ejercicio 1<h2>

    <!--scuando el usuario convierta -->
    <?php if(isset($nombre)): ?>
        <p>
            <b>El ultimo usuario almacenado es: <?= $nombre ?> </b>
        </p>
    <?php else:?>
        <p>
            <b>No hay ningun usuario almacenado.</b>
        </p>
    <?php endif;?>    
    
    <!--usuario mete datos -->
    <form action="ejercicio1.php" method="GET">
        <p>
            <label for="nombre">Introduce el nombre del usuario que quieres almacenar:</label>
            <input type="text" id="nombre" name="nombre" required>
        </p>
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>

<body>
<html>