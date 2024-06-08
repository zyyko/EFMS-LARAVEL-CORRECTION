<?php

namespace App\Http\Controllers;

use App\Models\Catégorie;
use Illuminate\Http\Request;
use \App\Models\Livre;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class LivreController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth_question_17');
    }

    public function index()
    {
        $livres = Livre::with('categorie')->get();
        return view('EFM.index', ['livres' => $livres]);
    }

    public function create()
    {
        $categories = Catégorie::all();
        return view("EFM.create", compact('categories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'titre' => 'required|max:255',
            'pages' => 'required|numeric|integer',
            'description' => 'required',
            'categorie' => 'required|exists:categories,id'

        ]);

        $titre = $request->titre;
        $pages = $request->pages;
        $description = $request->description;
        $categorie = $request->categorie;
        if ($request->hasFile('image')) {
            $imageName = Str::uuid()->toString() . '.' . $request->file('image')->getClientOriginalExtension();

            $request->file('image')->move(public_path('images/'), $imageName);
            //dd($imageName);

            Livre::create([
                'titre' => $titre,
                'pages' => $pages,
                'description' => $description,
                'image' => 'images/' . $imageName,
                'categorie_id' => $categorie
            ]);
        }
    }

    public function edit($id)
    {
        $categories = Catégorie::all();
        $livre = Livre::find($id);
        return view("EFM.edit", compact('livre', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $livreToUpdate = Livre::find($id);
        $livreToUpdate->titre = $request->titre;
        $livreToUpdate->pages = $request->pages;
        $livreToUpdate->description = $request->description;


        if ($request->hasFile('image')) {
            if ($livreToUpdate->image && File::exists(public_path($livreToUpdate->image))) {
                File::delete(public_path($livreToUpdate->image));
            }

            $imageName = Str::uuid()->toString() . '.' . $request->file('image')->getClientOriginalExtension();

            $request->file('image')->move(public_path('images/'), $imageName);


            $livreToUpdate->image = 'images/' . $imageName;
        }

        $livreToUpdate->save();
    }

    public function destroy($id)
    {
        Livre::find($id)->delete();
    }
}
