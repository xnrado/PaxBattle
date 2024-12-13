<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Faction extends Model
{
    use HasFactory;

    public function battles(): BelongsToMany
    {
        return $this->belongsToMany(Battle::class, 'battle_country_user');
    }
    public function countries(): BelongsToMany
    {
        return $this->belongsToMany(Country::class, 'battle_country_user');
    }
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'battle_country_user');
    }
}
