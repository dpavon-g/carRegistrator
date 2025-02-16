<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Filtrar coches</title>
</head>
<body>
    <header>
        <div>
            <h1><a href="/coches">Concesionario Pavón</a></h1>
        </div>
    </header>
    <main>
        <div>
            <form action="{{ route('buscarCochesConFiltro') }}" method="POST">
                @csrf
                @method('POST')
                <input type="text" placeholder="Marca" name="marca">
                <input type="text" placeholder="Modelo" name="modelo">
                <input type="submit" value="Buscar coche">
            </form>
        </div>
        <div class="listaCoches">
            <ul>
                @if(isset($coches))
                    <h2>Listado coches: </h2>
                        @foreach($coches as $coche)
                            <li><a class="enlace" href="{{ route('coches', ['idMatricula' => $coche->id])  }}">{{ $coche->marca }} - {{ $coche->modelo }}</a></li>
                        @endforeach
                    @endif
                </ul>
        </div>
        <div>
            <a href="{{ route('index') }}">Volver a coches</a>
        </div>
    </main>
</body>
</html>