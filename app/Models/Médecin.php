<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Médecin extends Model
{
    use HasFactory;

    protected $table = "médecins";

    public function specialite()
    {
        return $this->belongsTo(Spécialité::class);
    }

    public function rendezVous()
    {
        return $this->hasMany(RendezVous::class);
    }
}
