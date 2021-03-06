@extends('layouts.master')


@section('title', 'Etats des prêts')


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
                    <th>Montant du prêt</th>
                    <th>Date de mise en place</th>
                    <th>Date dernière échéance</th>
                    <th>Solde début debiteur</th>
                    <th>Mvt credit</th>
                    <th>Solde fin debiteur</th>
                </tr>
                </thead>
                <tbody>
                     @foreach($dossiers as $dossier)
                         <tr>
                             <td>{{$dossier->num_cpte}}</td>
                             <td>{{$dossier->nom}} {{$dossier->prenom}}</td>
                             <td>{{$dossier->mnt_ok}}</td>
                             <td>{{$dossier->date_debut}}</td>
                             <td>{{$dossier->date_fin}}</td>
                             <td>{{$dossier->solde_debut_debiteur}}</td>
                             <td>{{$dossier->mnt_effectif}}</td>
                             <td>{{($dossier->solde_debut_debiteur) - ($dossier->mnt_effectif )}}</td>
                         </tr>
                     @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection


@section('scripts')
    @include('general.js_dt_including')
@endsection