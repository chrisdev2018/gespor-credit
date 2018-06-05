

<div  id="updateModal{{$membre->id}}" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div  class="modal-content">
            <div  class="modal-header">

                <h4 style="color:#4dfaff" class="modal-title">Modifier les informations et enregistrer</h4>
            </div >
            <div style="color:#5fa4a6" class="modal-body">
                <form  method="POST" action="{{route('modifier_membre')}}" >
                            {{csrf_field() }}
                    <div id="panel-client">
                        <div class="form-group row">
                            <label  class="col-4 col-form-label">Nom : </label>
                            <div class="col-7">
                                <input class="form-control" type="text"  id="nom" name="nom" value="{{$membre->nom}}" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-4 col-form-label">Prénom :</label>
                            <div class="col-7">
                                <input class="form-control" type="text"  id="prenom" name="prenom" value="{{$membre->prenom}}" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-4 col-form-label">Téléphone :</label>
                            <div class="col-7">
                                <input class="form-control" type="tel"  id="telephone" name="telephone" value="{{$membre->telephone}}" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-4 col-form-label">N° de compte :</label>
                            <div class="col-7">
                                <input class="form-control" type="text"  id="num_cpte" name="num_cpte" value="{{$membre->num_cpte}}" required="required">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="idmembre" value="{{$membre->id}}">
                    <div  class="modal-footer">
                        <button type="submit" class="btn btn-success" >Valider</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                    </div >
                </form>
            </div>
        </div>
    </div>
</div>
