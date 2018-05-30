@extends('layouts.master')


@section('title', 'Les decouverts en cours')


@section('styles')
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
@endsection


@section('content')
    <div class="card animated fadeIn">
        <div class="card-header">

        </div>
        <div class="card-body">
            <table id="bootstrap-data-table" class="table table-bordered table-striped table-hover">
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

                </tbody>
            </table>
        </div>
    </div>
@endsection



@section('scripts')
    @include('general.js_dt_including')
@endsection