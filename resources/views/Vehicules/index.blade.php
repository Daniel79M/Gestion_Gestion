<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicules</title>
</head>
<body>
@if(session('success'))
      <div>
        {{ session('success')}}
      </div>
    
    @endif
    <table border="2" style="width: 100%;">
        <thead>
            <tr>
                <td>Marque</td>
                <td>Modele</td>
                <td>Immatriculation</td>
                <td>Année</td>
                <td>Couleur</td>
                <td>Kilometrage</td>
                <td>Carosserie</td>
                <td>Energie</td>
                <td>Boite</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($vehicule as $vehicules)
                <tr>
                    <td>
                        {{ $vehicules->marque }}
                    </td>
                    <td> {{ $vehicules->modele }} </td>
                    <td> {{ $vehicules->immatriculation }} </td>
                    <td> {{ $vehicules->annee }} </td>
                    <td> {{ $vehicules->couleur }} </td>
                    <td> {{ $vehicules->kilometrage }} </td>
                    <td> {{ $vehicules->carosserie }} </td>
                    <td> {{ $vehicules->energie }}</td>
                    <td> {{ $vehicules->boite }}</td>
                    <td> 
                        <a href="{{ route('editVehicule', $vehicules->id) }}">Modifier</a>
                        <form action="{{ route('deleteVehicule', $vehicules->id) }}" method="POST">
                            @csrf   
                            <button>suprimé</button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>