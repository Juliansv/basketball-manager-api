<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Club Deportivo Casares - Basquet</title>
        @vite('resources/css/app.css')
    </head>

    <body class="px-8 py-12 text-center">
        <h1>Basquet API</h1>
        <p>Crea stats, jugadores, equipos, partidos, torneos, ligas y mas</p>
        <div class="flex flex-col items-center">
            <a href="/players" class="btn mt-4 inline-block">
                Jugadores
            </a>
            <a href="/teams" class="btn mt-4 inline-block">Equipos</a>
            <a href="/coaches" class="btn mt-4 inline-block">Entrenadores</a>
            <a href="/categories" class="btn mt-4 inline-block">Categorias</a>
            <a href="/tournaments" class="btn mt-4 inline-block">Torneos</a>
            <a href="/tournaments" class="btn mt-4 inline-block">Referees</a>
            <a href="/tournaments" class="btn mt-4 inline-block">Partidos</a>
        </div>
    </body>

</html>
