<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("Produits.index", [
            "PRODUITS" => Produit::all(),
        ])->with("MSG", "Produit ajouté avec success");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Produits.form");   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "designation" => "required",
            "prix" => "required|numeric"
        ]);
        $pdr = new Produit();

        $pdr->designation = $request->designation;
        $pdr->prix = $request->prix;

        $pdr->save();

        return redirect()->route("Produit.index");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produit = Produit::findOrFail($id);
        return view("Produits.show", ["PRODUIT" => $produit]);
    }

    /**
     * Show the form for editing the specified resource.
    */
    public function edit(string $id)
    {
        $produit = Produit::findOrFail($id);
        return view("Produits.edit", ['produit' => $produit]);


    }

    /**
     * Update the specified resource in storage.
    */
    public function update(Request $request, string $id)
    {
        
        $produit = Produit::findOrFail($id);

        $produit->designation = $request->designation;
        $produit->prix = $request->prix;

        $produit->save();

        return redirect()->route('Produit.index');
    }

    /**
     * Remove the specified resource from storage.
    */
    public function destroy(string $id)
    {
        dd($id);
    }
}