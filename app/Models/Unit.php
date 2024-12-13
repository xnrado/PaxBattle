<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Unit extends Model implements Sortable
{
    use SortableTrait;
    use HasFactory;

    public function unit_template(): BelongsTo
    {
        return $this->belongsTo(UnitTemplate::class);
    }

    public function army()
    {
        return $this->belongsTo(Army::class);
    }
}
