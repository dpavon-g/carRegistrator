<!-- resources/views/coche.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Coche</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div>
        <h1>Detalles del Coche</h1>
    </div>
    <div>
        <p>Marca: {{ $coche->marca }}</p>
        <p>Modelo: {{ $coche->modelo }}</p>
        <p>Matricula: {{ $coche->matricula }}</p>
        <p>Dueño: {{ $coche->owner }}</p>
    </div>
    <div>
        <a href="{{ route('index') }}">Volver</a>
    </div>
    <form method="POST" action="{{ route('deleteCoche', ['id' => $coche->id]) }}">
        @csrf
        @method('DELETE')
        <input type="submit" value="Borrar">
    </form>
</body>
</html>