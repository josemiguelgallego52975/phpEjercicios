<!DOCTYPE html>
<html lang="en">
<body>
    <h2>Ejercicio 5<h2>


    <?php if(isset($informe)): ?>
        <p>
            <b> <?= $informe ?> </b>
        </p>
    <?php endif; ?>

<form action="Ejercicio5.vista2.php" method="GET">
    <ul>
        <table border='1'>
            <tr><th colspan="4">CATÁLOGO DE PRODUCTOS</th></tr>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>

            <?php foreach($array as $value){ ?>
                <tr>
                    <td><?= $value['nombre'] ?></td>
                    <td><?= $value['descripcion'] ?></td>
                    <td><?= $value['precio'] ?></td>
                    <td>
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" id="cantidad" name="cantidad">
                    </td>
                </tr>
            <?php } ?> 
    </ul>

    <p>
        <input type="submit" value="Enviar" >
    </p>

</form>
    

<body>
<html>