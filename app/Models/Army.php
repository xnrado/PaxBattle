<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Army extends Model implements Sortable
{
    use SortableTrait;
    use HasFactory;

    public function units()
    {
        return $this->hasMany(Unit::class);
    }

    public function country()
    {
        return $this->belongsTo(Unit::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }
}
