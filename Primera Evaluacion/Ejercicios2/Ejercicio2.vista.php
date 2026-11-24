<!DOCTYPE html>
<html lang="en">
<body>
    <h2>Ejercicio 2<h2>

    <!--cuando el usuario resuelva -->
    <?php if(isset($resultado)): ?>
        <p>
            <b>Ultimo resultado (<?= $n1 ?> <?= $operacion ?> <?= $n2 ?>): <?= $resultado ?> </b>
        </p>
    <?php endif; ?>
    
    <!--usuario mete datos -->
    <form action="Ejercicio2.php" method="GET">
        <p>
            <label for="n1">Primer numero:</label>
            <input type="number" id="n1" name="n1" required>
        </p>
        <p>
            <label for="n2">Segundo numero:</label>
            <input type="number" id="n2" name="n2" required>
        </p>
        <p>
            <label for="operacion">Seleccione la operacion deseada: </label>
            <select id="operacion" name="operacion" required>
                <option value="suma">suma</option>
                <option value="resta">resta</option>
                <option value="multiplicacion">multiplicacion</option>
                <option value="division">division</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>

<body>
<html>