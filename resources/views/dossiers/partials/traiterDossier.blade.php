<!--Modal pour afficher les différents choix pour le traitement des dossiers -->
<div  id="processModal{{$mem->id}}{{$dossier->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div  class="modal-content">
            <div  class="modal-header">

                <h4 style="color:#4dfaff" class="modal-title">Traiter le dossier</h4>
            </div >
            <div class="modal-body">
                <div class="row col-10 justify-content-center">
                    <a  class="btn btn-success col-5" data-toggle="modal" data-target="#agreeModal{{$mem->id}}{{$dossier->id}}" data-dismiss="modal">Accorder</a>&nbsp;
                    <a  class="btn btn-danger col-5" data-toggle="modal" data-target="#rejectModal{{$mem->id}}{{$dossier->id}}" data-dismiss="modal">Rejeter</a>
                </div>
            </div >

        </div >

    </div >
</div >