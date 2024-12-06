<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UnitTemplate extends Model
{
    use HasFactory;

    public function units(): HasMany
    {
        return $this->hasMany(Unit::class);
    }
}
