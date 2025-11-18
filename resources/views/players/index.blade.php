<x-layout>
    <h2>Jugadores</h2>

    <ul>
        @foreach ($players as $player)
            <li>
            <x-card href="{{ route('players.show', $player->id) }}">
                <div>
                    <h3>{{ $player->lastName }}  {{ $player->firstName }}</h3>
                    @if ($player->team)
                        <p>{{ $player->team->name }}</p>
                        <p>{{ $player->team->city }}</p>
                    @else
                        <p>N/A</p>
                        <p>N/A</p>
                    @endif 
                </div>
            </x-card>
            </li>
        @endforeach
    </ul>

    {{ $players->links() }}
</x-layout>