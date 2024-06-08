@extends('EFM.layouts')



@section('header')
    <h1>List des livres</h1>
@endsection

@section('content')
    <a href="/ajouter">Ajouter un livre</a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Pages</th>
            <th>Description</th>
            <th>Image</th>
            <th>Categorie</th>
            <th>Actions</th>
        </tr>

        @foreach ($livres as $livre)
            <tr>
                <td>{{ $livre->id }}</td>
                <td>{{ $livre->titre }}</td>
                <td>{{ $livre->pages }}</td>
                <td>{{ $livre->description }}</td>
                <td><img src="{{ $livre->image }}" width="100px" /></td>
                <td>{{ $livre->categorie->nom }}</td>
                <td>
                    <a href="/edit/{{ $livre->id }}">
                        @csrf
                        <button>Modifier</button>
                        </form>
                        <form action="/delete/{{ $livre->id }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Supprimer</button>
                        </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection


@section('footer')
@endsection
