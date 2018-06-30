@extends('layouts.master')

@section('title', 'Liste des membres')

@section('styles')
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
@endsection

@section('content')
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Liste de tous les membres enregistrés</strong>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table-export" class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr >
                        <th>N° Compte</th>
                        <th>Noms</th>
                        <th>Prénoms</th>
                        <th>N° téléphone</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($membres as $membre)
                            <tr>
                                <td>{{$membre->num_cpte}}</td>
                                <td>{{$membre->nom}}</td>
                                <td>{{$membre->prenom}}</td>
                                <td>{{$membre->telephone}}</td>
                                <td>
                                    <a class="btn btn-warning" data-toggle="modal" data-target="#updateModal{{$membre->id}}"   title="Modifier les informations"><i class="fa fa-edit"></i> Modifier</a>&nbsp;
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @foreach($membres as $membre)
        @include('membres.partials.modifierMembre')
    @endforeach
@endsection

@section('scripts')
    @include('general.js_dt_including')
@endsection


