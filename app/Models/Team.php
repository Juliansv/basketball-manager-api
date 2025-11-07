<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name', 'city'];

    /** @use HasFactory<\Database\Factories\TeamFactory> */
    use HasFactory;

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
