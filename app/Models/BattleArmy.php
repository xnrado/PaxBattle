<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class BattleArmy extends Model implements Sortable
{
    use SortableTrait;

    public function battle_units(): HasMany
    {
        return $this->hasMany(BattleUnit::class, 'battle_army_id');
    }
}
