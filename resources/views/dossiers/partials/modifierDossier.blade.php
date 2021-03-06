<!--Modal pour afficher le formulaire de modification -->
<div  id="updateModal{{$mem->id}}{{$dossier->id}}" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div  class="modal-content">
            <div class="modal-header">

                <h4 style="color:#4dfaff" class="modal-title">Modifier les informations et enregistrer</h4>
            </div >
            <div style="color:#5fa4a6" class="modal-body">
                <form  method="POST" action="{{route('modifier_dossier')}}" >
                    {{csrf_field() }}

                    <div id="panel-credit">
                        <div class="form-group row">
                            <label  class="col-4 col-form-label" >Type de crédit :</label>
                            <div class="col-7">
                                <select class="form-control" name="type_credit" id="type_credit" name="type_credit"  required="required">
                                    <option value=""></option>
                                    <option value="CT">Crédit de trésorerie</option>
                                    <option value="CS">Crédit scolaire</option>
                                    <option value="MC">Micro-Crédit</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label">Montant demandé :</label>
                            <div class="col-7 input-group">
                                <input class="form-control " type="text"  id="mnt_dmd" name="mnt_dmd" value="{{$dossier->mnt_dmd}}"  required="required">
                                <span class="input-group-append" id="xaf" >FCFA</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-4 col-form-label">Garantie : </label>
                            <div class="col-7">
                                <input class="form-control" type="text"  id="garantie" name="garantie" value="{{$dossier->garantie}}" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-4 col-form-label">Date :</label>
                            <div class="col-7">
                                <input class="form-control" type="date"  id="date" name="date_in" value="{{$dossier->date_in}}" required="required">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="idmembre" value="{{$mem->id}}">
                    <input type="hidden" name="iddossierin" value="{{$dossier->id}}">
                    <div  class="modal-footer">
                        <button type="submit" class="btn btn-success" >Valider</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                    </div >
                </form>
            </div >

        </div >

    </div >
</div >