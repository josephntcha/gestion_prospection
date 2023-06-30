@extends('layout.master')
@section('content')

        <div class="h3  text-center"><strong>Espace de gestion de prospection</strong> </div>
        <br><br>
        <div class="container offset-4">
            <div class="row">
                <div class="col-3">
                    <a href="{{ route('formulaire_prospection') }}">Ajouter une prospection </a>
                </div>
               <div class="col-3">
                <a href="{{ route('gestion_prospection.index') }}">Gestion des prospection</a>
               </div> 
            </div>
        </div>
           
@stop