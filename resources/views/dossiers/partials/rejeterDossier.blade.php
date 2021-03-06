<!--Modal pour afficher le formulaire de rejet d'un dossier -->
<div  id="rejectModal{{$mem->id}}{{$dossier->id}}" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div  class="modal-content">
            <div  class="modal-header">

                <h4 style="color:#4dfaff" class="modal-title">Rejeter le dossier</h4>
            </div >
            <div style="color:#5fa4a6" class="modal-body">
                <div id="recapDossier">
                    <p style><mark>Noms du membre</mark> : {{$mem->nom}} {{$mem->prenom}}</p>
                    <p style><mark>Montant demandé</mark> : {{$dossier->mnt_dmd}}</p>
                    <p style><mark>Type de crédit</mark> : {{$dossier->type_credit}}</p>
                    <p style><mark>Date d'enregistrement</mark> : {{$dossier->date_in}}</p>

                </div>
                <hr><br>
                <form  method="POST" action="{{route('rejeter_dossier')}}" >
                    {{csrf_field() }}

                    <div class="form-group row">
                        <label  class="col-4 col-form-label">Motif de rejet : </label>
                        <div class="col-7">
                            <input class="form-control" type="text"  name="motif"  required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-4 col-form-label">Date de rejet :</label>
                        <div class="col-7">
                            <input class="form-control" type="date" name="date_out" required="required">
                        </div>
                    </div>
                    <input type="hidden" name="dossier_in_id" value="{{$dossier->id}}">
                    <div  class="modal-footer">
                        <button type="submit" class="btn btn-success" >Valider</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                    </div >
                </form>
            </div >

        </div >

    </div >
</div >