<div class="container">
    <h1>Liste des Rendez-vous</h1>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>ID du Patient</th>
                <th>Nom du Patient</th>
                <th>Nom du Médecin</th>
                <th>Prénom du Médecin</th>
                <th>Spécialité</th>
                <th>Date et Heure</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rendezVous as $rdv)
                <tr>
                    <td>{{ $rdv->patient->id }}</td>
                    <td>{{ $rdv->patient->nom }}</td>
                    <td>{{ $rdv->médecin->nom }}</td>
                    <td>{{ $rdv->médecin->prénom }}</td>
                    <td>{{ $rdv->médecin->specialite->nom }}</td>
                    <td>{{ $rdv->date }}</td>
                    <td>{{ $rdv->heure }}</td>
                    <td>Supprimer</td>
                    <td>Modifer</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
