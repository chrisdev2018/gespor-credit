@extends('layouts.master')

@section('title', 'Gestion des échéanciers')


@section('content')
    <div class="card " >
        <div class="card-header">Veuillez remplir le formulaire</div>

        <div class="card-body">
            <br>
            <form method="POST" action="#">
                {{csrf_field() }}

                <div class="row justify-content-center">
                    <div class=" form-group col-6 row">
                        <label  class="col-5 col-form-label">Type de crédit :</label>
                        <select class="form-control col-5 standardSelect" name="type_credit" id="type_credit" required="required">
                            <option value="" >Faites votre choix</option>
                            <option value="CT">Credit de tresorerie</option>
                            <option value="CS">Credit scolaire</option>
                            <option value="MC">Micro-Crédit</option>
                        </select>
                    </div>
                    <div class=" form-group col-6 row">
                        <label  class="col-4 col-form-label">Membre : </label>
                        <select class="form-control col-5" type="text"  id="membre" name="membre" required="required">
                            <option value="" ><small class="form-text text-muted">Faites votre choix</small></option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group row  justify-content-center" id="buttons-form">
                    <button type="submit" class=" btn btn-success" id="submit"> Afficher l'échéancier</button>
                </div>

            </form>
        </div>
    </div>

    <div>
        @include('suivi.partials.echeancier')
    </div>


@endsection



@section('scripts')
    <script type="text/javascript">

        jQuery(document).ready(function () {

            jQuery("#type_credit").on('change', function () {

                var type_cre = jQuery(this).val();
                jQuery.ajax({
                    url: "type_credit/"+type_cre,
                    type: 'POST',
                    dataType: 'json',
                    success: function (result) {

                          jQuery("#membre").empty();

                          for(var i=0; i<result.length; i++){
                              jQuery("#membre").append("<option value='"+result[i].id+"'>"+result[i].nom+" "+result[i].prenom+"</option>");
                          }

                    }
                });
                return false;
            });

        });

    </script>
@endsection