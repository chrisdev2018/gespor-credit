@extends('layouts.master')

@section('title', 'Gestion des échéanciers')



@section('content')
    <div class="card animated fadeIn" >
        <div class="card-header">

        </div>
        <div class="card-body">
            <br>
            <form >
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
                            <option  value="" ><small class="form-text text-muted">Faites votre choix</small></option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group row  justify-content-center" id="buttons-form">
                    <button  class=" btn btn-success" id="submit"> Afficher l'échéancier</button>
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

        function statut (valeur){
            if(valeur==0)
            {
                return "Impayée";
            }
            else if (valeur==1)
            {
                return "Payée";
            }
        }

        jQuery(document).ready(function () {
            jQuery("#card-echeancier").hide();

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


            jQuery("#submit").on('click', function () {

               jQuery('#card-echeancier').hide();

                var type_credit = jQuery('#type_credit').val();
                var membre = jQuery('#membre').val();

                    jQuery.ajax({
                        url: "echeancier/"+type_credit+"/"+membre,
                        type: 'POST',
                        dataType: 'json',
                        success: function (result) {


                            //ici on rempli les informations de l'entête de notre echeancier

                            jQuery('#_nom_prenom').html(result['dossier'][0].nom+' '+result['dossier'][0].prenom);
                            jQuery('#_num_compte').html(result['dossier'][0].num_cpte);
                            jQuery('#_type_credit').html(result['dossier'][0].type_credit);
                            jQuery('#_montant').html(result['dossier'][0].mnt_ok);
                            jQuery('#_date_prem').html(result['dossier'][0].date_debut);
                            jQuery('#_date_dern').html(result['dossier'][0].date_fin);
                            jQuery('#_nbreEche').html();

                            /******************************************/
                            //ici on va remplir le tableau
                            var i=1;
                            jQuery('#tbody').empty();

                            jQuery(result['list_traites']).each(function(){
                                jQuery('#tbody').append("<tr>"+
                                        "<td>"+i+"</td>"+
                                        "<td>"+this.date_passage+"</td>"+
                                        "<td>"+result['dossier'][0].mnt_traite+"</td>"+
                                        "<td>"+this.date_effective+"</td>"+
                                        "<td>"+this.mnt_effectif+"</td>"+
                                        "<td>"+statut(this.statut)+"</td>"+
                                        "<td>"+this.retard+"</td>"+
                                "<tr>" );
                                i++;
                            });


                            jQuery('#card-echeancier').show();
                        }
                    });


                return false;
            });

        });

    </script>
@endsection