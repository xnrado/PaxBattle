<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Country extends Model
{
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
    public function armies(): HasMany
    {
        return $this->hasMany(Army::class);
    }
    public function battles(): BelongsToMany
    {
        return $this->belongsToMany(Battle::class, 'battle_country_user');
    }
    public function factions(): HasManyThrough
    {
        return $this->hasManyThrough(Faction::class, BattleCountryUser::class, 'country_id', 'id', 'id', 'faction_id');
    }
    public function faction(): HasOneThrough
    {
        return $this->hasOneThrough(Faction::class, BattleCountryUser::class, 'country_id', 'id', 'id', 'faction_id');
    }
    public function battle_armies(): HasMany
    {
        return $this->hasMany(BattleArmy::class, 'country_id', 'id');
    }
    public function battle_country_user(): HasOne
    {
        return $this->hasOne(BattleCountryUser::class, 'country_id', 'id');
    }
}
