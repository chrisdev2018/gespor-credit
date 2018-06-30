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
            <table id="bootstrap-data-table-export" class="table table-bordered table-striped table-hover">
                <thead>
                <tr >
                    <th>N° Compte</th>
                    <th>Noms & Prénoms</th>
                    <th>Montant accordé</th>
                    <th>Agio</th>
                    <th>date d'échéance</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($decouverts as $decouvert)
                        <tr>
                            <td>{{$decouvert->num_cpte}}</td>
                            <td>{{$decouvert->prenom}} {{$decouvert->nom}}</td>
                            <td>{{$decouvert->montant}}</td>
                            <td>{{$decouvert->agio}}</td>
                            <td>{{$decouvert->date_ok}}</td>
                            <td>
                              <a href="{{url('solder_decouvert', ['id'=>$decouvert->id])}}" class="btn btn-success"><i class="fa fa-credit-card"></i>  Solder</a>
                            </td>
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