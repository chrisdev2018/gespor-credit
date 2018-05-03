@extends('layouts.master')

@section('title', 'A modifier')

@section('content')
    <div class="card animated fadeIn">
        <div class="card-header">
            <p>Veuiller rentrer les paramètres des à afficher</p>
        </div>
        <div class="card-body">
            <form  method="POST" action="{{route('traites_en_cours')}}" >
                {{csrf_field() }}

                <div class="form-group row">
                    <label  class="col-3 col-form-label">Date : </label>
                    <div class="col-4">
                        <input class="form-control" type="date"  name="date"  required="required">
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
