<x-layout>
    <h2>Jugadores</h2>

    <ul>
        @foreach ($players as $player)
            <li>
            <x-card href="{{ route('players.show', $player->id) }}">
                <div>
                    <h3>{{ $player->lastName }}</h3>
                    <p>{{ $player->team->name }}</p>
                    <p>{{ $player->team->city }}</p>
                </div>
            </x-card>
            </li>
        @endforeach
    </ul>

    {{ $players->links() }}
</x-layout>