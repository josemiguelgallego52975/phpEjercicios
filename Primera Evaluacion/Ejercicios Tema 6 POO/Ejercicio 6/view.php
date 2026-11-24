<html>
    <body>
        <form action="index.php" method="get">
            <h1>Division</h1>
            <p>
                <label for="dividendo">Dividendo: </label>
                <input type="number" name="dividendo" id="dividendo" required>
            </p>
            <p>
                <label for="divisor">Divisor: </label>
                <input type="number" name="divisor" id="divisor" required>
            </p>
            <p><input type="submit" name="accion" value="enviar"></p>
        </form>

        <?php if(isset($resultado)):?>
            <h1>El resultado de la division es: <?=$resultado?></h1>
        <?php endif;?>    
    </body>
</html>