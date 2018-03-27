
<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr >
            <th>N° Compte</th>
            <th>Noms & Prénom</th>
            <th>Type de credit</th>
            <th>Montant demandé</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dossiers as $dossier)

            <tr>
                <th>{{$dossier->num_cpte}}</th>
                <th>{{$dossier->nom}} {{$dossier->prenom}}</th>
                <th>{{$dossier->type_credit}}</th>
                <th>{{$dossier->mnt_dmd}}</th>
            </tr>

        @endforeach
    </tbody>
</table>


