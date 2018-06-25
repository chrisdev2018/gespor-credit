@extends('layouts.master')


@section('title', 'Nouveau découvert')


@section('content')

    <div class="col-lg-8 card-form" >
        <div class="card animated fadeInLeft">
            <div class="card-header">
                <strong>Remlpir le formulaire</strong>
            </div>
            <div class="card-body">
                <form  method="POST" action="{{route('enregistrer_decouvert')}}" >
                    {{csrf_field() }}
                    <div id="panel-credit">
                        <div class="form-group row">
                            <label  class="col-4 col-form-label" >Membre :</label>
                            <div class="col-7">
                                <select class="form-control standardSelect" name="membre_id" id="membre_id" required="required">
                                    <option value="" ><small class="form-text text-muted">Faites votre choix</small></option>
                                    @foreach($membres as $membre)
                                        <option value="{{$membre->id}}">{{$membre->nom}} {{$membre->prenom}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label">Montant accordé :</label>
                            <div class="col-7 input-group">
                                <input class="form-control " type="text"  id="montant" name="montant"  required="required">
                                <span class="input-group-addon" id="xaf" >FCFA</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label">Agio :</label>
                            <div class="col-7 input-group">
                                <input class="form-control " type="text"  id="agio" name="agio"  required="required">
                                <span class="input-group-addon" id="xaf" >FCFA</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-4 col-form-label">Date d'échéance:</label>
                            <div class="col-7">
                                <input class="form-control" type="date"  id="date_ok" name="date_ok" required="required">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center" id="buttons-form">
                        <button type="submit" class="  btn btn-success" id="submit"> Valider</button>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-danger " id="reset" href="{{route('home')}}"> Annuler</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection