<!DOCTYPE html>
<html lang="en">
<body>
    <h2>Ejercicio 1<h2>

    <!--scuando el usuario convierta -->
    <?php if(isset($resultado)): ?>
        <p>
            <b>Resultado de la conversion (<?= $temperatura ?> <?= $unidad ?>): <?= $resultado ?> </b>
        </p>
    <?php endif; ?>
    
    <!--usuario mete datos -->
    <form action="Ejercicio1.php" method="GET">
        <p>
            <label for="temperatura">Introduce la temperatura:</label>
            <input type="number" id="temperatura" name="temperatura" required>
        </p>
        <p>
            <label for="unidad">Indica la unidad de la temperatuaintroducida: </label>
            <select id="unidad" name="unidad" required>
                <option value="celsius">celsius</option>
                <option value="farenheit">farenheit</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>

<body>
<html>