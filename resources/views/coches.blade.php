<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <form class="form" action="{{ route('crearCoche') }}" method="POST">
                @csrf
                <h2>Crear coche</h2>
                <input class="basicInputText" type="text" placeholder="Marca" name="marca" required>
                <input class="basicInputText" type="text" placeholder="Modelo" name="modelo" required>
                <input class="basicInputText" type="text" placeholder="Matricula" name="matricula" required>
                <input class="basicInputText" type="text" placeholder="Dueño" name="owner" required>
                <input  class="basicInput" type="submit" value="Añadir coche">
            </form>
        </div>
        <div class="listaCoches">
            <h2>Listado coches: </h2>
            <ul>
                @foreach($coches as $coche)
                    <li><a class="enlace" href="{{ route('coches', ['idMatricula' => $coche->id])  }}">{{ $coche->marca }} - {{ $coche->modelo }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="acciones">
            <h2>Acciones</h2>
            <a class="enlace boton" href="{{ route('buscarCoches') }}">Buscar coches</a>
        </div>
    </main>
</body>
</html>