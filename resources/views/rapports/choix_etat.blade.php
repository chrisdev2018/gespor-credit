@extends('layouts.master')

@section('title', 'Etat à afficher')

@section('content')

    <div class="card-form col-lg-7">
        <div class="card animated fadeInRight">
            <div class="card-header">
                <strong>Veuiller rentrer les paramètres de l'état à afficher</strong>
            </div>
            <div class="card-body ">
                <form  method="POST" action="{{route('afficher_etat')}}" >
                    {{csrf_field() }}

                    <div class="smallCard">
                        <div class="form-group row">
                            <label  class="col-4 col-form-label">Date : </label>
                            <div class="col-6">
                                <input class="form-control" type="date"  name="date"  required="required">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-4 col-form-label">Type de credit :</label>
                            <div class="col-6">
                                <select class="form-control standardSelect" name="type_credit" id="type_credit" name="type_credit" required="required">
                                    <option value="" ><small class="form-text text-muted">Faites votre choix</small></option>
                                    <option value="CT">Credit de tresorerie</option>
                                    <option value="CS">Credit scolaire</option>
                                    <option value="MC">Micro-Crédit</option>
                                    <option value="DE">Decouvert</option>
                                </select>
                            </div>

                        </div>
                    </div><br>

                    <div  class="form-group row justify-content-center" id="buttons-form">
                        <button type="submit" class="btn btn-success" >Valider</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div >

                </form>

            </div>
        </div>
    </div>

@endsection
