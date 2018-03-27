@extends("layouts.master")


@section('title', 'Dossiers Arrivés')


@section('content')

    <h1>Liste des dossiers enregistrés</h1>

    <div class="card card-body">
        <table class="table table-bordered table-secondary">
            <thead class="thead-light">
            <tr >
                <th>N° Compte</th>
                <th>Noms & Prénoms</th>
                <th>Type de credit</th>
                <th>Montant demandé</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($dossiers as $dossier)

                <tr>
                    <th>{{$dossier->num_cpte}}</th>
                    <th>{{$dossier->nom}} {{$dossier->prenom}}</th>
                    <th>{{$dossier->type_credit}}</th>
                    <th>{{$dossier->mnt_dmd}}</th>
                    <th>
                        <a href="#" class="btn btn-info" title="Afficher plus de détails">Détails</a>&nbsp;
                        <a href="#" class="btn btn-warning" title="Modifier les informations">Modifier</a>&nbsp;
                        <a href="{{route('dossier_a_traiter')}}" class="btn btn-primary" title="Traiter ce dossier">Traiter</a>
                    </th>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>


@endsection

@section('script')
@endsection