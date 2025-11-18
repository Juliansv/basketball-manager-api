<x-layout>
    <h2>Coaches</h2>
    <ul>
        @foreach ($coaches as $coach)
            <li>
            <x-card href="{{ route('coaches.show', $coach->id) }}">
                <div>
                    <p>{{ $coach->firstName }}</p>
                    <p>{{ $coach->lastName }}</p>
                    <p>{{ $coach->birthday }}</p>
                </div>
            </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>