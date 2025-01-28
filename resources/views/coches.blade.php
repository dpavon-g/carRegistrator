<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div>
        <h1>Coches</h1>
    </div>
    <div>
        <ul>
            @foreach($coches as $coche)
                <li><a href="{{ route('coches', ['idMatricula' => $coche->id])  }}">{{ $coche->marca }} - {{ $coche->modelo }}</a></li>
            @endforeach
        </ul>
    </div>
</body>
</html>