@extends("layouts.master")


@section('title', 'Modifier un dossier')


@section('content')
    <h1>Veuillez modifier les informations</h1>
    <div class=" formulaire " >
        <form  method="POST" action="{{route('modifier_dossier')}}" >
            {{csrf_field() }}
            <div id="panel-client">
                <div class="form-group row">
                    <label  class="col-4 col-form-label">Nom : </label>
                    <div class="col-7">
                        <input class="form-control" type="text"  id="nom" name="nom" value="{{$membre->nom}}" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-4 col-form-label">Prénom :</label>
                    <div class="col-7">
                        <input class="form-control" type="text"  id="prenom" name="prenom" value="{{$membre->prenom}}" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-4 col-form-label">Téléphone :</label>
                    <div class="col-7">
                        <input class="form-control" type="tel"  id="telephone" name="telephone" value="{{$membre->telephone}}" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-4 col-form-label">N° de compte :</label>
                    <div class="col-7">
                        <input class="form-control" type="text"  id="num_cpte" name="num_cpte" value="{{$membre->num_cpte}}" required="required">
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
            <input type="hidden" name="idmembre" value="{{$membre->id}}">
            <input type="hidden" name="iddossierin" value="{{$dossier->id}}">

            <div class="form-group row justify-content-center" id="buttons-form">
                <button type="submit" class="  btn btn-success" id="submit"> Valider</button>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger " id="reset" href="{{route('home')}}"> Annuler</a>
            </div>
        </form>

    </div>
 @endsection