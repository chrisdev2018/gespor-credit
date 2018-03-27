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

@section('content')
    <h1>Formulaire de demande de crédit</h1>


       <div class=" formulaire " >
           <form  method="POST" action="{{route('store')}}" novalidate>
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
                           <input class="form-control" type="text"  id="num_cpte" name="num_cpte" required="required">
                       </div>
                   </div>
               </div>

                <div id="panel-credit">
                <div class="form-group row">
                    <label  class="col-4 col-form-label" >Type de crédit :</label>
                    <div class="col-7">
                        <select class="form-control" name="type_credit" id="type_credit" name="type_credit" required="required">
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
                        <input class="form-control " type="text"  id="mnt_dmd" name="mnt_dmd"  required="required">
                        <span class="input-group-append" id="xaf" >FCFA</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-4 col-form-label">Garantie : </label>
                    <div class="col-7">
                        <input class="form-control" type="text"  id="garantie" name="garantie" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label f class="col-4 col-form-label">Date :</label>
                    <div class="col-7">
                        <input class="form-control" type="date"  id="date" name="date_in" required="required">
                    </div>
                </div>
            </div>

               <div class="form-group row justify-content-center" id="buttons-form">
                   <button type="submit" class=" col- btn btn-success" id="submit"><span class="oi oi-circle-check"></span> Valider</button>&nbsp;&nbsp;&nbsp;&nbsp;
                   <button class="btn btn-danger  col-" id="reset"><span class="oi oi-circle-x"></span> Annuler</button>
               </div>
           </form>

       </div>

@endsection