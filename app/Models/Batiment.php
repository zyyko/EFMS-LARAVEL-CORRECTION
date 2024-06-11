<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batiment extends Model
{
    use HasFactory;

    protected $table = "batiments";

    protected $fillable = [
        'nom',
        'adresse',
        'id_propriétaire',
        'entré_principale',
        'entré_secondaire',
        'nbApptDispo',
    ];

    public function propriétaire()
    {
        return $this->belongsTo(Propriétaire::class);
    }
}
