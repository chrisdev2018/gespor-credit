
<!--Modal pour afficher les autres détails -->
<div  id="detailsModal{{$mem->id}}{{$dossier->id}}" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div s class="modal-content">
            <div s class="modal-header">

                <h4 style="color:#4dfaff" class="modal-title">Autres détails sur le dossier</h4>
            </div >
            <div style="color:#5fa4a6" class="modal-body">
                <p style><mark>Téléphone : </mark>{{$mem->telephone}}</p>
                <p style><mark>Garantie :</mark>{{$dossier->garantie}}</p>
                <p style><mark>Date d'enregistrement :</mark>{{$dossier->date_in}}</p>
            </div >
            <div  class="modal-footer">
                <button type="button" class="btn btn-block btn-light" data-dismiss="modal">Fermer</button>
            </div >
        </div >

    </div >
</div >