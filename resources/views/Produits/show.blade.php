ID: <strong>{{ $PRODUIT->id }}</strong><br />
DESIGNATION : <strong>{{ $PRODUIT->designation }}</strong><br />
PRIX : <strong>{{ $PRODUIT->prix }}</strong><br />
<form action="{{ route('Produit.edit', $PRODUIT->id) }}">
    <button>EDIT</button>
</form>

<form action="{{ route('Produit.destroy', $PRODUIT->id) }}">
    <button>DELETE</button>
</form>
@csrf
