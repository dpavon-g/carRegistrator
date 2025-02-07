<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Coches</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div>
            <h1><a href="/coches">Concesionario Pavón</a></h1>
        </div>
    </header>
    <main>
        <div>
            <h1>Buscar Coches</h1>
        </div>
        <div>
            <form action="{{ route('buscarCochesByMatricula') }}" method="POST">
                @csrf
                @method('POST')
                <input type="text" placeholder="Matricula" name="matricula" required>
                <input type="submit" value="Buscar coche">
            </form>
        </div>
        <div>
            @if(isset($coche))
                <h2>{{ $coche->marca }} - {{ $coche->modelo }}</h2>
                <p>Matricula: {{ $coche->matricula }}</p>
                <p>Dueño: {{ $coche->owner }}</p>
            @endif
        </div>
        <div>
            <a href="{{ route('index') }}">Volver a coches</a>
        </div>
    </main>
</body>
</html>