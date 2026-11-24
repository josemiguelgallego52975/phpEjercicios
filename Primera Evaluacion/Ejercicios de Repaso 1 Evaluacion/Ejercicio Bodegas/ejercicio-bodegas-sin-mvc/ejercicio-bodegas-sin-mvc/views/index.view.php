<?php require('layout/head.php')?>

<a href="index.php?accion=bodega_nueva" class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus"></i> Añadir Bodega</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nombre</th><th>Localización</th><th>Teléfono</th><th>Email</th><th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <!-- Generar el contenido de la tabla iterando por cada bodega -->
        <?php
        foreach($bodegas as $bodega){?>
        <tr>
        <td><?= $bodega -> nombre?></td>
        <td><?= $bodega -> direccion?></td>
        <td><?= $bodega -> telefono?></td>
        <td><?= $bodega -> email?></td>
        <td><a href="http://localhost/repaso/Soluciones_04_acceso_datos/ejercicio-bodegas-sin-mvc/index.php?accion=entrar"><input type="submit" name="entrar" value="entar"></a><a href="http://localhost/repaso/Soluciones_04_acceso_datos/ejercicio-bodegas-sin-mvc/index.php?accion=borrar&id=<?= $bodega->id ?>"><input type="submit" name="borrar" value="borrar"></a></td>
       </tr>   
       <?php 
                
        }
        ?>

        <?php
        ?>
    <?php if (empty($bodegas)) : ?>
        <tr><td colspan="5" class="text-center text-muted">No hay bodegas registradas</td></tr>
    <?php endif; ?>
    </tbody>
</table>

<?php require('layout/footer.php') ?>
