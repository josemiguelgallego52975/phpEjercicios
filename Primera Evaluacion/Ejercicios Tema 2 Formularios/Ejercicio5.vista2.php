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
                
            </tr>

            
    </ul>

    <p>
        <input type="submit" value="Enviar" >
    </p>

</form>
    

<body>
<html>