<!DOCTYPE html>
<html lang="en">
<body>
    <h2>Ejercicio 1<h2>

    <!--scuando el usuario convierta -->
    <?php if(isset($usuarioCookie)):?>
        <p>Usuario Amacenado: <?= $usuarioCookie?></p>
    <?php else:?>
        <p>No hay ning&uacute;n usuario almacenado.</p>
    <?php endif;?>        
    
    <!--usuario mete datos -->
    <form action="index.php" method="GET">
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