<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Country extends Model
{
    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }
    public function battle(): BelongsToMany
    {
        return $this->belongsToMany(Battle::class, 'battle_country_user');
    }
}
