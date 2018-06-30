@extends("layouts.master")

@section('title', 'Dossiers rejetés')


@section('styles')
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
@endsection


@section('content')
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Liste de tous les dossiers rejetés</strong>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table-export" class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr >
                        <th>N° Compte</th>
                        <th>Noms & Prénoms</th>
                        <th>Type de credit</th>
                        <th>Motif du rejet</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($list as $item)
                        <tr>
                            <td>{{$item->num_cpte}}</td>
                            <td>{{$item->nom}} {{$item->prenom}}</td>
                            <td>{{$item->type_credit}}</td>
                            <td>{{$item->motif}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <br><br>


@endsection

@section('scripts')
    @include('general.js_dt_including')
@endsection

