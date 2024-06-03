<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{
    use HasFactory;


    protected $table = 'rendez_vous';


    protected $fillable = [
        'id',
        'medecin_id',
        'patient_id',
        'date',
        'heure',
    ];
    public function médecin()
    {
        return $this->belongsTo(Médecin::class, 'medecin_id');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
