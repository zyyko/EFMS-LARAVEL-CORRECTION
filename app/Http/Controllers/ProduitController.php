<?php

namespace App\Http\Controllers;

use App\Models\Catégorie;
use App\Models\Produit;
use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Support\LaravelVersion;

class ProduitController extends Controller
{
    public function index()
    {
        $produits = Produit::all();
        $categories = Catégorie::all();

        return view("showprod", compact('produits', 'categories'));
    }

    public function Nouveau_produit()
    {
        $categories = Catégorie::all();
        return view("new", compact('categories'));
    }

    public function Creation_produit(Request $request)
    {
        Produit::create([
            "NomProduit" => $request->NomProduit,
            "DescriptionP" => $request->DescriptionP,
            "categorie_id" => $request->catégorie

        ]);

        return view("showprod");
    }


    public function Edition_produit(Request $request)
    {
        $produit = Produit::find($request->id);
        $categories = Catégorie::all();
        return view("edit", compact('produit', 'categories'));
    }

    public function Edit_produit(Request $request, $id)
    {
        $produit = Produit::find($id);

        $produit->NomProduit = $request->NomProduit;
        $produit->DescriptionP = $request->DescriptionP;
        $produit->categorie_id = $request->catégorie;


        $produit->save();

        return to_route("afficher");
    }

    public function Delete_produit($id)
    {
        Produit::find($id)->delete();

        return to_route('afficher');
    }
}
