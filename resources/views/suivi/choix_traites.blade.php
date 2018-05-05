@extends('layouts.master')

@section('title', 'A modifier')

@section('content')

    <div class="card-form col-lg-7">
        <div class="card animated fadeInRight">
            <div class="card-header">
                <strong>Veuiller sélectionner la période des traites à afficher</strong>
            </div>
            <div class="card-body smallCard">
                <form  method="POST" action="{{route('traites_en_cours')}}" >
                    {{csrf_field() }}

                    <div class="form-group row smallCard">
                        <label  class="col-3 col-form-label">Date : </label>
                        <div class="col-6">
                            <input class="form-control" type="date"  name="date"  required="required">
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
