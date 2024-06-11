<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use App\Models\Propriétaire;
use Illuminate\Http\Request;

class BatimentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batiments = Batiment::paginate(10);
        //dd($batiments);
        return view("index", compact('batiments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $propriétaires = Propriétaire::all();
        return view("create", compact('propriétaires'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        Batiment::create([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'id_propriétaire' => $request->id_propriétaire,
            'entré_principale' => 1,
            'entré_secondaire' => $request->entré_secondaire ? 1 : 0,
            'nbApptDispo' => $request->nbApptDispo
        ]);

        return to_route('batiments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $batiment = Batiment::find($id);
        return view("show", compact('batiment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $batiment = Batiment::find($id);
        $propriétaires = Propriétaire::all();



        return view("edit", compact('batiment', 'propriétaires'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'required|unique:batiments,nom',
            'adresse' => 'required|max:150',
            'id_propriétaire' => 'required',
            'entré_secondaire' => 'nullable|',
            'nbApptDispo' => 'required',
        ]);

        $batiment = Batiment::find($id);

        $batiment->nom = $request->nom;
        $batiment->adresse = $request->adresse;
        $batiment->id_propriétaire = $request->id_propriétaire;
        $batiment->entré_secondaire = $request->entré_secondaire === 'on' ? 1 : 0;
        $batiment->nbApptDispo = $request->nbApptDispo;

        $batiment->save();

        return redirect()->back()->with('success', 'Batiment has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Batiment::find($id)->delete();
        return to_route('batiments.index')->with('success', 'batiment has been deleted successfully');
    }


    public function filter($param)
    {
        if ($param === "entré_secondaire") {
            $batiments = Batiment::where('entré_secondaire', 1)->get();
            echo "<h1>Batiments avec entré secondaire </h1><br />";
            foreach ($batiments as $value) {
                echo $value->nom . '<br />';
            }
        } else if ($param === "entré_principale") {
            echo "<h1>Batiments avec entré principale </h1><br />";

            $batiments = Batiment::where('entré_principale', 1)->get();
            foreach ($batiments as $value) {
                echo $value->nom . '<br />';
            }
        } else {
            return "invalid param";
        }
    }
}
