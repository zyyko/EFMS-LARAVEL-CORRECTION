@extends('layouts.master')

@section('header')
    Modifier un produit
@endsection

@section('contenu')
    <form action="/edit/{{ $produit->id }}" method="POST">
        @csrf
        @method('PUT')
        NomProduit : <input type="text" name="NomProduit" id="" value="{{ $produit->NomProduit }}"><br />
        DescriptionP : <input type="text" name="DescriptionP" value="{{ $produit->DescriptionP }}"><br />
        <select name="catégorie">
            @foreach ($categories as $categorie)
                <option value="{{ $categorie->id }}" {{ $categorie->id === $produit->id ? 'selected' : '' }}>
                    {{ $categorie->NomCategorie }}</option>
            @endforeach
        </select>
        <button>Modifier</button>
    </form>
@endsection
