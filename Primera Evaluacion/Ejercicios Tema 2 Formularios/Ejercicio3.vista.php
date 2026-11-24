<!DOCTYPE html>
<html lang="en">
<body>
    <h2>Ejercicio 3<h2>

    <!--cuando el usuario resuelva -->
    <?php if(isset($confirmacion)): ?>
        <p>
            <b> <?= $confirmacion ?> </b>
        </p>
    <?php endif; ?>
    
    <!--usuario mete datos -->
    <form action="Ejercicio3.php" method="POST">
        <p>
            <label for="asunto">Asunto:</label>
            <input type="text" id="asunto" name="asunto" required>
        </p>
        <p>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
        </p>
        <p>
            <label for="motivo">Motivo: </label>
            <select id="motivo" name="motivo" required>
                <option value="soporteTecnico">Soporte tecnico</option>
                <option value="informacionDeProductos">Información de productos</option>
                <option value="queja">Queja</option>
                <option value="otro">Otro</option>
            </select>
        </p>
        <p>
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" required></textarea>
        </p>
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>

<body>
<html>