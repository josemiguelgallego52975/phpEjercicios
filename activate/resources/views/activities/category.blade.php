<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities Categoria</title>
</head>
<body>
    <a href="{{url('/activities')}}">Volver al incio</a>
    <h1>CATEGORIA: {{$categoria}}</h1>
    @foreach ($activities as $a)
    @if($a["category"]===$categoria)
    <h3><a href="{{ url('/activities/' . $a['id']) }}">{{ $a['id'] }} - {{ $a['title'] }}</a></h3>
    <ul>
        <li>Categoria: {{$a["category"]}}</li>
        <li>Localizacion: {{$a["location"]}}</li>
        <li>Fecha: {{$a["starts_at"]}}</li>
        <li>Capacidad: {{$a["capacity"]}}</li>
    </ul>
    @endif
    @endforeach
</body>
</html>