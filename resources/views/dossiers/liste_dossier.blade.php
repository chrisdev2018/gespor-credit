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

                        <!--Modal pour afficher les autres détails -->
                        <div  id="detailsModal{{$mem->id}}{{$dossier->id}}" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div s class="modal-content">
                                    <div s class="modal-header">

                                        <h4 style="color:#4dfaff" class="modal-title">Autres détails sur le dossier</h4>
                                    </div >
                                    <div style="color:#5fa4a6" class="modal-body">
                                        <p style><mark>Téléphone : </mark>{{$mem->telephone}}</p>
                                        <p style><mark>Garantie :</mark>{{$dossier->garantie}}</p>
                                        <p style><mark>Date d'enregistrement :</mark>{{$dossier->date_in}}</p>
                                    </div >
                                    <div  class="modal-footer">
                                        <button type="button" class="btn btn-block btn-light" data-dismiss="modal">Fermer</button>
                                    </div >
                                </div >

                            </div >
                        </div >

                        <!--Modal pour afficher le formulaire de modification -->
                        <div  id="updateModal{{$mem->id}}{{$dossier->id}}" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div s class="modal-content">
                                    <div s class="modal-header">

                                        <h4 style="color:#4dfaff" class="modal-title">Modifier les informations et enregistrer</h4>
                                    </div >
                                    <div style="color:#5fa4a6" class="modal-body">
                                        <form  method="POST" action="{{route('modifier_dossier')}}" >
                                            {{csrf_field() }}
                                            <div id="panel-client">
                                                <div class="form-group row">
                                                    <label  class="col-4 col-form-label">Nom : </label>
                                                    <div class="col-7">
                                                        <input class="form-control" type="text"  id="nom" name="nom" value="{{$mem->nom}}" required="required">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label  class="col-4 col-form-label">Prénom :</label>
                                                    <div class="col-7">
                                                        <input class="form-control" type="text"  id="prenom" name="prenom" value="{{$mem->prenom}}" required="required">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label  class="col-4 col-form-label">Téléphone :</label>
                                                    <div class="col-7">
                                                        <input class="form-control" type="tel"  id="telephone" name="telephone" value="{{$mem->telephone}}" required="required">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label  class="col-4 col-form-label">N° de compte :</label>
                                                    <div class="col-7">
                                                        <input class="form-control" type="text"  id="num_cpte" name="num_cpte" value="{{$mem->num_cpte}}" required="required">
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="panel-credit">
                                                <div class="form-group row">
                                                    <label  class="col-4 col-form-label" >Type de crédit :</label>
                                                    <div class="col-7">
                                                        <select class="form-control" name="type_credit" id="type_credit" name="type_credit"  required="required">
                                                            <option value=""></option>
                                                            <option value="CT">Crédit de trésorerie</option>
                                                            <option value="CS">Crédit scolaire</option>
                                                            <option value="MC">Micro-Crédit</option>
                                                            <option value="DE">Découvert</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-4 col-form-label">Montant demandé :</label>
                                                    <div class="col-7 input-group">
                                                        <input class="form-control " type="text"  id="mnt_dmd" name="mnt_dmd" value="{{$dossier->mnt_dmd}}"  required="required">
                                                        <span class="input-group-append" id="xaf" >FCFA</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label  class="col-4 col-form-label">Garantie : </label>
                                                    <div class="col-7">
                                                        <input class="form-control" type="text"  id="garantie" name="garantie" value="{{$dossier->garantie}}" required="required">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label  class="col-4 col-form-label">Date :</label>
                                                    <div class="col-7">
                                                        <input class="form-control" type="date"  id="date" name="date_in" value="{{$dossier->date_in}}" required="required">
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="idmembre" value="{{$mem->id}}">
                                            <input type="hidden" name="iddossierin" value="{{$dossier->id}}">
                                            <div  class="modal-footer">
                                                <button type="submit" class="btn btn-success" >Valider</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                                            </div >
                                        </form>
                                    </div >

                                </div >

                            </div >
                        </div >


                    @endif
                @endforeach
            @endforeach
            </tbody>
        </table>
    </div>
    <br><br>

@endsection

@section('script')
    <!--script pour l'affichage des données dans la modal-->
    <script type="text/javascript"></script>
@endsection
