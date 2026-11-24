<!DOCTYPE html>
<html lang="en">
<body>
    <h1>Ejercicio 1<h1>

    <h2>Lista de la compra</h2>

    <!--scuando el usuario convierta -->
    <?php if(count($elementos)>0):?>
        <ul>
            <?php foreach($elementos as $elemento):?>
            <li><?= $elemento["nombre"]; ?> (<a href="ejercicio1.php?accion=eliminar&id=<?=$elemento["id"]?>">Eliminar</a>)</li>
            <?php endforeach;
            ?>
        </ul>
    <?php else:?>
        <p>
            <b>No hay que hacer compra.</b>
        </p>
    <?php endif;?>    
    
    <!--usuario mete datos -->
    <form action="ejercicio1.php" method="GET">
        <p>
            <label for="nombreArticulo"><h3>A&ntilde;adir elemento</h3></label>
            <input type="text" id="nombreArticulo" name="nombreArticulo" required>
        </p>
        <p>
            <input type="submit" id="accion" name="accion" value="Enviar">
        </p>
    </form>
    <a href="ejercicio1.php?accion=vaciar">Vaciar Lista</a>

<body>
<html>