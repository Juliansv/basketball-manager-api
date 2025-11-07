<form action="" method="">
    <h2>Crear un nuevo Jugador</h2>

    <label for="firstName">Nombre:</label>
    <input type="text" name="name" id="name" required>

    <label for="lastName">Apellido/s:</label>
    <input type="text" name="lastName" id="lastName" required>

    <label for="height">Altura:</label>
    <input type="number" name="height" id="height" required>

    <label for="weight">Peso:</label>
    <input type="number" name="weight" id="weight" required>
    
    <label for="birthday">Fecha de nacimiento:</label>
    <input type="date" name="birthday" id="birthday">

    <label for="team_id">Equipo:</label>
    <select name="team_id" id="team_id" required>
        <option value="" disabled selected>Elegir un equipo</option>
    </select>

    <button type="submit" class="btn mt-4">Crear jugador</button>

</form>