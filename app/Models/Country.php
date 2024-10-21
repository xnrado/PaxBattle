<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Country extends Model
{
    public function player(): HasMany
    {
        return $this->hasMany(Player::class);
    }
    public function battle(): BelongsToMany
    {
        return $this->belongsToMany(Battle::class, 'battle_country_player');
    }
}
