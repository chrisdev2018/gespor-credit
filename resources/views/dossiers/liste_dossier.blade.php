@extends("layouts.master")

@section('title', 'Dossiers Arrivés')


@section('content')

    <h1>Liste des dossiers enregistrés</h1>

    <div class="list-dossiers">
        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
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
                            <th>{{$mem->num_cpte}}</th>
                            <th>{{$mem->nom}} {{$mem->prenom}}</th>
                            <th>{{$dossier->type_credit}}</th>
                            <th>{{$dossier->mnt_dmd}}</th>
                            <th>
                                <a class="btn btn-info" title="Afficher plus de détails" data-toggle="modal" data-target="#detailsModal{{$mem->id}}{{$dossier->id}}" >Détails</a>&nbsp;
                                <a class="btn btn-warning" data-toggle="modal" data-target="#updateModal{{$mem->id}}{{$dossier->id}}"   title="Modifier les informations">Modifier</a>&nbsp;
                                <a href="{{route('dossier_a_traiter')}}" class="btn btn-primary" title="Traiter ce dossier">Traiter</a>
                            </th>
                        </tr>
                    @endif
                @endforeach
            @endforeach
            </tbody>
        </table>
    </div>
    <br><br>




    @foreach($membre as $mem)
        @foreach($dossier_in as $dossier)
            @if($mem->id == $dossier->membre_id)
                @include('dossiers.partials.detailsDossiers')
                @include('dossiers.partials.modifierDossiers')
            @endif
        @endforeach
    @endforeach

@endsection

@section('script')
    <!--script pour l'affichage des données dans la modal-->
    <script type="text/javascript"></script>
@endsection
