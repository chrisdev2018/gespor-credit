<div class="card animated fadeInUp" id="card-echeancier" >

    <div class="card-header">
        <div class="row justify-content-center">
            <span><mark><strong>TABLEAU D'AMMORTISSEMENT DES PRETS</strong></mark></span>
        </div><br>
        <div  style="float: left">
                  <span>
                      <label>
                          <strong>Nom & Prénom </strong>
                      </label> : <label id="_nom_prenom"></label>
                  </span><br>
                  <span>
                      <label>
                          <strong>N°Compte</strong>
                      </label> : <label id="_num_compte"></label>
                  </span><br>
                  <span>
                      <label>
                          <strong>Type de crédit</strong>
                      </label> : <label id="_type_credit"></label>
                  </span><br>
                <span>
                      <label>
                          <strong>Montant du crédit</strong>
                      </label> : <label id="_montant"></label>
                  </span>
        </div>
        <div style="float: right">
            <span>
                <label>
                    <strong>Nombre d'échéances</strong>
                </label> : <label id="_nbreEche"></label>
            </span><br>
            <span>
                <label>
                    <strong>Date 1ère échéance</strong>
                </label> : <label id="_date_prem"></label>
            </span><br>
            <span>
                <label>
                    <strong>Date dernière échéance</strong>
                </label> : <label id="_date_dern"></label>
            </span><br>

        </div>
    </div>

    <div class="card-body">
        <table  class="table table-striped">
            <thead>
                <tr>
                    <th>N° Traite</th>
                    <th>Date Traite</th>
                    <th>Montant Traite</th>
                    <th>Date effective </th>
                    <th>Montant réglé</th>
                    <th>Statut</th>
                    <th>Retard (jours)</th>
                </tr>
            </thead>
            <tbody id="tbody">

            </tbody>

        </table>
    </div>
</div>