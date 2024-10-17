<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    public function player(): HasMany
    {
        return $this->hasMany(Player::class, 'battle_country_player');
    }
    public function battle(): BelongsToMany
    {
        return $this->belongsToMany(Battle::class, 'battle_country_player');
    }
}
