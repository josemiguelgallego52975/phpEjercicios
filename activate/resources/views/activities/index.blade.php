<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities Index</title>
</head>
<body>
    <h1>Pr&oacute;ximas actividades</h1>
    @foreach ($activities as $a)
    <h3><a href="{{ url('/activities/' . $a['id']) }}">{{ $a['id'] }} - {{ $a['title'] }}</a></h3>    <ul>
        <li>Categoria: <a href="{{ url('/activities/categoria/' . $a['category']) }}">{{$a["category"]}}</a></li>
        <li>Localizacion: {{$a["location"]}}</li>
        <li>Fecha: {{$a["starts_at"]}}</li>
        <li>Capacidad: {{$a["capacity"]}}</li>
    </ul>
    @endforeach
</body>
</html>