<x-layout>
    <h2>Equipos</h2>
    <ul>
        @foreach ($teams as $team)
            <li>
            <x-card href="{{ route('teams.show', $team->id) }}">
                <div>
                    <p>{{ $team->name }}</p>
                    <p>{{ $team->city }}</p>
                </div>
            </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>