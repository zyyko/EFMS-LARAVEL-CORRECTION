<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            /* Adjust this value as needed */
        }

        .card {
            flex: 0 0 18rem;
            /* Set the initial width of the card */
        }
    </style>
</head>

<body>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="mt-5">
        <a href="/batiments/filter/entré_principale" class="alert alert-primary">Entré Principale</a>
        <a href="/batiments/filter/entré_secondaire" class="alert alert-primary">Entré Secondaire</a>
    </div>

    <div class="card-container mt-5">
        @foreach ($batiments as $item)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->nom }}</h5>
                    <p class="card-text">{{ $item->description }}</p>
                    <a href="{{ route('batiments.show', $item->id) }}" class="btn btn-primary">Voir</a>
                </div>
            </div>
        @endforeach
    </div>

    {{ $batiments->links() }}
</body>

</html>
