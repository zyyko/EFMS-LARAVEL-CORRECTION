<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propriétaire extends Model
{
    use HasFactory;

    public function batiments()
    {
        return $this->hasMany(Batiment::class);
    }
}
