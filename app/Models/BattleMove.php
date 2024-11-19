<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BattleMove extends Model
{
    use HasFactory;

    public function  battle(): BelongsTo
    {
        return $this->belongsTo(Battle::class);
    }

    public function getTimeAttribute(): string {
        return date("d M Y, H:i:s", strtotime($this->attributes['created_at']));
    }
}
