<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basquet API</title>

    @vite('resources/css/app.css')
</head>
<body>
    @if (session('success'))
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{ session('success') }}
        </div>
    @endif

    <header>
        <nav>
            <h1>
                <a href="{{ route('home') }}">Basquet API</a>
            </h1>
            <x-dropdownMenu>
                <a href="{{ route('players.index') }}">Todos los jugadores</a>
                <a href="{{ route('teams.index') }}">Todos los equipos</a>
                <a href="{{ route('coaches.index') }}">Todos los entrenadores</a>
                <a href="{{ route('players.create') }}">Crear nuevo jugador</a>
                <a href="{{ route('teams.create') }}">Crear nuevo equipo</a>
                <a href="{{ route('coaches.create') }}">Crear nuevo entrenador</a>
            </x-dropdownMenu>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>