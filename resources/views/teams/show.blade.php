<x-layout>
    <h2>{{$team->name}} </h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>City: {{$team->city}}</strong></p>
    </div>

    <ul>
        @foreach ($team->players as $player)
            <li class="bg-slate-200 p-4 rounded mb-2">
                <div>
                    <h3>{{ $player->firstName }} {{ $player->lastName }}</h3>
                </div>
            </li>
        @endforeach
    </ul>

    <form action="{{route('teams.destroy', $team)}}" method="POST">
        @csrf
        @method('DELETE')
        
        <button class="btn my-4 hover:bg-red-400! cursor-pointer" type="submit">
            Eliminar equipo
        </button>
    </form>
</x-layout>