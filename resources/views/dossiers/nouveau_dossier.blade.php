<?php
    /**
     * Created by Christian mepat
     * Date: 23/03/2018
     * Time: 03:16
     */
    //TODO:faire les validations du formaulaire
  ?>
@extends('layouts.master')
@section('title', 'Nouveau dossier ')

@section('styles')

@endsection


@section('content')


       <div class="col-lg-8 card-form" >
            <div class="card animated fadeInLeft">
                <div class="card-header">
                    <strong>Remlpir le formulaire</strong>
                </div>
                <div class="card-body">
                    <form  method="POST" action="{{route('enregistrer_dossier')}}" >
                        {{csrf_field() }}
                        <div id="panel-credit">
                            <div class="form-group row">
                                <label  class="col-4 col-form-label" >Membre :</label>
                                <div class="col-7">
                                    <select class="selectpicker form-control" name="membre_id" id="lunch" data-live-search="true" required="required" title="Faites votre choix ...">
                                        <option></option>
                                        @foreach($membres as $membre)
                                            <option value="{{$membre->id}}">{{$membre->nom}} {{$membre->prenom}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-4 col-form-label" >Type de crédit :</label>
                                <div class="col-7">
                                    <select class="form-control standardSelect" name="type_credit" id="type_credit" name="type_credit"  required="required">
                                        <option value="" ><small class="form-text text-muted">Faites votre choix</small></option>
                                        <option value="CT">Credit de tresorerie</option>
                                        <option value="CS">Credit scolaire</option>
                                        <option value="MC">Micro-Crédit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Montant demandé :</label>
                                <div class="col-7 input-group">
                                    <input class="form-control " type="text"  id="mnt_dmd" name="mnt_dmd"  required="required">
                                    <span class="input-group-addon" id="xaf" >FCFA</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-4 col-form-label">Garantie : </label>
                                <div class="col-7">
                                    <input class="form-control" type="text"  id="garantie" name="garantie" required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-4 col-form-label">Date :</label>
                                <div class="col-7">
                                    <input class="form-control" type="date"  id="date" name="date_in" required="required">
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

@section('scripts')

@endsection