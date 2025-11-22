<x-layout>
    
    <h2>Team Name: <span class="text-red-500">{{$team->name}}</span> </h2>
    <div class="bg-gray-200 p-4 rounded">
        <strong>
            <p>City: {{$team->city}}</p>
        </strong>
    </div>

    
    <ul>
        <h2>Players</h2>
        @if (count($team->players) <= 0)
            <li class="bg-slate-200 p-4 rounded mb-2">
                <div>
                    <h3>N/A</h3>
                </div>
            </li>
        @else 
            @foreach ($team->players as $player)
                <li class="bg-slate-200 p-4 rounded mb-2">
                    <div>
                        <h3>{{ $player->firstName }} {{ $player->lastName }}</h3>
                    </div>
                </li>
            @endforeach
        @endif
    </ul>

    <ul>
        <h2>Coach</h2>
        <li class="bg-slate-200 p-4 rounded mb-2">
            @if ($team->coaches)
                <div>
                    <h3>{{ $team->coaches->firstName }} {{ $team->coaches->lastName }}</h3>
                </div>
            @else
                <div>
                    <h3>N/A</h3>
                </div>
            @endif
        </li>
    </ul>

    <form action="{{route('teams.destroy', $team)}}" method="POST">
        @csrf
        @method('DELETE')
        
        <button class="btn my-4 hover:bg-red-400! cursor-pointer" type="submit">
            Eliminar equipo
        </button>
    </form>
    <a href="{{ route('teams.edit', $team) }}">
        <button class="btn my-4 hover:bg-green-400! cursor-pointer" type="submit">
            Editar equipo
        </button>
    </a>
</x-layout>