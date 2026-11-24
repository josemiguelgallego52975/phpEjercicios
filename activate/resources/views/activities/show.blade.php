<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities Show</title>
</head>
<body>
<body>
        <div>
            <a href="{{url('/activities')}}">Volver</a>
            <h3>{{ $activities['title'] }}</h3>
            <ul>
                <li><strong>Categoría:</strong><a href="{{ url('/activities/categoria/' . $activities['category']) }}">{{$activities["category"]}}</a></li>
                <li><strong>Ubicación:</strong> {{ $activities['location'] }}</li>
                <li><strong>Inicio:</strong> {{ $activities['starts_at'] }}</li>
                <li><strong>Capacidad:</strong> {{ $activities['capacity'] }} personas</li>
            </ul>
        </div>
</body>
</html>