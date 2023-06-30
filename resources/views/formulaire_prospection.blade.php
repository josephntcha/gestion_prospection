@extends('layout.master')
@section('content')
<script>
     function calculerDuree() {
      // Récupérer les valeurs des champs heure de début et heure de fin
      var heureDebut = document.getElementById('heure_debut').value;
      var heureFin = document.getElementById('heure_fin').value;

      // Convertir les valeurs en objets Date
      var dateDebut = new Date('2000-01-01 ' + heureDebut);
      var dateFin = new Date('2000-01-01 ' + heureFin);

      // Calculer la différence de temps en millisecondes
      var difference = dateFin - dateDebut;

      // Convertir la différence de temps en heures et minutes
      var duree = new Date(difference);
      var heures = duree.getUTCHours();
      var minutes = duree.getUTCMinutes();

      // Formater la durée en format "HH:MM"
      var dureeFormattee = heures.toString().padStart(2, '0') + ':' + minutes.toString().padStart(2, '0');

      // Afficher la durée calculée
      document.getElementById('duree').value = dureeFormattee;
    }
</script>
<div class="h3  text-center"><strong>Espace de gestion de prospection</strong> </div>
<form action="{{ route('gestion_prospection.store') }}" method="POST" class="col-8 offset-2  bg-white"
    enctype="multipart/form-data">
    <fieldset>
        <legend>
            <h3 class="text-center">Ajouter une prospection</h3>
        </legend>
        {{ csrf_field() }}

        <div class="card-body">
            <div class="mb-4 row">
                <label for="example-text-input" class="col-md-2 col-form-label">Nom de l'agent</label>
                <div class="col-md-10">
                    <input class="form-control required" required type="text" name="nom_agent" id="example-text-input ">
                </div>
            </div>

            <div class="mb-4 row">
                <label for="example-text-input" class="col-md-2 col-form-label">Nom du client</label>
                <div class="col-md-10">
                    <input class="form-control required" required type="text" name="nom_client" id="example-text-input ">
                </div>
            </div>
            <div class="mb-4 row">
                <label for="example-text-input" class="col-md-2 col-form-label">Adresse du client</label>
                <div class="col-md-10">
                    <input class="form-control required" required type="text" name="adresse_client" id="example-text-input ">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="heure_debut" class="col-md-2 col-form-label">Heure de début</label>
                <div class="col-md-10">
                    <input onchange="calculerDuree()" required class="form-control required" type="time" name="heure_debut"
                        id="heure_debut">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="example-text-input" class="col-md-2 col-form-label">Heure de fin</label>
                <div class="col-md-10">
                    <input onchange="calculerDuree()" required class="form-control required" type="time" name="heure_fin"
                        id="heure_fin">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="duree" class="col-md-2 col-form-label">Durée</label>
                <div class="col-md-10">
                    <input class="form-control required" required type="text" name="duree" readonly
                        id="duree">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="example-text-input" class="col-md-2 col-form-label">Produit présenté </label>
                <div class="col-md-10">
                    <select name="produit_presente" required id="" class="form-control required">
                        <option value="Table">Table</option>
                        <option value="Chaise">Chaise</option>
                        <option value="Ordinateur">Ordinateur</option>
                        <option value="Ecran">Ecran</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="observation" class="col-md-2 col-form-label">Observations du client</label>
                <div class="col-md-10">
                    <textarea name="observation" class="form-control mt-3" placeholder="Message" required></textarea>

                </div>
            </div>
            <br>
            <div class="mb-3 row">
                <label for="example-text-input" class="col-md-2 col-form-label">Vente conclue</label>
                <div class="col-md-10">
                    <input type="radio" id="myCheckbox" name="myCheckbox" value="1"> Oui
                    <input type="radio" id="myCheckbox" name="myCheckbox" value="0">Non
                    
                </div>
            </div>

            <button type="submit" class="btn btn-primary waves-effect waves-light offset-6">Enregistrer la
                prospection</button>
                
        </div>
    </fieldset>
</form>
<form action="/home_dashboard" class="">
    <button class="btn btn-primary"><i class="bx bxs-left-arrow"></i> Page précédente</button>
</form>
@stop