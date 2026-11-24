<!DOCTYPE html>
<html lang="en">
<body>
    <h2>Ejercicio 1<h2>

    <!--scuando el usuario convierta -->
    <?php if(isset($idioma)): ?>
        <p>
            <b>Idioma: <?= $idioma ?> </b>
        </p>
    <?php else:?>
        <p>
            <b>No hay ningun idioma.</b>
        </p>
    <?php endif;?>    
    
    <!--usuario mete datos -->
    <form action="ejercicio3.php" method="GET">
        <p>
            <label for="idioma">Motivo: </label>
            <select id="idioma" name="idioma" required>
                <option value="Euskera">Euskera</option>
                <option value="Castellano">Castellano</option>
                <option value="Calo">Calo</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>

<body>
<html>