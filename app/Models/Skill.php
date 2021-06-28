<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Developer;

class Skill extends Model
{
    use HasFactory;

    public function developers()
    {
        return $this->belongsToMany(Developer::class);
    }
}
