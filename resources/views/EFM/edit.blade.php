@extends('EFM.layouts')



@section('header')
    <h1>Modifier un livre</h1>
@endsection

@section('content')
    <form action="/update/{{ $livre->id }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <input type="text" name="titre" id="" placeholder="titre" value="{{ $livre->titre }}"><br />
        <input type="number" name="pages" id="" placeholder="pages" value="{{ $livre->pages }}"><br />
        <input type="text" name="description" id="" placeholder="description"
            value={{ $livre->description }}><br />
        <select name="categorie" id="">
            @foreach ($categories as $categorie)
                <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
            @endforeach
        </select><br />

        <input type="file" name="image" />
        <button>Modifier</button>
    </form>
@endsection


@section('footer')
@endsection
