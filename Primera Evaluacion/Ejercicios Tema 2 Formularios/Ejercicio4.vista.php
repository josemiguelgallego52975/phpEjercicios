<!DOCTYPE html>
<html lang="en">
<body>
    <h2>Ejercicio 4<h2>

    <!--cuando el usuario resuelva -->
    <?php if(isset($informe)): ?>
        <p>
            <b> <?= $informe ?> </b>
        </p>
    <?php endif; ?>
    
    <!--usuario mete datos -->
    <form action="Ejercicio4.php" method="GET">
        <p>
            <label for="usuario">Nombre de usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
        </p>
        <p>
            <label for="contrasena">Contraseña:</label>
            <input type="text" id="contrasena" name="contrasena" required>
        </p>
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>

<body>
<html>