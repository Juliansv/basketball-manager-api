<x-layout>
    <h2>{{$player->firstName}} {{ $player->lastName }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Altura: {{$player->height}}</strong></p>
        <p><strong>Peso: {{$player->weight}}</strong></p>
        <p>Fecha de nacimiento: {{ $player->birthday }}</p>
    </div>

    @if ($player->team) 
        <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
            <h3>Informacion del equipo</h3>
            <p><strong>Nombre: {{$player->team->name}}</strong></p>
            <p><strong>Ciudad: {{$player->team->city}}</strong></p>
        </div>
    @else
        <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
            <h3>Informacion del equipo</h3>
            <p><strong>Nombre: N/A</strong></p>
            <p><strong>Ciudad: N/A</strong></p>
        </div>
    @endif


    <form action="{{route('players.destroy', $player)}}" method="POST">
        @csrf
        @method('DELETE')
        
        <button class="btn my-4 hover:bg-red-400! cursor-pointer" type="submit">
            Eliminar jugador
        </button>
    </form>

    <a href="{{ route('players.edit', $player) }}">
        <button class="btn my-4 hover:bg-green-400! cursor-pointer" type="submit">
            Editar jugador
        </button>
    </a>
</x-layout>