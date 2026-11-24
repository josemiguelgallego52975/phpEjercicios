<h1>Crear nuevo evento</h1>

<form action="index.php" method="GET">
    <label for="titulo">T&iacute;tulo</label>
    <input type="text" name="titulo" id="titulo">
    <label for="categoria">Categoria</label>
    <select name="categoria" id="categoria">
        <option value="conciertos">Conciertos</option>
        <option value="festivales">Festivales</option>
        <option value="excursiones">Excursiones</option>
    </select>
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" id="descripcion">
    <label for="fecha">Fecha</label>
    <input type="date" name="fecha" id="fecha">
    <label for="plazas">Plazas Totales</label>
    <input type="text" name="plazas" id="plazas">

    <input type="submit" value="crear" name="accion">

    

</form>