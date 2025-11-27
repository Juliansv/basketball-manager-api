<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\CoachController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rotues for players

Route::get('/players', [PlayerController::class, 'index'])->name('players.index');

Route::get('/players/create', [PlayerController::class, 'create'])->name('players.create');

Route::get('/players/{player}', [PlayerController::class, 'show'])->name('players.show');

Route::post('/players', [PlayerController::class, 'store'])->name('players.store');

Route::get('/players/edit/{player}', [PlayerController::class, 'edit'])->name('players.edit');

Route::put('/players/{player}', [PlayerController::class, 'update'])->name('players.update');

Route::delete('/players/{player}', [PlayerController::class, 'destroy'])->name('players.destroy');

// Routes for teams

Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');

Route::get('/teams/create', [TeamController::class, 'create'])->name('teams.create');

Route::get('/teams/{team}', [TeamController::class, 'show'])->name('teams.show');

Route::post('/teams', [TeamController::class, 'store'])->name('teams.store');

Route::get('/teams/edit/{team}', [TeamController::class, 'edit'])->name('teams.edit');

Route::put('/teams/{team}', [TeamController::class, 'update'])->name('teams.update');

Route::delete('/teams/{team}', [TeamController::class, 'destroy'])->name('teams.destroy');

// Routes for coaches

Route::get('/coaches', [CoachController::class, 'index'])->name('coaches.index');

Route::get('/coaches/create', [CoachController::class, 'create'])->name('coaches.create');

Route::get('/coaches/{coach}', [CoachController::class, 'show'])->name('coaches.show');

Route::post('/coaches', [CoachController::class, 'store'])->name('coaches.store');

Route::get('/coaches/edit/{coach}', [CoachController::class, 'edit'])->name('coaches.edit');

Route::put('/coaches/{coach}', [CoachController::class, 'update'])->name('coaches.update');

Route::delete('/coaches/{coach}', [CoachController::class, 'destroy'])->name('coaches.destroy');