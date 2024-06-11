<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="card text-center">
        <div class="card-header">
            {{ $batiment->id }}
        </div>
        <div class="card-body">
            <h5 class="card-title"> {{ $batiment->nom }}
            </h5>
            <p class="card-text"> {{ $batiment->adresse }}
            </p>
            <p class="card-text">Entré principale : {{ $batiment->entré_principale }}
            </p>
            <p class="card-text">Entré secondaire : {{ $batiment->entré_secondaire }}
            </p>
            <p class="card-text">nbApptDispo : {{ $batiment->nbApptDispo }}
            </p>
            <a href="{{ route('batiments.edit', $batiment->id) }}" class="btn btn-primary">Modiifer</a>
            </a>
            <form action="{{ route('batiments.destroy', $batiment->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">Delete</button>
            </form>

        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>
</body>

</html>
