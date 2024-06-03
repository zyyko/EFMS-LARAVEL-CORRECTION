<?php

namespace App\Http\Controllers;

use App\Models\Médecin;
use App\Models\Patient;
use App\Models\RendezVous;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class RendezVousController extends Controller
{
    public function index()
    {
        $rendezVous = RendezVous::with('patient', 'médecin.specialite')->get();

        return view('EFM.index', compact('rendezVous'));
    }

    public function create()
    {
        $médecins = Médecin::all();
        $patients = Patient::all();
        return view("EFM.ajout", compact('médecins', 'patients'));
    }

    public function enregistrer(Request $request)
    {

        $request->validate([
            'date' => 'required|date_format:Y-m-d',
            'heure' => 'required|date_format:H:i'
        ]);

        $rendez_vous = RendezVous::create([
            'medecin_id' => $request->médecin,
            'patient_id' => $request->patient,
            'date' => $request->date,
            'heure' => $request->heure,
        ]);

        $rendez_vous->save();
    }
}
