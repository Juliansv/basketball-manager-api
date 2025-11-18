<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Coach;

class TeamController extends Controller
{
    public function index()
    {
        // route --> /teams/
        // fetch all the records and pass into the index view
        $teams = Team::all();

        return view('teams.index', ['teams' => $teams]);
    }

    public function show(Team $team)
    {
        // route --> /teams/{id}
        // fetch a single record and pass into show view
        $team->load('players');
        $team->load('coaches');
        return view('teams.show', ["team" => $team]);
    }

    public function destroy(Team $team)
    {
        // route --> /teams/{id} (DELETE)
        $team->delete();

        return redirect()->route('teams.index')->with('success', 'Equipo eliminado');
    }

    public function create()
    {
        // route --> /teams/create
        // render a create view (with web form) to users

        $coaches = Coach::all();
        return view('teams.create', ["coaches" => $coaches]);
    }

    public function store(Request $request)
    {
        // route --> /teams/ (POST)
        // handle POST request to store a new team record on the db table
        echo ("aca");

        $validated = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'city' => 'required|string|min:3|max:255',
            'coach_id' => 'nullable'
        ]);

        $newTeam = Team::create($validated);

        return redirect()->route('teams.index')->with('success', 'Equipo creado');
    }
}
