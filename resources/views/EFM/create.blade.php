@extends('EFM.layouts')



@section('header')
    <h1>ajouter un livre</h1>
@endsection

@section('content')
    <form action="/ajouter" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="titre" id="" placeholder="titre"><br />
        <input type="number" name="pages" id="" placeholder="pages"><br />
        <input type="text" name="description" id="" placeholder="description"><br />
        <select name="categorie" id="">
            @foreach ($categories as $categorie)
                <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
            @endforeach
        </select><br />

        <input type="file" name="image" />
        <button>Ajouter</button>
    </form>
@endsection


@section('footer')
@endsection
