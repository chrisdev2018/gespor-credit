<!--Modal pour afficher le formulaire de validation d'un dossier -->
<div  id="soldModal{{$traits->id}}" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog ">

        <!-- Modal content-->
        <div  class="modal-content">
            <div  class="modal-header">

                <h4 style="color:#4dfaff" class="modal-title">Solder la traite</h4>
            </div >
            <div style="color:#5fa4a6" class="modal-body">
                <div id="recapDossier">
                    <p style><mark>Noms du membre</mark> : {{$traits->nom}} {{$traits->prenom}}</p>
                    <p style><mark>Date de passage</mark> : {{$traits->date_passage}}</p>
                    <p style><mark>Montant déjà réglé</mark> : {{$traits->mnt_effectif}} XAF</p>
                </div>
                <hr><br>
                <form  method="POST" action="{{route('solder_traite')}}" >
                    {{csrf_field() }}

                    <div class="form-group row">
                        <label  class="col-4 col-form-label">Montant à régler : </label>
                        <div class="col-7">
                            <input class="form-control" type="number"  name="mnt_effectif" value="{{($traits->mnt_traite)-($traits->mnt_effectif)}}"  required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-4 col-form-label">Date effective :</label>
                        <div class="col-7">
                            <input class="form-control" type="date" value="{{$traits->date_passage}}" name="date_effective" required="required">
                        </div>
                    </div>


                    <input type="hidden" name="traite_id" value="{{$traits->id}}">
                    <div  class="modal-footer">
                        <button type="submit" class="btn btn-success" >Valider</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                    </div >
                </form>
            </div >

        </div >

    </div >
</div >