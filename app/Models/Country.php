<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Country extends Model
{
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
    public function battles(): BelongsToMany
    {
        return $this->belongsToMany(Battle::class, 'battle_country_user');
    }
    public function armies(): HasMany
    {
        return $this->hasMany(Army::class);
    }
}
