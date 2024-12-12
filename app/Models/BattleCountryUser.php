<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class BattleCountryUser extends Pivot implements Sortable
{
    use SortableTrait;

    protected $fillable = [
        'user_id',
        'country_id',
        'battle_id',
        'faction_id',
        'is_active'
    ];
}
