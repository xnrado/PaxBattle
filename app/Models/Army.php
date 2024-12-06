<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Army extends Model
{
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
