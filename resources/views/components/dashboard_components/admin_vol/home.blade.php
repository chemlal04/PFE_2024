<!DOCTYPE html>
<html>
<head>
    <title>Vols List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Vols List</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Client ID</th>
                    <th>Nom Vol</th>
                    <th>Ville Depart</th>
                    <th>Ville Arrivee</th>
                    <th>Date Depart</th>
                    <th>Date Arrivee</th>
                    <th>Heure Depart</th>
                    <th>Heure Arrivage</th>
                    <th>Type</th>
                    <th>Nombre Places</th>
                    <th>Images</th>
                    <th>Prix</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vols as $vol)
                    <tr>
                        <td>{{ $vol->id }}</td>
                        <td>{{ $vol->id_client }}</td>
                        <td>{{ $vol->Nom_vol }}</td>
                        <td>{{ $vol->Ville_depart }}</td>
                        <td>{{ $vol->Vile_arrivee }}</td>
                        <td>{{ $vol->date_depart }}</td>
                        <td>{{ $vol->date_arrivee }}</td>
                        <td>{{ $vol->H_depart }}</td>
                        <td>{{ $vol->H_arrivage }}</td>
                        <td>{{ $vol->type }}</td>
                        <td>{{ $vol->N_place }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $vol->image1) }}" alt="Image 1" width="50">
                            <img src="{{ asset('storage/' . $vol->image2) }}" alt="Image 2" width="50">
                            <img src="{{ asset('storage/' . $vol->image3) }}" alt="Image 3" width="50">
                            <img src="{{ asset('storage/' . $vol->image4) }}" alt="Image 4" width="50">
                            <img src="{{ asset('storage/' . $vol->image5) }}" alt="Image 5" width="50">
                        </td>
                        <td>{{ $vol->prix }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
