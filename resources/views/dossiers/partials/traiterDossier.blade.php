<!--Modal pour afficher les différents choix pour le traitement des dossiers -->
<div  id="processModal{{$mem->id}}{{$dossier->id}}" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div  class="modal-content">
            <div  class="modal-header">
                <h4 style="color:#4dfaff" class="modal-title">Traiter le dossier</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div >
            <div class="modal-body">
                <div class="btnProcess">
                    <a  class="btn btn-success " data-toggle="modal" data-target="#agreeModal{{$mem->id}}{{$dossier->id}}" data-dismiss="modal">Accorder</a>&nbsp;
                    <a  class="btn btn-danger " data-toggle="modal" data-target="#rejectModal{{$mem->id}}{{$dossier->id}}" data-dismiss="modal">Rejeter</a>
                </div>
            </div >

        </div >

    </div >
</div >