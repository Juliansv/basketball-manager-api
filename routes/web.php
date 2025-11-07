<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rotues for players

Route::get('/players', [PlayerController::class, 'index'])->name('players.index');

Route::get('/players/create', [PlayerController::class, 'create'])->name('players.create');

Route::get('/players/{player}', [PlayerController::class, 'show'])->name('players.show');

Route::post('/players', [PlayerController::class, 'store'])->name('players.store');

Route::delete('/players/{player}', [PlayerController::class, 'destroy'])->name('players.destroy');

// Routes for teams

Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');

Route::get('/teams/create', [TeamController::class, 'create'])->name('teams.create');

Route::get('/teams/{team}', [TeamController::class, 'show'])->name('teams.show');

Route::post('/teams', [TeamController::class, 'store'])->name('teams.store');

Route::delete('/teams/{team}', [TeamController::class, 'destroy'])->name('teams.destroy');