<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Coach;
use App\Models\Team;

class CoachController
{
    public function index()
    {
        // route --> /coaches/
        // fetch all the records and pass into the index view
        $coaches = Coach::all();

        return view('coaches.index', ['coaches' => $coaches]);
    }

    public function show(Coach $coach)
    {
        // route --> /coaches/{id}
        // fetch a single record and pass into show view
        $coach->load('team');
        return view('coaches.show', ["coach" => $coach]);
    }

    public function destroy(Coach $coach)
    {
        // route --> /coaches/{id} (DELETE)
        $coach->delete();

        return redirect()->route('coaches.index')->with('success', 'Entrenador eliminado');
    }

    public function create()
    {
        // route --> /coaches/create
        // render a create view (with web form) to users

        $teams = Team::all();
        $coach = null;
        return view('coaches.create', ["coach" => $coach, "teams" => $teams]);
    }

    public function store(Request $request)
    {
        // route --> /coaches/ (POST)
        // handle POST request to store a new coach record on the db table
        $validated = $request->validate([
            'firstName' => 'required|string|min:3|max:255',
            'lastName' => 'required|string|min:3|max:255',
            'birthday' => 'required|date',
            'team_id' => 'nullable'
        ]);

        Coach::create($validated);

        return redirect()->route('coaches.index')->with('success', 'Entrenador creado');
    }

    public function edit(Coach $coach)
    {
        // route --> /coaches/edit/{coach}
        // render a edit view (with web form) to users

        $teams = Team::all();
        $coach->load('team');
        return view('coaches.create', ["coach" => $coach, "teams" => $teams]);
    }

    public function update(Request $request, Coach $coach)
    {
        // route --> /coaches/{coach}
        // handle PUT request to update an existing coach record
        $validated = $request->validate([
            'firstName' => 'required|string|min:3|max:255',
            'lastName' => 'required|string|min:3|max:255',
            'birthday' => 'required|date',
            'team_id' => 'nullable'
        ]);


        $coach->update($validated);

        return redirect()->route('coaches.show', $coach)->with('success', 'Entrenador actualizado');
    }
}
