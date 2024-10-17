<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Player extends Model
{
    use HasFactory;

    public function country(): BelongsTo
    {
        return $this->belongsTo(Player::class, 'battle_country_player');
    }
    public function battle(): BelongsToMany
    {
        return $this->belongsToMany(Battle::class, 'battle_country_player');
    }
}
