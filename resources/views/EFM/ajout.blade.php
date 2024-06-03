<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('enregistrer') }}" method="POST">
        @csrf
        Médecin Name :
        <select name="médecin" id="">
            @foreach ($médecins as $item)
                <option value={{ $item->id }}>{{ $item->prénom }} {{ $item->nom }}</option>
            @endforeach
        </select><br />
        Patient Name :
        <select name="patient" id="">
            @foreach ($patients as $item)
                <option value={{ $item->id }}>{{ $item->nom }}</option>
            @endforeach
        </select><br />
        Date :
        <input type="date" name="date"><br />
        @error('date')
            <span style="color: red;">{{ $message }}</span>
        @enderror <br />
        Heure :
        <input type="time" name="heure"><br />
        @error('heure')
            <span style="color: red;">{{ $message }}</span>
        @enderror

        <button>Valider</button>
    </form>

</body>

</html>
