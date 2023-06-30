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
<div class="page-content">
    <div class="container-fluid">
        <form action="{{ route('gestion_prospection.update',$prospection->id) }}" method="POST" class="col-8 offset-2  bg-white"
            enctype="multipart/form-data">
            <fieldset>
                <legend>
                    <h3 class="text-center">Editer la prospection</h3>
                </legend>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="card-body">
                    <div class="mb-4 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Nom de l'agent</label>
                        <div class="col-md-10">
                            <input class="form-control required" value="{{$prospection->nom_agent}}" type="text" name="nom_agent" id="example-text-input ">
                        </div>
                    </div>
        
                    <div class="mb-4 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Nom du client</label>
                        <div class="col-md-10">
                            <input class="form-control required" value="{{ $prospection->nom_client }}" type="text" name="nom_client" id="example-text-input ">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Adresse du client</label>
                        <div class="col-md-10">
                            <input class="form-control required" value="{{ $prospection->adresse_client }}" type="text" name="adresse_client" id="example-text-input ">
                        </div>
                    </div>
        
                    <div class="mb-3 row">
                        <label for="heure_debut" class="col-md-2 col-form-label">Heure de début</label>
                        <div class="col-md-10">
                            <input onchange="calculerDuree()" value="{{ $prospection->heure_debut }}" class="form-control required" type="time" name="heure_debut"
                                id="heure_debut">
                        </div>
                    </div>
        
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Heure de fin</label>
                        <div class="col-md-10">
                            <input onchange="calculerDuree()" value="{{ $prospection->heure_fin }}" class="form-control required" type="time" name="heure_fin"
                                id="heure_fin">
                        </div>
                    </div>
        
                    <div class="mb-3 row">
                        <label for="duree" class="col-md-2 col-form-label">Durée</label>
                        <div class="col-md-10">
                            <input class="form-control required" value="{{ $prospection->duree }}" type="text" name="duree" readonly
                                id="duree">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Produit présenté </label>
                        <div class="col-md-10">
                            <select name="produit_presente" id="" value="{{ $prospection->produit_presente}}" {{ $prospection->produit_presente ?'selected':'' }} class="form-control required">
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
                            <textarea name="observation" value="{{ old('$prospection->observation') }}" class="form-control mt-3" placeholder="Message" required>{{ $prospection->observation}}</textarea>
        
                        </div>
                    </div>
                    <br>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Vente conclue</label>
                        <div class="col-md-10">
                            <input type="radio" {{ $prospection->myCheckbox ==1 ? 'checked':''}} id="myCheckbox" name="myCheckbox" value="1"> Oui
                            <input type="radio"  {{ $prospection->myCheckbox ==0? 'checked':''}} id="myCheckbox" name="myCheckbox" value="0">Non
                            
                        </div>
                    </div>
        
                    <button type="submit" class="btn btn-primary waves-effect waves-light offset-6">Modifier la
                        prospection</button>
                </div>
            </fieldset> 
        </form>
        <form action="{{ route('gestion_prospection.index') }}" class="">
            <button class="btn btn-primary"><i class="bx bxs-left-arrow"></i> Page précédente</button>
        </form>
    </div>
</div>
@stop