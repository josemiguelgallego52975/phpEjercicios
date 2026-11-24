<DOCTYPE/>
<html>
<header>
    <title>Examen PHP</title>
</header>
<body>
    <?php if(!$idiomaSeleccionado=="euskera"):?>
        <h1>Eventos</h1>
    <?php else:?>
        <h1>Ekitaldiak</h1>
    <?php endif;?>
    <form action="" method="GET">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" >
        <label for="contrasenna">Contrse&ntilde;a:</label>
        <input type="text" id="contrasenna" name="contrasenna" >
        <input type="submit" name="iniciarSesion" value="Iniciar sesion" >
    </form>
</body>


