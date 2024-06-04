<?php

namespace App\Http\Controllers;

use App\Models\Catégorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    // Question : 15
    public function ProduitsCategorie($id)
    {
        $allProductForCategorie = Catégorie::with('produit')->findOrFail($id);
        //dd($allProductForCategorie);
        return view("Categprod", compact('allProductForCategorie'));
    }
}
