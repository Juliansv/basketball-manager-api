<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        // route --> /players/
        // fetch all the records and pass into the index view
        $players = Player::with('team')->orderBy('created_at', 'desc')->paginate(20);

        return view('players.index', ['players' => $players]);
    }

    public function show(Player $player)
    {
        // route --> /players/{id}
        // fetch a single record and pass into show view
        $player->load('team');
        return view('players.show', ["player" => $player]);
    }

    public function create()
    {
        // route --> /players/create
        // render a create view (with web form) to users

        $teams = Team::all();
        return view('players.create', ["teams" => $teams]);
    }

    public function store(Request $request)
    {
        // route --> /players/ (POST)
        // handle POST request to store a new player record on the db table
        $validated = $request->validate([
            'firstName' => 'required|string|min:3|max:255',
            'lastName' => 'required|string|min:3|max:255',
            'height' => 'integer|min:20|max:300',
            'weight' => 'integer|min:20|max:300',
            'birthday' => 'required|date',
            'team_id' => 'nullable'
        ]);

        Player::create($validated);

        return redirect()->route('players.index')->with('success', 'Jugador creado');
    }

    public function destroy(Player $player)
    {
        // route --> /players/{id} (DELETE)
        $player->delete();

        return redirect()->route('players.index')->with('success', 'Jugador eliminado');
    }

    public function edit(Player $player)
    {
        // route --> /players/edit/{player}
        // render a edit view (with web form) to users

        $teams = Team::all();
        $player->load('team');
        return view('players.create', ["player" => $player, "teams" => $teams]);
    }

    public function update(Request $request, Player $player)
    {
        // route --> /players/{player}
        // handle PUT request to update an existing team record

        $validated = $request->validate([
            'firstName' => 'required|string|min:3|max:255',
            'lastName' => 'required|string|min:3|max:255',
            'height' => 'integer|min:20|max:300',
            'weight' => 'integer|min:20|max:300',
            'birthday' => 'required|date',
            'team_id' => 'nullable'
        ]);

        $player->update($validated);

        return redirect()->route('players.show', $player)->with('success', 'Equipo actualizado');
    }
}
