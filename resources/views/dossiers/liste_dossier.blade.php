@extends("layouts.master")

@section('title', 'Dossiers Arrivés')


@section('styles')
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
@endsection


@section('content')
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Liste de tous les dossiers enregistrés</strong>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table-export" class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr >
                        <th>N° Compte</th>
                        <th>Noms & Prénoms</th>
                        <th>Type de credit</th>
                        <th>Montant demandé</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($membre as $mem)
                        @foreach($dossier_in as $dossier)
                            @if($mem->id == $dossier->membre_id)
                                <tr>
                                    <td>{{$mem->num_cpte}}</td>
                                    <td>{{$mem->nom}} {{$mem->prenom}}</td>
                                    <td>{{$dossier->type_credit}}</td>
                                    <td>{{$dossier->mnt_dmd}}</td>
                                    <td>
                                        <a  class="btn btn-info " title="Afficher plus de détails" data-toggle="modal"  data-target="#detailsModal{{$mem->id}}{{$dossier->id}}" ><i class="fa fa-eye"></i> </a>&nbsp;
                                        <a id="update{{$dossier->id}}" class="btn btn-warning" data-toggle="modal" data-target="#updateModal{{$mem->id}}{{$dossier->id}}"   title="Modifier les informations"><i class="fa fa-edit"></i> </a>&nbsp;
                                        <a id="process{{$dossier->id}}" class="btn btn-primary" title="Traiter ce dossier" data-toggle="modal" data-target="#processModal{{$mem->id}}{{$dossier->id}}" ><i class="fa fa-cogs"></i> </a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <br><br>




    @foreach($membre as $mem)
        @foreach($dossier_in as $dossier)
            @if($mem->id == $dossier->membre_id)
                @include('dossiers.partials.detailsDossier')
                @include('dossiers.partials.modifierDossier')
                @include('dossiers.partials.traiterDossier')
                @include('dossiers.partials.rejeterDossier')
                @include('dossiers.partials.accorderDossier')
            @endif
        @endforeach
    @endforeach

@endsection

@section('scripts')
    <!--script pour l'affichage des données dans la modal-->
    <script type="text/javascript">
     jQuery(document).ready(function () {
         jQuery.ajax( {

             url: "{{route('check_status')}}",
             dataType: "json",
             type: "GET",
             contentType: 'application/json; charset=utf-8',
             cache: false,
             success: function (result) {
                 for (var i = 0; i < result.length; i++) {
                     jQuery('#process' + result[i]).addClass('disabled');
                     jQuery('#update' +result[i]).addClass('disabled');
                 }

             }

         });
      });

    </script>

    @include('general.js_dt_including')
@endsection


