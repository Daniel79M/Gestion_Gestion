<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivrnet/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body>
  <div class="container-sm">
    <h1>Enregistrement d'un vehicule</h1>

    @if(session('success'))
      <div>
        {{ session('success')}     </div>
    
    @endif
    <form action="creationVehicule" method="POST">
        @csrf
      <div class="mb-3">
        <label for="immatriculation" class="form-label">immatriculation</label>
        <input type="text" class="form-control" name="immatriculation" id="immatriculation" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="marque" class="form-label">marque</label>
        <input type="text" class="form-control" name="marque" id="marque" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="annee" class="form-label">annee</label>
        <input type="text" class="form-control" name="annee" id="annee" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="couleur" class="form-label">couleur</label>
        <input type="text" class="form-control" name="couleur" id="couleur" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="modele" class="form-label">modele</label>
        <input type="text" class="form-control" name="modele"  id="exampleInput" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="kilometrage" class="form-label">kilometrage</label>
        <input type="text" class="form-control" name="kilometrage" id="kilometrage" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="carosserie" class="form-label">carosserie</label>
        <input type="text" class="form-control" name="carosserie" id="carosserie" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="energie" class="form-label">energie</label>
        <input type="text" class="form-control" name="energie" id="energie" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="boite" class="form-label">boite</label>
        <input type="text" class="form-control" name="boite" id="boite" aria-describedby="emailHelp">
      </div>


      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>

</html>