@extends('layouts.master')



@section('title', 'nouveau membre')

@section('content')

    <div class="col-lg-8 card-form" >
        <div class="card animated fadeInLeft">
            <div class="card-header">
                <strong>Remlpir le formulaire</strong>
            </div>
            <div class="card-body">
                <form  method="POST" action="{{route('enregistrer_membre')}}" >
                    {{csrf_field() }}

                        <div id="panel-client">
        <div class="form-group row">
            <label  class="col-4 col-form-label">Nom : </label>
            <div class="col-7">
                <input class="form-control" type="text"  id="nom" name="nom" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-4 col-form-label">Prénom :</label>
            <div class="col-7">
                <input class="form-control" type="text"  id="prenom" name="prenom" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-4 col-form-label">Téléphone :</label>
            <div class="col-7">
                <input class="form-control" type="tel"  id="telephone" name="telephone" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-4 col-form-label">N° de compte :</label>
            <div class="col-7">
                <input class="form-control" type="number"  id="num_cpte" name="num_cpte" required="required">
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