@extends('layouts.master')


@section('title', 'Toutes les traites en cours')


@section('styles')
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
@endsection


@section('content')
    <div class="card animated fadeIn">
        <div class="card-header">

        </div>
        <div class="card-body">

            <table id="bootstrap-data-table-export" class="table table-bordered table-striped table-hover">
                <thead>
                <tr >
                    <th>N° Compte</th>
                    <th>Noms & Prénoms</th>
                    <th>Type de credit</th>
                    <th>Montant de la trtaite</th>
                    <th>Date échéance</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($traites as $traits)
                    <tr>
                        <td>{{$traits->num_cpte}}</td>
                        <td>{{$traits->nom}} {{$traits->prenom}}</td>
                        <td>{{$traits->type_credit}}</td>
                        <td>{{$traits->mnt_traite}}</td>
                        <td>{{$traits->date_passage}}</td>
                        <td>
                            <a id="sold{{$traits->id}}" class="btn btn-success" title="Solder la traite" data-toggle="modal" data-target="#soldModal{{$traits->id}}" ><i class="fa fa-money"> <strong>Solder</strong></i> </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



    @foreach($traites as $traits)
            @include('suivi.partials.solder_traite')
    @endforeach
@endsection


@section('scripts')
    @include('general.js_dt_including')

    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery("#date").on('change', function () {

                var date = jQuery(this).val();
                jQuery.ajax({
                    url: "_traites_en_cours/"+date,
                    type: 'POST',
                    dataType: 'json',
                    success: function (result) {
                    }
                });
            });
        });

    </script>
@endsection