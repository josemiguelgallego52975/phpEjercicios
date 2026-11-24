<?php require ("layoat/header.php"); ?>

<body>
      <h1>Listado de eventos</h1>
      <a href="index.php?accion=irCrear">Nuevo Evento</a></td>
      <table>
        <tr>
            <td><b>T&iacute;tulo</b></td>
            <td><b>Categor&iacute;a</b></td>
            <td><b>Estado</b></td>
            <td><b>Opciones</b></td>
        </tr>
        <?php if(count($eventos)>0):
            foreach($eventos as $e):?>
        <tr>
            <td><?=$e->titulo ?></td>
            <td><?=$e->categoria ?></td>
            <td><?=$e->estado ?></td>
            <td><a href="index.php?accion=verMas&id=<?=$e->id ?>">Ver mas</a>
            <a href="index.php?accion=eliminar&id=<?=$e->id ?>">Eliminar</a>
            <a href="index.php?accion=cerrarEvento&id=<?=$e->id ?>">Cerrar Evento</a></td>
        </tr>   
        <?php endforeach; endif;?>

        
        
      </table>
</body>
<?php require ("layoat/footer.php");?>