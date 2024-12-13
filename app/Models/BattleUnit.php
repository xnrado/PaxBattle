<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class BattleUnit extends Model implements Sortable
{
    use SortableTrait;

    protected $fillable = [
        'id',
        'battle_id',
        'unit_template_id',
        'origin_id',
        'battle_army_id',
        'name',
        'left_movement',
        'is_visible',
        'manpower',
        'is_conscripted',
        'is_active'
    ];

    public function unit_template(): BelongsTo
    {
        return $this->belongsTo(UnitTemplate::class);
    }
}
