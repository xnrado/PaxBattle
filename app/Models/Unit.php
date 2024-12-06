<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Unit extends Model
{
    use HasFactory;

    public function unitTemplate(): BelongsTo
    {
        return $this->belongsTo(UnitTemplate::class);
    }

    public function army()
    {
        return $this->belongsTo(Army::class);
    }
}
