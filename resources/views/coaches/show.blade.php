<x-layout>
    <h2>{{$coach->firstName}} {{ $coach->lastName }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p>Fecha de nacimiento: {{ $coach->birthday }}</p>
    </div>

    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3>Informacion del equipo</h3>
        @if ($coach->team)
            <p><strong>Nombre: {{$coach->team->name}}</strong></p>
            <p><strong>Ciudad: {{$coach->team->city}}</strong></p>
        @else
            <p>N/A</p>
            <p>N/A</p>
        @endif
    </div>

    <form action="{{route('coaches.destroy', $coach)}}" method="POST">
        @csrf
        @method('DELETE')
        
        <button class="btn my-4 hover:bg-red-400! cursor-pointer" type="submit">
            Eliminar entrenador
        </button>
    </form>
    <a href="{{ route('coaches.edit', $coach) }}">
        <button class="btn my-4 hover:bg-green-400! cursor-pointer">
                Editar entrenador
        </button>
    </a>
</x-layout>