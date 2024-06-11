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
        }

        .card {
            flex: 0 0 18rem;
        }
    </style>
</head>

<body>
    <div class="container mt-5">

        <div class="card-container">
            <div class="card">
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('batiments.update', $batiment->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom:</label>
                            <input type="text" class="form-control" id="nom" name="nom"
                                value="{{ $batiment->nom }}">
                        </div>
                        <div class="mb-3">
                            <label for="adresse" class="form-label">Adresse:</label>
                            <input type="text" class="form-control" id="adresse" name="adresse"
                                value="{{ $batiment->adresse }}">
                        </div>
                        <div class="mb-3">
                            <label for="id_proprétaire" class="form-label">Propriétaire:</label>
                            <select class="form-select" id="id_proprétaire" name="id_propriétaire">
                                @foreach ($propriétaires as $item)
                                    <option value="{{ $item->id }}">{{ $item->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="entré_secondaire"
                                name="entré_secondaire" {{ $batiment->entré_secondaire === 1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="entré_secondaire">Entré secondaire</label>
                        </div>
                        <div class="mb-3">
                            <label for="nbApptDispo" class="form-label">Nombre d'appartements disponibles:</label>
                            <input type="number" class="form-control" id="nbApptDispo" name="nbApptDispo"
                                value="{{ $batiment->nbApptDispo }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXlHj1/4f0vIOFELkGFELRw3wU4/2LDZkd0n6f6Fo8QL7xhj5uFdmhVR1z7P" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGcueQ/ScHt7NkEmNVTOnLdE91cFxO8KPCpN9Pz8+POBByxwuP+0J6eQAI" crossorigin="anonymous"></script>
</body>

</html>
