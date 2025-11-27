<x-layout>
    <form action="{{ ($player) ? route('players.update', $player) : route('players.store') }}" method="POST">
        @csrf
        @if ($player)
            @method('PUT')
        @endif

        <h2>Crear un nuevo Jugador</h2>
    
        <label for="firstName">Nombre:</label>
        <input type="text" name="firstName" value="{{ (old('firstName')) ? old('firstName') : $player->firstName }}" id="firstName" required>
    
        <label for="lastName">Apellido/s:</label>
        <input type="text" name="lastName" value="{{ (old('lastName')) ? old('lastName') : $player->lastName }}" id="lastName" required>
    
        <label for="height">Altura:</label>
        <input type="number" name="height" value="{{ (old('height')) ? old('height') : $player->height }}" id="height" required>
    
        <label for="weight">Peso:</label>
        <input type="number" name="weight" value="{{ (old('weight')) ? old('weight') : $player->weight }}" id="weight" required>
        
        <label for="birthday">Fecha de nacimiento:</label>
        <input type="date" name="birthday" value="{{  (old('birthday')) ? old('birthday') : $player->birthday }}" id="birthday">
    
        <label for="team_id">Equipo:</label>
        <select name="team_id" id="team_id" required>
            <option value="" disabled selected>Elegir un equipo</option>
            @foreach ($teams as $team)
                <option value="{{$team->id}}" {{ (($player) ? $player->team_id : old('team_id')) == $team->id ? "selected" : ''}} >{{$team["name"]}}</option>
            @endforeach
        </select>
    
        <button type="submit" class="btn mt-4">{{($player) ? "Actualizar jugador" : "Crear jugador"}}</button>

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