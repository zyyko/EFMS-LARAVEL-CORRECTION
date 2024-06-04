@extends('layouts.master')


@section('header')
    <h1>List des produits</h1>
@stop

@section('contenu')
    @foreach ($produits as $produit)
        <div style="border: 1px solid;width: 50%; ">
            <h3>{{ $produit->NomProduit }}</h3>
            <p style="margin-left: 15px;">{{ $produit->DescriptionP }}</p>
            <a href="/nouveau">
                <button style="background-color: green; color: white;">Ajouter</button>
            </a>
            <form action="/edition/{{ $produit->id }}" method="GET">
                <button style="background-color: blue; color: white;">Editer</button>
            </form>
            <form action="/delete/{{ $produit->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button style="background-color: red; color: white;">Supprimer</button>
            </form>
        </div>
    @endforeach
@stop

@section('aside')
    <div>
        <ul>
            @foreach ($categories as $categorie)
                <a href="/categorie/{{ $categorie->id }}">
                    <li style="list-style: none;">{{ $categorie->NomCategorie }}</li>
                </a>
            @endforeach
        </ul>
    </div>
@stop
