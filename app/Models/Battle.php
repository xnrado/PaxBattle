<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Battle extends Model
{
    use HasFactory;

    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'battle_country_user');
    }
    public function country(): BelongsToMany
    {
        return $this->belongsToMany(Country::class, 'battle_country_user');
    }
}
