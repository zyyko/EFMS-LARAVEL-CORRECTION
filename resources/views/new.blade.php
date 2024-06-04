@extends('layouts.master')

@section('header')
    <h1>Ajouter un produit </h1>
@endsection

@section('contenu')
    <form action="{{ route('creationProd') }}" method="POST">
        @csrf
        NomProduit : <input type="text" name="NomProduit" id=""><br />
        Description P <input type="text" name="DescriptionP" id=""><br />
        <select name="catégorie" id="">
            @foreach ($categories as $categorie)
                <option value="{{ $categorie->id }}">{{ $categorie->NomCategorie }}</option>
            @endforeach
        </select>

        <button>Ajouter</button>
    </form>
@endsection
