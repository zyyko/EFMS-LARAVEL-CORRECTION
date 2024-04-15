<form method="POST" action="{{ route('Produit.store') }}">
    @csrf
    <label for="">designation</label>
    <input type="text" name="designation" id="" value="{{ old('designation') }}"><br />
    @error('designation')
        {{ $message }}<br />
    @enderror
    <label for="">prix</label>
    <input type="text" name="prix" id="" value="{{ old('prix') }}"><br />
    @error('prix')
        {{ $message }}<br />
    @enderror
    <button type="submit">Submit</button>
</form>
