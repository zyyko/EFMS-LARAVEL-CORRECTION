{{-- Question 16 --}}

@extends('layouts.master')

@section('header')
    <h1>Electroménager</h1>
@endsection

@section('contenu')
    @foreach ($allProductForCategorie->produit as $category)
        <div>
            <h2>{{ $category->NomProduit }}</h2>
            <p>{{ $category->DescriptionP }}</p>
        </div>
    @endforeach
@endsection
