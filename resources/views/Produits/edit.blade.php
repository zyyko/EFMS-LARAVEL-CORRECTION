<form action="{{ route('Produit.update', $produit->id) }}" method="POST">
    @method('PUT')
    @csrf
    <h3>Modifier</h3>
    <label for="">designation</label>
    <input type="text" name="designation" id="" value="{{ $produit->designation }}"><br />
    <label for="">prix</label>
    <input type="text" name="prix" id="" value="{{ $produit->prix }}"><br />
    <input type="submit" value="EDIT">
</form>
