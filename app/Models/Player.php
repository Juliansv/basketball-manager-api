<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['firstName', 'lastName', 'height', 'weight', 'birthday', 'team_id'];

    /** @use HasFactory<\Database\Factories\PlayerFactory> */
    use HasFactory;

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
