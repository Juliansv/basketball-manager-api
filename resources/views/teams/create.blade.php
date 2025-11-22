<x-layout>
    <form action="{{ ($team) ? route('teams.update', $team) : route('teams.store') }}" method="POST">
        @csrf
        @if ($team)
            @method('PUT')
        @endif

        <h2>Crear un nuevo Equipo</h2>
    
        <label for="name">Nombre:</label>
        <input type="text" name="name" value="{{ ($team) ? $team->name : old('name') }}" id="name" required>
    
        <label for="city">Ciudad:</label>
        <input type="text" name="city" value="{{ ($team) ? $team->city : old('city') }}" id="city" required>
    
        <button type="submit" class="btn mt-4">{{($team) ? "Actualizar equipo" : "Crear equipo"}}</button>

        @if ($errors->any())
            <ul class="px-4 py-2 bg-red-100">
                @foreach ($errors->all() as $error)
                    <li class="my-2 text-red-500">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        @endif
    
    </form>
</x-layout>