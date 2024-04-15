<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelController extends Controller
{
    public function index () 
    {
        return view("LARAVEL-CC1.home");
    }

    public function show (Request $request) 
    {
        $word = $request->mot;

        //Question 3 : validation du champ 
        if($word == "") {
            return redirect("home")->with("error" , "Le champ est obligatoire !"); // redirection vers la page home !!!
        }

        $nombreDesCharactères = strlen($word);
        $motInverse = strrev($word);
        $motMelangé = str_shuffle($word);
        
        return view("LARAVEL-CC1.affichage", [
            "nombreDesCharactères" => $nombreDesCharactères,
            "motInverse" => $motInverse,
            "motMelangé" => $motMelangé
        ]);
    }
}
