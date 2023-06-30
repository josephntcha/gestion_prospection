@extends('layout.master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <h4 class="text-center"><strong> Liste des prospections</strong></h4>
        <br><br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                   <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Nom agent</th>
                                <th>Nom client</th>
                                <th>Adresse client</th>
                                <th>Heure Début</th>
                                <th>Heure Fin</th>
                                <th>Durée</th>
                                <th>Produit présenté </th>
                                <th>Observations </th>
                                <th>Vente conclue</th>
                                <td>Suppprimer</td>
                                <td>Editer</td>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($prospections as $prospection)
                            <tr>
                                <td>{{ $prospection->nom_agent}}</td>
                                <td>{{ $prospection->nom_client}}</td>
                                <td>{{ $prospection->adresse_client}}</td>
                                <td>{{ $prospection->heure_debut}}</td>
                                <td>{{ $prospection->heure_fin}}</td>
                                <td>{{ $prospection->duree}}</td>
                                <td>{{ $prospection->produit_presente}}</td>
                                <td>{{ $prospection->observation}}</td>
                                <td>{{ $prospection->myCheckbox}}</td>
                                <td>
                                    <form action="{{ route('gestion_prospection.destroy', $prospection) }}" method="POST"
                                        onsubmit=" return confirm('Voulez-vous vraiment supprimer cette prospection?');">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger" title="Supprimer"><i
                                                class="bx bx-trash"></i></button>
                                    </form>
                                </td>
                                    <td>
                                        <a href="{{ route('gestion_prospection.edit', $prospection) }}" class="btn btn-primary" title="Editer"> <i class=" bx bxs-edit-alt"></i>
                                        </a> 
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                   </div>
                    
                </div>
            </div> <!-- end col -->
        </div>


    </div>
</div>
<div class="offset-4 col-3 text-center bg-white h3 pt-2 pr-3 pb-4 pl-5 rounded">
    <a href="{{ route('formulaire_prospection') }}">Ajouter une prospection </a>
</div>
@push('add_script')

<!-- Required datatable js -->
<script src="{{asset ('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src=" {{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
<script src=" {{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src=" {{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src=" {{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>

<script src="{{ asset('assets/js/app.js') }}"></script>
@endpush
@stop