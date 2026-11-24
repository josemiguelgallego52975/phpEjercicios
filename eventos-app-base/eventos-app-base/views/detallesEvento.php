<body>
    <h1><?=$eventoDetalle->titulo?></h1>
      <table>
        
        <?php if(isset($eventoDetalle)):?>


        <tr>
            <td><b>T&iacute;tulo</b></td>
            <td><?=$eventoDetalle->titulo?></td>
        </tr>
        <tr>
            <td><b>Categor&iacute;a</b></td>
            <td><?=$eventoDetalle->categoria?></td>
        </tr>
        <tr>
            <td><b>Descripci&oacute;n</b></td>
            <td><?=$eventoDetalle->descripcion?></td>
        </tr>
        <tr>
            <td><b>Fecha</b></td>
            <td><?=$eventoDetalle->fecha?></td>
        </tr>
        <tr>
            <td><b>N&uacute;mero de plazas</b></td>
            <td><?=$eventoDetalle->plazas_totales?></td>
        </tr>
        <tr>
            <td><b>Estado</b></td>
            <td><?=$eventoDetalle->estado?></td>
        </tr>   
        <?php endif; ?>
        
      </table>
</body>
<?php require ("layoat/footer.php");?>