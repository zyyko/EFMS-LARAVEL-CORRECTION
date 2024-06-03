<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spécialité extends Model
{
    use HasFactory;

    protected $table = "spécialités";
    public function medecins()
    {
        return $this->hasMany(Médecin::class);
    }
}
