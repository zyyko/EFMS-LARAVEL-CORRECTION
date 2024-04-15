<form action="{{route('affichage')}}" method="GET">
    <input type="text" name="mot" id="">
    @if(session('error'))
        {{ session('error') }}
    @endif
    <button type="submit">Envoyer</button>
</form>