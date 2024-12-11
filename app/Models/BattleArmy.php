<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BattleArmy extends Model
{
    public function battle_units(): HasMany
    {
        return $this->hasMany(BattleUnit::class, 'battle_army_id');
    }
}
