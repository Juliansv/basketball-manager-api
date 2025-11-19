<x-layout>
    <form action="{{ ($coach) ? route('coaches.update', $coach) : route('coaches.store') }}" method="POST">
        @csrf
        @if ($coach)
            @method('PUT')
        @endif

        <h2>Crear un nuevo Entrenador</h2>
    
        <label for="firstName">Nombre:</label>
        <input type="text" name="firstName" value="{{ old('firstName') || ($coach) ? "$coach->firstName" : ""  }}" id="firstName" required>
    
        <label for="lastName">Apellido/s:</label>
        <input type="text" name="lastName" value="{{ ($coach) ? "$coach->lastName" : old('lastName') }}" id="lastName" required>
        
        <label for="birthday">Fecha de nacimiento:</label>
        <input type="date" name="birthday" value="{{ ($coach) ? "$coach->birthday" : old('birthday') }}" id="birthday">
    
        <label for="team_id">Equipo:</label>
        <select name="team_id" id="team_id">
            <option value="" disabled selected>Elegir un equipo</option>
            @foreach ($teams as $team)
                <option value="{{$team->id}}" {{ (($coach) ? $coach->team_id : old('team_id')) == $team->id ? "selected" : ''}} >{{$team["name"]}}</option>
            @endforeach
        </select>
    
        <button type="submit" class="btn mt-4 cursor-pointer">{{($coach) ? "Actualizar entrenador" : "Crear entrenador"}}</button>

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