<?php

namespace App\Models;

use App\Traits\GenerateUniqueSlugTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Battle extends Model
{

    use HasFactory;

    use GenerateUniqueSlugTrait;

    protected $fillable = [
        'name',
        'description',
        'image',
        'province_id',
        'x_size',
        'y_size'
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'battle_country_user');
    }
    public function countries(): BelongsToMany
    {
        return $this->belongsToMany(Country::class, 'battle_country_user');
    }
    public function factions(): BelongsToMany
    {
        return $this->belongsToMany(Faction::class, 'battle_country_user', );
    }
    public function battle_armies(): HasMany
    {
        return $this->hasMany(BattleArmy::class, 'battle_id');
    }
}
