<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class BattleArmy extends Model implements Sortable
{
    use SortableTrait;

    protected $fillable = [
        'id',
        'battle_id',
        'country_id',
        'name',
        'is_active'
    ];

    public function battle_units(): HasMany
    {
        return $this->hasMany(BattleUnit::class, 'battle_army_id', );
    }
}
