@extends('layouts.master')

@section('title', 'Etat à afficher')

@section('content')
    <div class="card animated fadeIn">
        <div class="card-header">
                <p>Veuiller rentrer les paramètres de l'état à afficher</p>
        </div>
        <div class="card-body">
            <form  method="POST" action="{{route('afficher_etat')}}" >
                {{csrf_field() }}

                <div class="form-group row">
                    <label  class="col-3 col-form-label">Date : </label>
                    <div class="col-4">
                        <input class="form-control" type="date"  name="date"  required="required">
                    </div>
                </div>

                <div class="form-group row">
                    <label  class="col-3 col-form-label">Type de credit :</label>
                    <div class="col-4">
                        <select class="form-control standardSelect" name="type_credit" id="type_credit" name="type_credit" required="required">
                            <option value="" ><small class="form-text text-muted">Faites votre choix</small></option>
                            <option value="CT">Credit de tresorerie</option>
                            <option value="CS">Credit scolaire</option>
                            <option value="MC">Micro-Crédit</option>
                            <option value="DE">Decouvert</option>
                        </select>
                    </div>

                </div>

                <div  class="justify-content-center">
                    <button type="submit" class="btn btn-success" >Valider</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                </div >

            </form>

        </div>
    </div>

@endsection
