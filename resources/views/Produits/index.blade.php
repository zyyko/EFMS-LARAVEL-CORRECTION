@isset($MSG)
    {{ $MSG }}
@endisset

<table border="1">
    <tr>
        <td>ID</td>
        <td>DESIGNATION</td>
        <td>PRIX</td>
    </tr>
    @foreach ($PRODUITS as $PRODUIT)
        <tr>
            <td>{{ $PRODUIT->id }}</td>
            <td>{{ $PRODUIT->designation }}</td>
            <td>{{ $PRODUIT->prix }}</td>
            <td><a href="{{ route('Produit.show', $PRODUIT->id) }}">Détails</a></td>
        </tr>
    @endforeach
</table>
